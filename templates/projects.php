<?php
/**
* Template Name: Projects Page
* @package WordPress
*/
?>

<?php get_header(); ?>

<div class="projectNavBG_blue">
  <p>scroll for more</p>
</div>
<div class="projectNavBG_green" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/greenTallTear.svg') ?>);"></div>

<div class="currentProjects">
  <div class="currentProjectsTitle">Our Projects.</div>
  <div class="currentProjectsSubtitle">select a project to view it</div>
<?php
  $project = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'project',
    ));
    $postnum = 0;
  while($project->have_posts()) {
    $project->the_post(); $counter++ ?>

      <?php $url = wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), 'full' ); ?>

      <div class="currentProject projectClick<?php echo $counter; ?>">
        <div class="currentProjectsImage" style="background:url(<?php echo $url ?>)"></div>
        <div class="currentProjectsText">
            <input class="getResults" type="button" name="Button1 NAME" value="<?php the_title(); ?>">
        </div>
        <div class="plus__check<?php echo $counter; ?>" style="background-image:url(<?php echo get_theme_file_uri('resources/images/plus.svg'); ?>);"></div>
      </div><!-- currentProject close -->

      <div class="search-section projectMobileContent <?php echo $counter; ?>">
        <div class="projectFeaturedImage" style="background-image:url(<?php echo $url ?>);"></div>

        <p class="projectTitle"><?php the_title(); ?></p>

        <div class="projectDescription">
          <div class="projectDescription__top">
            <div class="projectDescription__title">
              <p>project profile</p>
              <img src="https://olsonoutdoors.com/wp-content/themes/olson/resources/images/logoGreenSmall.png">
              <p>form o.l. 1298_1</p>
            </div><!-- projectDescription__title close -->

            <div class="projectDetails">
              <div class="projectDetail">
              <p class="projectDetail__title">Title</p>
              <p class="projectDetail__content"><?php the_title(); ?></p>
              </div>
              <div class="projectDetail">
              <p class="projectDetail__title">Acreage</p>
              <p class="projectDetail__content"><?php echo the_field('acreage'); ?></p>
              </div>
              <div class="projectDetail">
              <p class="projectDetail__title">Completed</p>
              <p class="projectDetail__content"><?php echo the_field('completed'); ?></p>
              </div>
              <div class="projectDetail">
              <p class="projectDetail__title">Days of Sun</p>
              <p class="projectDetail__content"><?php echo the_field('days_sun'); ?></p>
              </div>
            </div>

            <div class="projectContent">
              <p class="projectDetail__title">Project Notes</p>
              <p><?php the_content(); ?></p>
              <!--
              <?php $project_details = carbon_get_the_post_meta( 'crb_project_details' ); ?>
              <ul>
                <?php $index = 1; ?>
                <?php foreach ( $project_details as $detail ) : ?>
                <li class="projectDetailItem wc-delay-<?php echo $index;?>">
                  <img src="<?php echo get_theme_file_uri('/resources/images/checkbox.svg'); ?>"><?php echo wpautop( nl2br( esc_html( $detail['text'] ) ) ); ?>
                </li>
                <?php $index++; ?>
                <?php endforeach; ?>
              </ul>-->
            </div>

          </div>
          <div class="projectDescription__bottom">scroll for more <img src="<?php echo get_theme_file_uri('/resources/images/arrowUp.png'); ?>"></div>
        </div>

        <!--<div class="projectFeaturedImage projectGallery" style="background-image:url(<?php echo the_field('photo'); ?>);"></div>-->
        <?php
            //Get the images ids from the post_metadata
            $images = acf_photo_gallery('gallery', $post->ID);
            //Check if return array has anything in it
            if( count($images) ):
                //Cool, we got some data so now let's loop over it
                foreach($images as $image):
                    $id = $image['id']; // The attachment id of the media
                    $title = $image['title']; //The title
                    $caption= $image['caption']; //The caption
                    $full_image_url= wp_get_attachment_image_url( $id, 'project_gallery_img' ); //Full size image url
                    // $full_image_url = acf_photo_gallery_resize_image($full_image_url, 367, 426); //Resized size to 262px width by 160px height image url
                    $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                    // $url= $image['url']; //Goto any link when clicked
                    // $target= $image['target']; //Open normal or new tab
                    // $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                    // $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
        ?>
        <div class="projectFeaturedImage projectGallery" style="background-image:url(<?php echo $full_image_url ?>);"></div>


        <?php endforeach; endif; ?>
      </div><!-- search-section mobile close -->
  <?php } ?>

</div><!-- currentProjects close -->


<div class="projectsWrap">
  <div class="projectSearchWrap">
    <div id="search-section" class="search-section">
    </div>
  </div><!-- projectSearchWrap close -->
</div><!-- projectsWrap -->

<div class="mobileFooterOnly"><?php get_footer(); ?></div>
