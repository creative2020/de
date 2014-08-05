<?php get_header(); ?>
  <div id="main">
    <div id="header" style="background: url('http://www.dataedge.com/wp-content/uploads/2012/01/de-ins-about-header.jpg') top left no-repeat !important;">    
      <h1><?php the_title(); ?></h1>
    </div>
    <div id="sidebar">
      <?php include (TEMPLATEPATH . '/blog_widget.php'); ?>
    </div>
    <div id="content">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
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
    <?php endwhile; ?>
    <?php endif; ?>
    <?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); } ?>
    </div>
    <div class="clear"></div>
  </div>
  <?php get_footer() ?>