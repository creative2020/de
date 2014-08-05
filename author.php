<?php get_header(); ?>
  <div id="content">
    <div id="header"></div>
    <?php
    if(isset($_GET['author_name'])) :
        $curauth = get_user_by('slug', $author_name);
    else :
        $curauth = get_userdata(intval($author));
    endif;
    ?>
    <h1>Posts by <?php echo $curauth->nickname; ?></h1>
    <p>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h3>
      <span class="small"><?php the_time('M d Y'); ?><br />
      Category: <?php the_category('&');?></span>
      <div class="line"></div>
    <?php endwhile; else: ?><p><?php _e('No posts by this author.'); ?></p><?php endif; ?>
  </div>
  <div id="qsearch">
    <h2>Quick Home Search</h2>
    <form>
      <input name="address" type="text" id="address" class="input" value="MLS#, Address, City" onclick="if(this.value == 'MLS#, Address, City') this.value = '';" onblur="if(this.value == '') this.value = 'MLS#, Address, City';" />
      <input name="address" type="text" id="address" class="input" value="Street Address" onclick="if(this.value == 'Street Address') this.value = '';" onblur="if(this.value == '') this.value = 'Street Address';" />
      <input name="address" type="text" id="address" class="input" value="State or Zipcode" onclick="if(this.value == 'State or Zipcode') this.value = '';" onblur="if(this.value == '') this.value = 'State or Zipcode';" />
      <select name="min_price" class="input_list">
        <option value="Min Price">Min Price</option>
      </select>
      <select name="max_price" class="input_list">
        <option value="Max Price">Max Price</option>
      </select>
      <input name="submit" type="submit" value="Search" class="submit_btn" />
      <div class="clear"></div>
    </form>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed mattis fringilla eros. Integer tellus felis, bibendum in, rhoncus non, blandit non, libero.</p>
  </div>
  <div class="clear"></div>
  <?php get_footer() ?>