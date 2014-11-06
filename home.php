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
        
        <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/poster-slider-rain.png"/>
<!--        <div id="Stage" class="de-slider">-->
	</div>
</div> <!--row-->

<div class="row">
    <div id="quicklink-wrap" class="col-sm-10 col-sm-offset-1">
        <div class="row">
            
            <a href="#">
                
                <div class="quicklink events col-sm-4">
                    
                    <i class="now fa fa-calendar-o"></i><i class="go fa fa-external-link"></i>
                    <h2>Webinars + Events</h2>
                    <?php echo do_shortcode('[tt_news cat_name="webinars" limit="2"]'); ?>

                </div>
            </a>
            <a href="#">
                <div class="quicklink news col-sm-4">
                    <i class="now fa fa-bullhorn"></i><i class="go fa fa-external-link"></i>
                    <h2>News</h2>
                    <p class="bucket-text">
                        <?php echo do_shortcode('[tt_news cat_name="news" limit="2"]'); ?>
                    </p>
                
                </div>
            </a>
            <a href="#">
                <div class="quicklink last col-sm-4">
                    <i class="now fa fa-cloud"></i><i class="go fa fa-external-link"></i>
                    <h2>Business Cloud Backup</h2>
                    <p class="bucket-text">
                        <h3><a href="#">Cloud Server</a></br></h3>
                        <h3><a href="#">Cloud Backup & Recovery</a></br></h3>
                        
                    </p>
                </div>
            </a>
    </div>
    </div>



</div>

<div class="row">
    <div id="home-text" class="col-sm-10 col-sm-offset-1">
        
            <?php //echo 'main-text'; ?>
        
        <p>At <strong>Dataedge</strong> we <em>Solve</em> data problems and <em>Protect</em> your business so you can focus on your business. Having this peace of mind that your data will always be available is NUMBER ONE! We specialize in <a href="/solutions/cloud-backup"><strong>Cloud Backup</strong></a> and <a href="/solutions/"><strong>Recovery</strong></a> solutions to keep your business up and running. There a lot of options in the <a href="#"><strong>Cloud Server</a> marketplace</strong>. Dataedge has the experience to help guide you through the benefits of <a href="/solutions/cloud-backup">Could Servers</a> and the knowledge to implement. We will make sure your new business server will meet your specific <a href="/solutions">Cloud solution</a> goals.</p>
       
        </div>    
   
        
        
    </div><!--row-->

<div class="row">
    <div id="main" class="col-sm-6 col-sm-offset-1">
        <div id="content" class="row col-sm-12">
            <?php echo do_shortcode('[tt_posts limit="3" cat_name="home"]'); ?>
        </div>
        </div>    
   
        <?php get_template_part( 'section', 'sidebar-1' ); ?>
        
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
