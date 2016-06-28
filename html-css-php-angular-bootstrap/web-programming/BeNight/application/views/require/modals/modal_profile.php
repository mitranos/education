<!-- MODAL PROFILES START-->
<form action="promotersettings/editInfo" method="POST" enctype="multipart/form-data">
 <div class="modal fade" id="profileModal" style="display:none" tabindex="-1">
    <div class="modal-dialog" style="width:400px;">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close fui-cross" data-dismiss="modal" type="button"></button>

          <h4 class="modal-title">Edit your profile picture</h4>
        </div>

        <div class="modal-body">
          <div class="form-group" style="text-align:center;">
            <div class="fileinput fileinput-new" data-provides="fileinput">
              <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;"><img alt="..." data-src="holder.js/200x200"></div>

              <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>

              <div>
                <span class="btn btn-primary btn-embossed btn-file"><span class="fileinput-new"><span class="fui-image"></span> Select image</span> <span class="fileinput-exists"><span class=
                "fui-gear"></span> Change</span> <input name="profile" type="file"></span> <a class="btn btn-primary btn-embossed fileinput-exists" data-dismiss="fileinput" href="#"><span class=
                "fui-trash"></span> Remove</a>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="coverModal" style="display:none" tabindex="-1">
    <div class="modal-dialog" style="width:900px;">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close fui-cross" data-dismiss="modal" type="button"></button>

          <h4 class="modal-title">Edit your cover image</h4>
        </div>

        <div class="modal-body">
          <div class="form-group">
            <div class="fileinput fileinput-new" data-provides="fileinput">
              <div class="fileinput-new thumbnail" style="width: 810px; height: 250px;"><img alt="..." data-src="holder.js/810x250"></div>

              <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 810px; max-height: 250px;"></div>

              <div>
                <span class="btn btn-primary btn-embossed btn-file"><span class="fileinput-new"><span class="fui-image"></span> Select image</span> <span class="fileinput-exists"><span class=
                "fui-gear"></span> Change</span> <input name="cover" type="file"></span> <a class="btn btn-primary btn-embossed fileinput-exists" data-dismiss="fileinput" href="#"><span class=
                "fui-trash"></span> Remove</a>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="backgroundModal" style="display:none" tabindex="-1">
    <div class="modal-dialog" style="width:600px;">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close fui-cross" data-dismiss="modal" type="button"></button>

          <h4 class="modal-title">Edit your background picture</h4>
        </div>

        <div class="modal-body">
          <div class="form-group">
            <div class="fileinput fileinput-new" data-provides="fileinput">
              <div class="fileinput-new thumbnail" style="width: 400px; height: 250px;"><img alt="..." data-src="holder.js/400x250"></div>

              <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 400px; max-height: 250px;"></div>

              <div>
                <span class="btn btn-primary btn-embossed btn-file"><span class="fileinput-new"><span class="fui-image"></span> Select image</span> <span class="fileinput-exists"><span class=
                "fui-gear"></span> Change</span> <input name="background" type="file"></span> <a class="btn btn-primary btn-embossed fileinput-exists" data-dismiss="fileinput" href="#"><span class=
                "fui-trash"></span> Remove</a>
              </div>
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
<!-- MODAL PROFILES END-->
