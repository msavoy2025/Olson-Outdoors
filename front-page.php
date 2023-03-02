<?php
get_header();

while (have_posts()) {
  the_post();
//Testing Git Updates  
?>

<div class="section__heading">
  <div class="overlay1" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/man-digging.png'); ?>);"></div>
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


<div class="section__homeServices pageWidth">
  <div class="homeServices__left">
    <div class="subtitleWrap" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/homeServicesBG3.png') ?>);">
      <h2 class="homeServices__left__subtitle pageWidth">Spaces crafted with care and maintained for the future. That is what we do.</h2>
    </div>
    <div class="greenWrap">
    <div class="homeService__shortDescriptions">
      <div class="homeService__shortDescription">
        <img class="homeService__shortDescriptions__image" src="<?php echo get_theme_file_uri('/resources/images/asterisk.svg'); ?>">
        <p class="homeService__shortDescriptions__text">Honestly<br/> We love to shovel</p>
      </div>
      <div class="homeService__shortDescription">
        <img class="homeService__shortDescriptions__image" src="<?php echo get_theme_file_uri('/resources/images/leaf.svg'); ?>">
        <p class="homeService__shortDescriptions__text">Truthfully<br/> We love to rake</p>
      </div>
      <div class="homeService__shortDescription">
        <img class="homeService__shortDescriptions__image" src="<?php echo get_theme_file_uri('/resources/images/smile.svg'); ?>">
        <p class="homeService__shortDescriptions__text">But most of all<br/> We love to help you</p>
      </div>
    </div> <!-- homeService__shortDescriptions close -->
  </div><!-- greenWrap close -->
</div> <!-- homeServices__left -->

  <div class="homeServices__right">
    <h4 class="homeServices__right__subtitle">our creed & duty</h4>
    <div class="homeServices__right__textWrap">
      <p class="homeServices__right__text">If it’s a yard, we <strong class="bold uppercase">plan</strong> it.</p>
      <p class="homeServices__right__text">If it grows, we <strong class="bold uppercase">plant</strong> it.</p>
      <p class="homeServices__right__text">If it needs work, we <strong class="bold uppercase">fix</strong> it.</p>
      <p class="homeServices__right__text">If it’s a mess, we <strong class="bold uppercase">clean</strong> it.</p>
    </div>
    <p class="homeServices__right__text">We pride ourselves on keeping close relationships with clients to ensure our projects are as well manicured as the day they were complete.</p>
    <a href="/services"><button class="servicesButton olsonButton">view our services</button></a>
  </div>
</div><!-- section__homeServices close -->

<div class="section__craftmanship pageWidth">
  <div class="craftmanshipSlogan">it begins with a promise - getting to know you. it ends the same — with a smile.</div>
  <div class="craftmanshipText">Craftsmanship is more than a word. More than an idea.</div>
  <div class="craftmanshipText cream" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/greenTear.svg') ?>);">It’s the way we work.</div>
  <div class="craftmanshipSlogan2">To care about craftsmanship is to care about what goes unnoticed & unseen.</div>
  <div class="craftmanships">
    <div class="craftmanship">
      <div class="craftTitle">our craft</div>
      <div class="craftText">
        <p>your lawn</p>
        <p>your wants</p>
        <p>your needs</p>
        <p>your desires</p>
      </div>
    </div>
    <div class="craftmanship">
      <div class="craftTitle">our trades</div>
      <div class="craftText">
        <p>&nbsp;</p>
        <p>customer service</p>
        <p>landscape design</p>
        <p>maintenance</p>
      </div>
    </div>
    <div class="craftmanship">
      <div class="craftTitle">our concern</div>
      <div class="craftText">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>your satisfaction</p>
      </div>
    </div>
    <div class="craftmanship">
      <div class="craftTitle">our tools</div>
      <div class="craftText">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>handshakes</p>
        <p>& smiles</p>
      </div>
    </div>
  </div><!-- craftmanships close -->
</div><!-- section__craftmanship close -->


<div class="pictureWrap">
  <div class="pictureEdge" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/creamTearBG.png') ?>);"></div>
  <div class="section__pictures">
    <div class="picture1" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/homePic1.png') ?>);"></div>
    <div class="picture2" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/homePic2.png') ?>);"></div>
  </div>

  <div class="section__pictures">
    <div class="picture3" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/homePic3.png') ?>);"></div>
    <div class="picture4" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/homePic4.png') ?>);"></div>
  </div>
</div> <!-- pictureWrap -->

<div class="blackBGwrap">
  <div class="section__testimonials pageWidth">
    <h2 class="testimonialTitle">We believe that every patch of land is a special place that deserves attention. We hope you agree.</h2>
    <div class="testimonialImg">
      <img src="<?php echo get_theme_file_uri('resources/images/testimonial.svg') ?>">
    </div>
    <div class="testimonialTexts">
      <p class="testimonialText">rock work</p>
      <p class="testimonialText">terrain</p>
      <p class="testimonialText">lawn</p>
      <p class="testimonialText">decoration</p>
      <p class="testimonialText">atmosphere</p>
      <p class="testimonialText">and so much more...</p>
    </div><!-- testimonialTexts close -->
  </div><!-- section__testimonials close -->

<div class="section__work pageWidth">
  <div class="craftmanshipText workTitle cream">dirt underneath our nails?</div>
  <div class="craftmanshipText workTitle workTitleBG cream" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/greenTear.svg') ?>);">we love it!</div>
  <div class="workTexts">
    <div class="workText">Whether it’s under the shade, out in the sun, or beneath a sky full of snowflakes, being outside makes us feel alive.</div>
    <div class="workText">Maybe it’s a Colorado thing?</div>
    <div class="work__button">
      <a href="/projects"><button class="workButton olsonButton">view our work</button></a>
    </div>
  </div>
</div>


</div><!-- blackBGwrap close -->
<?php get_footer();?>
