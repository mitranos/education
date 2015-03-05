    <!-- CONTAINER VENUE START-->
    <div id="body_profilogestore_background" style="background:url(<?php if (isset($_SESSION["user_venue_backgr"])) echo htmlspecialchars($_SESSION["user_venue_backgr"], ENT_QUOTES, 'UTF-8'); ?>); background-size:auto; background-repeat: no-repeat;background-color: #000;">
      <div id="container_profilogestore">
        <div id="box_gestioneevento">
          <div id="title_edit">
            <div id="men_edit"><font style="font-size:26px; color:#999;">Manage Albums <button id="button-create" style="float:right;" class="btn btn-primary" data-toggle="modal" data-target="#createalbumModal">Create album</button></font></div>
            <div class="clearBoth">
              <!-- -->
            </div>
          </div><!--FINE DIV TITLE_EDIT -->
          <div id="cont">
            <div class="edit-album">
              <!--<p>Edit your albums</p>-->
              <?php foreach ($view['albums'] as $album) { ?>
              <!-- data-target="#editalbumModal" data-toggle="modal" -->
              <a href="#">
              <div id="album">
                <div id="album_img"><img src="<?php echo URL; ?><?php if (isset($album->image_path)) echo htmlspecialchars($album->image_path, ENT_QUOTES, 'UTF-8'); ?>"></div><!--end div Album_img -->

                <div id="album_title">
                  <?php if (isset($album->album_name)) echo htmlspecialchars($album->album_name, ENT_QUOTES, 'UTF-8'); ?>
                </div>

                <div id="album_description">
                  <p><?php if (isset($album->album_desc)) echo htmlspecialchars($album->album_desc, ENT_QUOTES, 'UTF-8'); ?></p>
                </div><!--end div Album_description -->
              </div><!--end div Album -->
              </a>
              <?php } ?>
            </div>
			
            <?php if(empty($view['albums'])) { ?>
            <div style="color: #666; font-size: 18px; font-style: italic; padding: 10px 10px 10px 10px; text-align:center;">
              	You do not have uploaded any Albums!</br></br>
                Let's get it started and create some albums <a href="#" data-toggle="modal" data-target="#createalbumModal">here</a></br></br>
            </div>
			<?php } ?> 
            
            <div class="clearBoth"></div>
          </div><!--fine CONT -->
          <br>
          <br>
        </div>
      </div>
    </div><!--fine div CONTAINER--><!--fine BODY2-->
    <!-- CONTAINER VENUE END-->