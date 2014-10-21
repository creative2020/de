<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<div class="row">
    <div class="col-sm-10 col-sm-offset-1 flush">
        <div class="hp-message">
            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Boulevard-Brewing-Logo.gif"/>
            <span class="message">Special Event: Tuesday, Nov. 11: Backup and Brews @ Boulevard Brewery. <a class="btn btn-success btn-xs" href="#">click for details</a></span></div>
    </div>
</div> <!--row-->

<div id="slider-wrap" class="row">
    <div id="slider" class="col-sm-10 col-sm-offset-1 flush">
        <?php //echo do_shortcode('[edge_animation id="2"]'); ?>
        
        <div id="Stage" class="de-slider"></div>
        
        <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider-formula.png"/>
<!--        <div id="Stage" class="de-slider">-->
	</div>
</div> <!--row-->

<div class="row">
    <div id="quicklink-wrap" class="col-sm-10 col-sm-offset-1">
        <div class="row">
            
            <a href="#">
                
                <div class="quicklink col-sm-4">
                    
                    <i class="now fa fa-calendar-o"></i><i class="go fa fa-external-link"></i>
                    <h2>Webinars + Events</h2>
                    <p class="bucket-text"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Boulevard-Brewing-Logo.gif" style="height:30px;"> Nov. 11: Backup and Brews @ Boulevard Brewery.</p>
                    <p class="bucket-text"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sporting-kc.png" style="height:30px;"> Nov. 12: Backup Goals @ </br>Sporting KC.</p>
                </div>
            </a>
            <a href="#">
                <div class="quicklink col-sm-4">
                    <i class="now fa fa-bullhorn"></i><i class="go fa fa-external-link"></i>
                    <h2>News</h2>
                    <p class="bucket-text">Oct 15: DE Announces new website.</p>
                
                </div>
            </a>
            <a href="#">
                <div class="quicklink col-sm-4">
                    <i class="now fa fa-cloud"></i><i class="go fa fa-external-link"></i>
                    <h2>Big Cloud Backup</h2>
                    <p class="bucket-text">See what immplimentation your organization needs.</p>
                
                </div>
            </a>
    </div>
    </div>



</div>


<div class="row">
    <div id="main" class="col-sm-6 col-sm-offset-1">
        <div id="content" class="row col-sm-12">
            <?php echo do_shortcode('[tt_posts limit="3" cat_name="home"]'); ?>
        </div>
        </div>    
   
        <div id="sidebar" class="col-xs-12 col-sm-4">
            <div class="verified">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Verified-Data-Recovery.png" style="max-width:250px;" class="img-responsive centered">
                <p><h2 class="centered">Get your company <span style="color:#cca814;">VERIFIED</span></h2></p>
                <p><a class="btn btn-primary">FREE Online Assesment Tool</a></p>
            </div>
            <?php dynamic_sidebar( 'tt-sidebar' ); ?>
        </div>
        
    </div><!--row-->

<div class="row">
    <div id="partners" class="row col-sm-10 col-sm-offset-1">
        <div class="col-sm-12">
        <div class="partner-logo col-xs-12 col-sm-3  col-sm-offset-0 nimble">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/Nimble-Storage-Logo-rev.png" class="img-responsive centered" style="margin-top:15px;">
        </div>    
        <div class="partner-logo col-xs-12 col-sm-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/asigra-logo-rev.png" class="img-responsive centered" style="margin-top:5px;">
        </div>
        <div class="partner-logo col-xs-12 col-sm-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/stor-server-logo-rev.png" class="img-responsive centered">
        </div>
        <div class="partner-logo col-xs-12 col-sm-1 hp">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/hp-logo-pr-rev.png" class="img-responsive centered">
        </div>
        <div class="partner-logo col-xs-12 col-sm-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/Tivoli_logo-rev.png" class="img-responsive centered">
        </div>
        <div class="partner-logo col-xs-12 col-sm-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/Simplivity_logo-rev-sm.png" class="img-responsive centered" style="margin-top:15px;">
        </div>
      </div> 
        </div>
</div><!--row-->




  <?php get_footer() ?>
