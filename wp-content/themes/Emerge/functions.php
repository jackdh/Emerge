<?php
function mbe_wp_head(){
    echo '<style>'.PHP_EOL;
    // Using custom CSS class name.
    echo 'body.body-logged-in .navbar-fixed-top{ top: 28px !important; }'.PHP_EOL;
    // Using WordPress default CSS class name.
    echo 'body.logged-in .navbar-fixed-top{ top: 28px !important; }'.PHP_EOL;
    echo '</style>'.PHP_EOL;
}
add_action('wp_head', 'mbe_wp_head');
function theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );

	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );



}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data ('html5_shiv', 'conditional', 'lt IE 9');
	$wp_scripts->add_data ('respond_js', 'conditional', 'lt IE 9');

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'background_js', get_template_directory_uri() . '/js/background.js', array('jquery'), '', true );
	wp_enqueue_script( 'scroll_js', get_template_directory_uri() . '/js/scroll.js', array('jquery'), '', true );
	wp_enqueue_script( 'myscript_js', get_template_directory_uri() . '/js/myscript.js', array('jquery'), '', true );
	

}
add_action ( 'wp_enqueue_scripts', 'theme_js' );

add_theme_support( 'menus' );

function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu')
			)
	 );
}
add_action( 'init', 'register_theme_menus' );



?>