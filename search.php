<?php get_header(); ?>
  <div id="content">
    <div id="header"></div>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
	<div id="post">
      <div class="date"><?php the_time('d'); ?> <span><?php the_time('M'); ?></span></div>
      <div class="heading">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p>
          Posted in <?php the_category(', '); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a href="<?php the_permalink(); ?>#comments"><?php comments_number('No Comments','1 Comment','% Comments'); ?></a>
        </p>
      </div>
      <div class="clear"></div>
      <div class="content">
        <?php the_content('Read More...'); ?>
      </div>
    </div>  
    <div class="line"></div>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); } ?>
  </div>
  <div id="qsearch">
    <h2>Quick Home Search</h2>
    <form action="http://beta6.freshaircreatives.com/idx/" method="get" onsubmit="return dsidx_w.searchWidget.validate();" >
      <table>
        <tr>
          <td colspan="2"><select name="idx-q-PropertyTypes" class="dsidx-search-widget-propertyTypes">
            <option value="">- All property types -</option>
            <option value="322">Commercial</option>
            <option value="323">Land</option>
            <option value="324">Multi Dwelling</option>
            <option value="325">Residential</option>
            <option value="951">Residential / Condo</option>
            <option value="952">Residential / Single Fmly</option>
            <option value="953">Residential / Townhome</option>
          </select>
            <label id="idx-search-invalid-msg" style="color:red"></label></td>
        </tr>
        <tr>
          <th width="48%"><label for="idx-q-Cities2">City</label></th>
          <td width="52%"><select id="idx-q-Cities2" name="idx-q-Cities" class="idx-q-Location-Filter">
            <option value="">- Any -</option>
            <option value="Adrian">Adrian</option>
            <option value="Agency ">Agency </option>
            <option value="Albany">Albany</option>
            <option value="Alma ">Alma </option>
            <option value="Altamont ">Altamont </option>
            <option value="Amazonia ">Amazonia </option>
            <option value="Amity">Amity </option>
            <option value="Amoret">Amoret</option>
            <option value="Amsterdam">Amsterdam</option>
            <option value="Appleton City">Appleton City </option>
            <option value="Archie">Archie</option>
            <option value="Atchison">Atchison</option>
            <option value="Aullville">Aullville </option>
            <option value="Avondale">Avondale</option>
            <option value="Baldwin City">Baldwin City </option>
            <option value="Basehor">Basehor</option>
            <option value="Bates City">Bates City</option>
            <option value="Beagle">Beagle</option>
            <option value="Belton">Belton</option>
            <option value="Berryton ">Berryton </option>
            <option value="Bethany">Bethany</option>
            <option value="Blackburn">Blackburn </option>
            <option value="Blairstown">Blairstown </option>
            <option value="Blue Mound">Blue Mound</option>
            <option value="Blue Springs">Blue Springs</option>
            <option value="Blythedale">Blythedale </option>
            <option value="Bonner Springs">Bonner Springs</option>
            <option value="Branson">Branson </option>
            <option value="Branson West">Branson West</option>
            <option value="Braymer">Braymer</option>
            <option value="Breckenridge">Breckenridge </option>
            <option value="Bronson">Bronson</option>
            <option value="Brookfield">Brookfield </option>
            <option value="Browning ">Browning </option>
            <option value="Brunswick">Brunswick </option>
            <option value="Bucklin">Bucklin </option>
            <option value="Buckner">Buckner</option>
            <option value="Bucyrus">Bucyrus</option>
            <option value="Burlingame">Burlingame </option>
            <option value="Burlington">Burlington</option>
            <option value="Burlington Jct    ">Burlington Jct </option>
            <option value="Butler">Butler</option>
            <option value="Cainsville">Cainsville</option>
            <option value="Calhoun">Calhoun </option>
            <option value="Camden">Camden</option>
            <option value="Camden Point">Camden Point</option>
            <option value="Camdenton">Camdenton </option>
            <option value="Cameron">Cameron</option>
            <option value="Carrollton">Carrollton</option>
            <option value="Cedar Vale">Cedar Vale </option>
            <option value="Centerview">Centerview</option>
            <option value="Centerville">Centerville</option>
            <option value="Centropolis">Centropolis</option>
            <option value="Chanute">Chanute</option>
            <option value="Chilhowee">Chilhowee </option>
            <option value="Chillicothe ">Chillicothe </option>
            <option value="Chula">Chula </option>
            <option value="Circleville">Circleville</option>
            <option value="Clarksdale">Clarksdale </option>
            <option value="Claycomo">Claycomo</option>
            <option value="Cleveland">Cleveland</option>
            <option value="Clinton">Clinton</option>
            <option value="Clyde">Clyde </option>
            <option value="Cole Camp">Cole Camp </option>
            <option value="Colony">Colony</option>
            <option value="Columbus ">Columbus </option>
            <option value="Concordia">Concordia</option>
            <option value="Corder ">Corder </option>
            <option value="Cosby">Cosby </option>
            <option value="Country Club">Country Club</option>
            <option value="County/Other">County/Other</option>
            <option value="Cowgill">Cowgill</option>
            <option value="Creighton">Creighton</option>
            <option value="Cummings ">Cummings </option>
            <option value="De Kalb">De Kalb </option>
            <option value="Dearborn">Dearborn</option>
            <option value="Deepwater">Deepwater</option>
            <option value="Dekalb ">Dekalb </option>
            <option value="Desoto">Desoto</option>
            <option value="Dover">Dover </option>
            <option value="Drexel">Drexel</option>
            <option value="Eagleville">Eagleville </option>
            <option value="East Lynne">East Lynne </option>
            <option value="Easton">Easton</option>
            <option value="Edgerton">Edgerton</option>
            <option value="Edwards">Edwards </option>
            <option value="Edwardsville">Edwardsville</option>
            <option value="Effingham">Effingham </option>
            <option value="Elmira ">Elmira </option>
            <option value="Elwood ">Elwood </option>
            <option value="Emma ">Emma </option>
            <option value="Emporia">Emporia </option>
            <option value="Eskridge ">Eskridge </option>
            <option value="Eudora">Eudora</option>
            <option value="Everest">Everest </option>
            <option value="Excelsior Estates">Excelsior Estates</option>
            <option value="Excelsior Springs">Excelsior Springs</option>
            <option value="Fairport ">Fairport </option>
            <option value="Fairway">Fairway</option>
            <option value="Farley">Farley</option>
            <option value="Faucett">Faucett</option>
            <option value="Ferrelview">Ferrelview</option>
            <option value="Fontana">Fontana</option>
            <option value="Fort Scott">Fort Scott</option>
            <option value="Freeman">Freeman</option>
            <option value="Fulton">Fulton</option>
            <option value="Gallatin">Gallatin</option>
            <option value="Garden City">Garden City</option>
            <option value="Gardner">Gardner</option>
            <option value="Garnett">Garnett</option>
            <option value="Gentry ">Gentry </option>
            <option value="Gilman City ">Gilman City </option>
            <option value="Gladstone">Gladstone</option>
            <option value="Glenaire">Glenaire</option>
            <option value="Gower">Gower</option>
            <option value="Grain Valley">Grain Valley</option>
            <option value="Grandview">Grandview</option>
            <option value="Grant City">Grant City </option>
            <option value="Gravois Mills">Gravois Mills </option>
            <option value="Greeley">Greeley</option>
            <option value="Green City">Green City </option>
            <option value="Greenwood">Greenwood</option>
            <option value="Hamilton">Hamilton</option>
            <option value="Hardin">Hardin</option>
            <option value="Harris ">Harris </option>
            <option value="Harrisonville">Harrisonville</option>
            <option value="Hartford ">Hartford </option>
            <option value="Hatfield ">Hatfield </option>
            <option value="Helena ">Helena </option>
            <option value="Henrietta">Henrietta</option>
            <option value="Higginsville">Higginsville</option>
            <option value="Hillsdale">Hillsdale</option>
            <option value="Holden">Holden</option>
            <option value="Holt">Holt</option>
            <option value="Holton ">Holton </option>
            <option value="Horton ">Horton </option>
            <option value="Houston Lake">Houston Lake</option>
            <option value="Humboldt ">Humboldt </option>
            <option value="Hume">Hume</option>
            <option value="Huron">Huron </option>
            <option value="Independence">Independence</option>
            <option value="Iola ">Iola </option>
            <option value="Ionia">Ionia </option>
            <option value="Jameson">Jameson </option>
            <option value="Jamesport">Jamesport</option>
            <option value="Jarbalo">Jarbalo</option>
            <option value="Jefferson City    ">Jefferson City </option>
            <option value="Junction City">Junction City </option>
            <option value="Kansas City">Kansas City</option>
            <option value="Kearney">Kearney</option>
            <option value="Keytesville ">Keytesville </option>
            <option value="Kidder">Kidder</option>
            <option value="Kincaid">Kincaid</option>
            <option value="King City">King City </option>
            <option value="Kingston">Kingston</option>
            <option value="Kingsville">Kingsville</option>
            <option value="Knob Noster ">Knob Noster </option>
            <option value="Lacygne">Lacygne</option>
            <option value="Lafayette">Lafayette </option>
            <option value="Lake Lafayette    ">Lake Lafayette </option>
            <option value="Lake Lotawana">Lake Lotawana</option>
            <option value="Lake Quivira">Lake Quivira</option>
            <option value="Lake Tapawingo">Lake Tapawingo</option>
            <option value="Lake Waukomis">Lake Waukomis</option>
            <option value="Lake Winnebago">Lake Winnebago</option>
            <option value="Lakeview Heights  ">Lakeview Heights </option>
            <option value="Lamar">Lamar </option>
            <option value="Lancaster">Lancaster </option>
            <option value="Lane">Lane</option>
            <option value="Lansing">Lansing</option>
            <option value="Lathrop">Lathrop</option>
            <option value="Latour">Latour</option>
            <option value="Laurie ">Laurie </option>
            <option value="Lawrence">Lawrence</option>
            <option value="Lawson">Lawson</option>
            <option value="Leavenworth">Leavenworth</option>
            <option value="Leawood">Leawood</option>
            <option value="Lebo ">Lebo </option>
            <option value="Lecompton">Lecompton</option>
            <option value="Lee's Summit">Lee's Summit</option>
            <option value="Leeton">Leeton</option>
            <option value="Lenexa">Lenexa</option>
            <option value="Levasy">Levasy</option>
            <option value="Lexington">Lexington</option>
            <option value="Liberty">Liberty</option>
            <option value="Linn Valley ">Linn Valley </option>
            <option value="Linwood">Linwood</option>
            <option value="Loch Lloyd">Loch Lloyd </option>
            <option value="Lone Jack">Lone Jack</option>
            <option value="Louisburg">Louisburg</option>
            <option value="Lowry City">Lowry City </option>
            <option value="Ludlow ">Ludlow </option>
            <option value="Lyndon">Lyndon</option>
            <option value="Madison">Madison </option>
            <option value="Malta Bend">Malta Bend </option>
            <option value="Manhattan">Manhattan</option>
            <option value="Maple Hill">Maple Hill </option>
            <option value="Mapleton">Mapleton</option>
            <option value="Marceline">Marceline </option>
            <option value="Marshall ">Marshall </option>
            <option value="Maryville">Maryville </option>
            <option value="Mayetta">Mayetta </option>
            <option value="Maysville">Maysville</option>
            <option value="Mayview">Mayview</option>
            <option value="McFall ">McFall </option>
            <option value="McLouth">McLouth</option>
            <option value="Meadville">Meadville </option>
            <option value="Melbourne">Melbourne </option>
            <option value="Melvern">Melvern</option>
            <option value="Mercer ">Mercer </option>
            <option value="Meriden">Meriden </option>
            <option value="Merriam">Merriam</option>
            <option value="Milan">Milan </option>
            <option value="Mission">Mission</option>
            <option value="Mission Hills">Mission Hills</option>
            <option value="Mission Woods">Mission Woods</option>
            <option value="Missouri City">Missouri City</option>
            <option value="Montrose ">Montrose </option>
            <option value="Moran">Moran </option>
            <option value="Mosby">Mosby</option>
            <option value="Mound City">Mound City</option>
            <option value="Mount Moriah">Mount Moriah </option>
            <option value="Mulberry">Mulberry</option>
            <option value="Napoleon">Napoleon</option>
            <option value="Nevada">Nevada</option>
            <option value="New Hampton ">New Hampton </option>
            <option value="Newtown">Newtown </option>
            <option value="None/County">None/County</option>
            <option value="Norborne ">Norborne </option>
            <option value="North Kansas City">North Kansas City</option>
            <option value="Northmoor">Northmoor</option>
            <option value="Nortonville ">Nortonville </option>
            <option value="Oak Grove">Oak Grove</option>
            <option value="Oakview">Oakview</option>
            <option value="Oakwood">Oakwood</option>
            <option value="Oakwood Park">Oakwood Park</option>
            <option value="Odessa">Odessa</option>
            <option value="Olathe">Olathe</option>
            <option value="Olean">Olean </option>
            <option value="oregon ">oregon </option>
            <option value="Orrick">Orrick</option>
            <option value="Osage City">Osage City </option>
            <option value="Osawatomie">Osawatomie</option>
            <option value="Osborn">Osborn</option>
            <option value="Osceola">Osceola </option>
            <option value="Oskaloosa">Oskaloosa</option>
            <option value="Other">Other</option>
            <option value="Ottawa">Ottawa</option>
            <option value="Overbrook">Overbrook</option>
            <option value="Overland Park">Overland Park</option>
            <option value="Ozawkie">Ozawkie</option>
            <option value="Paola">Paola</option>
            <option value="Parker">Parker</option>
            <option value="Parkville">Parkville</option>
            <option value="Passic ">Passic </option>
            <option value="Pattonsburg">Pattonsburg</option>
            <option value="Peculiar">Peculiar</option>
            <option value="Perrin ">Perrin </option>
            <option value="Perry">Perry</option>
            <option value="Piper">Piper </option>
            <option value="Pittsburg">Pittsburg </option>
            <option value="Platte City">Platte City</option>
            <option value="Platte Woods">Platte Woods</option>
            <option value="Plattsburg">Plattsburg</option>
            <option value="Pleasant Hill">Pleasant Hill</option>
            <option value="Pleasant Valley">Pleasant Valley</option>
            <option value="Pleasanton">Pleasanton</option>
            <option value="Polo">Polo</option>
            <option value="Pomona">Pomona</option>
            <option value="Prairie Village">Prairie Village</option>
            <option value="Prathersville">Prathersville </option>
            <option value="Prescott">Prescott</option>
            <option value="Preston">Preston </option>
            <option value="Princeton">Princeton</option>
            <option value="Quenemo">Quenemo</option>
            <option value="Randolph">Randolph</option>
            <option value="Rantoul">Rantoul</option>
            <option value="Raymore">Raymore</option>
            <option value="Raytown">Raytown</option>
            <option value="Rayville">Rayville</option>
            <option value="Reading">Reading </option>
            <option value="Redfield">Redfield</option>
            <option value="Rich Hill">Rich Hill</option>
            <option value="Richmond">Richmond</option>
            <option value="Ridgeway ">Ridgeway </option>
            <option value="Riverside">Riverside</option>
            <option value="Rockport ">Rockport </option>
            <option value="Roeland Park">Roeland Park</option>
            <option value="Rosendale">Rosendale </option>
            <option value="Rushville">Rushville</option>
            <option value="Sabetha">Sabetha </option>
            <option value="Salisbury">Salisbury </option>
            <option value="Santa Rosa">Santa Rosa </option>
            <option value="Savannah ">Savannah </option>
            <option value="Scranton ">Scranton </option>
            <option value="Sedalia">Sedalia </option>
            <option value="Shawnee">Shawnee</option>
            <option value="Shawnee Mission">Shawnee Mission</option>
            <option value="Sibley">Sibley</option>
            <option value="Skidmore ">Skidmore </option>
            <option value="Smithton ">Smithton </option>
            <option value="Smithville">Smithville</option>
            <option value="Spickard ">Spickard </option>
            <option value="Spring Hill">Spring Hill</option>
            <option value="St Joseph">St Joseph</option>
            <option value="St. Joseph">St. Joseph </option>
            <option value="Stanberry">Stanberry </option>
            <option value="Stanley">Stanley</option>
            <option value="Stewartsville">Stewartsville</option>
            <option value="Stilwell">Stilwell</option>
            <option value="Stover ">Stover </option>
            <option value="Strasburg">Strasburg</option>
            <option value="Sugar Creek">Sugar Creek</option>
            <option value="Sunrise Beach">Sunrise Beach </option>
            <option value="Sweet Springs">Sweet Springs</option>
            <option value="Tecumseh ">Tecumseh </option>
            <option value="Tightwad ">Tightwad </option>
            <option value="Tina ">Tina </option>
            <option value="Tonganoxie">Tonganoxie</option>
            <option value="Topeka ">Topeka </option>
            <option value="Tracy">Tracy</option>
            <option value="Trenton">Trenton </option>
            <option value="Trimble">Trimble</option>
            <option value="Troy ">Troy </option>
            <option value="Tunas">Tunas</option>
            <option value="Turney">Turney</option>
            <option value="Union Star">Union Star </option>
            <option value="Urich">Urich</option>
            <option value="Valley Falls">Valley Falls </option>
            <option value="Vassar">Vassar</option>
            <option value="Versailes">Versailes </option>
            <option value="Village Of Oaks">Village Of Oaks</option>
            <option value="Warrensburg">Warrensburg</option>
            <option value="Warsaw">Warsaw</option>
            <option value="Wathena">Wathena </option>
            <option value="Waverly">Waverly</option>
            <option value="Weatherby">Weatherby </option>
            <option value="Weatherby Lake">Weatherby Lake</option>
            <option value="Welda">Welda </option>
            <option value="Wellington">Wellington</option>
            <option value="Wellsville">Wellsville</option>
            <option value="Weston">Weston</option>
            <option value="Westphalia">Westphalia</option>
            <option value="Westwood">Westwood</option>
            <option value="Westwood Hills">Westwood Hills</option>
            <option value="Wheatland">Wheatland</option>
            <option value="Wheeling ">Wheeling </option>
            <option value="Williamsburg">Williamsburg</option>
            <option value="Winchester">Winchester</option>
            <option value="Windsor">Windsor </option>
            <option value="Winston">Winston</option>
            <option value="Wood Heights">Wood Heights</option>
            <option value="Worland">Worland</option>
            <option value="Worth">Worth</option>
            <option value="Xenia">Xenia</option>
            <option value="Yates Center">Yates Center</option>
          </select></td>
        </tr>
        <tr>
          <th><label for="idx-q-Communities">Community</label></th>
          <td><select id="idx-q-Communities" name="idx-q-Communities" class="idx-q-Location-Filter">
            <option value="">- Any -</option>
            <option value=""></option>
          </select></td>
        </tr>
        <tr>
          <th><label for="idx-q-ZipCodes">Zip</label></th>
          <td><select id="idx-q-ZipCodes" name="idx-q-ZipCodes" class="idx-q-Location-Filter">
            <option value="">- Any -</option>
            <option value=""></option>
          </select></td>
        </tr>
        <tr>
          <th><label for="idx-q-MlsNumbers">MLS #</label></th>
          <td><input id="idx-q-MlsNumbers" name="idx-q-MlsNumbers" type="text" class="dsidx-mlsnumber" /></td>
        </tr>
        <tr>
          <th><label for="idx-q-PriceMin">Min price</label></th>
          <td><input id="idx-q-PriceMin" name="idx-q-PriceMin" type="text" class="dsidx-price" /></td>
        </tr>
        <tr>
          <th><label for="idx-q-PriceMax">Max price</label></th>
          <td><input id="idx-q-PriceMax" name="idx-q-PriceMax" type="text" class="dsidx-price" /></td>
        </tr>
        <tr>
          <th><label for="idx-q-BedsMin">Beds</label></th>
          <td><input id="idx-q-BedsMin" name="idx-q-BedsMin" type="text" class="dsidx-beds" /></td>
        </tr>
        <tr>
          <th><label for="idx-q-BathsMin">Baths</label></th>
          <td><input id="idx-q-BathsMin" name="idx-q-BathsMin" type="text" class="dsidx-baths" /></td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td><input type="submit" value="Search" class="submit_btn" /></td>
        </tr>
      </table>
    </form>
    <p>By searching, you agree to the <a href="http://assets.diversesolutions.com/images/beast/MLS-TOS/HeartlandMLS.pdf" target="_blank">EULA</a></p>
  </div>
  <div class="clear"></div>
  <?php get_footer() ?>


<?php get_header(); ?>
<div id="wrap">
  <div id="container">
    <div id="main">
      <div id="content">
    <?php if (have_posts()) : ?>
	
      <?php while (have_posts()) : the_post(); ?>
	  <div id="post">
        <div class="date"><?php the_time('d'); ?> <span><?php the_time('M'); ?></span></div>
        <div class="heading">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p>
            Posted in <?php the_category(', '); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="<?php the_permalink(); ?>#comments"><?php comments_number('No Comments','1 Comment','% Comments'); ?></a>
          </p>
        </div>
        <div class="clear"></div>
        <div class="content">
          <?php the_content('Read More...'); ?>
        </div>
      </div>
      
      <div class="line"></div>
    
    <?php endwhile; ?>
    <?php endif; ?>
        
        <!--Pagination-->
        <?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); } ?>
    </div>
    <div id="sidebar">
      <?php include (TEMPLATEPATH . '/blog_widget.php'); ?>
    </div>
      <div class="clear"></div>
    </div>
    <?php include (TEMPLATEPATH . '/gallery_widget.php'); ?>
    <?php include (TEMPLATEPATH . '/footer_widget.php'); ?>
    <div class="clear"></div>
  </div>
</div>
<?php get_footer() ?>