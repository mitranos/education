    <!-- CONTAINER USER START-->
    <div id="main-user-bg" style="background:url(images/background/background.jpg); background-size:auto;">
     <form action="createvenue/create" method="POST" enctype="multipart/form-data">
      <div class="container-user">
        <div id="box_gestioneevento">
          <div id="title_edit">
            <div id="men_edit"><font style="font-size:26px; color:#999;"><span id="heart"class="glyphicon glyphicon-plus" style="float:left; margin-right:10px; ;font-size: 1.4em; color: #1FCB3D;" ></span>Create new venue</font></div>
            <div class="botton" style="width:120px; float:right; margin-top:-50px">
              <input class="btn btn-primary" id="" name="create_submit" style="" type="submit" value="Create Venue">
              </div>
            <div class="clearBoth">
              <!-- -->
            </div>
          </div><!--FINE DIV TITLE_EDIT -->
          <div id="cont_createvenue">
          	<p>Venue's name</p>
            <input class="form-control" placeholder="Venue's name" style="width:400px;" type="text" name="venue_name">
            <p>Description</p>
            <textarea class="form-control" style="width:600px;" name="venue_short_desc"></textarea>
            <p>Address</p>
            <div style="width:500px; height:200px;">
    			<input id="pac-input" class="controls" type="text" placeholder="Search Box" name="venue_address" value="">
    			<div id="map-canvas"></div>
  			</div>
            <p>Category</p>
            	<div class="radiocategory">
                    <label class="radio">
                        <input checked="checked" data-toggle="radio" name="category" type="radio" value="1">Nightclub
                    </label>
                </div>
                <div class="radiocategory">
                    <label class="radio">
                        <input data-toggle="radio" name="category" type="radio" value="2">Disco
                    </label>
                </div>
                <div class="radiocategory">
                    <label class="radio">
                        <input data-toggle="radio" name="category" type="radio" value="3">Pub
                    </label>
                </div>
                <div class="radiocategory">
                    <label class="radio">
                        <input data-toggle="radio" name="category" type="radio" value="4">Bar
                    </label>
                </div>
                <div class="radiocategory">
                    <label class="radio">
                        <input data-toggle="radio" name="category" type="radio" value="5">Lounge
                    </label> 
                </div>
                <div class="radiocategory">
                    <label class="radio">
                        <input data-toggle="radio" name="category" type="radio" value="6">Strip Club
                    </label> 
                </div>
            	
			 <script>
				$(':radio').radio();
           		$(':checkbox').checkbox('uncheck');
            </script>
            <div class="clearBoth"></div>
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
                      <div class="clearBoth"></div>
                      <br><br>
          </div>
        </div>
        <div class="clearBoth"></div><!-- Clear Code -->
      </div><!--fine div CONTAINER-->
    </div><!--fine BODY2-->
    </form>
    <!-- CONTAINER USER END-->
    <script type="text/javascript"> 

	function stopRKey(evt) { 
  		var evt = (evt) ? evt : ((event) ? event : null); 
  		var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  		if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
	} 

	document.onkeypress = stopRKey; 
</script>