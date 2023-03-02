<?php
/**
* Template Name: Service Request Page
* @package WordPress
*/
?>

<?php get_header(); ?>

<?php
while (have_posts()) {
  the_post();?>

<div class="section__heading">
  <div class="overlay1" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/requestBG.png'); ?>);"></div>
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


<div class="serviceRequest pageWidth">
  <div class="serviceRequest__img"><img src="<?php echo get_theme_file_uri('/resources/images/request_image.svg'); ?>"></div>

  <div class="serviceRequest__form">
    <div class="serviceRequest__title">Get in touch.</div>

    <div class="formFillout">
      <div class="formFillout__title">message us today!</div>
      <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]
'); ?>
    </div>

    <div class="serviceRequest__title landscape_inquiry_title">Landscape Inquiry.</div>
    <p class="landscape_inquiry_desc">To serve our clientele in a more efficient and effective way, we ask that you provide us with a short description of your proposed landscaping project. The information provided will allow us to give you a more accurate evaluation/potential estimate.</p>

    <div class="formFillout">
      <div class="formFillout__title">message us today!</div>
      <?php echo do_shortcode('[gravityform id="4" title="false" description="false" ajax="true"]
'); ?>
    </div>

    <div class="contactInfo">
      <div class="contactInfo__phone">
        <p>phone</p>
        <p>720.201.7561</p>
      </div>
      <div class="contactInfo__address">
        <p>address</p>
        <p>7700 West 120th Avenue Broomfield, CO 80020</p>
      </div>
    </div><!-- contactInfo close -->

  </div><!-- serviceRequest__form close -->
</div><!-- serviceRequest close -->

<?php get_footer();?>
