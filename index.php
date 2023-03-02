<?php get_header(); ?>



<div class="section__heading">
  <div class="overlay1" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/blogBG.png'); ?>);"></div>
  <div class="overlay2" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/halftone.svg'); ?>);"></div>
  <div class="heading__textOverlay pageWidth">
    <div class="heading__textOverlay__left">
        <h4 class="heading__textOverlay__subtitle">News and other tidbits straight from us.</h4>
        <h1 class="heading__textOverlay__title">get the dirt.</h1>
        <p class="heading__textOverlay__text">Your one stop shop for all things outdoors. Learn everything you need to know to get the most out of your landscape.</p>



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

  <div class="blogPosts pageWidth">
<?php
while(have_posts()) {
  the_post(); ?>
  <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
    <div class="blogPost">
      <div class="blogImage" style="background:url(<?php echo $url ?>)">
        <div class="blogImage__overlay" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/halftone.svg'); ?>);"></div>
      </div>
      <div class="blogContent">
        <p class="genericTitle">title</p>
        <h2 class="actualTitle"><?php the_title(); ?></h2>
        <p class="genericExcerpt">excerpt</p>
        <div class="actualExcerpt"><?php echo wp_trim_words(get_the_content(), 28); ?></div>
      </div>
      <div class="blogLink">
        <p class="readMoreLink">Read More</p>
        <a href="<?php the_permalink(); ?>"><button class="blogLinkButton olsonButton"><div><img src="<?php echo get_theme_file_uri('/resources/images/blogArrow.svg'); ?>"></div></button></a>
      </div>
    </div><!-- blogPost close -->

    <div class="journal_signoff">
      <div class="form">
        <p>form</p>
        <p>olson journal entry</p>
      </div>
      <div class="temp">
        <p>current temp.</p>
        <p><?php echo the_field('temp'); ?>&#8457;</p>
      </div>
      <div class="postID">
        <p>post date</p>
        <p><?php echo get_the_date('F j, Y'); ?></p>
      </div>
      <div class="author">
        <p>author</p>
        <p><?php the_author(); ?></p>
      </div>
      <div class="assignment">
        <p>assignment</p>
        <p><?php echo the_field('jobTitle'); ?></p>
      </div>
      <div class="signature">
        <p>signature</p>
        <img src="<?php echo get_theme_file_uri('/resources/images/signature_blog_dark.svg'); ?>">
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
        <p>post date</p>
        <p><?php echo get_the_date('F j, Y'); ?></p>
      </div>
      <div class="author">
        <p>author</p>
        <p><?php the_author(); ?></p>
      </div>
    </div><!-- journal_signoff close -->

    <div class="blogLinkMobile">
      <a href="<?php the_permalink(); ?>"><button class="blogButtonMobile olsonButton">read more</button></a>
    </div>


<?php } ?>
  </div><!-- blogPosts close -->
<?php 
$url="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if($url == "https://olsonoutdoors.com/testimonials/"){?>
<table style="margin-left:25%">
  <tr>
    <td><script type="text/javascript" src="https://birdeye.com/embed/v7/165521847788672/7/12345680515183" async></script><div id="bf-revz-widget-12345680515183" ></div></td>
    <td><script type="text/javascript" src="https://birdeye.com/embed/v7/165521847788672/8/12345680715183" async></script><div id="bf-revz-widget-12345680715183" ></div></td>
  </tr>
  <tr>
    <td colspan="2"><script type="text/javascript" src="https://birdeye.com/embed/v7/165521847788672/3/12345680215183" async></script><div id="bf-revz-widget-12345680215183" ></div></td>
  </tr>

</table>
<?php 
}?>
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
