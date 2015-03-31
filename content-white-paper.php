<!--Special content item-->

<?php
    $file = $_GET['file'];
    $post_id = get_the_id();
    $permalink = get_permalink($post_id);
    $tt_pre_title = 'White Paper: ';
    $tt_icon_name = get_post_meta( $post_id, 'tt_icon' );
        if ( $tt_icon_name[0] != null ) {
            $tt_icon = $tt_icon_name[0];
        } else {
            $tt_icon = 'download ';
        }
    $icon_size = '6.0em';
    $font_color = '#ffffff';
    $bg_color = '#BDB8A1';
    $more_btn_text = 'Download white paper';
    $more_btn_link = get_permalink();
    $image = '<i class="fa fa-'.$tt_icon.'" style="color:'.$font_color.';font-size:4.0em;"></i>';
    $size = 'thumbnail';
    $post_thumbnail_id = get_post_thumbnail_id( $post_id );
    $image_info = wp_get_attachment_image_src( $post_thumbnail_id, $size, $icon );
    $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '611,90' );
    $tt_download = get_post_meta( $post_id, 'tt_download' );
?> 

<!--Single-->
    <?php if ( is_single() ) { ?> 

    
    
    <div id="page-header" class="row">    
      <div class="col-sm-8">
        <h1 style="color:<?php echo $font_color; ?>;"><?php echo $tt_pre_title; ?> <?php echo $post->post_title; ?></h1>
      </div>
        <div class="col-sm-4 flush">
            <div class="pg-header-img-wrap flush hidden-xs">
                <img class="page-header-img" src="<?php echo $src[0]; ?>"/>
            </div>
      </div>
    </div>
      
<div class="row">  
<div id="page-content" class="col-sm-8">
    
    <?php echo do_shortcode('[tt_rule]'); ?>
    
    <span class="category" style="float:left;">Filed in:</span> <?php echo get_the_category_list(); ?>
    
    <?php echo do_shortcode('[tt_rule]'); ?>
    
        <div class="col-sm-12">
            <p><?php the_content(); ?></p>
            <p class="text-center" style="font-size:1.2em;color:#428BCA;">Download the white paper and full case study with the form below</p>
        </div>
    
    <?php if ($file == 'y') { ?>
    
    <div class="col-sm-12">
        <p class="text-center"><a class="btn btn-primary btn-lg" href="<?php echo $tt_download[0]; ?>" style="margin-bottom:2.0em;">Download PDF</a></p>
        
        <p class="text-center" style="font-size:1.0em;color:white;background:green;padding:1.0em;width:100%">You can download your PDF with the button above</p>
        
    </div>

    <?php } ?>
    
    <?php echo do_shortcode('[tt_rule]'); ?>
    
    <?php if ($file !== 'y') { ?>
    
    <div class="col-sm-12">
        <?php echo do_shortcode('[gravityform id="6" name="White Paper" title="false" description="false" ajax="true"]'); ?>
    </div>
    
    <?php } ?>
    
   
    
    
  </div>
      
      <?php get_template_part( 'section', 'sidebar-1' ); ?>

  </div>
  </div>
</div>



        <?php } else { ?>
            
<!--Single-->            

            
<!--post-->
<a href="<?php echo $permalink ?>">
                    
    <div class="row tt-search excerpt-<?php echo $cat_name ?>" style="background:<?php echo $bg_color; ?>;">
        <div class="col-sm-2">
            <?php if ( has_post_thumbnail() ) { ?>
            
                <img src="<?php echo $image_info[0]; ?>" class="img-responsive">
            
            <?php } else { ?>
            
                <i class="fa fa-<?php echo $tt_icon; ?>" style="color:<?php echo $font_color; ?>;font-size:<?php echo $icon_size; ?>;"></i>
            
            
            <?php } ?>
        </div>

        <div class="col-sm-10">
            <h2><?php echo $tt_pre_title; ?> <?php the_title(); ?></h2>
            <div class="clearfix"><p><?php echo get_the_category_list(); ?></p></div>
            
                <p><?php the_excerpt(); ?></p>
            
        </div>
        <div class="col-sm-12">
                <a class="btn btn-primary btn-md pull-right" href="<?php echo $more_btn_link; ?>"><i class="fa fa-arrow-circle-right"></i> <?php echo $more_btn_text; ?></a>
            </div>
    </div>
</a>

<?php } ?> <!--post-->