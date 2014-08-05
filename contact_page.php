<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
  <div id="main">
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '611,90' ); ?>
    <div id="header" style="background: url(<?php echo $src[0]; ?> ) top left no-repeat !important;">    
      <h1><?php the_title(); ?></h1>
    </div>
    <div id="sidebar">
      <?php include (TEMPLATEPATH . '/sidebar_widget.php'); ?>
    </div>
    <div id="content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      <?php endwhile; endif; ?>
      <div class="clear"></div>
      <div class="line"></div>
      <div class="clear"></div>
      <h2>Contact Us</h2>
      <div id="contact">
        <form action="http://freshaircreatives.com/forms/process.php" method="post">
          <input type="hidden" name="form_tools_form_id" value="3" />
          <div class="left">
            <p>
              <label>First Name:</label>
              <input id="first_name" class="input" name="first_name" size="40" type="text" tabindex="1" />
            </p>
            <p>
              <label>Phone:</label>
              <input id="phone" class="input" name="phone" size="40" type="text" tabindex="3" />
            </p>
            <p>
              <label>&nbsp;</label>
              <input class="submit_btn" name="submit" type="submit" value="Submit" tabindex="6" />
            </p>
          </div>
          <div class="right">
            <p>
              <label>Last Name:</label>
              <input id="last_name" class="input" name="last_name" size="40" type="text" tabindex="2" />
            </p>
            <p>
              <label>Email:</label>
              <input id="email" class="input" name="email" size="40" type="text" tabindex="4" />
            </p>
          </div>  
        </form>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <?php get_footer() ?>