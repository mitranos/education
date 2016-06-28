<!--CONTENT USER SECTION START -->
  <div id="main-user-bg" style="background:url(<?php echo URL; ?>images/background/background.jpg); background-size:auto;">
  <div class="container-user">
    <div class="cover">
      <img class="cover-img" src="<?php echo URL; ?><?php echo $view['cover']; ?>">

      <div class="container-profile">
        <div class="container-img"><img class="img-profile" src="<?php echo URL; ?><?php echo $view['profile']; ?>"></div>

        <p> <?php echo $view['firstName'] . " " . $view['lastName']; ?> </p>
      </div><!--fine div pre_imgprofilo-->
    </div><!--fine div COPERTINA-->

    <div class="left-box">
      <div class="info-box">
        <div class="title">
          <img src="<?php echo URL; ?>images/icons/info_profile.png" style="vertical-align:bottom" width="20"> <strong>Personal Information</strong>
        </div>

        <div class="content">
          <p><img src="<?php echo URL; ?>images/icons/<?php echo strtolower ($view['gender']); ?>-iconB.png" width="20"> <?php echo $view['gender']; ?></p>

          <p><img src="<?php echo URL; ?>images/icons/age-icon.png" width="20"> <?php echo $view['birthday']; ?> years old</p>
			<?php if(!empty($view['address'])) { ?>
          <p><img src="<?php echo URL; ?>images/icons/location_small.png"> <?php echo $view['address']; ?></p>
			<?php } ?>
          <p class="par"><strong>Member of BeNight since:</strong></p>

          <p><?php echo $view['member']; ?></p>
        </div>

        <div class="title2">
          <img height="25" src="<?php echo URL; ?>images/icons/partecipazioni.png" width="25"> <strong>Social connected</strong>
        </div>

        <div class="content2">
          <p><a href=""><img src="<?php echo URL; ?>images/icons/social/facebook_icon.png" width="20"> Facebook</a></p>

          <p><a href=""><img src="<?php echo URL; ?>images/icons/social/twitter_icon.png" width="20"> Twitter</a></p>

          <p><a href=""><img src="<?php echo URL; ?>images/icons/social/google+_icon.png" width="20"> Google+</a></p>

          <p><a href=""><img src="<?php echo URL; ?>images/icons/social/instagram_icon.png" width="20"> Instagram</a></p>

          <p><a href=""><img src="<?php echo URL; ?>images/icons/social/pinterest_icon.png" width="20"> Pinterest</a></p>

          <p><a href=""><img src="<?php echo URL; ?>images/icons/social/youtube_icon.png" width="20"> Youtube</a></p>
        </div>
      </div><!--END INFO-BOX-->
    </div><!--END LEFT-BOX-->

    <div class="right-box">
      <div class="content">
        <ul class="nav nav-tabs" id="myTab">
          <li class="active">
            <a data-toggle="tab" href="#partecipera">Will Participate</a>
          </li>

          <li class="">
            <a data-toggle="tab" href="#partecipato">Participated</a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="partecipera">
            <p style="color:#666666; font-size:18px; background-color:#F8F8F8; padding-left:20px; padding-top:10px; padding-bottom:10px; border-bottom:1px solid #ccc;"><img align="absbottom" height=
            "20" src="<?php echo URL; ?>images/icons/last_event.png" width="20"> Events that I will participate</p>
            
            <?php foreach ($view['eventsWill'] as $event) { ?>
            <a href="<?php echo URL; ?>event/id/<?php if (isset($event->event_id)) echo htmlspecialchars($event->event_id, ENT_QUOTES, 'UTF-8'); ?>">
            <table border="0" cellpadding="0" id="table_eventi" style="background-color:#F2F2F2;">
              <tbody>
                <tr>
                  <td colspan="2" style="height:200px; vertical-align:central; background:none;">
                    <div id="img_eventi"><img id="" src="<?php echo URL; ?><?php if (isset($event->event_picture_preview)) echo htmlspecialchars($event->event_picture_preview, ENT_QUOTES, 'UTF-8'); ?>" style="vertical-align:central;"></div>
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
              </tbody>
            </table>
            </a>
            <?php } ?>
            
            
            <?php if(empty ($view['eventsWill']) && ($_SESSION["user_id"] == $view['id'] )) { ?>
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	You are not partecipating to any events!</br></br>
                Let's get it started and find some events <a href="<?php echo URL; ?>search">here</a>
            </div>
			<?php } elseif (empty ($view['eventsWill'])) { ?> 
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	<?php echo $view['firstName']; ?> is not partecipating to any events!</br>
            </div>
            <?php } ?>
            
            <div class="clearBoth"></div>
          </div>

          <div class="tab-pane" id="partecipato">
            <p style="color:#666666; font-size:18px; background-color:#F8F8F8; padding-left:20px; padding-top:10px; padding-bottom:10px; border-bottom:1px solid #ccc;"><img align="absbottom" height=
            "20" src="<?php echo URL; ?>images/icons/event.png" width="20"> Events that I participated</p>
           
           
             <?php foreach ($view['eventsPast'] as $event) { ?>
            <a href="<?php echo URL; ?>event/id/<?php if (isset($event->event_id)) echo htmlspecialchars($event->event_id, ENT_QUOTES, 'UTF-8'); ?>">
            <table border="0" cellpadding="0" id="table_eventi_past" style="background-color:#F2F2F2;">
              <tbody>
                <tr>
                  <td colspan="2" style="height:130px; vertical-align:central; background:none;">
                    <div id="img_eventi_past"><img src="<?php echo URL; ?><?php if (isset($event->event_picture_preview)) echo htmlspecialchars($event->event_picture_preview, ENT_QUOTES, 'UTF-8'); ?>" style="vertical-align:central;"></div>
                  </td>
                </tr>

                <tr>
                  <td colspan="2" style="padding-left:7px; padding-top:5px; color:#333; font-size:13px;"><?php if (isset($event->event_name)) echo htmlspecialchars($event->event_name, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>

                <tr>
                  <td colspan="2" style="padding-left:7px; padding-top:10px; color:#666; font-size:11px;"><img height="12" src="<?php echo URL; ?>images/icons/location.png" width="12">  <?php if (isset($event->venue_name)) echo htmlspecialchars($event->venue_name, ENT_QUOTES, 'UTF-8'); ?>, Place</td>
                </tr>

                <tr>
                  <td colspan="2" style="padding-left:7px; padding-top:2px; color:#666; font-size:11px;"><img height="12" src="<?php echo URL; ?>images/icons/calendar.png" width="12"> <?php if (isset($event->event_start_time)) echo htmlspecialchars($event->event_start_time, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>

                <tr>
                  <td style="color: #666; font-size: 13px; font-style: italic; padding-bottom: 5px; padding-right: 7px; padding-top: 2px; text-align: right"><?php if (isset($event->event_free_or_pay)) echo htmlspecialchars($event->event_free_or_pay, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
              </tbody>
            </table>
            </a> 
            <?php } ?>
            
            <?php if(empty ($view['eventsPast']) && ($_SESSION["user_id"] == $view['id'] )) { ?>
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	You did not partecipated to any events!</br></br>
                Let's get it started and find some events <a href="<?php echo URL; ?>search">here</a>
            </div>
			<?php } elseif (empty ($view['eventsPast'])) { ?> 
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	<?php echo $view['firstName']; ?> did not partecipated to any events!</br>
            </div>
            <?php } ?>
            <div class="clearBoth"></div>
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
    <!--CONTENT USER SECTION END -->
