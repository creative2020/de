  <div id="footer">
    <div class="one">
      <h2>Solutions</h2>
      <ul>
        <?php wp_nav_menu(array('menu' => 'Solutions')); ?>
      </ul>
    </div>
    <div class="two">
      <h2>Twitter <a href="http://www.twitter.com/dataedge" target="_blank">@dataedge</a></h2>
      <p><?php  
        $username = "dataedge"; 
        $prefix = "";
        $suffix = "";
        $feed = "http://search.twitter.com/search.atom?q=from:" . $username . "&rpp=1";  
       
        function parse_feed($feed) {  
        $stepOne = explode("<content type=\"html\">", $feed);  
        $stepTwo = explode("</content>", $stepOne[1]);  
        $tweet = $stepTwo[0];  
        $tweet = str_replace("&lt;", "<", $tweet);  
        $tweet = str_replace("&gt;", ">", $tweet);  
        return $tweet;  
      }  
      
        $twitterFeed = file_get_contents($feed);  
        echo stripslashes($prefix) . parse_feed($twitterFeed) . stripslashes($suffix);  
      ?></p>
    </div>
    <div class="three">
      <h2>Contact us</h2>
      <p>Dataedge Solutions<br />
      Kansas City and Wichita</p>
      <p>888-682-6092 x203 - sales<br />
       913-780-2525 - main<br />
       877-328-2334 - support</p>
    </div>
    <!--<div class="login"><a href="#" title="Client Login"></a></div>-->
    <div class="support"><a href="../support" title="Support"></a></div>
    <div class="clear"></div>
  </div>
  <div id="copyright">
    <p><?php _e('&copy;','flexx'); echo ' '.date('Y').' '; _e(''.bloginfo('name'). ' - All rights reserved.','flexx'); ?> | <a href="http://www.dataedge.com/privacypolicy/" title="Privacy Policy">privacy policy</a> | <a href="http://www.dataedge.com/payments/" title="Payments">payments</a></p>
  </div>
  <div class="clear"></div>
</div>
<?php wp_footer(); ?>
</body>
</html>