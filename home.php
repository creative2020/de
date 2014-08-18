<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<div id="slider-wrap" class="row">
    <div id="slider" class="col-sm-10 col-sm-offset-1">
        <?php //echo do_shortcode('[layerslider id="2"]'); ?>
        <img class="responsive" src="images/slider_placeholder.png">
    </div>
</div> <!--row-->

<div class="row">
    <div id="main" class="col-sm-10 col-sm-offset-1">
        <div id="content" class="col-sm-7">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <h1><?php the_title(); ?></h1>
              <?php the_content('<p>Read More'); ?>
              <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
            <?php endwhile; endif; ?>
        </div>
    
        <div id="sidebar" class="col-sm-3">
            hello
            <?php dynamic_sidebar( 1 ); ?>
        </div>
        
    </div><!--row-->
</div>
</div>

  <?php get_footer() ?>
</div>