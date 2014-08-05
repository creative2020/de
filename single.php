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
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content('Continue reading  &raquo;'); ?>
        
        
        
        <?php    // If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					} ?>
            
       
        
	<?php endwhile; ?>
    <?php else : ?>
      <h1 class="center">Not Found</h1>
      <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php endif; ?>
    </div>
    <div class="clear"></div>
  </div>
  <?php get_footer() ?>