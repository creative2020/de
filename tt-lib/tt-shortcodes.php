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
    'category_name' => $cat_name,
);
$the_query = new WP_Query( $args );
} else { 
	//nothing
	}
    
global $post;

// pre loop
$output = '<div class="'.$cat_name.'-wrapper">';    

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// pull meta for each post
		$post_id = get_the_ID();
		$permalink = get_permalink( $id );
        $post = get_post();
        //$image = the_post_thumbnail( 'thumbnail' );
        $post_thumbnail_id = get_post_thumbnail_id( $post_id );
        
        $image_info = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail', $icon );
        
        $tt_excerpt = $post->post_excerpt;
        $tt_pre_title = '';
        $tt_icon = '';
        
        $category = get_the_category(); 
        //$cat_name = $category[0]->category_nicename;
        
        $images_url = get_stylesheet_directory_uri();
        
        $register_link = get_post_meta( $post_id, 'register_link' );
        $reg_link = $register_link[0];
        $target = '';
        
        if( empty( $register_link ) ) {
            $reg_link = $permalink;
            } else {
            $target = '_blank';
        }
        
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
        
    $output .= '<a href="'.$permalink.'"><div class="row default-wrap '.$cat_name.'-wrap">'.
        '<div class="list-img col-xs-12 col-sm-'.$col_img.' '.$cat_name.'-img img-responsive">';  
    $output .= '<img src="'.$image_info[0].'" class="img-responsive">'.
                '</div>'.
                '<div class="col-xs-12 col-sm-'.$col_txt.'">'. 
                    '<h2>'. $post->post_title .'</h2>';
        
        if ( $display == 'content' ) {
            $output .= '<p>'. $post->post_content .'</p>';
        } else {
            $output .= '<p>'. $post->post_excerpt .'</p>';
        }
        if ( in_category( 'webinars' ) ) {
            $output .= '<a class="btn btn-primary btn-large" href="/webinar-wednesday/webinar-signup/?webinar_name='. $post->post_title .'" target="'.$target.'">Sign up now</a>';
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
    $output .= '</div>'; //row
    
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
	echo '';
}
    // after loop
    //$output .= '</ul>';
    
/* Restore original Post Data */
wp_reset_postdata();
return $output;
}

//////////////////////////////////////////////////////// TT News

add_shortcode( 'tt_news', 'tt_news' ); // echo do_shortcode('[tt_shortcode limit="-1" cat_name="home"]');
function tt_news ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => 'post',
            'cat' => '-1',
            'cat_name' => 'webinars',
            'limit' => '2',
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
        $has_feature_img = has_post_thumbnail( $post_id );
        
        if ( $has_feature_img == 'true') {
        
            $post_thumbnail_id = get_post_thumbnail_id( $post_id );
            $image = get_the_post_thumbnail( $post_id, $size, $attr );
            $img_url = wp_get_attachment_image_src( $post_thumbnail_id );
            $img = '<img class="pull-left" src="'.$img_url[0].'"/> ';
            
        } else {
            
            $img = '';
            $style = 'text-align:center;';
            
        }
		
//HTML
        
    $output .= '<a href="'.$permalink.'"><h3 class="bucket-text" style="'.$style.'">'.$img.''. $post->post_title.'</h3></a>';
        

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
                    <p><a href="/verified-data-recovery" class="btn btn-primary">FREE Online Assesment Tool</a></p>
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
    $month = date("M");
    
    if ($block == 'y') {
    	$classes .= ' btn-block';
    }

    return '<a type="button" class="' . $classes . '" href="' . $link . '" style="background:' . $color . ';color:'. $fcolor . ';float:' . $float . ';" target="' . $target . '"><span class="promo" style="padding:0.5em;background-color:'.$promo_bg.';"><i class="fa fa-clock-o"></i> '.$month.'-'.$promo.'</span> ' . $content . '</a>';
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT rule

add_shortcode( 'tt_rule', 'tt_rule' ); //line
function tt_rule($atts, $content = null) {
    extract(shortcode_atts(array(
        'size'   => '1px',
        'color'  => '#ccc',
        'classes'  => 'col-sm-12 rule',
    ), $atts ) );

    return '<div class="' . $classes . '" style="border-top:' . $size . ' solid ' . $color .';padding:1.0em 0;"></div>';
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT Homepage Message 1

add_shortcode( 'tt_hp_message', 'tt_hp_message' ); // echo do_shortcode('[tt_shortcode limit="-1" cat_name="home"]');
function tt_hp_message ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => 'post',
            'cat' => '-1',
            'cat_name' => 'message',
            'limit' => '1',
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
        $has_feature_img = has_post_thumbnail( $post_id );
        
        if ( $has_feature_img == 'true') {
        
            $post_thumbnail_id = get_post_thumbnail_id( $post_id );
            $image = get_the_post_thumbnail( $post_id, $size, $attr );
            $img_url = wp_get_attachment_image_src( $post_thumbnail_id );
            $img = '<img class="" src="'.$img_url[0].'"/> ';
            
        } else {
            
            $img = '';
            $style = 'text-align:center;';
            
        }
		
//HTML
        
    
        $output .= '<div class="hp-message">
                    '.$img.'<span class="message"> '. $post->post_title.' <a class="btn btn-success btn-xs" href="'.$permalink.'">click for details</a></span>
                </div>';
        

	}
} else {
	// no posts found
	
}
    // after loop
    //$output .= '</ul>';
    
/* Restore original Post Data */
wp_reset_postdata();
return $output;
}

/////////////////////////////////////////////////////////////////////////
