<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: pluton
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function pluton_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'Pluton' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.min.css', array(), $version );
	// If your child theme's stylesheet is not loaded automatically, activate this line
	//wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ), $version );
	
}
add_action( 'wp_enqueue_scripts', 'pluton_child_enqueue_parent_style' );