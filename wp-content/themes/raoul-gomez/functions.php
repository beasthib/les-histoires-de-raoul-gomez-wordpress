<?php

function raoul_gomez_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'primary' => __( 'Menu principal', 'raoul-gomez' ),
		)
	);
}
add_action( 'after_setup_theme', 'raoul_gomez_setup' );

function raoul_gomez_assets() {
	wp_enqueue_style(
		'raoul-gomez-fonts',
		'https://fonts.googleapis.com/css2?family=Chewy&family=Baloo+2:wght@400;600;700;800&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'raoul-gomez-style',
		get_stylesheet_uri(),
		array( 'raoul-gomez-fonts' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'raoul_gomez_assets' );
