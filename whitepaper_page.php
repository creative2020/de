<?php
/*
Template Name: WhitePaper Page
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
      <div id="contact">
        <form action="http://freshaircreatives.com/data/process.php" method="post">
	      <input type="hidden" name="form_tools_form_id" value="20" />
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
              <label>Company:</label>
              <input id="company" class="input" name="company" size="40" type="text" tabindex="5" />
            </p>
            <p>
              <label>Budget:</label>
              <input id="budget" class="input" name="budget" size="40" type="text" tabindex="7" />
            </p>
            <p>
              <label>Best Way To Contact:</label>
              <input id="contact" class="input" name="contact" size="40" type="text" tabindex="9" />
            </p>
            <p>
              <label>&nbsp;</label>
              <input class="submit_btn" name="submit" type="submit" value="Submit" tabindex="10" />
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
            <p>
              <label>Title:</label>
              <input id="title" class="input" name="title" size="40" type="text" tabindex="6" />
            </p>
            
            <p>
              <label>Timeframe:</label>
              <input id="timeframe" class="input" name="timeframe" size="40" type="text" tabindex="8" />
            </p>
          </div>
        </form>
      </div>    
    </div>
    <div class="clear"></div>
  </div>
  <?php get_footer() ?>