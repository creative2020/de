<?php get_header(); ?>
<div id="page-main" class="row">
      <div class="page-inside col-sm-10 col-sm-offset-1">
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '611,90' ); ?>
    <div id="page-header" class="row">    
      <div class="col-sm-8">
        <h1><?php the_title(); ?></h1>
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
      <?php the_content('Continue reading  &raquo;'); ?>
    
   
        
        <?php    // If comments are open or we have at least one comment, load up the comment template.
					
if ( in_category( array( 'testimonial', 'webinars' )) ) { //removes comment form from displaying
    
    //do nothing
    } else {
    if ( comments_open() || get_comments_number() ) {
		  comments_template();
        }
    }

    ?>
       
	<?php endwhile; ?>
    <?php else : ?>
      <h1 class="center">Not Found</h1>
      <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php endif; ?>
      
  
  </div>
    <div id="sidebar" class="col-sm-4">
      <?php dynamic_sidebar( 'tt-blog-sidebar' ); ?>
  </div>
  </div>
</div>
    </div>
  <?php get_footer() ?>