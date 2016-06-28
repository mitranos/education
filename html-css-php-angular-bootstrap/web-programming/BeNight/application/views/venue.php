<!-- CONTAINER VENUE START-->
<div id="body_profilogestore_background" style="background:url(<?php echo URL; ?><?php if (isset($view["venueinfo"]->venue_backgr_picture)) echo htmlspecialchars($view["venueinfo"]->venue_backgr_picture, ENT_QUOTES, 'UTF-8'); ?>); background-size:auto; background-repeat: no-repeat;background-color: #000;">
  <div id="container_profilogestore">
    <div id="copertina">
      <img class="img_copertina" src="<?php echo URL; ?><?php if (isset($view["venueinfo"]->venue_cover_picture)) echo htmlspecialchars($view["venueinfo"]->venue_cover_picture, ENT_QUOTES, 'UTF-8'); ?>">

      <div id="pre_imgprofilo">
        <div id="img_profilogestore"><img class="img_pr_gest" src="<?php echo URL; ?><?php if (isset($view["venueinfo"]->venue_profile_picture)) echo htmlspecialchars($view["venueinfo"]->venue_profile_picture, ENT_QUOTES, 'UTF-8'); ?>"></div><?php if (isset($view["venueinfo"]->venue_name)) echo htmlspecialchars($view["venueinfo"]->venue_name, ENT_QUOTES, 'UTF-8'); ?><br>
       <!-- Miami, FL-->
      </div><!--fine div pre_imgprofilo-->
    </div><!--fine div COPERTINA-->

    <div id="profilo_sin">
      <div id="box_info">
        <div style="padding-left:10px; padding-right:10px; padding-top:7px; padding-bottom:7px; background:#F8F8F8; font-size: 13px; color:#666; border-bottom:1px solid #CCC;">
          <strong>Information</strong>
        </div>

        <div style="padding-left:10px; padding-right:10px; padding-top:7px; padding-bottom:7px; border-bottom:1px solid #CCC;">
          <p style="font-size:14px; color:#666;"><?php if (isset($view["venueinfo"]->venue_short_desc)) echo htmlspecialchars($view["venueinfo"]->venue_short_desc, ENT_QUOTES, 'UTF-8'); ?></p>
        </div>

        <div style="padding-left:10px; padding-right:10px; padding-top:7px; padding-bottom:7px; background:#F8F8F8; font-weight:normal; border-bottom:1px solid #CCC;">
          Category:  <?php 	if ($view['venueinfo']->venue_category == 1) echo "Night Club"; 
                     		else if ($view['venueinfo']->venue_category == 2) echo "Disco";
                     		else if ($view['venueinfo']->venue_category == 3) echo "Pub"; 
                     		else if ($view['venueinfo']->venue_category == 4) echo "Bar";
                     		else if ($view['venueinfo']->venue_category == 5) echo "Lounge";
                     		else if ($view['venueinfo']->venue_category == 6) echo "Strip Club"; ?>
        </div>

        <div style="padding-left:10px; padding-right:10px; padding-top:7px; padding-bottom:7px; font-weight:normal;">
          <img height="18" src="<?php echo URL; ?>images/icons/location.png" width="18"> 
          <?php if (isset($view["venueinfo"]->venue_address)) echo htmlspecialchars($view["venueinfo"]->venue_address, ENT_QUOTES, 'UTF-8'); ?>
        </div>

        <div style="padding-left:10px; padding-right:10px; padding-top:7px; padding-bottom:7px; background:#F8F8F8; font-weight:normal; border-top:1px solid #CCC;">
          <img height='25' src='<?php echo URL; ?>images/icons/partecipazioni.png' width='25'> 1000 people have been here
        </div>
      </div><!--fine div BOX INFO-->
    </div><!--fine profilo SIN -->

    <div id="profilo_des">
      <div id="box_profilo">
        <ul class="nav nav-tabs" id="myTab">
          <li class="active">
            <a data-toggle="tab" href="#home">Home</a>
          </li>

          <li>
            <a data-toggle="tab" href="#events">Events</a>
          </li>

          <li>
            <a data-toggle="tab" href="#photos">Photos</a>
          </li>

          <li>
            <a data-toggle="tab" href="#contacts">Info &amp; contacts</a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="home">
            <p style="color:#666666; font-size:18px; background-color:#F8F8F8; padding-left:20px; padding-top:10px; padding-bottom:10px; border-bottom:1px solid #ccc;"><img align="absbottom" height=
            "20" src="<?php echo URL; ?>images/icons/last_event.png" width="20"> Last event uploaded</p><br>
            <?php if (!empty($view['lastEvent'])) { ?>
            <?php $event = $view['lastEvent'];?>
            <a href="<?php echo URL; ?>event/id/<?php if (isset($event->event_id)) echo htmlspecialchars($event->event_id, ENT_QUOTES, 'UTF-8'); ?>">
            <table border="0" cellpadding="0" id="table_lastevent" style="background-color:#F2F2F2;">
              <tr>
                <td class="col-sx" colspan="2">
                  <div id="img_lastevent"><img src="<?php echo URL; ?><?php if (isset($event->event_picture_preview)) echo htmlspecialchars($event->event_picture_preview, ENT_QUOTES, 'UTF-8'); ?>" style="vertical-align:central;"></div>
                </td>

                <td class="col-dx" rowspan="5"><?php if (isset($event->event_desc)) echo htmlspecialchars($event->event_desc, ENT_QUOTES, 'UTF-8'); ?></td>
              </tr>

              <tr>
                <td colspan="2" style="padding-left:7px; padding-top:5px; color:#333;"><?php if (isset($event->event_name)) echo htmlspecialchars($event->event_name, ENT_QUOTES, 'UTF-8'); ?></td>
              </tr>

              <tr>
                <td colspan="2" style="padding-left:7px; padding-top:10px; color:#666; font-size:13px;"><img height="15" src="<?php echo URL; ?>images/icons/location.png" width="15"><?php if (isset($event->venue_name)) echo htmlspecialchars($event->venue_name, ENT_QUOTES, 'UTF-8'); ?>, Miami</td>
              </tr>

              <tr>
                <td colspan="2" style="padding-left:7px; padding-top:2px; color:#666; font-size:13px;"><img height="15" src="<?php echo URL; ?>images/icons/calendar.png" width="15"> <?php if (isset($event->event_start_time)) echo htmlspecialchars($event->event_start_time, ENT_QUOTES, 'UTF-8'); ?></td>
              </tr>

              <tr>
                <td colspan="2" style="padding-right:7px; padding-top:2px; padding-bottom:5px; color:#666; font-size:13px; text-align:right;"><?php if (isset($event->event_free_or_pay)) echo htmlspecialchars($event->event_free_or_pay, ENT_QUOTES, 'UTF-8'); ?></td>
              </tr>
            </table></a><br>
            <?php } ?>
            
            <?php if(empty($view['lastEvent']) && ($_SESSION["user_venue_id"] == $view["venueinfo"]->venue_id )) { ?>
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	You do not have uploaded any events!</br></br>
                Let's get it started and create some events <a href="#" id="open-wizard-venue">here</a></br></br>
            </div>
			<?php } elseif (empty($view['lastEvent'])) { ?> 
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	<?php echo $view["venueinfo"]->venue_name; ?> does not have any events at the moment!</br></br>
            </div>
            <?php } ?>

            <div class="clearBoth">
              <!-- -->
            </div>

            <p style="color:#666666; font-size:18px; background-color:#F8F8F8; padding-left:20px; padding-top:10px; padding-bottom:10px; border-bottom:1px solid #ccc; border-top:1px solid #CCC;">
            <img align="absbottom" height="20" src="<?php echo URL; ?>images/icons/photo.png" width="20"> Latest uploaded photos</p>
			<?php foreach ($view['recentImages'] as $image) { ?>
            <div id="last_photo">
              <div class="last_photo_img">
                <a href="#" rel="shadowbox[last]"><img height="120" src="<?php echo URL; ?><?php if (isset($image->image_path)) echo htmlspecialchars($image->image_path, ENT_QUOTES, 'UTF-8'); ?>" width="160"></a>
              </div>
              <p style="color: #999; font-size: 12px; padding-bottom: 3px; padding-top: 3px; text-align: center">
              <a href="#">
			  <?php if (isset($image->album_name)) echo htmlspecialchars($image->album_name, ENT_QUOTES, 'UTF-8'); ?>
              </a>
              </p>
            </div>
			<?php } ?>
			
            <?php if(empty($view['recentImages']) && ($_SESSION["user_venue_id"] == $view["venueinfo"]->venue_id )) { ?>
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	You do not have uploaded any Photos!</br></br>
                Let's get it started and create some albums <a href="managealbums">here</a></br></br>
            </div>
			<?php } elseif (empty($view['recentImages'])) { ?> 
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	<?php echo $view["venueinfo"]->venue_name; ?> does not have recenly uploaded any photos!</br></br>
            </div>
            <?php } ?>
            
            <div class="clearBoth">
              <!-- -->
            </div>
          </div>

          <div class="tab-pane" id="events">
            <p style="color:#666666; font-size:18px; background-color:#F8F8F8; padding-left:20px; padding-top:10px; padding-bottom:10px; border-bottom:1px solid #ccc;"><img align="absbottom" height=
            "20" src="<?php echo URL; ?>images/icons/event.png" width="20"> Events</p><br>
            
            <?php foreach ($view['futureEvents'] as $event) { ?>
            <a href="<?php echo URL; ?>event/id/<?php if (isset($event->event_id)) echo htmlspecialchars($event->event_id, ENT_QUOTES, 'UTF-8'); ?>">
            <table border="0" cellpadding="0" id="table_eventi" style="background-color:#F2F2F2;">
              <tr>
                <td colspan="2" style="height:200px; vertical-align:central; background:none;">
                  <div id="img_eventi"><img src="<?php echo URL; ?><?php if (isset($event->event_picture_preview)) echo htmlspecialchars($event->event_picture_preview, ENT_QUOTES, 'UTF-8'); ?>" style="vertical-align:central;"></div>
                </td>
              </tr>

              <tr>
                <td colspan="2" style="padding-left:7px; padding-top:5px; color:#333;"><?php if (isset($event->event_name)) echo htmlspecialchars($event->event_name, ENT_QUOTES, 'UTF-8'); ?></td>
              </tr>

              <tr>
                <td colspan="2" style="padding-left:7px; padding-top:10px; color:#666; font-size:13px;"><img height="15" src="<?php echo URL; ?>images/icons/location.png" width="15"><?php if (isset($event->venue_name)) echo htmlspecialchars($event->venue_name, ENT_QUOTES, 'UTF-8'); ?>, Miami Beach</td>
              </tr>

              <tr>
                <td colspan="2" style="padding-left:7px; padding-top:2px; color:#666; font-size:13px;"><img height="15" src="<?php echo URL; ?>images/icons/calendar.png" width="15"><?php if (isset($event->event_start_time)) echo htmlspecialchars($event->event_start_time, ENT_QUOTES, 'UTF-8'); ?></td>
              </tr>

              <tr>
                <td style="color: #666; font-size: 13px; font-style: italic; padding-bottom: 5px; padding-right: 7px; padding-top: 2px; text-align: right"><?php if (isset($event->event_free_or_pay)) echo htmlspecialchars($event->event_free_or_pay, ENT_QUOTES, 'UTF-8'); ?></td>
              </tr>
            </table>
            </a>
            <?php } ?>
            <?php if(empty($view['futureEvents']) && ($_SESSION["user_venue_id"] == $view["venueinfo"]->venue_id )) { ?>
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	You do not have uploaded any events!</br></br>
                Let's get it started and create some events <a href="#" id="open-wizard-venue-2">here</a></br></br>
            </div>
			<?php } elseif (empty($view['futureEvents'])) { ?> 
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	<?php echo $view["venueinfo"]->venue_name; ?> does not have any events at the moment!</br></br>
            </div>
            <?php } ?>
            <br>
            <div class="clearBoth">
              <!-- -->
            </div>
            
            
			<?php if (!empty($view['pastEvents'])) { ?>
            <p style="color:#666666; font-size:18px; background-color:#F8F8F8; padding-left:20px; padding-top:10px; padding-bottom:10px; border-bottom:1px solid #ccc; border-top:1px solid #CCC;">
            <img align="absbottom" height="20" src="<?php echo URL; ?>images/icons/event_past.png" width="20"> Past Events</p>
            <?php foreach ($view['pastEvents'] as $event) { ?>
            <a href="<?php echo URL; ?>event/id/<?php if (isset($event->event_id)) echo htmlspecialchars($event->event_id, ENT_QUOTES, 'UTF-8'); ?>">
            <table border="0" cellpadding="0" id="table_eventi_past" style="background-color:#F2F2F2;">
              <tr>
                <td colspan="2" style="height:130px; vertical-align:central; background:none;">
                  <div id="img_eventi_past"><img src="<?php echo URL; ?><?php if (isset($event->event_picture_preview)) echo htmlspecialchars($event->event_picture_preview, ENT_QUOTES, 'UTF-8'); ?>" style="vertical-align:central;"></div>
                </td>
              </tr>

              <tr>
                <td colspan="2" style="padding-left:7px; padding-top:5px; color:#333; font-size:13px;"><?php if (isset($event->event_name)) echo htmlspecialchars($event->event_name, ENT_QUOTES, 'UTF-8'); ?></td>
              </tr>

              <tr>
                <td colspan="2" style="padding-left:7px; padding-top:10px; color:#666; font-size:11px;"><img height="12" src="<?php echo URL; ?>images/icons/location.png" width="12"><?php if (isset($event->venue_name)) echo htmlspecialchars($event->venue_name, ENT_QUOTES, 'UTF-8'); ?>, Miami Beach</td>
              </tr>

              <tr>
                <td colspan="2" style="padding-left:7px; padding-top:2px; color:#666; font-size:11px;"><img height="12" src="<?php echo URL; ?>images/icons/calendar.png" width="12"><?php if (isset($event->event_start_time)) echo htmlspecialchars($event->event_start_time, ENT_QUOTES, 'UTF-8'); ?></td>
              </tr>

              <tr>
                <td style="color: #666; font-size: 13px; font-style: italic; padding-bottom: 5px; padding-right: 7px; padding-top: 2px; text-align: right"><?php if (isset($event->event_free_or_pay)) echo htmlspecialchars($event->event_free_or_pay, ENT_QUOTES, 'UTF-8'); ?></td>
              </tr>
            </table>
            </a> 
            <?php } }?>

            <div class="clearBoth">
              <!-- -->
            </div>
          </div>

          <div class="tab-pane" id="photos">
            <p style="color:#666666; font-size:18px; background-color:#F8F8F8; padding-left:20px; padding-top:10px; padding-bottom:10px; border-bottom:1px solid #ccc;"><img align="absbottom" height=
            "20" src="<?php echo URL; ?>images/icons/image.png" width="20"> Albums</p><br>
            
            <?php foreach ($view['albums'] as $album) { ?>
            <a href="#">
            <div id="album">
              <div id="album_img"><img src="<?php echo URL; ?><?php if (isset($album->image_path)) echo htmlspecialchars($album->image_path, ENT_QUOTES, 'UTF-8'); ?>"></div><!--end div Album_img -->

              <div id="album_title">
                <?php if (isset($album->album_name)) echo htmlspecialchars($album->album_name, ENT_QUOTES, 'UTF-8'); ?>
              </div>

              <div id="album_description">
                <p> <?php if (isset($album->album_desc)) echo htmlspecialchars($album->album_desc, ENT_QUOTES, 'UTF-8'); ?></p>
              </div><!--end div Album_description -->
            </div><!--end div Album -->
            </a>
            <?php } ?>
            
            <?php if(empty($view['albums']) && ($_SESSION["user_venue_id"] == $view["venueinfo"]->venue_id )) { ?>
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	You do not have uploaded any Albums!</br></br>
                Let's get it started and create some albums <a href="<?php echo URL; ?>managealbums">here</a></br></br>
            </div>
			<?php } elseif (empty($view['albums'])) { ?> 
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	<?php echo $view["venueinfo"]->venue_name; ?> does not have recenly uploaded any Albums!</br></br>
            </div>
            <?php } ?>
            
            <br>
            <div class="clearBoth">
              <!-- -->
            </div>
          </div>

          <div class="tab-pane" id="contacts">
            <p style="color:#666666; font-size:18px; background-color:#F8F8F8; padding-left:20px; padding-top:10px; padding-bottom:10px; border-bottom:1px solid #ccc;"><img align="absbottom" height=
            "20" src="<?php echo URL; ?>images/icons/info.png" width="20"> Information</p>

            <div style="color: #666; font-size: 13px; font-style: italic; padding: 0 10px 10px 10px">
              <?php if (isset($view["venueinfo"]->venue_long_desc)) echo htmlspecialchars($view["venueinfo"]->venue_long_desc, ENT_QUOTES, 'UTF-8'); ?>
              
               <?php if(empty($view["venueinfo"]->venue_long_desc) && ($_SESSION["user_venue_id"] == $view["venueinfo"]->venue_id )) { ?>
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	You do not have uploaded any long description!</br></br>
                Let's get it started and upload more info <a href="<?php echo URL; ?>promotersettings">here</a></br></br>
            </div>
			<?php } elseif (empty($view["venueinfo"]->venue_long_desc)) { ?> 
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	<?php echo $view["venueinfo"]->venue_name; ?> does not have any Description at the moment!</br></br>
            </div>
            <?php } ?>
            
            </div>

            <p style="color:#666666; font-size:18px; background-color:#F8F8F8; padding-left:20px; padding-top:10px; padding-bottom:10px; border-bottom:1px solid #ccc;"><img align="absbottom" height=
            "20" src="<?php echo URL; ?>images/icons/location.png" width="20"> Location</p>

            <div class="googlemap" style="margin-top:-10px; font-size:13px; color:#666;">
              <iframe frameborder="0" height="300" src=
              "https://www.google.com/maps/embed/v1/place?q=<?php if (isset($view["venueinfo"]->venue_address)) echo htmlspecialchars($view["venueinfo"]->venue_address, ENT_QUOTES, 'UTF-8'); ?>&key=AIzaSyCnp3-bqW85b3EVQ9_0Uk8SGbne3QiDAFM" style="border:0"
              width="593"></iframe>
            </div>

            <div id="contatti_gestoreprofile">
              <p style="background-color:#F8F8F8; color:#444; border-bottom:1px solid #D3D3D3;"><img height="22" src="<?php echo URL; ?>images/icons/contact_icon.png" width="22"> Contacts</p>

              <p style="color:#666666; font-size:14px; padding-bottom:7px;"><img height="15" src="<?php echo URL; ?>images/icons/phone.png" width="15"> <?php if (isset($view["venueinfo"]->venue_phone)) echo htmlspecialchars($view["venueinfo"]->venue_phone, ENT_QUOTES, 'UTF-8'); ?></p>

              <p style="color:#666666; font-size:14px; padding-bottom:7px;"><img height="15" src="<?php echo URL; ?>images/icons/mobile.png" width="15"> <?php if (isset($view["venueinfo"]->venue_cellphone)) echo htmlspecialchars($view["venueinfo"]->venue_cellphone, ENT_QUOTES, 'UTF-8'); ?></p>

              <p style="color:#666666; font-size:14px; padding-bottom:7px;"><img height="15" src="<?php echo URL; ?>images/icons/at.png" width="15"> <a href="" target="_blank"><?php if (isset($view["venueinfo"]->venue_info_email)) echo htmlspecialchars($view["venueinfo"]->venue_info_email, ENT_QUOTES, 'UTF-8'); ?></a></p>

              <p style="color:#666666; font-size:14px; padding-bottom:7px;"><img height="15" src="<?php echo URL; ?>images/icons/www.png" width="15"> <a href='' target='_blank'><?php if (isset($view["venueinfo"]->venue_info_website)) echo htmlspecialchars($view["venueinfo"]->venue_info_website, ENT_QUOTES, 'UTF-8'); ?></a></p>
            </div>

            <div id="contatti_gestoreprofile">
              <p style="background-color:#F8F8F8; color:#444; border-bottom:1px solid #D3D3D3;"><img height="22" src="<?php echo URL; ?>images/icons/social_icon.png" width="22"> Social</p>

              <p style="color:#666666; font-size:14px; padding-bottom:7px;"><img height='15' src='<?php echo URL; ?>images/icons/facebook_icon.png' width='15'> <a href='<?php if (isset($view["venueinfo"]->venue_info_facebook)) echo htmlspecialchars($view["venueinfo"]->venue_info_facebook, ENT_QUOTES, 'UTF-8'); ?>' target=
              '_blank'><?php if (isset($view["venueinfo"]->venue_info_facebook)) echo htmlspecialchars($view["venueinfo"]->venue_info_facebook, ENT_QUOTES, 'UTF-8'); ?></a></p>

              <p style="color:#666666; font-size:14px; padding-bottom:7px;"><img height='15' src='<?php echo URL; ?>images/icons/twitter_icon.png' width='15'> <a href='<?php if (isset($view["venueinfo"]->venue_info_twitter)) echo htmlspecialchars($view["venueinfo"]->venue_info_twitter, ENT_QUOTES, 'UTF-8'); ?>' target=
              '_blank'><?php if (isset($view["venueinfo"]->venue_info_twitter)) echo htmlspecialchars($view["venueinfo"]->venue_info_twitter, ENT_QUOTES, 'UTF-8'); ?></a></p>

              <p style="color:#666666; font-size:14px; padding-bottom:7px;" data-fittext><img height='15' src='<?php echo URL; ?>images/icons/google+_icon.png' width='15'> <a href='<?php if (isset($view["venueinfo"]->venue_info_google)) echo htmlspecialchars($view["venueinfo"]->venue_info_google, ENT_QUOTES, 'UTF-8'); ?>' target=
              '_blank'><?php if (isset($view["venueinfo"]->venue_info_google)) echo htmlspecialchars($view["venueinfo"]->venue_info_google, ENT_QUOTES, 'UTF-8'); ?></a></p>

              <p style="color:#666666; font-size:14px; padding-bottom:7px;"><img height='15' src='<?php echo URL; ?>images/icons/youtube_icon.png' width='15'> <a href='<?php if (isset($view["venueinfo"]->venue_info_youtube)) echo htmlspecialchars($view["venueinfo"]->venue_info_youtube, ENT_QUOTES, 'UTF-8'); ?>' target=
              '_blank'><?php if (isset($view["venueinfo"]->venue_info_youtube)) echo htmlspecialchars($view["venueinfo"]->venue_info_youtube, ENT_QUOTES, 'UTF-8'); ?></a></p>
            </div><br>

            <div class="clearBoth">
              <!-- -->
            </div>
          </div>
        </div>
		<script>
       $(function () {
                 $('#myTab a:first').tab('show')
               })
        </script>
      </div><!--END BOX PROFILE-->
    </div><!--fine profilo DES -->

    <div class="clearBoth">
      <!-- -->
    </div>
  </div><!--fine div CONTAINER-->
</div><!--fine BODY2-->
<!-- CONTAINER VENUE END-->
