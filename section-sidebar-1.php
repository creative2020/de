 <div id="sidebar" class="col-xs-12 col-sm-4">
            <div class="verified">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Verified-Data-Recovery.png" style="max-width:250px;" class="img-responsive centered">
                <p><h2 class="centered">Get your company <span style="color:#cca814;">VERIFIED</span></h2></p>
                <p><a class="btn btn-primary">FREE Online Assesment Tool</a></p>
            </div>
            

<?php 
if ( is_page_template( 'home.php' ) ) {
    dynamic_sidebar( 'tt-home-sidebar' );
    }
if ( is_page_template( 'blog.php' ) ) {
    dynamic_sidebar( 'tt-blog-sidebar' );
    }
    else {
        dynamic_sidebar( 'tt-sidebar' );
}
?>


        </div>