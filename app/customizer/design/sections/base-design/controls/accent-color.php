<?php
use Inc2734\WP_Customizer_Framework\Framework;

Framework::control(
	'color',
	'accent-color',
	[
		'label'    => __( 'Accent color', 'snow-monkey' ),
		'default'  => '#6a1b9a',
		'priority' => 100,
	]
);

if ( ! is_customize_preview() ) {
	return;
}

$panel   = Framework::get_panel( 'design' );
$section = Framework::get_section( 'base-design' );
$control = Framework::get_control( 'accent-color' );
$control->join( $section )->join( $panel );
