<!-- Header Start -->
  <header class="header-23">
    <div class="container">
      <div class="row">
        <div class="navbar col-sm-12">
          <div class="navbar-inner">
            <button class="navbar-toggle" type="button"></button> <a class="brand" href=""><img alt="BeNight Logo" data-at2x="<?php echo URL; ?>images/logo_bn_night.png" src="<?php echo URL; ?>images/logo_bn_night.png" width="160"></a>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-right dl-menu">
              
              <?php if (!isset($_SESSION["user_logged_in"])) { ?>
              	<li><form method="get" action="<?php echo URL; ?>search" id="searchform"><input type="text" size="40" name="search" placeholder="Search" /></form></li>
                <li><a href="<?php echo URL; ?>userinfo">Users</a></li>
                <li><a href="#">Promoters</a></li>
                <li><a href="#">Venues</a></li>
                <li><a href="contact">Contact</a></li>
                <li style="margin-top:20px; margin-left:20px"><button class="btn btn-primary signIn" data-target="#myModal" data-toggle="modal" onclick="$('#signupbox').hide(); $('#signinbox').show()">Sign In</button></li>
                
                <?php }elseif(isset($_SESSION["user_venue_id"])){ ?>
                
                <li><form method="get" action="<?php echo URL; ?>search" id="searchform"><input type="text" size="40" name="search" placeholder="Search" /></form></li>
                <li style="margin-right:30px; margin-top:-10px"><a href="<?php echo URL; ?>venue"><img src="<?php echo URL; ?><?php if (isset($_SESSION["user_venue_picture"])) echo htmlspecialchars($_SESSION["user_venue_picture"], ENT_QUOTES, 'UTF-8'); ?>" class="profile-image img-circle" height="40px" width="40px"><?php if (isset($_SESSION["user_venue_name"])) echo htmlspecialchars($_SESSION["user_venue_name"], ENT_QUOTES, 'UTF-8'); ?></a></li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fui-gear" style="font-size: 1.4em;"></span></a>
			    <span class="dropdown-arrow"></span>
				  <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo URL; ?>user/user_back"><img src="<?php echo URL; ?><?php if (isset($_SESSION["user_profile_path"])) echo htmlspecialchars($_SESSION["user_profile_path"], ENT_QUOTES, 'UTF-8'); ?>" class="profile-image img-circle" height="30px" width="30px"> <?php echo $_SESSION["user_first"]; ?> </a></li>
				    <li id="open-wizard" ><a href="#">Create Event</a></li>
				    <li><a href="<?php echo URL; ?>manageevent">Manage Events</a></li>
				    <li><a href="<?php echo URL; ?>managealbums">Manage Albums</a></li>
                      <li><a href="<?php echo URL; ?>promotersettings">Settings</a></li>
				    <li class="divider"></li>
				    <li><a href="<?php echo URL; ?>login/logout">Log Out</a></li>
                    </ul>
			  </li>
                
                <?php }else { ?>
                
                <li><form method="get" action="<?php echo URL; ?>search" id="searchform"><input type="text" size="40" name="search" placeholder="Search" /></form></li>
                <li style="margin-right:30px; margin-top:-10px"><a href="<?php echo URL; ?>user"><img src="<?php echo URL; ?><?php if (isset($_SESSION["user_profile_path"])) echo htmlspecialchars($_SESSION["user_profile_path"], ENT_QUOTES, 'UTF-8'); ?>" class="profile-image img-circle" height="40px" width="40px"> <?php echo $_SESSION["user_first"] . " " .$_SESSION["user_last"]; ?> </a></li>
			  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fui-gear" style="font-size: 1.4em;"></span></a>
			    <span class="dropdown-arrow"></span>
				  <ul class="dropdown-menu" role="menu">
                  		<?php if ($_SESSION["user_account_type"] >= 2) { ?>
                  		<li><a href="<?php echo URL; ?>createvenue">Create Venue</a></li>
                        <?php } ?>
                      <?php if(!empty($_SESSION["venuesInfo"])){?>
                      <?php foreach ($_SESSION["venuesInfo"] as $venue) { ?>
                      <li><a href="<?php echo URL; ?>venue/get_venue/<?php if (isset($venue->venue_id)) echo htmlspecialchars($venue->venue_id, ENT_QUOTES, 'UTF-8'); ?>">
                      <img src="<?php echo URL; ?><?php if (isset($venue->venue_profile_picture)) echo htmlspecialchars($venue->venue_profile_picture, ENT_QUOTES, 'UTF-8'); ?>" class="profile-image img-circle" height="30px" width="30px">
                      <?php if (isset($venue->venue_name)) echo htmlspecialchars($venue->venue_name, ENT_QUOTES, 'UTF-8'); ?></a></li>
                      <?php } ?>
                      <?php }?>
				    <li><a href="<?php echo URL; ?>wishlist">My Wishlist</a></li>
						<?php if ($_SESSION["user_account_type"] >= 3) { ?>
                  		<li><a href="<?php echo URL; ?>venuecheck">Verify Venues</a></li>
                        <?php } ?>		          
                      <li><a href="<?php echo URL; ?>usersettings">Settings</a></li>
				    <li class="divider"></li>
				    <li><a href="<?php echo URL; ?>login/logout">Log Out</a></li>
				  </ul>
			   </li>
                 
                <?php }; ?>
                    
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
<!-- Header End -->
