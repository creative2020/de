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
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/poster-slider-asigra.png" alt="...">
      <div class="carousel-caption">
          <h2>Cloud control</h2>
          <p>Where cloud backup and recovery </br>meet real people.</p>
    </div>
    </div>
    <div class="item">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/poster-slider-vdr.png" alt="...">
      <div class="carousel-caption">
          <h2>Is your data at risk?</h2>
          <p>94% of businesses that lose their data for more than 24 hrs never recover. 
We don’t believe it has to be that way.</p>
    </div>
    </div>
      <div class="item">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/poster-slider-rain.png" alt="...">
    <div class="carousel-caption">
          <h2>Rainy Day?</h2>
          <p>Certified backup solutions for </br>anyday needed.</p>
    </div>
    </div>
    
  </div>

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
            <a href="#">
                <div class="quicklink last col-sm-4">
                    <i class="now fa fa-cloud"></i><i class="go fa fa-external-link"></i>
                    <h2>Business Cloud Backup</h2>
                    <p class="bucket-text">
                        <h3><a href="/remote-backup/">Cloud Server</a></br></h3>
                        <h3><a href="/solutions/cloud-backup/">Cloud Backup & Recovery</a></br></h3>
                        
                    </p>
                </div>
            </a>
    </div>
    </div>



</div>

<div class="row">
    <div id="home-text" class="col-sm-10 col-sm-offset-1">
        
            <?php //echo 'main-text'; ?>
        
        <p>Your data is one of your business’s most critical assets. That’s why at Dataedge, we make consistent, reliable data protection and immediate data access our number one priority. Using our <a href="/backup-and-restore/">cloud backup</a> and <a href="/solutions/cloud-backup/">recovery solutions</a>, you can feel confident knowing you have a team of support specialists available to guide you through the implementation process and ensure your business is prepared for anything. With the right cloud server solution in place, we can provide remote backup at any time should you need it for the peace of mind you deserve.</p>
        <p>Dataedge has built our business around data protections solutions.  We design, implement and support many different storage and backup solutions.   NO one solution is perfect for everyone.   We invest the time to understand what you want to accomplish, design it, quote it, implementing it and support you over time.</p>
       
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
        <a href="/partners-2/"><div class="partner-logo col-xs-12 col-sm-3  col-sm-offset-0 nimble">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/Nimble-Storage-Logo-rev.png" class="img-responsive centered" style="margin-top:15px;">
        </div></a>    
        <a href="/partners-2/"><div class="partner-logo col-xs-12 col-sm-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partners/asigra-logo-rev.png" class="img-responsive centered" style="margin-top:5px;">
        </div></a>
        <a href="/partners-2/"><div class="partner-logo col-xs-12 col-sm-2">
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
