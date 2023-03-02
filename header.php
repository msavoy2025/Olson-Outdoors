<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_theme_file_uri('/resources/images/iconLogo.png'); ?>" type="image/x-icon">
<title>Olson Outdoors</title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="greenWrap">
  <header id="nav" class="nav pageWidth">
    <div class="logo"><a href="/home"><img src="<?php echo get_theme_file_uri('/resources/images/logo.svg'); ?>"></a></div>
    <div class="navOptions">
      <p class="navOption"><a href="/services">services</a></p>
      <p class="navOption"><a href="/projects">projects</a></p>
      <p class="navOption"><a href="/outdoor-blog">outdoor blog</a></p>
      <p class="navOption"><a href="http://www.olsonlawncare.com/" target="_blank">Lawn Care</a></p>
      <p class="navOption bold"><a href="/request-service">request service</a></p>
      <p class="navOption bold"><a href="/pay-invoice">pay invoice</a></p>
      <p class="navOption bold"><a href="/get-started">sign up</a></p>
      <div class="mobEXT"><p>drag for more</p></div>
      <div class="close_button"><img src="<?php echo get_theme_file_uri('resources/images/close.svg'); ?>"></div>
    </div>
  </header>
</div>
