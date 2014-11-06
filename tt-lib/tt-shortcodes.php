<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 2020 Shortcodes


//////////////////////////////////////////////////////// TT Post Content

add_shortcode( 'post_info', 'post_info' );
function post_info ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
            'id' => '',
		), $atts )
	);
    
    $tt_post_content = get_post_field( 'post_content', $id );
    
// code
return $tt_post_content;    
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT Button

// [hsr_btn size="lg" link="#" color="#5e5a4a" fcolor="#ffffff" float="none" target="" class=""]Button Name[/hsr_btn], homes_for_sale_btn

add_shortcode( 'tt_btn', 'tt_btn' );
function tt_btn($atts, $content = null) {
    extract(shortcode_atts(array(
        'size'   => '',
        'color'  => '', //background color - #5e5a4a
        'fcolor'  => '', //font color - #ffffff
        'link'    => '#',
        'float'    => 'none',
        'target'    => '_blank',
        'class' => '',
        'block' => 'n',
    ), $atts ) );
    
    $classes = 'btn btn-primary ' . $class . ' btn-' . $size;
    
    if ($block == 'y') {
    	$classes .= ' btn-block';
    }

    return '<a type="button" class="' . $classes . '" href="' . $link . '" style="background:' . $color . ';color:'. $fcolor . ';float:' . $float . ';" target="' . $target . '">' . $content . '</a>';
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT Post Feed

add_shortcode( 'tt_posts', 'tt_posts' ); // echo do_shortcode('[tt_posts limit="-1" cat_name="home"]');
function tt_posts ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => 'post',
            'cat_id' => '-1',
            'cat_name' => '',
            'limit' => '10',
            'type' => 'post',
            'col_img' => '4',
            'col_txt' => '8',
            'display' => 'excerpt', //excerpt or content
		), $atts )
	);
    
    /////////////////////////////////////// Variables
$user_ID = get_current_user_id();
$user_data = get_user_meta( $user_ID );
$user_photo_id = $user_data[photo][0];
$user_photo_url = wp_get_attachment_url( $user_photo_id );
$user_photo_img = '<img src="' . $user_photo_url . '">';

/////////////////////////////////////// All Query    
if ($name == 'post') {
	// The Query
$args = array(
	'post_type' => $type,
	'post_status' => 'publish',
	'order' => 'ASC',
	'posts_per_page' => $limit,
    'cat' => $cat_id,
    'category_name' => $cat_name,
);
$the_query = new WP_Query( $args );
} else { 
	//nothing
	}
    
global $post;

// pre loop
//$output = '<ul>';    

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// pull meta for each post
		$post_id = get_the_ID();
		$permalink = get_permalink( $id );
        $post = get_post();
        //$image = the_post_thumbnail( 'thumbnail' );
        $size = '250,125';
        $image = get_the_post_thumbnail( $post_id, $size, $attr );
        $images_url = get_stylesheet_directory_uri();
        
        if ( $cat_name == 'webinars' ) {
            $col_img = '2';
            $col_txt = '10';
            $display = 'excerpt';
        }
        if ( in_category( 'testimonial' )  ) {
            $image = '<img src="'.$images_url.'/images/img-fpo.png">';
        }
        if ( empty($image)) {
            $image = '<img src="'.$images_url.'/images/img-fpo.png">';
        }
		
//HTML
        
    $output .= '<a href="'.$permalink.'"><div class="'.$cat_name.'-wrap">'.
        '<div class="list-img col-xs-12 col-sm-'.$col_img.' '.$cat_name.'-img">';  
    $output .= $image .
                '</div>'.
                '<div class="row col-xs-12 col-sm-'.$col_txt.'">'. 
                    '<h2>'. $post->post_title .'</h2>';
        
        if ( $display == 'content' ) {
            $output .= '<p>'. $post->post_content .'</p>';
        } else {
            $output .= '<p>'. $post->post_excerpt .'</p>';
        }
        if ( $cat_name == 'webinars' ) {
            $output .= '<a class="btn btn-primary btn-large" href="#">Sign up now</a>';
        } else {
            // do nothing
        }  
            
        $output .= '</div></div>'.
                    '</a>'.
                    '<div class="clearfix"></div>';

	}
} else {
	// no posts found
	echo '<h2>No ' . $type . ' found</h2>';
}
    // after loop
    //$output .= '</ul>';
    
/* Restore original Post Data */
wp_reset_postdata();
return $output;
}

////////////////////////////////////////////////////////


    
//////////////////////////////////////////////////////// TT Testimonials

add_shortcode( 'tt_testimonials', 'tt_testimonials' ); // echo do_shortcode('[tt_shortcode limit="-1" cat_name="home"]');
function tt_testimonials ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => 'post',
            'cat' => '-1',
            'cat_name' => '',
            'limit' => '10',
            'type' => 'post',
		), $atts )
	);
    
    /////////////////////////////////////// Variables
$user_ID = get_current_user_id();
$user_data = get_user_meta( $user_ID );
$user_photo_id = $user_data[photo][0];
$user_photo_url = wp_get_attachment_url( $user_photo_id );
$user_photo_img = '<img src="' . $user_photo_url . '">';

/////////////////////////////////////// All Query    
if ($name == 'post') {
	// The Query
$args = array(
	'post_type' => $type,
	'post_status' => 'publish',
	'order' => 'ASC',
	'posts_per_page' => $limit,
    'cat' => $cat,
    'category_name' => $cat_name,
);
$the_query = new WP_Query( $args );
} else { 
	//nothing
	}
    
global $post;

// pre loop
//$output = '<ul>';    

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// pull meta for each post
		$post_id = get_the_ID();
		$permalink = get_permalink( $id );
        $post = get_post();
        //$image = the_post_thumbnail( 'thumbnail' );
        $size = '250,125';
        $image = get_the_post_thumbnail( $post_id, $size, $attr );
        $testimonial_name = get_post_meta( $post_id, 'testimonial_name', true );
        $testimonial_title = get_post_meta( $post_id, 'testimonial_title', true );
         
		
//HTML
        
    $output .= '<div id="testimonial-wrap"><a href="/about/client-comments/">'.
                '<div class="row col-xs-12 col-sm-12">'. 
                    '<i class="fa fa-quote-left pull-left text-primary"></i><h3>'. $post->post_title .'</h3>'.
                    '<p class="testimonial-text">'. $post->post_excerpt .'  <i class="fa fa-quote-right text-primary"></i></p>'.
               
        '<span class="testimonial-name">'.$testimonial_name.'</span></br>'.
        '<span class="testimonial-title">'.$testimonial_title.'</span></br></div></a>'.
                '<div class="clearfix"></div></div>';


	}
} else {
	// no posts found
	echo '<h2>No ' . $type . ' found</h2>';
}
    // after loop
    //$output .= '</ul>';
    
/* Restore original Post Data */
wp_reset_postdata();
return $output;
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// Verified section

add_shortcode( 'de_verified', 'de_verified' );
    function de_verified () {
        $images_url = get_stylesheet_directory_uri();
        
        $output .= '<div class="verified">
                    <img src="'.$images_url.'/images/Verified-Data-Recovery.png" style="max-width:250px;" class="img-responsive centered">
                    <p><h2 class="centered">Get your company <span style="color:#cca814;">VERIFIED</span></h2></p>
                    <p><a class="btn btn-primary">FREE Online Assesment Tool</a></p>
                </div>';
    
    return $output;
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// CTA Button

// [tt_btn size="lg" link="#" color="#00CC09" fcolor="#ffffff" float="none" target="" class="cta centered" promo="Nov-88"]Button Name[/tt_btn]

add_shortcode( 'cta_btn', 'cta_btn' );
function cta_btn($atts, $content = null) {
    extract(shortcode_atts(array(
        'size'   => 'lg',
        'color'  => '#00CC09', //background color
        'fcolor'  => '#ffffff', //font color - #ffffff
        'link'    => '#',
        'float'    => 'none',
        'target'    => '_blank',
        'class' => 'cta',
        'block' => 'n',
        'promo' => '888',
        'promo_bg' => '#f0c723',
    ), $atts ) );
    
    $classes = 'btn btn-primary ' . $class . ' btn-' . $size;
    
    if ($block == 'y') {
    	$classes .= ' btn-block';
    }

    return '<a type="button" class="' . $classes . '" href="' . $link . '" style="background:' . $color . ';color:'. $fcolor . ';float:' . $float . ';" target="' . $target . '"><span class="promo" style="padding:0.5em;background-color:'.$promo_bg.';"><i class="fa fa-clock-o"></i> '.$promo.'</span> ' . $content . '</a>';
}

////////////////////////////////////////////////////////
