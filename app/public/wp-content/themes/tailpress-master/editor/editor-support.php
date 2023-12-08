<?php


add_theme_support( 'editor-font-sizes', array(
	array(
		'name'      => __( 'small', 'dswp' ),
		'shortName' => __( 'S', 'dswp' ),
		'size'      => 14,
		'slug'      => 'Small'
	),
	array(
		'name'      => __( 'regular', 'dswp' ),
		'shortName' => __( 'M', 'dswp' ),
		'size'      => 16,
		'slug'      => 'Regular'
	),
	array(
		'name'      => __( 'large', 'dswp' ),
		'shortName' => __( 'L', 'dswp' ),
		'size'      => 22,
		'slug'      => 'Large'
	),
	array(
		'name'      => __( 'xlarge', 'dswp' ),
		'shortName' => __( 'XL', 'dswp' ),
		'size'      => 24,
		'slug'      => 'XLarge'
	)
) );


add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Orange', 'dswp' ),
		'slug'  => 'orange',
		'color' => '#D68D35',
	),
	array(
		'name'  => __( 'Blue', 'dswp' ),
		'slug'  => 'blue',
		'color' => '#3348A1',
       ),
	array(
		'name'  => __( 'Coal', 'dswp' ),
		'slug'  => 'coal',
		'color' => '#494949',
       ),
	array(
		'name'  => __( 'Medium Gray', 'dswp' ),
		'slug'  => 'medium-gray',
		'color' => '#979797',
       ),
	array(
		'name'  => __( 'White', 'dswp' ),
		'slug'  => 'white',
		'color'	=> '#ffffff',
	),
) );