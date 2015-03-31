<?php get_header(); ?>

<!--Displays category page-->

<div id="page-main" class="row">
      <div class="page-inside col-sm-10 col-sm-offset-1">
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '611,90' ); ?>
    <div id="page-header" class="row">    
      <div class="col-sm-8">
        <h1><?php single_cat_title(''); ?></h1> <!--'Archive: '-->
      </div>
        <div class="col-sm-4 flush">
            <div class="pg-header-img-wrap flush hidden-xs">
                <img class="page-header-img" src="<?php echo $src[0]; ?>"/>
            </div>
      </div>
    </div>
      
<div class="row">  
<div id="page-content" class="col-sm-8">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if ( in_category('white-paper-download') ) {
    
     get_template_part('content','white-paper');
    
    } else { ?>
    
    
    
    
<!--content normal-->        
    <div id="post">
      <div class="date"><?php the_time('d'); ?> <span><?php the_time('M'); ?></span></div>
      <div class="heading">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p>
          Posted in <?php the_category(', '); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="<?php the_permalink(); ?>#comments"><?php comments_number('No Comments','1 Comment','% Comments'); ?></a>
        </p>
      </div>
      <div class="clear"></div>
      <div class="content"><?php the_excerpt(); ?></div>
    </div>
    <div class="line"></div>
<!--content normal-->
    
    <?php } ?>
    
    
    
    <?php endwhile; ?>
    <?php endif; ?>
    <?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); } ?>
    </div>
    <div id="sidebar" class="col-sm-4">
      <?php dynamic_sidebar( 'tt-blog-sidebar' ); ?>
  </div>
  </div>
</div>
    </div>

<?php get_footer() ?>
