<?php


/**
 * Enqueue scripts and styles for the front end
 * 1. Theme frontend scripts are bundled to one in assets/dist/themefrontend.js
 * 2. We load foundation separately. Unfortunately, foundation conflicts with the editor dashboard.
 * If we want the theme styling in the block editor, we need to drop it as an import and load it
 * separately.
 * 3. Theme stylesheet file imports all rules from assets/dist/style.min.css
 */
add_action( 'wp_enqueue_scripts', 'load_frontend_assets' );
function load_frontend_assets() {

	wp_enqueue_script(
		'frontend-js',
		get_template_directory_uri() . '/assets/dist/themefrontend.min.js',
		array(),
		filemtime( get_template_directory() . '/assets/dist/themefrontend.min.js' ),
		true
	);

	// enqueue foundation css
	wp_enqueue_style(
		'foundation-style',
		get_template_directory_uri() . '/assets/foundation/css/foundation.css',
		array( ),
		filemtime( get_template_directory() . '/assets/foundation/css/foundation.css' ),
		false
	);

	// enqueue base theme css after foundation css to avoid overwrriten style by foundation
	wp_enqueue_style(
		'template-style',
		get_template_directory_uri() . '/assets/dist/style.min.css',
		array( 'foundation-style' ),
		filemtime( get_template_directory() . '/assets/dist/style.min.css' ),
		false
	);

	wp_enqueue_script(
		'fontawesome-style',
		"https://use.fontawesome.com/4b5cf91c35.js",
		array(),
		filemtime( get_template_directory() . '/assets/fontawesome/css/all.css' ),
		true
	);
}

/**
 * Enqueue scripts and styles for the admin area
 * 1. Scripts are at assets/dist/themebackend.min.js
 * 2. Add theme support for editor styling. The style-editor.css in the theme
 *  is currently empty - WordPress can't handle imports in these files. It
 * messes up the pathing.
 */
add_action( 'enqueue_block_editor_assets', 'load_theme_css_for_gutenberg' );
function load_theme_css_for_gutenberg() {

	wp_enqueue_script(
		'backend-js',
		get_template_directory_uri() . '/assets/dist/themebackend.min.js',
		array(),
		filemtime( get_template_directory() .  '/assets/dist/themebackend.min.js' ),
		false
	);
}
