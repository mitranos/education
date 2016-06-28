 <!-- CONTAINER SEARCH START-->
    <div id="main-search-bg" style="background:url(images/background/background.jpg);">
      <div class="container">
        <div class="inner-left">
          <div class="box-filter">
          <div class="titleUP">
            	<strong>Advanced search</strong>
            </div>
            <div class="content">
            	<p>City</p>
            	<div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="City">
                </div>
                <p>Range of search</p>
                <div id="slider" style="margin-bottom:5px;"></div>
                <span>20 km</span>
                <div class="clearBoth"></div>
                <p>From</p>
                    <div class="input-group date input-group-sm" id="datetimepickerSearch1">
                        <input class="form-control" type='text' name="start_date"> 
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span> 
                            <script type="text/javascript">
                                $(function () {
                                                $('#datetimepickerSearch1').datetimepicker();
                                            });
                            </script>
                     </div>
                 <p>To</p>
                 	<div class="input-group date input-group-sm" id="datetimepickerSearch2">
                        <input class="form-control" type='text' name="start_date"> 
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span> 
                            <script type="text/javascript">
                                $(function () {
                                                $('#datetimepickerSearch2').datetimepicker();
                                            });
                            </script>
                     </div>
                  <p>Category</p>
                  	<div class="cat">
                        <label class="checkbox" for="checkbox1"><input data-toggle="checkbox" id="checkbox1" type="checkbox" value="">
                            Nightclub
                        </label>
                        <label class="checkbox" for="checkbox1"><input data-toggle="checkbox" id="checkbox1" type="checkbox" value="">
                            Disco
                        </label>
                        <label class="checkbox" for="checkbox1"><input data-toggle="checkbox" id="checkbox1" type="checkbox" value="">
                            Bar
                        </label>
                        <label class="checkbox" for="checkbox1"><input data-toggle="checkbox" id="checkbox1" type="checkbox" value="">
                            Pub
                        </label>
                        <label class="checkbox" for="checkbox1"><input data-toggle="checkbox" id="checkbox1" type="checkbox" value="">
                            Strip Club
                        </label> 
                    </div>
                  <p>Entrance</p>
                  	<div class="entrance">
                        <label class="radio">
                            <input data-toggle="radio" name="group2" type="radio" value="1"> Payment
                        </label> 
                        <label class="radio">
                            <input checked data-toggle="radio" name="group2" type="radio" value="2"> Free
                        </label>
                        <label class="radio">
                            <input checked data-toggle="radio" name="group2" type="radio" value="3"> Both
                        </label>
                    </div>
                    <br>
                   <label class="checkbox" for="checkbox1"><input data-toggle="checkbox" id="checkbox1" type="checkbox" value="">
                        Show featured events
                    </label> 
       
   
          <div class="clearBoth"></div>
						 
                          <script>
								 var $slider = $("#slider");
								if ($slider.length > 0) {
								  $slider.slider({
									min: 1,
									max: 100,
									value: 20,
									orientation: "horizontal",
									range: "min"
								  }).addSliderSegments($slider.slider("option").max);
								}
                          </script>
                 
                        
            </div>
          	
           
             <script>
	$(':radio').radio();
            $(':checkbox').checkbox('uncheck');
            </script>
          </div><!--fine div BOX INFO-->
        </div><!--fine profilo SIN -->
        <div class="inner-right">
        <?php foreach ($view['events'] as $event) { ?>
        <a href="event/id/<?php if (isset($event->event_id)) echo htmlspecialchars($event->event_id, ENT_QUOTES, 'UTF-8'); ?>">
        <table border="0" cellpadding="0" id="table_eventi" style="background-color:#F2F2F2;">
          <tr>
            <td colspan="2" style="height:200px; vertical-align:central; background:none;">
              <div id="img_eventi"><img src="<?php if (isset($event->event_picture_preview)) echo htmlspecialchars($event->event_picture_preview, ENT_QUOTES, 'UTF-8'); ?>" style="vertical-align:central;"></div>
            </td>
          </tr>

          <tr>
            <td colspan="2" style="padding-left:7px; padding-top:5px; color:#333;"><?php if (isset($event->event_name)) echo htmlspecialchars($event->event_name, ENT_QUOTES, 'UTF-8'); ?></td>
          </tr>

          <tr>
            <td colspan="2" style="padding-left:7px; padding-top:10px; color:#666; font-size:13px;"><img height="15" src="images/icons/location.png" width="15"><?php if (isset($event->venue_name)) echo htmlspecialchars($event->venue_name, ENT_QUOTES, 'UTF-8'); ?>, Miami Beach</td>
          </tr>

          <tr>
            <td colspan="2" style="padding-left:7px; padding-top:2px; color:#666; font-size:13px;"><img height="15" src="images/icons/calendar.png" width="15"><?php if (isset($event->event_start_time)) echo htmlspecialchars($event->event_start_time, ENT_QUOTES, 'UTF-8'); ?></td>
          </tr>

          <tr>
            <td style="color: #666; font-size: 13px; font-style: italic; padding-bottom: 5px; padding-right: 7px; padding-top: 2px; text-align: right"><?php if (isset($event->event_free_or_pay)) echo htmlspecialchars($event->event_free_or_pay, ENT_QUOTES, 'UTF-8'); ?></td>
          </tr>
        </table>
        </a> 
         <?php } ?>
	

		<?php if (empty($view['events'])) { ?>
		<div class="col-sm-12" style="color: #666; font-size: 20px; font-style: italic; ">
      	<p class="text-lead" style="font-size: 19px;">We couldn't find any results that matched your criteria, but tweaking your search may help. </br>Here are some ideas:</p>
      	<ul>
        	<li>Remove some filters.</li>
        	<li>Expand the area of your search.</li>
        	<li>Search for a city, address, or landmark.</li>
      	</ul>
    	</div>
		<?php } ?>
	
         </div>
         <!--fine profilo DES -->
        <div class="clearBoth">
          <!-- -->
        </div>
      </div><!--fine div CONTAINER-->
    </div>
    <!-- CONTAINER SEARCH END-->
