<?php
/*
Template Name: Quick Quote Page
*/
?>
<?php get_header(); ?>
  <div id="main">
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '611,90' ); ?>
    <div id="header" style="background: url(<?php echo $src[0]; ?> ) top left no-repeat !important;">    
      <h1><?php the_title(); ?></h1>
    </div>
    <div id="sidebar">
      <?php include (TEMPLATEPATH . '/sidebar_widget.php'); ?>
    </div>
    <div id="content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      <?php endwhile; endif; ?>
      <div id="contact">
        <form action="http://freshaircreatives.com/forms/process.php" method="post">
          <input type="hidden" name="form_tools_form_id" value="2" />
          <h2>What data service are you interested in?</h2>
          <div id="service_interests">
          <p>
            <label>Which service are you interested in?</label>
            <div class="clear"></div>
            <table id="table1">
              <tr>
                <td><label>
                  <input type="checkbox" name="service_interest[]" value="Data Archiving" id="service_interest_0" tabindex="1" />
                  Data Archiving</label></td>
                  <td><label>
                  <input type="checkbox" name="service_interest[]" value="Data Backup" id="service_interest_1" tabindex="2" />
                  Data Backup</label></td>
                <td><label>
                  <input type="checkbox" name="service_interest[]" value="Cloud Backup" id="service_interest_2" tabindex="3" />
                  Cloud Backup</label></td>
                  <td><label>
                  <input type="checkbox" name="service_interest[]" value="Email Archiving" id="service_interest_3" tabindex="4" />
                  Email Archiving</label></td>
              </tr>
              <tr>
                <td><label>
                  <input type="checkbox" name="service_interest[]" value="SAN/NAS Solutions" id="service_interest_4" tabindex="5" />
                  SAN/NAS Solutions</label></td>
                  <td><label>
                  <input type="checkbox" name="service_interest[]" value="Equipment/Hardware" id="service_interest_5" tabindex="6" />
                  Equipment/Hardware</label></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </p>
          
          <h2>Tell us about your infrastructure</h2>
          <p>
            <label>What are the operating system(s)/applications of the machines you will be backing up? (check all that apply)</label>
            <table id="table">
              <tr>
                <td><label>
                  <input type="checkbox" name="operating_systems[]" value="Windows" id="operating_systems_0" tabindex="7" />
                  Windows</label></td>
                <td><label>
                  <input type="checkbox" name="operating_systems[]" value="Exchange" id="operating_systems_4" tabindex="8" />
                  Exchange</label></td>
                <td><label>
                  <input type="checkbox" name="operating_systems[]" value="SQL" id="operating_systems_8" tabindex="9" />
                  SQL</label></td>
                <td><label>
                  <input type="checkbox" name="operating_systems[]" value="Sharepoint" id="operating_systems_12" tabindex="10" />
                  Sharepoint</label></td>
              </tr>
              <tr>
                <td><label>
                  <input type="checkbox" name="operating_systems[]" value="ESX" id="operating_systems_1" tabindex="11" />
                  ESX</label></td>
                <td><label>
                  <input type="checkbox" name="operating_systems[]" value="HPUX" id="operating_systems_5" tabindex="12" />
                  HPUX</label></td>
                <td><label>
                  <input type="checkbox" name="operating_systems[]" value="Linux" id="operating_systems_9" tabindex="13" />
                  Linux</label></td>
                <td><label>
                  <input type="checkbox" name="operating_systems[]" value="Novell" id="operating_systems_13" tabindex="14" />
                  Novell</label></td>
              </tr>
              <tr>
                <td><label>
                  <input type="checkbox" name="operating_systems[]" value="AIX" id="operating_systems_2" tabindex="15" />
                  AIX</label></td>
                <td><label>
                  <input type="checkbox" name="operating_systems[]" value="AS400" id="operating_systems_6" tabindex="16" />
                  AS400</label></td>
                <td><label>
                  <input type="checkbox" name="operating_systems[]" value="Oracle" id="operating_systems_10" tabindex="17" />
                  Oracle</label></td>
                <td><label>
                  <input type="checkbox" name="operating_systems[]" value="Mac" id="operating_systems_14" tabindex="18" />
                  Mac</label></td>
              </tr>
              <tr>
                <td><label>
                  <input type="checkbox" name="operating_systems[]" value="HyperV" id="operating_systems_3" tabindex="19" />
                  HyperV</label></td>
                <td><label>
                  <input type="checkbox" name="operating_systems[]" value="VMware" id="operating_systems_7" tabindex="20" />
                  VMware</label></td>
                <td><label>
                  <input type="checkbox" name="operating_systems[]" value="Other" id="operating_systems_11" tabindex="21" />
                  Other</label></td>
              </tr>
              <td>&nbsp;</td>
            </table>
            </p>
            <p>
              <label>How much data are you backing up?</label>
              <input id="data" class="input" name="data" type="text" tabindex="22" /><span class="small">(example: 550 GB)</span>
            </p>
            <p>
              <label>How many server(s) will your company be backing up?</label>
              <input id="servers" class="input" name="servers" type="text" tabindex="23" />
            </p>
            <p>
              <label>How many email users do you have?</label>
              <input id="email_users" class="input" name="email_users" type="text" tabindex="24" />
            </p>
            <p>
              <label>WAN/Speed connection</label>
              <input id="wan_speed" class="input" name="wan_speed" type="text" tabindex="25" /><span class="small">(example: 2 Mbps)</span>
            </p>
          </div>
          <div class="clear"></div>
          
          <h2>Tell us about your company</h2>
          <div id="bottom">
            <p>
              <label>Company Name:</label>
              <input id="company" class="input" name="company" type="text" tabindex="26" />
            </p>
            <p class="drop">
              <span style="float:left; width:auto;">&nbsp;How many locations?&nbsp;</span>
              <span style="float:left; width:auto;"><select name="locations" class="input_list" tabindex="27" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10+">10+</option>
              </select></span>
            </p>
            <p>
              <label>When are you going to need the service?</label>
              <table id="table2">
                <tr>
                  <td><label>
                    <input type="checkbox" name="need_service" value="Gathering info." id="need_service_0" tabindex="28" />
                    Gathering info.</label></td>
                  <td><label>
                    <input type="checkbox" name="need_service" value="Today, ASAP!" id="need_service_1" tabindex="29" />
                    Today, ASAP!</label></td>
                  <td><label>
                    <input type="checkbox" name="need_service" value="Next 3 months" id="need_service_2" tabindex="30" />
                    Next 3 months</label></td>
                </tr>
              </table>
            </p>
         
          </div>
          <div class="clear"></div>
          
          <h2>Contact Information</h2>
          <div class="left">
            <p>
              <label>First Name:</label>
              <input id="first_name" class="input" name="first_name" type="text" tabindex="31" />
            </p>
            <p>
              <label>Phone:</label>
              <input id="phone" class="input" name="phone" type="text" tabindex="32" />
            </p>
            <p>
              <label>Address 1:</label>
              <input id="address" class="input" name="address" type="text" tabindex="33" />
            </p>
            <p>
              <label>City:</label>
              <input id="city" class="input" name="city" type="text" tabindex="34" />
            </p>
          </div>
          
          <div class="right">
            <p>
              <label>Last Name:</label>
              <input id="last_name" class="input" name="last_name" type="text" tabindex="35" />
            </p>
            <p>
              <label>Email:</label>
              <input id="email" class="input" name="email" type="text" tabindex="36" />
            </p>
            <p>
              <label>Address 2:</label>
              <input id="address2" class="input" name="address2" type="text" tabindex="37" />
            </p>
            <p>
              <label>State / Zip:</label>
              <select name="state" size="1" class="input_state" tabindex="38" >
                <option selected value="">Select State</option>
                <option value="Alabama">Alabama</option>
                <option value="Alaska">Alaska</option>
                <option value="Arizona">Arizona</option>
                <option value="Arkansas">Arkansas</option>
                <option value="California">California</option>
                <option value="Colorado">Colorado</option>
                <option value="Connecticut">Connecticut</option>
                <option value="Delaware">Delaware</option>
                <option value="Florida">Florida</option>
                <option value="Georgia">Georgia</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Idaho">Idaho</option>
                <option value="Illinois">Illinois</option>
                <option value="Indiana">Indiana</option>
                <option value="Iowa">Iowa</option>
                <option value="Kansas">Kansas</option>
                <option value="Kentucky">Kentucky</option>
                <option value="Louisiana">Louisiana</option>
                <option value="Maine">Maine</option>
                <option value="Maryland">Maryland</option>
                <option value="Massachusetts">Massachusetts</option>
                <option value="Michigan">Michigan</option>
                <option value="Minnesota">Minnesota</option>
                <option value="Mississippi">Mississippi</option>
                <option value="Missouri">Missouri</option>
                <option value="Montana">Montana</option>
                <option value="Nebraska">Nebraska</option>
                <option value="Nevada">Nevada</option>
                <option value="New Hampshire">New Hampshire</option>
                <option value="New Jersey">New Jersey</option>
                <option value="New Mexico">New Mexico</option>
                <option value="New York">New York</option>
                <option value="North Carolina">North Carolina</option>
                <option value="North Dakota">North Dakota</option>
                <option value="Ohio">Ohio</option>
                <option value="Oklahoma">Oklahoma</option>
                <option value="Oregon">Oregon</option>
                <option value="Pennsylvania">Pennsylvania</option>
                <option value="Rhode Island">Rhode Island</option>
                <option value="South Carolina">South Carolina</option>
                <option value="South Dakota">South Dakota</option>
                <option value="Tennessee">Tennessee</option>
                <option value="Texas">Texas</option>
                <option value="Utah">Utah</option>
                <option value="Vermont">Vermont</option>
                <option value="Virginia">Virginia</option>
                <option value="Washington">Washington</option>
                <option value="West Virginia">West Virginia</option>
                <option value="Wisconsin">Wisconsin</option>
                <option value="Wyoming">Wyoming</option>
              </select>
              <input id="zip" class="input_zip" name="zip" type="text" value="" placeholder="Zip" tabindex="39" />
            </p>
          </div>
          <div class="clear"></div>
          
          <h2>Additional Information</h2>
          <div id="bottom">
          <p>
            <label>Website Address:</label>
            <input id="website_address" class="input" name="website_address" type="text" tabindex="40" />
          </p>
          <p>
            <label>How did you learn about Dataedge?</label>
            <input id="hear_about" class="input" name="hear_about" type="text" tabindex="41" />
          </p>
            <p>
              <label>Additional information</label>
              <textarea name="additional_information" cols="60" rows="8" class="input_message" tabindex="42"></textarea>
            </p>
            <p>
              <label><input name="newsletter" type="checkbox" value="newsletter" tabindex="43" />Email Newsletter?</label>
            </p>
            <p>
              <label>&nbsp;</label>
              <input class="submit_btn" name="submit" type="submit" value="Submit" tabindex="44" />
            </p>
          </div>
          <div class="clear"></div>
        </form>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <?php get_footer() ?>