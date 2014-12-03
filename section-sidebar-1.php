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
 <a class="twitter-timeline" href="https://twitter.com/dataedge" data-widget-id="539928365449220096" data-chrome="nofooter transparent noborders noscrollbar" data-tweet-limit="3" >Tweets by @dataedge</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>