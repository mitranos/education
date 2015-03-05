  <!-- MODAL CREATE ALBUM START -->
<form action="managealbums/create" method="POST" enctype="multipart/form-data">
  <div class="modal fade" id="createalbumModal" style="display:none" tabindex="-1">
    <div class="modal-dialog" style="width:950px;">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close fui-cross" data-dismiss="modal" type="button"></button>

          <h4 class="modal-title">Create New Album</h4>

          <p>Title <input class="form-control" placeholder="Album's title" style="width:400px;" type="text" name="album_name"></p>

          <p>Description 
          <textarea class="form-control" style="width:600px;" name="album_desc">
</textarea></p>
        </div>

        <div class="modal-body">
          <div class="form-group">
            <div class="fileinput fileinput-new" data-provides="fileinput">
              <span class="btn btn-primary btn-embossed btn-file"><span class="fileinput-new"><span class="fui-upload"></span> Attach File</span> <span class="fileinput-exists"><span class=
              "fui-gear"></span> Change</span> <input name="picture" type="file"></span> <span class="fileinput-filename"></span> <a class="close fileinput-exists" data-dismiss="fileinput" href="#"
              style="float: none">×</a>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Save</button>
        </div>
      </div>
    </div>
  </div>
  </form>
    <!-- MODAL CREATE ALBUM END -->
  
  <!-- MODAL EDIT ALBUM START -->
  <div class="modal fade" id="editalbumModal" style="display:none" tabindex="-1">
    <div class="modal-dialog" style="width:950px;">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close fui-cross" data-dismiss="modal" type="button"></button>

          <h4 class="modal-title">Edit Album</h4>

          <p>Title <input class="form-control" placeholder="Album's title" style="width:400px;" type="text"></p>

          <p>Description 
          <textarea class="form-control" style="width:600px;">
Description
</textarea></p>
        </div>

        <div class="modal-body">
        <div class="form-group">
          <div class="fileinput fileinput-new" data-provides="fileinput">
            <span class="btn btn-primary btn-embossed btn-file"><span class="fileinput-new"><span class="fui-upload"></span> Attach File</span> <span class="fileinput-exists"><span class=
            "fui-gear"></span> Change</span> <input name="..." type="file"></span> <span class="fileinput-filename"></span> <a class="close fileinput-exists" data-dismiss="fileinput" href="#" style=
            "float: none">×</a>
          </div>
        </div><img alt="exaple-image" class="img-rounded" src="images/icons/locandina1.jpg" style="width:200px;"> <img alt="exaple-image" class="img-rounded" src="images/icons/locandina1.jpg" style=
        "width:200px;"></div>

        <div class="modal-footer">
          <button class="btn btn-danger">Delete</button> <button class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
  <!-- MODAL EDIT ALBUM END -->