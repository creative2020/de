<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<div class="row">
    <div class="col-sm-10 col-sm-offset-1 flush">
        <?php echo do_shortcode('[tt_hp_message]'); ?>
    </div>
</div> <!--row-->

<div class="row">
    <div class="col-sm-10 col-sm-offset-1 flush">
        

        
        
<!--TEST 2-->
        
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active"> <!-- item -->
      <a href="/solutions/cloud-backup/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/poster-slider-asigra.png" alt="...">
      <div class="carousel-caption">
          <h2>Cloud control</h2>
          <p>Where cloud backup and recovery </br>meet real people.</p>
    </div></a>
    </div> <!-- item end -->
    
    <div class="item"> <!-- item -->
      <a href="/data-audit/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/poster-slider-vdr.png" alt="...">
      <div class="carousel-caption">
          <h2>Is your data at risk?</h2>
          <p>94% of businesses that lose their data for more than 24 hrs never recover. 
We don’t believe it has to be that way.</p>
    </div></a>
    </div> <!-- item end -->
    
    <div class="item"> <!-- item -->
        <a href="/solutions/cloud-backup/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/poster-slider-rain.png" alt="...">
        <div class="carousel-caption">
              <h2>Rainy Day?</h2>
              <p>Certified backup solutions for </br>anyday needed.</p>
        </div></a>
    </div> <!-- item end -->

<div class="item"> <!-- item -->
        <a href="/looking-behind-curtain/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/poster-slider-award.png" alt="...">
        <div class="carousel-caption">
              <h2>Asigra awards Dataedge with</h2>
              <p>The Most Outstanding Private Cloud Backup and Recovery Implementation.</p>
            <a class="btn btn-lg btn-slider" href="/looking-behind-curtain/" >Read article</a>
        </div></a>
    </div> <!-- item end -->

<div class="item"> <!-- item -->
        <a href="/nimble-storage-reseller/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/poster-slider-nimble.png" alt="...">
        <div class="carousel-caption">
              <h2>Storage as versatile as...</h2>
              <p>,well... the name.</p>
            <a class="btn btn-lg btn-slider" href="/nimble-storage-reseller/" >Get Nimble</a>
        </div></a>
    </div> <!-- item end -->
<div class="item"> <!-- item -->
        <a href="/storserver-backup-appliance/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/poster-slider-storserver.png" alt="...">
        <div class="carousel-caption">
              <h2>Storage</h2>
              <p>For all data</p>
            <a class="btn btn-lg btn-slider" href="/storserver-backup-appliance/" >View options</a>
        </div></a>
    </div> <!-- item end -->
    
  </div> <!-- carousel inner wrap -->

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
<!--END-->
        
        
        
        
	</div>
</div> <!--row-->

<div class="row">
    <div id="quicklink-wrap" class="col-sm-10 col-sm-offset-1">
        <div class="row">
            
            <a href="/category/webinars/">
                
                <div class="quicklink events col-sm-4">
                    
                    <i class="now fa fa-calendar-o"></i><i class="go fa fa-external-link"></i>
                    <h2>Webinars + Events</h2>
                    <p class="bucket-text">
                        <?php echo do_shortcode('[tt_news cat_name="webinars" limit="2"]'); ?>
                    </p>
                </div>
            </a>
            <a href="/category/news/">
                <div class="quicklink news col-sm-4">
                    <i class="now fa fa-bullhorn"></i><i class="go fa fa-external-link"></i>
                    <h2>News</h2>
                    <p class="bucket-text">
                        <?php echo do_shortcode('[tt_news cat_name="news" limit="2"]'); ?>
                    </p>
                
                </div>
            </a>
            <a href="/solutions/cloud-backup/">
                <div class="quicklink last col-sm-4">
                    <i class="now fa fa-cloud"></i><i class="go fa fa-external-link"></i>
                    <h2>Cloud Backup</h2>
                    <p class="bucket-text">
                        <h3><a href="/solutions/enterprise-backup-appliance/">Enterprise Backup Appliance</a></br></h3>
                        <h3><a href="/backup-and-restore/">Backup and Restore</a></br></h3>
                        
                    </p>
                </div>
            </a>
    </div>
    </div>



</div>

<div class="row">
    <div id="home-text" class="col-sm-10 col-sm-offset-1">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>       
    </div>    
   
        
        
    </div><!--row-->

<div class="row">
    <div id="main" class="col-sm-6 col-sm-offset-1">
        <div id="content" class="row">
            <div class="col-sm-12">
                <?php echo do_shortcode('[tt_posts limit="6" cat_name="home"]'); ?>
            </div>    
        </div>
        </div>    
   
        <?php get_template_part( 'section', 'sidebar-1' ); ?>
        
    </div><!--row-->

<div class="row">
    <div id="partners" class="row col-sm-10 col-sm-offset-1">
        <div class="col-sm-12">
        <a href="/nimble-storage/"><div class="partner-logo col-xs-12 col-sm-3  col-sm-offset-0 nimble">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/Nimble-Storage-Logo-rev.png" class="img-responsive centered" style="margin-top:15px;">
        </div></a>    
        <a href="/asigra/"><div class="partner-logo col-xs-12 col-sm-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/asigra-logo-rev.png" class="img-responsive centered" style="margin-top:5px;">
        </div></a>
        <a href="/storserver-backup-appliance/"><div class="partner-logo col-xs-12 col-sm-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/stor-server-logo-rev.png" class="img-responsive centered">
        </div></a>
        <a href="/partners-2/"><div class="partner-logo col-xs-12 col-sm-1 hp">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/hp-logo-pr-rev.png" class="img-responsive centered">
        </div></a>
        <a href="/partners-2/"><div class="partner-logo col-xs-12 col-sm-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/commvault-logo-rev.png" class="img-responsive centered">
        </div>
        <a href="/partners-2/"><div class="partner-logo col-xs-12 col-sm-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/Simplivity_logo-rev-sm.png" class="img-responsive centered" style="margin-top:15px;">
        </div></a>
      </div> 
        </div>
</div><!--row-->




  <?php get_footer() ?>
