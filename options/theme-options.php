<?php

use Carbon_Fields\Container\Container;
use Carbon_Fields\Field\Field;

$link_target_options = array(
	'_self'  => 'the same window',
	'_blank' => 'a new tab'
);

/* Theme Options */
Container::make( 'theme_options', __( 'Theme Options' ) )
    ->add_fields( array(
        Field::make( 'text', 'crb_text', 'Text Field' ),
    ) );
