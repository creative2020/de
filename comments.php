<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.<p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'alt';
?>




<div id="commentblock">
<?php if ($comments) : ?>
  <h1>Comments</h1>
  <p class="small">This post has <?php comments_number('0 Comments','1 Comment','% Comments'); ?>.</p>
  <ul class="commentlist">
  <?php foreach ($comments as $comment) : ?>
    <li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
    
    
    <div class="avatar">
      <?php if (function_exists('get_avatar')) {
        echo get_avatar($comment -> comment_author_email, $size='60');
        } else {
        if(!empty($comment -> comment_author_email)) {
          $md5 = md5($comment -> comment_author_email);
          $default = urlencode(get_bloginfo('template_directory') . '/images/no-gravatar2.gif');
          echo "<img class=\"avatar\" src='http://www.gravatar.com/avatar.php?gravatar_id=$md5&size=60&default=$default' alt='Gravatar' />";
          }
        }
      ?>
        
    </div>
        
        <div class="user">
      <?php comment_author_link() ?>
    </div>
    
    <div class="date"><?php comment_date('F jS, Y') ?> at <?php comment_time() ?> <?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?></div>
    <div class="clear"></div>
    
    <div class="quote"><?php comment_text() ?></div>
    
	<?php if ($comment->comment_approved == '0') : ?><p><strong>Your comment is awaiting moderation.</strong></p><?php endif; ?>
    </li>
    
    
  <?php /* Changes every other comment to a different class */ $oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : ''; ?>
  <?php endforeach; /* end for each comment */ ?>
  </ul>

  <?php else : // this is displayed if there are no comments so far ?>
    <?php if ('open' == $post->comment_status) : ?>
    <!-- If comments are open, but there are no comments. -->

    <?php else : // comments are closed ?>
    <!-- If comments are closed. -->
  <?php endif; ?>
    
<?php endif; ?>

</div>



<?php if ('open' == $post->comment_status) : ?>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<div style="font-size:10px; margin-bottom:10px; padding-top:6px; padding-bottom:6px; padding-left:20px; padding-right:20px; color:#424242; border-top: dotted 1px #b9c2cb; border-bottom: dotted 1px #b9c2cb;background-color:#dedede">
  You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.
</div>
</div>
<?php else : ?>
<div class="shim"></div>
<h2>Add New Comment</h2>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<div style="font-size:10px; margin-bottom:40px; padding-top:6px; padding-bottom:6px; padding-left:20px; padding-right:20px; color:#424242; border-top: dotted 1px #b9c2cb; border-bottom: dotted 1px #b9c2cb; background-color:#dedede">
  Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a>
</div>

<?php else : ?>

<p><label for="name">Name <?php if ($req) echo "(required)"; ?></label><br />
<input type="text" name="author" id="name" value="<?php echo $comment_author; ?>" size="50" tabindex="1" class="input" /></p>

<p><label for="email">Email Address <?php if ($req) echo "(required)"; ?></label><br />
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="50" tabindex="2" class="input" /></p>

<p><label for="url">Website</label><br />
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="50" tabindex="3" class="input"  /></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->

<h2><label for="words">Leave a Comment </label></h2><br /><p><textarea name="comment" id="words" tabindex="4" class="input_message"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit" class="submit_btn" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>

<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>