<?php
/**
 * functions.php is the file where you can control all the logics behind your website
 * You can even change how WordPress works because this file is called very early in the process of building the pages
 *
 * @since 1.0.0
 * @version 1.0.0
 * @author Guffi Andrea
 * 
 * @see  https://developer.wordpress.org/reference/functions/add_action/
 * @see  https://developer.wordpress.org/reference/functions/add_theme_support/
 * @see  https://developer.wordpress.org/block-editor/developers/themes/theme-support/
 * @see  https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @see  https://developer.wordpress.org/reference/functions/remove_action/
 */


function woosupport(){
	//woocommerce support
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 400,
		'single_image_width'	=> 400,
		'product_grid' 			=> array(
			'default_rows'    => 10,
			'min_rows'        => 5,
			'max_rows'        => 10,
			'default_columns' => 2,
			'min_columns'     => 2,
			'max_columns'     => 2,				
		)
	) );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	if ( ! isset( $content_width ) ) {
		$content_width = 600;
	}
}
add_action( 'after_setup_theme', 'woosupport');
/**
 * This function takes care of all the setup and functionalities that should be added to your theme
 */
function wph_setup() {
	/**
	 * add_theme_support will be used to add some functionalities
	 * 
	 * @see  https://developer.wordpress.org/reference/functions/add_theme_support/
	 * @see  https://developer.wordpress.org/block-editor/developers/themes/theme-support/
	 */
    //add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wp-block-styles' ); /** carica stili dei blocchi di default */
	add_theme_support( 'align-wide' ); /* allineamento a dx di Gutemberg */
	add_theme_support( 'responsive-embeds' ); /** video responsive */
	
}
add_action( 'after_setup_theme', 'wph_setup', 0 );


// styles function
function hytta_files(){
	
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css');
	wp_enqueue_style('material-icon', 'https://fonts.googleapis.com/icon?family=Material+Icons');
	wp_enqueue_style('hytta-font', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,400&display=swap');
    // Theme's main stylesheet
    wp_enqueue_style( 'hytta-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all' );
}
add_action('wp_enqueue_scripts', 'hytta_files');

function hytta_scripts(){
	wp_enqueue_script( 'app', get_theme_file_uri('/inc/js/app.js'), NULL, '1.0', false);
	wp_enqueue_script( 'accordion', get_theme_file_uri('/inc/js/accordion.js'), NULL, '1.0', false);
	wp_enqueue_script( 'movetomin', get_theme_file_uri('/inc/js/moveTo.min.js'), NULL, '1.0', false);
	wp_enqueue_script( 'slider', get_theme_file_uri('/inc/js/slider.js'), NULL, '1.0', false);
	wp_enqueue_script( 'form', get_theme_file_uri('/inc/js/form.js'), NULL, '1.1', false);
}
add_action('wp_enqueue_scripts', 'hytta_scripts');


/**
 * Remove the default emoji styles slowing down the website
 *
 * @see  https://developer.wordpress.org/reference/functions/remove_action/
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );