<?php
/*
Template Name: Page
*/
?>
<?php get_header(); ?>
  <div id="main">
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '611,90' ); ?>
    <div id="header" style="background: url(<?php echo $src[0]; ?> ) top left no-repeat !important;">    
      <h1><?php the_title(); ?></h1>
    </div>
    <div id="sidebar">
      <?php dynamic_sidebar( 'Interior Sidebar' ); ?>
    </div>
    <div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    <?php endwhile; endif; ?>
    </div>
    <div class="clear"></div>
  </div>
  <?php get_footer() ?>