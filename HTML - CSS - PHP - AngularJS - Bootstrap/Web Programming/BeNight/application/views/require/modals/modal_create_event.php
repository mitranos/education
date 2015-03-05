  <!-- MODAL WIZARD START -->
  <div class="wizard" data-title="Create Event" id="satellite-wizard">
  <!-- Step 1 Name & FQDN -->

  <div class="wizard-card" data-cardname="title">
    <h3>Title</h3>

    <div class="wizard-input-section">
      <div class="form-group">
        <div class="col-sm-6">
          <input class="form-control" data-validate="validateEventName" id="label" name="eventName" placeholder="Event Name" type="text">
        </div>
      </div>
    </div>

    <div class="wizard-input-section">
      <p>Event Description</p>

      <div class="form-group">
        <div class="col-sm-8">
          <div class="input-group">
            <textarea class="form-control" cols="40" data-is-valid="0" data-lookup="0" data-validate="validateEventDescription" id="textarea_newevent" name="description" placeholder=
            "Add description..." rows="5">
</textarea>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="wizard-card" data-cardname="details">
    <h3>Details</h3>

    <div class="wizard-input-section">
      <p>Event Beginning Date & Time</p>

      <div class="form-group">
        <div class="col-sm-6">
          <div class='input-group date input-group-sm' id='datetimepicker1'>
            <input class="form-control" type='text' name="start_date"> <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> <script type="text/javascript">
$(function () {
                $('#datetimepicker1').datetimepicker();
            });
            </script>
          </div>
        </div>
      </div>
    </div>

    <div class="wizard-input-section">
      <p>Event End Date & Time</p>

      <div class="form-group">
        <div class="col-sm-6">
          <div class='input-group date input-group-sm' id='datetimepicker2'>
            <input class="form-control" type='text' name="end_date"> <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> <script type="text/javascript">
$(function () {
                $('#datetimepicker2').datetimepicker();
            });
            </script>
          </div>
        </div>
      </div>
    </div>

    <div class="wizard-input-section">
      <p>Target - (Optional)</p>

      <div class="form-group"></div>
    </div>
  </div>

  <div class="wizard-card wizard-card-overlay" data-cardname="services">
    <h3>Table</h3>

    <div class="wizard-input-section">
      <table border="0" cellpadding="0" width="450">
        <tbody>
          <tr>
            <td style="border-right:1px solid #CCC; padding-right:10px;" width="185">
              <p style="font-size:16px; color:#666; margin-bottom:20px;"><strong>Table Small</strong></p>

              <p style="font-size:14px; color:#666; margin-bottom:20px;"><input class="form-control" name="table_small_price" placeholder="Price" type="text"></p>

              <p style="font-size:14px; color:#666; margin-bottom:20px;">
              <textarea class="form-control" cols="15" id="textarea_newevent" name="table_small_description" placeholder="Add Description..." rows="5">
</textarea></p>
            </td>

            <td style="border-right:0px solid #CCC; padding-left:10px; padding-right:10px;" width="185">
              <p style="font-size:16px; color:#666; margin-bottom:20px;"><strong>Table Medium</strong></p>

              <p style="font-size:14px; color:#666; margin-bottom:20px;"><input class="form-control" id="input_short2_newevent" name="table_medium_price" placeholder="Price" type="text"></p>

              <p style="font-size:14px; color:#666; margin-bottom:20px;">
              <textarea class="form-control" cols="15" id="textarea_newevent" name="table_medium_description" placeholder="Add Description..." rows="5">
</textarea></p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="wizard-card wizard-card-overlay" data-cardname="table">
    <h3>Drink</h3>

    <div class="wizard-input-section">
      <table border="0" cellpadding="0" width="450">
        <tbody>
          <tr>
            <td style="border-right:1px solid #CCC; padding-right:10px;" width="185">
              <p style="font-size:16px; color:#666; margin-bottom:20px;"><strong>Drink Small</strong></p>

              <p style="font-size:14px; color:#666; margin-bottom:20px;"><input class="form-control" name="drink_small_price" placeholder="Price" type="text"></p>

              <p style="font-size:14px; color:#666; margin-bottom:20px;">
              <textarea class="form-control" cols="15" id="textarea_newevent" name="drink_small_description" placeholder="Add Description..." rows="5">
</textarea></p>
            </td>

            <td style="border-right:0px solid #CCC; padding-left:10px; padding-right:10px;" width="185">
              <p style="font-size:16px; color:#666; margin-bottom:20px;"><strong>Drink Medium</strong></p>

              <p style="font-size:14px; color:#666; margin-bottom:20px;"><input class="form-control" id="input_short2_newevent" name="drink_medium_price" placeholder="Price" type="text"></p>

              <p style="font-size:14px; color:#666; margin-bottom:20px;">
              <textarea class="form-control" cols="15" id="textarea_newevent" name="drink_medium_description" placeholder="Add Description..." rows="5">
</textarea></p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="wizard-card wizard-card-overlay">
    <h3>Flayer</h3>

    <div class="wizard-input-section">
      <div class="fileinput fileinput-new" data-provides="fileinput">
        <div class="fileinput-new thumbnail" style="max-width: 120px; max-height: 120px;"><img alt="..." data-src="holder.js/120x120"></div>

        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 120px; max-height: 120px;"></div>

        <div>
          <span class="btn btn-primary btn-embossed btn-file"><span class="fileinput-new"><span class="fui-image"></span> Select image</span> <span class="fileinput-exists"><span class=
          "fui-gear"></span> Change</span> <input name="picture" type="file"></span> <a class="btn btn-primary btn-embossed fileinput-exists" data-dismiss="fileinput" href="#"><span class=
          "fui-trash"></span> Remove</a>
        </div>
      </div>
    </div>
  </div>

  <div class="wizard-card">
    <h3>Event Setup</h3>

    <div class="wizard-input-section">
      <p>Make sure that all the information are correct and submit to create the event.</p>
    </div>

    <div class="wizard-error">
      <div class="alert alert-error">
        <strong>There was a problem</strong> with your submission. Please correct the errors and re-submit.
      </div>
    </div>

    <div class="wizard-failure">
      <div class="alert alert-error">
        <strong>There was a problem</strong> submitting the form. Please try again in a minute.
      </div>
    </div>

    <div class="wizard-success">
      <div class="alert alert-success">
        <span class="create-server-name"></span>Event Created <strong>Successfully.</strong>
      </div><a class="btn btn-default create-another-server">Create another event</a> <span style="padding:0 10px">or</span> <a class="btn btn-success im-done">Done</a>
    </div>
  </div>
</div><!-- MODAL WIZARD END -->