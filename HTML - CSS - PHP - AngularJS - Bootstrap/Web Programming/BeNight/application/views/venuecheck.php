    <!-- CONTAINER USER START-->
    <div id="main-user-bg" style="background:url(images/background/background.jpg); background-size:auto;">
      <div class="container-user">
        <div id="box_gestioneevento">
          <div id="title_edit">
            <div id="men_edit"><font style="font-size:26px; color:#999;"><span id="heart"class="glyphicon glyphicon-ok" style="float:left; margin-right:10px; ;font-size: 1.4em; color: #00FF40;" ></span>Verify Venues</font></div>
            <div class="clearBoth">
              <!-- -->
            </div>
          </div><!--FINE DIV TITLE_EDIT -->
          <div id="cont">
            <div class="table-responsive">
            <?php if (!empty($view['venues'])) { ?>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th width="30%">Venue Name</th>
					<th width="60%">Venue Phone</th>
					<th width="10%">Verify</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($view['venues'] as $venue) { ?>
                  <tr class="">
                    <td><a href="venue/id/<?php if (isset($wish->venue_id)) echo htmlspecialchars($venue->venue_id, ENT_QUOTES, 'UTF-8'); ?>"><?php if (isset($venue->venue_name)) echo htmlspecialchars($venue->venue_name, ENT_QUOTES, 'UTF-8'); ?></a></td>
                    <td><?php if (isset($venue->venue_phone)) echo htmlspecialchars($venue->venue_phone, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td class="text-center"><a href="venuecheck/verify/<?php if (isset($venue->venue_id)) echo htmlspecialchars($venue->venue_id, ENT_QUOTES, 'UTF-8'); ?>"><span class="glyphicon glyphicon-ok text-primary" style="color: #00FF40"></span></a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              
              <?php } ?>
              
            <?php if(empty($view['venues'])) { ?>
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	We do not have any venue to verify!</br></br>
                Let's keep moving to make BeNight the best web site about Night Life</a></br></br>
            </div>
			<?php } ?> 
            </div><!--fine CONT -->
            <br>
            <br>
          </div>
        </div>
        <div class="clearBoth"></div><!-- Clear Code -->
      </div><!--fine div CONTAINER-->
    </div><!--fine BODY2-->
    <!-- CONTAINER USER END-->
