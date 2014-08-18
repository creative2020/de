<?php

// TT Functions
require_once('tt-lib/tt-functions.php');


// Widgets
if ( function_exists('register_sidebar') )
	register_sidebar('name=Homepage Sidebar');
	register_sidebar('name=Interior Sidebar');
	register_sidebar('name=Blog Sidebar');
    register_sidebar('name=Custom');


// Breadcrumbs
function the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '">';
		bloginfo('name');
		echo "</a> » ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo " » ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}


// Menu Support

add_theme_support( 'menus' );



// Last Class

function addClassToLastMenuItem($theMenu)
{
	$classToSearchFor = 'class="menu-item';

	$lengthOfClassToSearchFor = strlen($classToSearchFor);

	$lastOccurranceOfClass = strripos( $theMenu, $classToSearchFor );

	$beforeTheClass = substr( $theMenu,
		0,
		($lastOccurranceOfClass + $lengthOfClassToSearchFor) );

	$afterTheClass = substr( $theMenu,
		($lastOccurranceOfClass + $lengthOfClassToSearchFor),
		strlen($theMenu) );

	return $beforeTheClass . ' last' . $afterTheClass;
}

add_filter('wp_nav_menu_items','addClassToLastMenuItem', 20, 1);



// Remove Admin Menu Items

add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {
	remove_menu_page('link-manager.php');
}


// Featured Image

add_theme_support( 'post-thumbnails' );


// Two Column Support

function webtreats_one_third( $atts, $content = null ) {
   return '<div class="one_third">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_third', 'webtreats_one_third');

function webtreats_one_third_last( $atts, $content = null ) {
   return '<div class="one_third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_third_last', 'webtreats_one_third_last');

function webtreats_two_third( $atts, $content = null ) {
   return '<div class="two_third">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_third', 'webtreats_two_third');

function webtreats_two_third_last( $atts, $content = null ) {
   return '<div class="two_third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('two_third_last', 'webtreats_two_third_last');

function webtreats_one_half( $atts, $content = null ) {
   return '<div class="one_half">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_half', 'webtreats_one_half');

function webtreats_one_half_last( $atts, $content = null ) {
   return '<div class="one_half last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_half_last', 'webtreats_one_half_last');

function webtreats_one_fourth( $atts, $content = null ) {
   return '<div class="one_fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fourth', 'webtreats_one_fourth');

function webtreats_one_fourth_last( $atts, $content = null ) {
   return '<div class="one_fourth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_fourth_last', 'webtreats_one_fourth_last');

function webtreats_three_fourth( $atts, $content = null ) {
   return '<div class="three_fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fourth', 'webtreats_three_fourth');

function webtreats_three_fourth_last( $atts, $content = null ) {
   return '<div class="three_fourth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('three_fourth_last', 'webtreats_three_fourth_last');

function webtreats_one_fifth( $atts, $content = null ) {
   return '<div class="one_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fifth', 'webtreats_one_fifth');

function webtreats_one_fifth_last( $atts, $content = null ) {
   return '<div class="one_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_fifth_last', 'webtreats_one_fifth_last');

function webtreats_two_fifth( $atts, $content = null ) {
   return '<div class="two_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_fifth', 'webtreats_two_fifth');

function webtreats_two_fifth_last( $atts, $content = null ) {
   return '<div class="two_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('two_fifth_last', 'webtreats_two_fifth_last');

function webtreats_three_fifth( $atts, $content = null ) {
   return '<div class="three_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fifth', 'webtreats_three_fifth');

function webtreats_three_fifth_last( $atts, $content = null ) {
   return '<div class="three_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('three_fifth_last', 'webtreats_three_fifth_last');

function webtreats_four_fifth( $atts, $content = null ) {
   return '<div class="four_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('four_fifth', 'webtreats_four_fifth');

function webtreats_four_fifth_last( $atts, $content = null ) {
   return '<div class="four_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('four_fifth_last', 'webtreats_four_fifth_last');

function webtreats_one_sixth( $atts, $content = null ) {
   return '<div class="one_sixth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_sixth', 'webtreats_one_sixth');

function webtreats_one_sixth_last( $atts, $content = null ) {
   return '<div class="one_sixth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_sixth_last', 'webtreats_one_sixth_last');

function webtreats_five_sixth( $atts, $content = null ) {
   return '<div class="five_sixth">' . do_shortcode($content) . '</div>';
}
add_shortcode('five_sixth', 'webtreats_five_sixth');

function webtreats_five_sixth_last( $atts, $content = null ) {
   return '<div class="five_sixth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
}
add_shortcode('five_sixth_last', 'webtreats_five_sixth_last');


// Disabling Wordpress wpautop and wptexturize filters

function webtreats_formatter($content) {
	$new_content = '';

	/* Matches the contents and the open and closing tags */
	$pattern_full = '{(\[raw\].*?\[/raw\])}is';

	/* Matches just the contents */
	$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';

	/* Divide content into pieces */
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

	/* Loop over pieces */
	foreach ($pieces as $piece) {
		/* Look for presence of the shortcode */
		if (preg_match($pattern_contents, $piece, $matches)) {

			/* Append to content (no formatting) */
			$new_content .= $matches[1];
		} else {

			/* Format and append to content */
			$new_content .= wptexturize(wpautop($piece));
		}
	}

	return $new_content;
}

// Remove the 2 main auto-formatters
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');

// Before displaying for viewing, apply this function
add_filter('the_content', 'webtreats_formatter', 99);
add_filter('widget_text', 'webtreats_formatter', 99);

//Long posts should require a higher limit, see http://core.trac.wordpress.org/ticket/8553
@ini_set('pcre.backtrack_limit', 500000);

// 2020 Backup Scoore system [score_best]
add_shortcode('score_best', 'f_score_best');
function f_score_best() {
        global $post;
        
    // set post number of best message
        $post_best = get_post('2995'); 
        $content = $post_best->the_content;

        return 'test <div class="score-best">' . $content . '</div>';
}
// 2020 Backup Scoore system variables [form_score]
add_shortcode('form_score', 'f_form_score');
function f_form_score() {
        return '<span class="form-score-variable">' . $_GET["score"] . '</span>';
}
add_shortcode('form_fname', 'f_form_fname');
function f_form_fname() {
        return '<span class="form-fname-variable">' . $_GET["fname"] . '</span>';
}
add_shortcode('form_rating', 'f_form_rating');
function f_form_rating() {
        return '<span class="form-rating-variable">' . $_GET["rating"] . '</span>';
}
//  2020 Print Certificate
add_shortcode('my_certificate', 'f_my_certificate');
function f_my_certificate() {
        return '<div><a class="btn" href="http://dataedge.com/wp-content/themes/dataedge/score-print.php?cert-name=' . $_GET["cert-name"] . '" target="_blank">Print My Certificate</a></div>';
}
?>