	<!-- EVENT PAGE CONTAINER -->
    <div id="main-eventpage" style="background:url(<?php echo URL . htmlspecialchars($view["event"]->venue_backgr_picture, ENT_QUOTES, 'UTF-8'); ?>); background-size:auto; background-repeat: no-repeat;background-color: #000;">
      <div id="container-eventpage">
        <div id="box-eventpage">
          <div class="header-box-eventpage">
            <h3><?php echo htmlspecialchars($view["event"]->event_name, ENT_QUOTES, 'UTF-8'); ?></h3>

            <div class="botton">
              <div class="row" ng-controller="WishlistCtrl">
              <?php if (!isset($_SESSION["user_logged_in"])) { ?>
              	<button class="btn btn-primary signIn" data-target="#myModal" data-toggle="modal" onclick="$('#signupbox').hide(); $('#signinbox').show()">Sign In</button>
              <?php } elseif (!isset($_SESSION["user_venue_id"])) { ?>
              	<?php if (!$view["checkPartecipate"]) { ?>
                <form action="<?php echo URL; ?>event/partecipate/<?php echo htmlspecialchars($view["event"]->event_id, ENT_QUOTES, 'UTF-8'); ?>" method="post">
                  <input class="btn btn-primary" id="tasto_partecipa" name="bottone" style="" type="submit" value="Add to List">
                  <?php } else { ?>
                  <form action="<?php echo URL; ?>event/unpartecipate/<?php echo htmlspecialchars($view["event"]->event_id, ENT_QUOTES, 'UTF-8'); ?>" method="post">
                  <input class="btn btn-primary" id="tasto_partecipa" name="bottone" style="" type="submit" value="Remove">
                  <?php } ?>
                  <span class="glyphicon glyphicon-heart-empty" id="heart" ng-click="event()" event-id="<?php echo htmlspecialchars($view["event"]->event_id, ENT_QUOTES, 'UTF-8'); ?>" ng-disabled="flag" style=
                  "float:right; margin-left:10px; margin-top:5px;font-size: 2.2em; color: #F36; cursor:pointer;"></span> 
                </form>
              <?php } ?>
              </div>

              <p>(<img height="15" src="<?php echo URL; ?>images/icons/partecipazioni.png" width="15"><?php echo htmlspecialchars($view["event"]->participants, ENT_QUOTES, 'UTF-8'); ?> Going )</p>
            </div>

            <div class="clearBoth"></div>
          </div>

          <div class="sub-header-box-eventpage">
            <div class="info-eventpage">
              <p><img align="absmiddle" height="25" src="<?php echo URL; ?>images/icons/calendar.png" width="25"> <?php echo htmlspecialchars($view["event"]->event_start_time, ENT_QUOTES, 'UTF-8'); ?></p>

              <p><img align="absmiddle" height="25" src="<?php echo URL; ?>images/icons/location.png" width="25"> <?php echo htmlspecialchars($view["event"]->venue_name, ENT_QUOTES, 'UTF-8'); ?>, Miami Beach (FL)</p>
            </div>

            <div class="info-price-eventpage">
              <div class="price-unisex-eventpage">
                <div class="head-price-unisex">
                  <img id="exifviewer-img-6" src="<?php echo URL; ?>images/icons/unisex-iconsmall.png"> For Everybody
                </div>

                <div class="description-price-unisex">
                  <p style="font-style: italic"><?php echo htmlspecialchars($view["event"]->event_free_or_pay, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="left-eventpage">
            <div class="event-poster"><img src="<?php echo URL; ?><?php echo htmlspecialchars($view["event"]->event_picture, ENT_QUOTES, 'UTF-8'); ?>"></div>

            <div class="event-description">
              <p>
            </div>

            <div class="event-prices">
              <h5>Ticket info:</h5>

              <div class="event-price-info-unisex">
                <div class="head">
                  <img src="<?php echo URL; ?>images/icons/unisex-icon.png"> For Everybody
                </div>

                <div class="description">
                  More Informations
                </div>
              </div>
            </div>

            <div class="tables">
              <h5>Tables</h5>

              <ul class="nav nav-tabs" id="myTab">
                <li class="active">
                  <a data-toggle="tab" href="#small">Small</a>
                </li>

                <li>
                  <a data-toggle="tab" href="#medium">Medium</a>
                </li>

                <li>
                  <a data-toggle="tab" href="#large">Large</a>
                </li>

                <li>
                  <a data-toggle="tab" href="#extra-large">Extra-Large</a>
                </li>
              </ul>

              <div class="tab-content">
                <div class="tab-pane active" id="small">
                  <p class="title">price: <span>150$</span> for maximum <span>2</span> people</p>

                  <p class="description">Table's description.</p>
                </div>

                <div class="tab-pane" id="medium">
                  <p class="title">price: <span>250$</span> for maximum <span>4</span> people</p>

                  <p class="description">Table's description.</p>
                </div>

                <div class="tab-pane" id="large">
                  <p class="title">price: <span>400$</span> for maximum <span>6</span> people</p>

                  <p class="description">Table's description.</p>
                </div>

                <div class="tab-pane" id="extra-large">
                  <p class="title">price: <span>600$</span> for maximum <span>8</span> people</p>

                  <p class="description">Table's description.</p>
                </div>
              </div>
            </div><!--END TABLES-->

            <div class="drink">
              <h5>Drink</h5>

              <ul class="nav nav-tabs" id="myTab">
                <li class="active">
                  <a data-toggle="tab" href="#soft"><img src="<?php echo URL; ?>images/icons/glass.png"></a>
                </li>

                <li>
                  <a data-toggle="tab" href="#strong">Strong</a>
                </li>

                <li>
                  <a data-toggle="tab" href="#extra-strong">Extra-Strong</a>
                </li>
              </ul>

              <div class="tab-content">
                <div class="tab-pane active" id="soft">
                  <p class="title">Soft drink: <span>3$</span></p>

                  <p class="description">Drink's description.</p>
                </div>

                <div class="tab-pane" id="strong">
                  <p class="title">Strong drink: <span>5$</span></p>

                  <p class="description">Drink's description.</p>
                </div>

                <div class="tab-pane" id="extra-strong">
                  <p class="title">Extra-Strong drink: <span>8$</span></p>

                  <p class="description">Drink's description.</p>
                </div>
              </div>
            </div><!-- END DRINK -->
          </div><!--END LEFT-EVENTPAGE-->

          <div class="right-eventpage">
            <div class="info-gest">
              <a href="<?php echo URL; ?>venue/id/<?php echo htmlspecialchars($view["event"]->venue_id, ENT_QUOTES, 'UTF-8'); ?>">
              <div class="image"><img src="<?php echo URL . htmlspecialchars($view["event"]->venue_profile_picture, ENT_QUOTES, 'UTF-8'); ?>"></div>

              <div class="name">
                <p><?php echo htmlspecialchars($view["event"]->venue_name, ENT_QUOTES, 'UTF-8'); ?></p>

                <p>Miami Beach, FL</p>
              </div></a>

              <div class="contact">
                <p><img src="<?php echo URL; ?>images/icons/location_small.png"> <?php echo htmlspecialchars($view["event"]->venue_address, ENT_QUOTES, 'UTF-8'); ?></p>

                <p><img src="<?php echo URL; ?>images/icons/mobile.png" width="15"> <?php echo htmlspecialchars($view["event"]->venue_phone, ENT_QUOTES, 'UTF-8'); ?></p>

                <p><img src="<?php echo URL; ?>images/icons/phone.png" width="15"> <?php echo htmlspecialchars($view["event"]->venue_cellphone, ENT_QUOTES, 'UTF-8'); ?></p>

                <p><a href="<?php echo htmlspecialchars($view["event"]->venue_info_facebook, ENT_QUOTES, 'UTF-8'); ?>"><img src="<?php echo URL; ?>images/icons/facebook_icon.png" width="15"> <?php echo preg_replace('#^https?://www.#', '',htmlspecialchars($view["event"]->venue_info_facebook, ENT_QUOTES, 'UTF-8')); ?></a></p>
              </div>

              <div class="description">
                <p><?php echo htmlspecialchars($view["event"]->venue_short_desc, ENT_QUOTES, 'UTF-8'); ?></p>
              </div>
            </div><!-- END INFO-GEST -->

            <div class="others-event">
              <div class="head">
                <p>Others event <i>Near You</i>:</p>
              </div>
              <?php foreach ($view['nearEvents'] as $event) { ?>
              <a href="<?php echo URL; ?>event/id/<?php if (isset($event->event_id)) echo htmlspecialchars($event->event_id, ENT_QUOTES, 'UTF-8'); ?>">
              <div class="other-event">
                <div class="image"><img src="<?php echo URL; ?><?php if (isset($event->event_picture_preview)) echo htmlspecialchars($event->event_picture_preview, ENT_QUOTES, 'UTF-8'); ?>"></div>

                <div class="info">
                  <p class="name"><strong><?php if (isset($event->event_name)) echo htmlspecialchars($event->event_name, ENT_QUOTES, 'UTF-8'); ?></strong></p>

                  <p class="location"><img src="<?php echo URL; ?>images/icons/location_small.png"><?php if (isset($event->venue_name)) echo htmlspecialchars($event->venue_name, ENT_QUOTES, 'UTF-8'); ?>, Miami Beach</p>

                  <p class="date"><img src="<?php echo URL; ?>images/icons/calendar.png" width="18"><?php if (isset($event->event_start_time)) echo htmlspecialchars($event->event_start_time, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
              </div>
              </a>
              <?php } ?>

            </div><!-- END OTHERS-EVENT -->
          </div><!-- END RIGHT-EVENTPAGE -->

          <div class="clearBoth"></div><!-- Clear Code -->
        </div><!--END CONT BOX -->

        <div class="clearBoth"></div><!-- CLear Code -->
      </div><!--END div CONTAINER-->
    </div>
