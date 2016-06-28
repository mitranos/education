    <!-- CONTAINER USER START-->
    <div id="main-user-bg" style="background:url(images/background/background.jpg); background-size:auto;">
      <div class="container-user">
        <div id="box_gestioneevento">
          <div id="title_edit">
            <div id="men_edit"><font style="font-size:26px; color:#999;"><span id="heart"class="glyphicon glyphicon-heart" style="float:left; margin-right:10px; ;font-size: 1.4em; color: #F36;" ></span>My Wishlist</font></div>
            <div class="clearBoth">
              <!-- -->
            </div>
          </div><!--FINE DIV TITLE_EDIT -->
          <div id="cont">
            <div class="table-responsive">
            <?php if (!empty($view['wishlist'])) { ?>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th width="50%">Event Name</th>
                    <th width="30%">Date-Time</th>
                    <th width="5%">Participants</th>
                    <th width="3%">Ticket</th>
                    <th width="3%">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($view['wishlist'] as $wish) { ?>
                  <tr class="">
                    <td><a href="event/id/<?php if (isset($wish->event_id)) echo htmlspecialchars($wish->event_id, ENT_QUOTES, 'UTF-8'); ?>"><?php if (isset($wish->event_name)) echo htmlspecialchars($wish->event_name, ENT_QUOTES, 'UTF-8'); ?></a></td>
                    <td><?php if (isset($wish->event_start_time)) echo htmlspecialchars($wish->event_start_time, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($wish->participants)) echo htmlspecialchars($wish->participants, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($wish->event_free_or_pay)) echo htmlspecialchars($wish->event_free_or_pay, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td class="text-center"><a href="wishlist/delete/<?php if (isset($wish->wishlist_id)) echo htmlspecialchars($wish->wishlist_id, ENT_QUOTES, 'UTF-8'); ?>"><span class="fui-cross-inverted text-primary" style="color: #F00"></span></a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              
              <?php } ?>
              
            <?php if(empty($view['wishlist'])) { ?>
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	You do not have any events in your wishlist!</br></br>
                Let's get it started and find event you would like to partecipate <a href="<?php echo URL; ?>search" id="">here</a></br></br>
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
