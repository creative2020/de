<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<div class="row">
    <div class="col-sm-10 col-sm-offset-1 flush">
        <h3 class="hp-message">Callout home page message goes here.</h3>
    </div>
</div> <!--row-->

<div id="slider-wrap" class="row">
    <div id="slider" class="col-sm-10 col-sm-offset-1 flush">
        <?php //echo do_shortcode('[metaslider id=3372]'); ?>
        <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider-formula.png"/>
    </div>
</div> <!--row-->

<div class="row">
    <div id="quicklink-wrap" class="col-sm-10 col-sm-offset-1">
        <div class="row">
            
            <a href="#">
                
                <div class="quicklink col-sm-4">
                    
                    <i class="now fa fa-globe"></i><i class="go fa fa-external-link"></i>
                    <h2>Heading goes here</h2>
                    <p>Some text about this section goes here.</p>
                </div>
            </a>
            <a href="#">
                <div class="quicklink col-sm-4">
                    <i class="now fa fa-globe"></i><i class="go fa fa-external-link"></i>
                    <h2>Heading goes here</h2>
                    <p>Some text about this section goes here.</p>
                
                </div>
            </a>
            <a href="#">
                <div class="quicklink col-sm-4">
                    <i class="now fa fa-globe"></i><i class="go fa fa-external-link"></i>
                    <h2>Heading goes here</h2>
                    <p>Some text about this section goes here.</p>
                
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
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/zombie-approved.png" class="img-responsive">
            <?php dynamic_sidebar( 'tt-sidebar' ); ?>
        </div>
        
    </div><!--row-->

<div class="row">
    <div id="partners" class="row col-sm-10 col-sm-offset-1">
        <div class="partner-logo col-xs-12 col-sm-3  col-sm-offset-1 nimble">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/Nimble-Storage-Logo-rev.png" class="">
        </div>    
        <div class="partner-logo col-xs-12 col-sm-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/asigra-logo-rev.png" class="">
        </div>
        <div class="partner-logo col-xs-12 col-sm-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/stor-server-logo-rev.png" class="">
        </div>
        <div class="partner-logo col-xs-12 col-sm-1 hp">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/hp-logo-pr-rev.png" class="">
        </div>
        <div class="partner-logo col-xs-12 col-sm-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/quantum_logo-rev.png" class="">
        </div>
      </div>  
</div><!--row-->




  <?php get_footer() ?>
