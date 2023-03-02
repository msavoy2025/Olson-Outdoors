<?php
/**
 * Template Name: Email Signatures
 */
 ?>
 <?php get_header(); ?>

 <?php
 while (have_posts()) {
   the_post();?>

 <div class="section__heading">
   <div class="overlay1" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/servicesBG.png'); ?>);"></div>
   <div class="overlay2" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/halftone.svg'); ?>);"></div>
   <div class="heading__textOverlay pageWidth">
     <div class="heading__textOverlay__left">
         <h4 class="heading__textOverlay__subtitle"><?php echo the_field('slogan_subtitle'); ?></h4>
         <h1 class="heading__textOverlay__title"><?php echo the_field('slogan_title'); ?></h1>
         <p class="heading__textOverlay__text"><?php the_content(); ?></p>

 <?php } ?>

       <p class="heading__textOverlay__scroll"><span style="padding-right:10px;">scroll for more</span><img src="<?php echo get_theme_file_uri('/resources/images/Arrow1.svg'); ?>"></p>
     </div>
     <div class="heading__textOverlay__right">
       <p class="heading__textOverlay_contact contactTitle">olson outdoors</p>
       <p class="heading__textOverlay_contact">720.201.7561</p>
       <p class="heading__textOverlay_contact">7700 West 120th Avenue</p>
       <p class="heading__textOverlay_contact">Broomfield, CO 80020</p>
     </div>
   </div>
 </div>


 <div class="emailSignature shell">
 <?php
	 $email = new WP_Query(array(
		 'posts_per_page' => -1,
		 'post_type' => 'email'
		 ));

	 while($email->have_posts()) {
		 $email->the_post(); ?>
		 <div class="EmailBox">
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
			<div class="eventImage eventImageSlide" style="background-image:url(<?php echo $url ?>);"></div>
			<h4 class="eventTitle"><?php the_title(); ?></h4>
			<a href="<?php the_permalink(); ?>">My Email Signature</a>
		 </div>

 <?php } ?>
</div><!-- shell close -->
 <?php get_footer(); ?>
