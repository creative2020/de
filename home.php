<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
  <div id="main">
    <div id="slider"><?php echo do_shortcode('[layerslider id="2"]'); ?></div>
    <div id="sidebar">
        <?php dynamic_sidebar( 1 ); ?>
    </div>
    <div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content('<p>Read More'); ?>
      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    <?php endwhile; endif; ?>
    </div>
    <div class="clear"></div>
  </div>
  <?php get_footer() ?>