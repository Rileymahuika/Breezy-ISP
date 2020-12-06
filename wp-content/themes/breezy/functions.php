<?php
// if (!function_exists('custom_setup')) {

// }

add_action('after_setup_theme', 'custom_setup');

/**
 * Theme setup function
 */

function custom_setup()
{
	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;
	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// If the retina setting is active, double the recommended width and height.
	if (get_theme_mod('retina_logo', false)) {
		$logo_width  = floor($logo_width * 2);
		$logo_height = floor($logo_height * 2);
	}

	add_theme_support('custom-header', array(
		'flex-width'    => true,
		'height'        => 304,
		'flex-height'            => false,
		'default-image'          => '',
	));

	

	add_theme_support('post-thumbnails');

	// Set up the WordPress core custom background feature.
	add_theme_support('custom-background', apply_filters('restro_cafe_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	)));

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support('custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	));


	register_default_headers(
		array(
			'default-image' => array(
				'url'           => '%s/assets/uploads/header-image.jpg',
				'thumbnail_url' => '%s/assets/uploads/header-image.jpg',
				'description'   => esc_html__('Default Header Image', 'restro-cafe'),
			),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	// Add support for full and wide align images.
	add_theme_support('align-wide');

	// Add support for responsive embeds.
	add_theme_support('responsive-embeds');
};

function wpb_add_google_fonts()
{
	wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Barlow:wght@100&display=swap', false);
}; {
	wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;1,200&display=swap', false);
}

add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');


//    FOR SEARCH FORM
function template_chooser($template)
{
	global $wp_query;
	$post_type = get_query_var('post_type');
	if ($wp_query->is_search && $post_type == 'addresses') {
		return locate_template('archive-search.php');  //  redirect to archive-search.php
	}
	return $template;
}
add_filter('template_include', 'template_chooser');



function breezy_menus()
{

	$locations = array(
		'primary'  => __('Desktop Horizontal Menu', 'breezy'),
		'expanded' => __('Desktop Expanded Menu', 'breezy'),
		'mobile'   => __('Mobile Menu', 'breezy'),
		'footer'   => __('Footer Menu', 'breezy'),
		'social'   => __('Social Menu', 'breezy'),
	);

	register_nav_menus($locations);
}

add_action('init', 'breezy_menus');



// wp_enqueue_scripts loads custom_register_styles
add_action('wp_enqueue_scripts', 'custom_register_styles');
add_action('wp_enqueue_scripts', 'custom_register_scripts');

/**
 * Enqueue stylesheets
 */

//  Runs function to load stylesheet
function custom_register_styles()
{
	wp_enqueue_style('style', get_stylesheet_directory_uri() . "/style.css");
};

// Runs function to load custom scrupts
function custom_register_script()
{
	wp_enqueue_script('responsive_nav', get_template_directory_uri() . "/assets/js/responsive_nav.js");
};



// Retrieves inc files
require_once get_template_directory() . '/inc/custom-post-type.php';
require_once get_template_directory() . '/inc/custom-taxonomies.php';
