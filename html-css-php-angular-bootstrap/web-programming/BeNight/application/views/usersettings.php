    <!-- CONTAINER USER START-->
    <div id="main-user-bg" style="background:url(images/background/background.jpg); background-size:auto;">
      <form action="usersettings/editInfo" method="POST" enctype="multipart/form-data">
      <div class="container-user">
        <div id="box_gestioneevento">
          <div class="main-settings">
            <div class="head">
              <p>Edit personal data</p>
              <div class="botton" style="width:120px; float:right; margin-top:-50px">
              <input class="btn btn-primary" id="tasto_partecipa" name="update_submit" style="" type="submit" value="Update Info">
              </div>
            </div>

            <div class="content">
              <div class="left-box">
                <ul class="nav nav-list" id="myTab">
                  <li class="">
                    <a data-toggle="tab" href="#personal-data">Personal data <span class="glyphicon glyphicon-chevron-right" style="float:right;"></span></a>
                  </li>

                  <li class="">
                    <a data-toggle="tab" href="#appearance">Appearance <span class="glyphicon glyphicon-chevron-right" style="float:right;"></span></a>
                  </li>

                  <li class="">
                    <a data-toggle="tab" href="#social-connected">Social connected <span class="glyphicon glyphicon-chevron-right" style="float:right;"></span></a>
                  </li>

                  <li class="">
                    <a data-toggle="tab" href="#account">Account <span class="glyphicon glyphicon-chevron-right" style="float:right;"></span></a>
                  </li>
                </ul>
              </div>

              <div class="right-box">
                <div class="tab-content">
                  <div class="tab-pane active" id="personal-data">
                    <div class="edit-personaldata">
                      <p>First Name</p><input class="form-control" placeholder="First Name" value="<?php echo $view['firstName']; ?>"  type="text" name="first_name">
                    </div>

                    <div class="edit-personaldata">
                      <p>Last Name</p><input class="form-control" placeholder="Last Name"  value="<?php echo $view['lastName']; ?>" type="text" name="last_name">
                    </div>

                    <div class="edit-personaldata">
                      <p>Birthday</p>

                      <div class="form-group">
                        <div class='input-group date' id='datetimepicker5'>
                          <input class="form-control" type='text' placeholder="Birthday" value="<?php echo $view['birthday']; ?>" name="birthday"> <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                      </div><script type="text/javascript">
     						$(function () {
                                $('#datetimepicker5').datetimepicker({
                                    pickTime: false 
                                });
                            });
                      </script>
                    </div>

                    <div class="edit-personaldata">
                      <p>Gender</p><select class="form-control" name="gender">
                        <option <?php if ($view['gender'] == "Male") echo "selected='selected'" ?> value="1">
                          Male
                        </option>

                        <option <?php if ($view['gender'] == "Female") echo "selected='selected'" ?> value="2">
                          Female
                        </option>
                      </select>
                    </div>

                    <div class="edit-personaldata">
                      <p>Where do you live?</p><input class="form-control" placeholder="Where do you live?" type="text" value="<?php echo $view['address']; ?>" name="address">
                    </div>

                    <div class="clearBoth"></div>
                  </div>

                  <div class="tab-pane" id="appearance">
                    <div class="edit-cover">
                      <p>Edit cover image</p>

                      <div class="form-group">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-new thumbnail" style="max-width: 810px; max-height: 250px;"><img alt="..." data-src="holder.js/500x160"></div>

                          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 810px; max-height: 250px;"></div>

                          <div>
                            <span class="btn btn-primary btn-embossed btn-file"><span class="fileinput-new"><span class="fui-image"></span> Select image</span> <span class=
                            "fileinput-exists"><span class="fui-gear"></span> Change</span> <input name="cover" type="file"></span> <a class="btn btn-primary btn-embossed fileinput-exists"
                            data-dismiss="fileinput" href="#"><span class="fui-trash"></span> Remove</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="edit-cover">
                      <p>Edit profile image</p>

                      <div class="form-group">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-new thumbnail" style="max-width: 120px; max-height: 120px;"><img alt="..." data-src="holder.js/120x120"></div>

                          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 120px; max-height: 120px;"></div>

                          <div>
                            <span class="btn btn-primary btn-embossed btn-file"><span class="fileinput-new"><span class="fui-image"></span> Select image</span> <span class=
                            "fileinput-exists"><span class="fui-gear"></span> Change</span> <input name="profile" type="file"></span> <a class="btn btn-primary btn-embossed fileinput-exists"
                            data-dismiss="fileinput" href="#"><span class="fui-trash"></span> Remove</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="clearBoth"></div>
                  </div>

                  <div class="tab-pane" id="social-connected">
                    <div class="edit-social">
                      <p>Social connected</p>

                      <div class="icon">
                        <a data-target="#facebookModal" data-toggle="modal" href=""><img src="images/icons/social/facebook-check.png" width="70"></a>
                      </div>

                      <div class="icon">
                        <a data-target="#twitterModal" data-toggle="modal" href=""><img src="images/icons/social/twitter-check.png" width="70"></a>
                      </div>

                      <div class="icon">
                        <a data-target="#googleModal" data-toggle="modal" href=""><img src="images/icons/social/google+-grey.png" width="70"></a>
                      </div>

                      <div class="icon">
                        <a data-target="#instagramModal" data-toggle="modal" href=""><img src="images/icons/social/instagram-check.png" width="70"></a>
                      </div>

                      <div class="icon">
                        <a data-target="#youtubeModal" data-toggle="modal" href=""><img src="images/icons/social/youtube-check.png" width="70"></a>
                      </div>

                      <div class="icon">
                        <a data-target="#pinterestModal" data-toggle="modal" href=""><img src="images/icons/social/pinterest-grey.png" width="70"></a>
                      </div>
                    </div>

                    <div class="clearBoth"></div>
                  </div>

                  <div class="tab-pane" id="account">
                    <div class="edit-account">
                      <p>Email</p>

                      <div class="form-group">
                        <div class="input-group">
                          <input class="form-control" placeholder="Append" type="text" value="<?php echo $view['email']; ?>" style=" color:black;" readonly> <span class="input-group-addon">@</span>
                        </div>
                      </div>

                      <p><a href="">Change password</a></p>
                    </div>

                    <div class="clearBoth"></div>
                  </div>
                </div><!--END TAB CONTENT -->
                <script>
$(function () {
                $('#myTab a:first').tab('show')
                })
                </script>
              </div>
              <div class="clearBoth"></div>
            </div>
          </div><!--END CONT -->
          </form>
        </div>
      </div>
    </div><!--END CONTAINER-->
  <!-- CONTAINER VENUE END-->