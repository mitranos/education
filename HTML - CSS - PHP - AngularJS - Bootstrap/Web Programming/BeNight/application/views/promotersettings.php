
    <!-- CONTAINER VENUE START-->

    <div id="body_profilogestore_background" style="background:url(<?php if (isset($_SESSION["user_venue_backgr"])) echo htmlspecialchars($_SESSION["user_venue_backgr"], ENT_QUOTES, 'UTF-8'); ?>); background-size:auto; background-repeat: no-repeat;background-color: #000;">
      <div id="container_profilogestore">
        <div id="box_gestioneevento">
	<form action="promotersettings/editInfo" method="POST" enctype="multipart/form-data">
          <div class="main-settings">
            <div class="head">
              <p>Edit Venue Data</p>
		<div class="botton" style="width:120px; float:right; margin-top:-50px">
              <input class="btn btn-primary" id="tasto_partecipa" name="update_submit" style="" type="submit" value="Update Info">
              </div>
            </div>

            <div class="content">
              <div class="left-box">
                <ul class="nav nav-list" id="myTab">
                  <li class=""><a data-toggle="tab" href="#personal-data">Venues data <span class="glyphicon glyphicon-chevron-right" style="float:right;"></span></a></li>
                  <li class=""><a data-toggle="tab" href="#information">Info &amp; contact <span class="glyphicon glyphicon-chevron-right" style="float:right;"></span></a></li>
                  <li class=""><a data-toggle="tab" href="#appearance">Appearance <span class="glyphicon glyphicon-chevron-right" style="float:right;"></span></a></li>
                  <li class=""><a data-toggle="tab" href="#social-connected">Social connected <span class="glyphicon glyphicon-chevron-right" style="float:right;"></span></a></li>
                  <!--<li class=""><a data-toggle="tab" href="#account">Account <span class="glyphicon glyphicon-chevron-right" style="float:right;"></span></a></li>-->
                </ul>
              </div>

              <div class="right-box">
                <div class="tab-content">
                  <div class="tab-pane" id="personal-data">
                    <div class="edit-personaldata">
                      <p>Venue's name</p><input class="form-control" placeholder="Venue's name" name="venue_name" type="text" value="<?php echo $view['venueinfo']->venue_name; ?>">
                    </div>

                    <div class="edit-personaldata">
                      <p>Category</p>
                      <select class="form-control" name="category">
                        <option <?php if ($view['venueinfo']->venue_category == 1) echo "selected='selected'" ?> value="1">Night Club</option>
                        <option <?php if ($view['venueinfo']->venue_category == 2) echo "selected='selected'" ?> value="2">Disco</option>
                        <option <?php if ($view['venueinfo']->venue_category == 3) echo "selected='selected'" ?> value="3">Pub</option>
                        <option <?php if ($view['venueinfo']->venue_category == 4) echo "selected='selected'" ?> value="4">Bar</option>
                        <option <?php if ($view['venueinfo']->venue_category == 5) echo "selected='selected'" ?> value="5">Lounge</option>
                        <option <?php if ($view['venueinfo']->venue_category == 6) echo "selected='selected'" ?> value="6">Strip Club</option>
                      </select>
                    </div>

                    <div class="edit-personaldata">
                      <p>Location</p>

                      <div style="width:500px; height:200px;">
    						<input id="pac-input" class="controls" type="text" placeholder="Search Box" name="address" value="<?php echo $view['venueinfo']->venue_address; ?>">
    					<div id="map-canvas"></div>
  						</div>
                    </div>

                    <div class="clearBoth"></div>
                  </div>

                  <div class="tab-pane" id="information">
                    <div class="edit-info">
                      <p>Short description</p>
                      <textarea class="form-control" name="short_desc"><?php echo $view['venueinfo']->venue_short_desc; ?></textarea>

                      <p>Long description</p>
                      <textarea class="form-control" cols="20" rows="10" name="long_desc"><?php echo $view['venueinfo']->venue_long_desc; ?></textarea>
                      <p>Telephone</p><input class="form-control" placeholder="Telephone" type="text" name="phone" value="<?php echo $view['venueinfo']->venue_phone; ?>">

                      <p>Mobile</p><input class="form-control" placeholder="Mobile" type="text" type="text" name="cellphone" value="<?php echo $view['venueinfo']->venue_cellphone; ?>" >

                      <p>Email contact</p><input class="form-control" placeholder="Email" type="text" name="info_email" value="<?php echo $view['venueinfo']->venue_info_email; ?>">

                      <p>Web Site</p><input class="form-control" placeholder="URL" type="text" name="info_website" value="<?php echo $view['venueinfo']->venue_info_website; ?>">
                    </div>

                    <div class="clearBoth"></div>
                  </div>

                  <div class="tab-pane" id="appearance">
                    <a data-target="#profileModal" data-toggle="modal" href="">
                    <div id="box_aspect" style="float:left; padding:40px">
                    <p>Profile picture</p><img src="images/icons/no_imgprofile.png"></div></a> <a data-target="#coverModal" data-toggle="modal" href="">
                    <div id="box_aspect" style="float:left; padding:40px">
                    <p>Cover</p><img src="images/icons/copertina_default.png" width="250"></div></a> <a data-target="#backgroundModal" data-toggle="modal" href="">
                    <div id="box_aspect" style=" margin-left:150px;">
                    <p>Background</p><img src="images/icons/background_default.png" width="250"></div></a>

                    <div class="clearBoth"></div>
                  </div>

                  <div class="tab-pane" id="social-connected">
                    <div class="edit-social">
                      <p>Social connected</p>
                      <div class="icon"> <a data-target="#facebookModal" data-toggle="modal" href=""><img src="images/icons/social/facebook-check.png" width="70"></a></div>
                      <div class="icon"><a data-target="#twitterModal" data-toggle="modal" href=""><img src="images/icons/social/twitter-check.png" width="70"></a></div>
                      <div class="icon"><a data-target="#googleModal" data-toggle="modal" href=""><img src="images/icons/social/google+-grey.png" width="70"></a></div>
                      <div class="icon"><a data-target="#instagramModal" data-toggle="modal" href=""><img src="images/icons/social/instagram-check.png" width="70"></a></div>
                      <div class="icon"><a data-target="#youtubeModal" data-toggle="modal" href=""><img src="images/icons/social/youtube-check.png" width="70"></a></div>
                      <div class="icon"><a data-target="#pinterestModal" data-toggle="modal" href=""><img src="images/icons/social/pinterest-grey.png" width="70"></a></div>
                    </div>
                    <div class="clearBoth"></div>
                  </div>
				<!--
                  <div class="tab-pane" id="account">
                    <div class="edit-account">
                      <p>Email</p>

                      <div class="form-group">
                        <div class="input-group">
                          <input class="form-control" placeholder="Append" type="text"> <span class="input-group-addon">@</span>
                        </div>
                      </div>

                      <p><a href="">Change password</a></p>
                    </div>

                    <div class="clearBoth"></div>
                  </div>
                  -->
                </div><!--END TAB CONTENT -->
                <script>
$(function () {
                $('#myTab a:first').tab('show')
                })
                </script>
              </div>

              <div class="clearBoth"></div>
            </div>
          </div>
        </div>
      </div><!--fine div CONTAINER-->
     </form>
    </div><!--fine BODY2-->
    <!-- CONTAINER VENUE END-->
    <script type="text/javascript"> 

	function stopRKey(evt) { 
  		var evt = (evt) ? evt : ((event) ? event : null); 
  		var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  		if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
	} 

	document.onkeypress = stopRKey; 
</script>
