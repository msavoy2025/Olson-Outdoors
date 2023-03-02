<?php
/**
* Template Name: Invoices Page
* @package WordPress
*/
?>

<?php get_header(); ?>

<?php
while (have_posts()) {
  the_post();?>

<div class="section__heading">
  <div class="overlay1" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/invoiceBG.png'); ?>);"></div>
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

<div class="invoicesubTitle pageWidth">Make a payment.</div>

<div class="invoice__section  pageWidth">

  <div class="invoiceForm">
    <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true" tabindex="49" field_values="check=First Choice,Second Choice"]
'); ?>
  </div>
  <div class="invoice__review">
    <div class="invoice__review__top" style="background-image:url(<?php echo get_theme_file_uri('resources/images/invoiceReviewBG.png') ?>);">
      <div class="reviewImg"><img src="<?php echo get_theme_file_uri('resources/images/thumbsUp.svg'); ?>"></div>
      <div class="reviewTitle">Leave A Review</div>
      <div class="reviewText">We stand by our work and we hope that you were thrilled with what you received. If you would take a moment or two to leave a review on Google that would mean the world to us, thank you!</div>
    </div>
    <div class="invoice__review__bottom">
      <div class="review__button">
        <a href="https://www.google.com/search?q=olsenlawncare&oq=olsenlawncare+&aqs=chrome..69i57j69i60l3j0l2.830j1j4&sourceid=chrome&ie=UTF-8#lrd=0x876b88c2cc0587e1:0x9f1589135de6a521,3,,"><button class="reviewButton olsonButton">leave a review</button></a>
      </div>
    </div>
  </div>

</div>
<?php get_footer();?>
