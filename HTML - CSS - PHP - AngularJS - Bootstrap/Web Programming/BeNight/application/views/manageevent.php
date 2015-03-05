    <div id="body_profilogestore_background" style="background:url(<?php if (isset($_SESSION["user_venue_backgr"])) echo htmlspecialchars($_SESSION["user_venue_backgr"], ENT_QUOTES, 'UTF-8'); ?>); background-size:auto; background-repeat: no-repeat;background-color: #000;">
      <div id="container_profilogestore">
        <div id="box_gestioneevento">
          <div id="title_edit">
            <div id="men_edit"><font style="font-size:26px; color:#999;">Manage Events</font></div>
            <div class="clearBoth"></div><!-- -->
          </div><!--FINE DIV TITLE_EDIT -->

          <div id="cont">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th width="50%">Event Name</th>
                    <th width="30%">Date-Time</th>
                    <th width="5%">Participants</th>
                    <th width="3%">Ticket</th>
                    <th width="3%">Edit</th>
                    <th width="3%">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($view['manageevent'] as $event) { ?>
                  <tr class="">
                    <td><a href="event/id/<?php if (isset($event->event_id)) echo htmlspecialchars($event->event_id, ENT_QUOTES, 'UTF-8'); ?>"><?php if (isset($event->event_name)) echo htmlspecialchars($event->event_name, ENT_QUOTES, 'UTF-8'); ?></a></td>
                    <td><?php if (isset($event->event_start_time)) echo htmlspecialchars($event->event_start_time, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($event->participants)) echo htmlspecialchars($event->participants, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($event->event_free_or_pay)) echo htmlspecialchars($event->event_free_or_pay, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td class="text-center" id="open-wizard-2" style="cursor:pointer;"><img height="15" src="images/icons/edit-icon.png" width="15"></td>
                    <td class="text-center"><a href="manageevent/delete/<?php if (isset($event->event_id)) echo htmlspecialchars($event->event_id, ENT_QUOTES, 'UTF-8'); ?>"><span class="fui-cross-inverted text-primary" style="color: #F00"></span></a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div><!--fine CONT -->
            <br>
            <br>
          </div>
        </div>
      </div><!--fine div CONTAINER-->
    </div><!--fine BODY2-->
    <!-- CONTAINER VENUE END-->