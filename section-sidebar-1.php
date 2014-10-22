<div id="sidebar" class="col-xs-12 col-sm-4">
<?php 
if ( is_page_template( 'home.php' ) ) {
    dynamic_sidebar( 'tt-home-sidebar' );
    }
else if ( is_page_template( 'blog.php' ) ) {
    dynamic_sidebar( 'tt-blog-sidebar' );
    }
    else {
        dynamic_sidebar( 'tt-sidebar' );
}
?>
</div>