<?php
/** AGGIORNA IN AUTOMATICO IL NUMERO DELLA VERSIONE */
define( 'WPH_VERSION', ( WPH_IS_STAGING ? time() : '1.0.0' ) );
define( 'WPH_IS_ADMIN', current_user_can( 'edit_others_posts' ) );

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
    add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wp-block-styles' ); /** carica stili dei blocchi di default */
	add_theme_support( 'align-wide' ); /* allineamento a dx di Gutemberg */
	add_theme_support( 'responsive-embeds' ); /** video responsive */

}
add_action( 'after_setup_theme', 'wph_setup' );


// styles and scripts function
function hytta_files(){
	wp_enqueue_script('main-app-js', get_theme_file_uri('/js/app.js'), NULL, '1.0', true);
	wp_enqueue_script('form-script-js', get_theme_file_uri('/js/form.js'), NULL, '1.0', true);
	wp_enqueue_script('moveto-js', get_theme_file_uri('/js/moveTo.min.js'), NULL, '1.0', true);

	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css');
	wp_enqueue_style('material-icon', 'https://fonts.googleapis.com/icon?family=Material+Icons');
	wp_enqueue_style('hytta-font', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,400&display=swap');
    // Theme's main stylesheet
    wp_enqueue_style( 'hytta-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all' );
}
add_action('wp_enqueue_scripts', 'hytta_files');