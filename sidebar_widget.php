
      <div id="news">
        <h2>News</h2>
        <?php
        $recentposts=get_posts('showposts=2&cat=4');
        if ($recentposts) {
        foreach($recentposts as $post) {
        setup_postdata($post);
        ?>
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( array (195,128) );?></a>
        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <?php the_content(); ?>
        <p><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">Read More</a></p>
        <?php } } ?>
      </div>