<?php
add_action( 'after_setup_theme', 'crb_setup_theme' );
if ( ! function_exists( 'crb_setup_theme' ) ) {
  function crb_setup_theme() {
    add_image_size( 'project_img_small', 125, 75, true );
    add_image_size( 'project_img_small@2x', 250, 150, true );
    add_image_size( 'project_gallery_img', 940, 865, true );
    add_image_size( 'project_gallery_img@2x', 1880, 1730, true );
  }
}


/* Login Page Changes */
function my_login_logo() { ?>
    <style type="text/css">
        body {
          background: #425F35 !important;

        }

        .login form {
          background: #425F35 !important;
          border:none !important;
          box-shadow: none !important;
          color:white;
        }

        .login #backtoblog a, .login #nav a {
          color:white !important;
        }

        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/resources/images/logo.png);
            margin-top:100px;
		        width:436.75px;
		        background-size: contain;
		        background-repeat: no-repeat;
        	  padding-bottom: 30px;
        }

        #login {
            width: 436.75px !important;
            padding: 2% 0 0 !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/* Script/CSS addons */
function style_scripts() {
    wp_enqueue_style( 'stylish', get_stylesheet_directory_uri() . '/style.css', false, microtime(), null);
    wp_enqueue_style( 'blog', get_stylesheet_directory_uri() . '/resources/css/blog.css', false, microtime(), null);
    wp_enqueue_style( 'services', get_stylesheet_directory_uri() . '/resources/css/services.css', false, microtime(), null);
    wp_enqueue_style( 'projects', get_stylesheet_directory_uri() . '/resources/css/projects.css', false, microtime(), null);
    wp_enqueue_style( 'invoice', get_stylesheet_directory_uri() . '/resources/css/invoice.css', false, microtime(), null);
    wp_enqueue_style( 'request', get_stylesheet_directory_uri() . '/resources/css/request.css', false, microtime(), null);
    wp_enqueue_script('olson', get_theme_file_uri('/resources/js/olson.js'), array('jquery'), microtime(), false);
    wp_enqueue_script('olsonProjects', get_theme_file_uri('/resources/js/projects.js'), false, microtime(), false);
    wp_enqueue_script('mousewheel', get_theme_file_uri('/resources/js/jquery.mousewheel.min.js'), false, microtime(), false);
    wp_localize_script('search', 'searchData', array(
      'root_url' => get_site_url()
    ));

    if(is_page( 'Get Started' )){
        wp_enqueue_style( 'get-started', get_stylesheet_directory_uri() . '/resources/css/getStarted.css', false, microtime(), null);
        wp_dequeue_style('invoice');
        wp_dequeue_style('request');
        wp_deregister_style( 'invoice' );
        wp_deregister_style( 'request' );
    }

    if(is_page( 'Thank You - Get Started' )){
        wp_enqueue_style( 'get-started', get_stylesheet_directory_uri() . '/resources/css/getStarted.css', false, microtime(), null);
        wp_dequeue_style('invoice');
        wp_dequeue_style('request');
        wp_deregister_style( 'invoice' );
        wp_deregister_style( 'request' );
    }
}
add_action( 'wp_enqueue_scripts', 'style_scripts' );

// featured image for posts/pages
add_theme_support( 'post-thumbnails' );

//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

     $new_filetypes = array();
     $new_filetypes['svg'] = 'image/svg';
     $file_types = array_merge($file_types, $new_filetypes );

     return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');


/* REST API featured image */
add_action('rest_api_init', 'register_rest_images' );
function register_rest_images(){
    register_rest_field( array('project'),
        'fimg_url',
        array(
            'get_callback'    => 'get_rest_featured_image',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
function get_rest_featured_image( $object, $field_name, $request ) {
    if( $object['featured_media'] ){
        $img = wp_get_attachment_image_src( $object['featured_media'], 'project_gallery_img' );
        return $img[0];
    }
    return false;
}

// Gallery images Rest API

/* REST API featured image */


/* Other Custom REST API additions */
add_action('rest_api_init', 'custom_rest_api');

function custom_rest_api () {
  register_rest_field('project', 'acreage', array(
    'get_callback' => function() {return get_field( "acreage" );}
  ));

  register_rest_field('project', 'completed', array(
    'get_callback' => function() {return get_field( "completed" );}
  ));

  register_rest_field('project', 'days_sun', array(
    'get_callback' => function() {return get_field( "days_sun" );}
  ));

  register_rest_field('project', 'gallery', array(
    'get_callback' => function() {return get_field( "gallery" );}
  ));

  register_rest_field('project', 'photo', array(
    'get_callback' => function() {return get_field( "photo" );}
  ));
}

// ACF PHOTO GALLERY CUSTOM ENDPOINT ( ALL PROJECT DATA )
function project_endpoint( $request_data ) {
// setup query argument
$args = array(
'post_type' => 'project',
'posts_per_page'=> -1,
'numberposts'=> -1,
's' => $request_data['s'],
);

// get posts
$posts = get_posts($args);

// add custom field data to posts array
foreach ($posts as $key => $post) {
$posts[$key]->acf = get_fields($post->ID);
$posts[$key]->link = get_permalink($post->ID);
$posts[$key]->image = get_the_post_thumbnail_url($post->ID);
$posts[$key]->gallery = acf_photo_gallery('gallery', $post->ID);
}

return $posts;
}

$post_type = "project";
function my_rest_prepare_post($data, $post, $request) {
  $_data = $data->data;
  $fields = get_fields($post->ID);

  foreach ($fields as $key => $value) {
    if ( substr( $key, 0, 5 ) === 'photo' ) {
      $photo_id = get_field($key, $post->ID);
      $photo_url = wp_get_attachment_image_url( $photo_id, 'project_gallery_img' );
      $_data[$key] = $photo_url;
    } else {
      $_data[$key] = get_field($key, $post->ID);
    }
	}

	//The helper function acf_photo_gallery contains array. Append this array to your data array
	$_data['acf_photo_gallery'] = acf_photo_gallery('gallery', $post->ID);
    $data->data = $_data;
    return $data;
}
add_filter("rest_prepare_{$post_type}", 'my_rest_prepare_post', 10, 3);

// register the endpoint
add_action( 'rest_api_init', function () {
  register_rest_route( 'wp/v1', '/projects/', array(
    'methods' => WP_REST_Server::READABLE,
    'callback' => 'project_endpoint',
  ));
});

// Carbon Fields Plugin
define( 'CRB_THEME_DIR', dirname( __FILE__ ) . DIRECTORY_SEPARATOR );
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta' );

function crb_attach_post_meta() {
	# Attach fields
	include_once( CRB_THEME_DIR . 'options/theme-options.php' );
	include_once( CRB_THEME_DIR . 'options/post-meta.php' );
}


add_action( 'gform_field_input', 'gforms_wp_editor', 10, 5 );
function gforms_wp_editor( $input, $field, $value, $lead_id, $form_id ) {
	if( $field["cssClass"] == 'richtext' ) {
		ob_start();
		wp_editor( $value, "input_{$form_id}_{$field['id']}",
	  		array(
				'media_buttons' => false,
				'textarea_name' => "input_{$field['id']}"
			)	);
		$input = ob_get_clean();
	}
	return $input;
}

add_action( 'gform_pre_submission', 'pre_submission_handler' );
function pre_submission_handler( $form ) {
  $product_fields         = [];
  $removed_product_fields = [];
  $fields_to_keep         = [];
  $fields_to_remove       = [];

  foreach ( $form['fields'] as $field ) {
    if ( $field->type === 'option' ) {
      if ( stripos( $field->choices[0]['text'], 'add service' ) === 0 ) {
        $product_fields[ $field->id ] = $field->productField;
      } elseif ( stripos( $field->choices[0]['text'], 'remove service' ) === 0 ) {
        $removed_product_fields[ $field->id ] = $field->productField;
      }

      // Option field id => product field id
    } elseif ( $field->type !== 'product' ) {
      $fields_to_keep[] = 'input_' . $field->id;

      for ( $i = 1; $i <= 5; $i++ ) {
        $fields_to_keep[] = 'input_' . $field->id . '_' . $i;
      }
    }
  }

  $added_services_option_fields   = [];
  $removed_services_option_fields = [];

  foreach ( $_POST as $field_name => $value ) {
    if ( stripos( $value, 'add service' ) === 0 ) {
      preg_match( "~input_(\d+)~", $field_name, $match );

      $added_services_option_fields[] = array(
        'product_field_id'  => $product_fields[ $match[1] ],
        'option_field_name' => $field_name,
      );

      $fields_to_keep[] = $field_name;

      for ( $i = 1; $i <= 5; $i++ ) {
        $fields_to_keep[] = 'input_' . $product_fields[ $match[1] ] . '_' . $i;
      }
    } elseif ( stripos( $value, 'remove service' ) === 0 ) {
      preg_match( "~input_(\d+)~", $field_name, $match );

      $removed_services_option_fields[] = array(
        'product_field_id'  => $removed_product_fields[ $match[1] ],
        'option_field_name' => $field_name,
      );

      $fields_to_remove[] = $field_name;

      for ( $i = 1; $i <= 5; $i++ ) {
        $fields_to_remove[] = 'input_' . $removed_product_fields[ $match[1] ] . '_' . $i;
      }
    }
  }

  if ( empty( $added_services_option_fields ) || empty( $fields_to_keep ) ) {
    return;
  }

  foreach ( $_POST as $field_name => $value ) {
    if ( in_array( $field_name, $fields_to_remove ) ) {
      unset( $_POST[ $field_name ] );
    }

    if ( in_array( $field_name, $fields_to_keep ) ) {
      continue;
    }

    if ( stripos( $field_name, 'input' ) === 0 ) {
      unset( $_POST[ $field_name ] );
    }
  }
}
