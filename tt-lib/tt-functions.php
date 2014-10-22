<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
*/
//////////////////////////////////////////////////////// 2020 Functions
define( 'TEMPPATH', get_stylesheet_directory_uri());
define( 'IMAGES', TEMPPATH. "/imgages");

// Plugins
require_once ('plugins/advanced-custom-fields/acf.php');
require_once ('plugins/acf-options-page/acf-options-page.php');
require_once ('plugins/github-updater/github-updater.php');
require_once ('plugins/wp_bootstrap_navwalker.php');

// Shortcodes
require_once ('tt-shortcodes.php');

// CPT's
// require_once ('tt-cpt.php');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// Add boostrap from CDN

if( !function_exists("tt_bootstrap_cdn") ) {  
    function tt_bootstrap_cdn() { 
        // parent theme
        wp_register_style( 'tt-boot', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'tt-boot' );
        
        wp_register_script( 'tt-boot-js', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array('tt-jq2') );
        wp_enqueue_script( 'tt-boot-js' );
        
        wp_register_style( 'tt-boot-fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'tt-boot-fontawesome' );
        
        wp_register_style( 'theme-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'theme-style' );

        //wp_register_script( 'tt-jq1', 'http://code.jquery.com/jquery-2.1.1.min.js', array(),1 );
        //wp_enqueue_script( 'tt-jq1' );
        
        wp_register_script( 'tt-jq2', 'http://code.jquery.com/jquery-1.11.1.min.js', array() );
        wp_enqueue_script( 'tt-jq2' );
        
//        wp_register_script( 'tt-slider-1', get_stylesheet_directory_uri() . '/tt-lib/plugins/slider/de-slider-v1_edge.js', array() );
//        wp_enqueue_script( 'tt-slider-1' );
//        
//        wp_register_script( 'tt-slider-2', get_stylesheet_directory_uri() . '/tt-lib/plugins/slider/de-slider-v1_edgeActions.js', array() );
//        wp_enqueue_script( 'tt-slider-2' );
//        
//        wp_register_script( 'tt-slider-3', get_stylesheet_directory_uri() . '/tt-lib/plugins/slider/de-slider-v1_edgePreload.js', array() );
//        wp_enqueue_script( 'tt-slider-3' );
//        
//        wp_register_script( 'tt-slider-3', get_stylesheet_directory_uri() . '/tt-lib/plugins/slider/edge_includes/edge.2.0.1.min.js', array() );
//        wp_enqueue_script( 'tt-slider-3' );
//        
//        wp_register_script( 'tt-slider-3', get_stylesheet_directory_uri() . '/tt-lib/plugins/slider/edge_includes/jquery-1.7.1.min.js', array() );
//        wp_enqueue_script( 'tt-slider-3' );
        
        
                
        // child themes
        // wp_register_style( 'tt-child', get_stylesheet_directory_uri() . '/tt-child.css', array(), '1.0', 'all' );
        // wp_enqueue_style( 'tt-child' );
    }
}
add_action( 'wp_enqueue_scripts', 'tt_bootstrap_cdn' );

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// CSS Enqueue Styles

if( !function_exists("tt_theme_styles") ) {  
    function tt_theme_styles() { 
        // parent theme
        wp_register_style( 'tt-main', get_template_directory_uri() . '/tt-lib/css/tt-main.css', get_stylesheet_directory_uri() . '/style.css', '1.0', 'all' );
        wp_enqueue_style( 'tt-main' );

        // child themes
        // wp_register_style( 'tt-child', get_stylesheet_directory_uri() . '/tt-child.css', array(), '1.0', 'all' );
        // wp_enqueue_style( 'tt-child' );
    }
}
add_action( 'wp_enqueue_scripts', 'tt_theme_styles' );

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// TT Admin

// Custom Backend Footer
add_filter('admin_footer_text', 'tt_custom_admin_footer');
function tt_custom_admin_footer() {
	echo '<span id="footer-thankyou">Developed by <a href="http://2020creative.com" target="_blank">2020creative.com</a></span>.';
}
// adding it to the admin area
add_filter('admin_footer_text', 'tt_custom_admin_footer');

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// Menus

register_nav_menus( array(
	'tt_main' => 'TT Main',
	
) );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// Sidebars

////////////////////////////////////////////////////////

function tt_register_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'tt-sidebar',
			'name' => __( 'TT Sidebar', 'textdomain' ),
			'description' => __( 'Main sidebar for pages', 'textdomain' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
    
    register_sidebar(
		array(
			'id' => 'tt-blog-sidebar',
			'name' => __( 'TT Blog Sidebar', 'textdomain' ),
			'description' => __( 'Sidebar for blog and archive', 'textdomain' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
    
    register_sidebar(
		array(
			'id' => 'tt-home-sidebar',
			'name' => __( 'TT Home Sidebar', 'textdomain' ),
			'description' => __( 'Sidebar for home page', 'textdomain' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'tt_register_sidebars' );

////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////////////////////////////////////// disable admin area

function tt_disable_admin_bar() { 
	if( ! current_user_can('edit_dashboard') )
		add_filter('show_admin_bar', '__return_false');	
}
add_action( 'after_setup_theme', 'tt_disable_admin_bar' );
 

function tt_redirect_admin(){
	if ( ! current_user_can( 'edit_dashboard' ) ){
		wp_redirect( site_url() . '/' );
		exit;		
	}
}
add_action( 'admin_init', 'tt_redirect_admin' );

////////////////////////////////////////////////////////

function tt_print_acf() {
    
    //$user_meta = get_user_meta(1);
    //print_r($user_meta);
}
add_action('admin_print_footer_scripts', 'tt_print_acf');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//  2020 Print Certificate
add_shortcode('my_certificate', 'f_my_certificate');
function f_my_certificate() {
        return '<div><a class="btn" href="http://dataedge.com/wp-content/themes/dataedge/score-print.php?cert-name=' . $_GET["cert-name"] . '" target="_blank">Print My Certificate</a></div>';
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////