  <!-- MODAL START SIGN IN / SIGNUP -->
  <div class="modal fade" id="myModal" style="display:none" tabindex="-1">
    <!-- MODAL START SIGN IN -->
    <div class="modal-dialog" id="signinbox">
      <div class="row"> <!--ng-controller="signinFormCtrl" ng-submit="processForm()" -->
        <form class="form-signin mg-btm" method="post" action="<?php echo URL . "login/login"; ?>" name="loginform" id="loginform">
          <h3 class="heading-desc"><button class="close pull-right" data-dismiss="modal" type="button">×</button> Login to BeNight</h3>

          <div class="social-box">
            <div class="row mg-btm">
              <div class="col-md-12">
                <a class="btn btn-info btn-block" href="#"><i class="icon-facebook"></i> &nbsp;&nbsp;&nbsp;Login with Facebook</a>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <a class="btn btn-danger btn-block" href="#"><i class="icon-twitter"></i> &nbsp;&nbsp;&nbsp;Login with Twitter</a>
              </div>
            </div>
          </div>

          <div class="main">
            <input autofocus class="form-control" placeholder="Email" type="text" name="user_name" ng-model="formData.user_name">
            <input class="form-control" placeholder="Password" type="password" name="user_password" ng-model="formData.user_password"> 
            <label class="checkbox" for="checkbox1"><input data-toggle="checkbox" id="checkbox1" type="checkbox" name="user_rememberme"> Remember me</label> <span class="clearfix"></span>
            <a href="#">Forgot your password?</a> <span class="clearfix"></span>
          </div>
          
          <div class="login-footer">
            <div class="row">
              <div class="col-xs-7 col-md-7">
                <div class="left-section">
                  <a href="#" onclick="$('#signinbox').hide(); $('#signupbox').show()">Sign up now</a> <span class="clearfix"></span>
                  <br>
                  Are you a venue or promoter? <a href="">Get started here</a> <span class="clearfix"></span>
                </div>
              </div>

              <div class="col-xs-5 col-md-5 pull-right">
                <button class="btn btn-large btn-primary pull-right" name="submit_login" >Login</button>
              </div>
            </div>
          </div>
        </form >
      </div>
    </div>
	<!-- MODAL END SIGN IN-->
    
    <!-- MODAL START SIGN UP-->
    <div class="modal-dialog" id="signupbox">
      <div class="row">
        <form class="form-signin mg-btm" method="post" action="<?php echo URL . "login/register_action"; ?>" name="registerform">
          <h3 class="heading-desc"><button class="close pull-right" data-dismiss="modal" type="button">×</button> Sign up to BeNight</h3>

          <div class="social-box">
            <div class="row mg-btm">
              <div class="col-md-12">
                <a class="btn btn-info btn-block" href="#"><i class="icon-facebook"></i> &nbsp;&nbsp;&nbsp;Sign up with Facebook</a>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <a class="btn btn-danger btn-block" href="#"><i class="icon-twitter"></i> &nbsp;&nbsp;&nbsp;Sign up with Twitter</a>
              </div>
            </div>
          </div>

          <div class="main">
            <div class="row">
              <div class="col-xs-6 col-md-6">
                <input autofocus class="form-control" name="first_name" placeholder="First Name" required="" type="text">
              </div>

              <div class="col-xs-6 col-md-6">
                <input autofocus class="form-control" name="last_name" placeholder="Last Name" required="" type="text">
              </div>
            </div>
            <input autofocus class="form-control" name="user_email" placeholder="Your Email" required="" type="email"> 
            <input autofocus class="form-control" name="user_email_repeat" placeholder="Re-enter Email" required="" type="email"> 
            <input autofocus class="form-control" name="user_password_new" placeholder="New Password" required="" type="password"> <label for="">Birth
            Date</label>

            <div style="margin-bottom:10px">
              <div class='input-group date' id='datetimepicker1'>
                <input class="form-control" name="user_birthday" style="margin-bottom:-10px;" type='text'> <span class="input-group-addon" style="padding: 13px 12px;"><span class=
                "glyphicon glyphicon-calendar"></span></span>
              </div>
			  <script type="text/javascript">
			    $(function () {
                  $('#datetimepicker1').datetimepicker({
                    pickTime: false 
                  });
                });
              </script>
            </div><label class="radio-inline"><input id="inlineCheckbox1" name="sex" type="radio" value="1"> Male</label> <label class="radio-inline"><input id="inlineCheckbox2" name="sex" type=
            "radio" value="2"> Female</label> <span class="clearfix"></span>
            <label class="checkbox" for="checkbox0"><input data-toggle="checkbox" id="checkbox0" type="checkbox" name="user_owner" value="1"> Owner of a Venue</label> <span class="clearfix"></span>
            <label class="checkbox" for="checkbox1"><input data-toggle="checkbox" id="checkbox1" type="checkbox" value=""> I have read and agree to the <a href="#" target="_blank">Terms of use</a> and <a href="privacy" target="_blank">Privacy Policy</a></label> <span class="clearfix"></span>
          </div>

          <div class="login-footer">
            <div class="row">
              <div class="col-xs-7 col-md-7">
                <div class="left-section">
                  <a href="#" onclick="$('#signupbox').hide(); $('#signinbox').show()">Login now</a>
                </div>
              </div>

              <div class="col-xs-5 col-md-5 pull-right">
                <button class="btn btn-large btn-primary pull-right" type="submit" name="submit_registration">Sign up</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div><!-- MODAL END SIGN UP-->
  </div><!-- MODAL END SIGN IN / SIGN UP -->
