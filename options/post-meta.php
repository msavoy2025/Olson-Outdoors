<?php

use Carbon_Fields\Container\Container;
use Carbon_Fields\Field\Field;

$link_target_options = array(
	'_self'  => 'the same window',
	'_blank' => 'a new tab'
);

/* Homepage Settings */
Container::make( 'post_meta', __( 'Project Detail Section', 'crb' ) )
  ->where( 'post_type', '=', 'project')
  ->add_tab( __( 'Project Details', 'crb' ), array(
		Field::make( 'complex', 'crb_project_details', __( 'Details Items', 'crb' ) )
			->set_layout( 'tabbed-horizontal' )
			->add_fields( array(
				Field::make( 'textarea', 'text', __( 'Text', 'crb' ) )
					->set_required(),
			) ),
  ));
