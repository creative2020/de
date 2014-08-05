<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
  <div id="main">
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '611,90' ); ?>
    <div id="header" style="background: url(<?php echo $src[0]; ?> ) top left no-repeat !important;">    
      <h1><?php the_title(); ?></h1>
    </div>
    <div id="sidebar">
      <?php include (TEMPLATEPATH . '/blog_widget.php'); ?>
    </div>
    <div id="content">
    <?php $numposts = get_option('posts_per_page'); ?>
	<?php $blog_query = new WP_Query('showposts='.$numposts.'&paged='.$paged); ?>
	<?php if($blog_query->have_posts()) : while($blog_query->have_posts()) : $blog_query->the_post(); ?>
	<div id="post">
      <div class="date"><?php the_time('d'); ?> <span><?php the_time('M'); ?></span></div>
      <div class="heading">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" style="text-decoration:none;"><?php the_title(); ?></a></h2>
        <p>
          Posted in <?php the_category(', '); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="<?php the_permalink(); ?>#comments"><?php comments_number('No Comments','1 Comment','% Comments'); ?></a>
        </p>
      </div>
      <div class="clear"></div>
      <div class="content">
	    <?php the_excerpt('Read More...'); ?>
      </div>
      <div class="line"></div>
	<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>      
    </div>
    <?php endwhile; ?>
    <div class="page-nav">
      <div class="alignleft"><?php previous_posts_link(__('&laquo; Previous Page')) ?></div>
	  <div class="alignright"><?php next_posts_link(__('Next Page &raquo;')); ?></div>
    </div>   
    <?php else : ?>
    <h3><?php _e("Page not Found"); ?></h3>
    <p><?php _e("We're sorry, but the page you're looking for isn't here."); ?></p>
    <p><?php _e("Try searching for the page you are looking for or using the navigation in the header or sidebar"); ?></p>
    <?php endif; ?>
    </div>
    <div class="clear"></div>
  </div>
  <?php get_footer() ?>