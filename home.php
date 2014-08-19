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
    <div id="quicklink-wrap" class="col-sm-10 col-sm-offset-1">
        <div class="row">
            
            <a href="#">
                
                <div class="quicklink col-sm-4">
                    
                    <i class="now fa fa-globe"></i><i class="go fa fa-external-link"></i>
                    <h2>Heading goes here</h2>
                    <p>Some text about this section goes here.</p>
                </div>
            </a>
            <a href="#">
                <div class="quicklink col-sm-4">
                    <i class="now fa fa-globe"></i><i class="go fa fa-external-link"></i>
                    <h2>Heading goes here</h2>
                    <p>Some text about this section goes here.</p>
                
                </div>
            </a>
            <a href="#">
                <div class="quicklink col-sm-4">
                    <i class="now fa fa-globe"></i><i class="go fa fa-external-link"></i>
                    <h2>Heading goes here</h2>
                    <p>Some text about this section goes here.</p>
                
                </div>
            </a>
    </div>
    </div>



</div>


<div class="row">
    <div id="main" class="col-sm-6 col-sm-offset-1">
        <div id="content" class="col-sm-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <h1><?php the_title(); ?></h1>
              <?php the_content('<p>Read More'); ?>
              <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
            <?php endwhile; endif; ?>
        </div>
        </div>    
   
        <div id="sidebar" class="col-sm-4">
            <?php dynamic_sidebar( 'tt-sidebar' ); ?>
        </div>
        
    </div><!--row-->




  <?php get_footer() ?>
