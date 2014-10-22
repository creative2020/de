  <div class="row">
      <div id="footer" class="col-sm-10 col-sm-offset-1">
        <div class="col-sm-4">
          <h2><i class="fa fa-paper-plane"></i> Solutions</h2>
              <ul>
                <?php wp_nav_menu(array('menu' => 'Solutions')); ?>
              </ul>
        </div>
    
            <div class="col-sm-4">
                <h2><a href="http://www.twitter.com/dataedge" target="_blank"><i class="fa fa-twitter"></i> Twitter @dataedge</a></h2>
                <h2><a href="https://www.facebook.com/pages/Dataedge/161795523849507" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></h2>
                <p><?php dynamic_sidebar( 'tt-footer-middle' );?></p>
                
                
            </div>
    
          <div class="col-sm-4">
              <h2><i class="fa fa-phone"></i> Contact us</h2>
              <p>Dataedge Solutions<br />
              Kansas City and Wichita</p>
              <p>888-682-6092 x203 - sales<br />
               913-780-2525 - main<br />
               877-328-2334 - support</p>
            
                <div class="login"><a href="#" title="Client Login"></a></div>
                <div class="support"><a href="../support" title="Support"></a></div>
          </div>
          
</div><!--footer-->

      
  <div id="copyright" class="col-sm-10 col-sm-offset-1">
    <p><?php _e('&copy;','flexx'); echo ' '.date('Y').' '; _e(''.bloginfo('name'). ' - All rights reserved.','flexx'); ?> | <a href="http://www.dataedge.com/privacypolicy/" title="Privacy Policy">privacy policy</a> | <a href="http://www.dataedge.com/payments/" title="Payments">payments</a></p>
  </div>
  
</div><!--row-->

<?php wp_footer(); ?>

</body>
</html>