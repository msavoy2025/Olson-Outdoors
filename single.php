<?php get_header(); ?>

<?php
while(have_posts()) {
  the_post(); ?>

<div class="section__heading">
  <div class="overlay2" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/halftone.svg'); ?>);"></div>
  <div class="heading__textOverlay pageWidth">
    <div class="heading__textOverlay__left">
        <h1 class="heading__textOverlay__title singleTitle"><?php the_title(); ?></h1>
        <div class="journal_signoff">
          <div class="form journal_signoff_content">
            <p>form</p>
            <p>olson journal entry</p>
          </div>
          <div class="temp journal_signoff_content">
            <p>current temp.</p>
            <p><?php echo the_field('temp'); ?>&#8457;</p>
          </div>
          <div class="postID journal_signoff_content">
            <p>post i.d.</p>
            <p>7836</p>
          </div>
          <div class="author journal_signoff_content">
            <p>author</p>
            <p><?php the_author();  ?></p>
          </div>
          <div class="assignment journal_signoff_content">
            <p>assignment</p>
            <p><?php echo the_field('jobTitle'); ?></p>
          </div>
          <div class="signature journal_signoff_content">
            <p>signature</p>
            <img src="<?php echo get_theme_file_uri('/resources/images/signature_blog.svg'); ?>">
          </div>
        </div><!-- journal_signoff close -->

        <div class="journal_signoff_mobile">
          <div class="form">
            <p>form</p>
            <p>olson journal entry</p>
          </div>
          <div class="temp">
            <p>current temp.</p>
            <p><?php echo the_field('temp'); ?>&#8457;</p>
          </div>
        </div><!-- journal_signoff close -->

        <div class="journal_signoff_mobile">
          <div class="postID">
            <p>post i.d.</p>
            <p>7836</p>
          </div>
          <div class="author">
            <p>author</p>
            <p><?php the_author(); ?></p>
          </div>
        </div><!-- journal_signoff close -->
  </div><!-- heading__textOverlay__left close -->
</div><!-- heading__textOverlay close -->
</div><!--section__heading close -->
<?php } ?>
<div class="halftoneBG">
    <div class="halftone"><img src="<?php echo get_theme_file_uri('resources/images/halftone-halfsize.png'); ?>"></div>
</div>
<?php
while(have_posts()) {
  the_post(); ?>
  <div class="singleBlogPost pageWidth">
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
    <div class="singleBlogPost__image" style="background:url(<?php echo $url ?>)">
      <div class="blogImage__overlay" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/halftone.svg'); ?>);"></div>
    </div>

    <div class="singleBlogPost__content"><?php the_content(); ?></div>
  </div>

<?php } ?>


<div class="blogPosts__servicesCTA pageWidth">
  <div class="craftmanshipText">the great outdoors</div>
  <div class="craftmanshipText services_CTAbg cream" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/greenTearLong.svg') ?>);">Right in your own backyard.</div>
  <div class="workTexts">
    <div class="workText servicesCTA__text">You don’t have to take a trip around the world to find happiness.</div>
    <div class="workText servicesCTA__text">You can find joy in the little things through your own backyard. Inspired by the wonder of nature, made just for you!</div>
    <div class="work__button">
      <a href="/services"><button class="servicesCTA__button workButton olsonButton">request your service today!</button></a>
    </div>
  </div>
</div>




<?php get_footer();?>
