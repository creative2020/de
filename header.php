<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title>
<?php wp_title(); ?>
</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<!-- Converg Analytics Script -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-42524425-1', 'dataedge.com');
  ga('send', 'pageview');
</script><img src="http://converg.com/clients/dashboard/track.php?idsite=17&amp;rec=1" style="border:0" alt="" />
<!-- Other Google Analytics Script -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21100653-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<?php wp_head(); ?>
<?php if (is_page('weekly-wednesday-webinar')); { ?>
<!--Validation-->
<script type="text/javascript" src="http://www.freshaircreatives.com/data/global/scripts/rsv.js"></script>
<script type="text/javascript">
  var rules = [];
  rules.push("required,webinar,Please enter the webinar you'd like to sign up for.");
  rules.push("required,webinar,Please enter the date you'd like to sign up for.");
  rules.push("required,first_name,Please enter your first name.");
  rules.push("required,last_name,Please enter your last name.");
  rules.push("required,email,Please enter your email address.");
  rules.push("valid_email,email,Please enter a valid email address.");
  rsv.errorFieldClass = null;
  rsv.displayType = "alert-all";
  rsv.customErrorHandler = null;
</script>
<?php } ?>
</head>
<body>
<div id="container">

  <div id="top">

    <div class="logo"><a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>"></a></div>

    <div id="social">
 <div class="google"><a href="https://plus.google.com/106849917956925834579/about" title="google +" target="_blank"></a></div>
      <div class="facebook"><a href="http://www.facebook.com/pages/Dataedge/161795523849507" title="Facebook" target="_blank"></a></div>
      <div class="in"><a href="http://www.linkedin.com/in/robdidlake" title="Linked In" target="_blank"></a></div>
      <div class="twitter"><a href="http://twitter.com/#!/dataedge" title="Twitter" target="_blank"></a></div>
    </div>
    <div class="phone">913-780-2525</div>

  </div>
  <div id="nav">
    <div class="home"><a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>"></a></div>
    <?php wp_nav_menu(array('menu' => 'Main Navigation')); ?>
  </div>