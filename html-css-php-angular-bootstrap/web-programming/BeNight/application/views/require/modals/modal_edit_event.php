  <!-- MODAL EDIT WIZARD -->
	<div class="wizard" id="satellite-wizard-2" data-title="Edit Event">

			<!-- Step 1 Name & FQDN -->
			<div class="wizard-card" data-cardname="title">
				<h3>Title</h3>

				<div class="wizard-input-section">
					<div class="form-group">
						<div class="col-sm-6">
							<input type="text" class="form-control" id="label" name="eventName" placeholder="Event Name" data-validate="validateEventName">
						</div>
					</div>
				</div>

				<div class="wizard-input-section">
					<p>Event Description</p>

					<div class="form-group">
						<div class="col-sm-8">
							<div class="input-group">
								
                                    <textarea cols="40" rows="5" name="descrizione" id="textarea_newevent" class="form-control" placeholder="Add description..." data-validate="validateEventDescription" data-is-valid="0" data-lookup="0" ></textarea>
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
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
        <script type="text/javascript">
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
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
        <script type="text/javascript">
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

					<div class="form-group">
					</div>
					</div>
                
			</div>

			<div class="wizard-card wizard-card-overlay" data-cardname="services">
				<h3>Table</h3>


				<div class="wizard-input-section">
					<table width="450" border="0" cellpadding="0">
  <tbody><tr>
    <td width="185" style="border-right:1px solid #CCC; padding-right:10px;"><p style="font-size:16px; color:#666; margin-bottom:20px;"><strong>Table Small</strong></p>
<p style="font-size:14px; color:#666; margin-bottom:20px;"><input type="text" name="table_small_price" pid="input_short2_newevent" placeholder="Price" class="form-control"></p>

<p style="font-size:14px; color:#666; margin-bottom:20px;"><textarea cols="15" rows="5" name="table_small_description" class="form-control" id="textarea_newevent" placeholder="Add Description..."></textarea></p></td>
    <td width="185" style="border-right:0px solid #CCC; padding-left:10px; padding-right:10px;"><p style="font-size:16px; color:#666; margin-bottom:20px;"><strong>Table Medium</strong></p>
<p style="font-size:14px; color:#666; margin-bottom:20px;"><input type="text" name="table_medium_price" class="form-control" placeholder="Price" id="input_short2_newevent"></p>

<p style="font-size:14px; color:#666; margin-bottom:20px;"><textarea cols="15" rows="5" name="table_medium_description" class="form-control" id="textarea_newevent" placeholder="Add Description..."></textarea></p></td>
  </tr>
</tbody></table>
				</div>
			</div>

			<div class="wizard-card wizard-card-overlay" data-cardname="table">
				<h3>Drink</h3>

							<div class="wizard-input-section">
					<table width="450" border="0" cellpadding="0">
  <tbody><tr>
    <td width="185" style="border-right:1px solid #CCC; padding-right:10px;"><p style="font-size:16px; color:#666; margin-bottom:20px;"><strong>Drink Small</strong></p>
<p style="font-size:14px; color:#666; margin-bottom:20px;"><input type="text" name="table_small_price" pid="input_short2_newevent" placeholder="Price" class="form-control"></p>

<p style="font-size:14px; color:#666; margin-bottom:20px;"><textarea cols="15" rows="5" name="table_small_description" class="form-control" id="textarea_newevent" placeholder="Add Description..."></textarea></p></td>
    <td width="185" style="border-right:0px solid #CCC; padding-left:10px; padding-right:10px;"><p style="font-size:16px; color:#666; margin-bottom:20px;"><strong>Drink Medium</strong></p>
<p style="font-size:14px; color:#666; margin-bottom:20px;"><input type="text" name="table_medium_price" class="form-control" placeholder="Price" id="input_short2_newevent"></p>

<p style="font-size:14px; color:#666; margin-bottom:20px;"><textarea cols="15" rows="5" name="table_medium_description" class="form-control" id="textarea_newevent" placeholder="Add Description..."></textarea></p></td>
  </tr>
</tbody></table>
				</div>
			</div>

			<div class="wizard-card wizard-card-overlay">
				<h3>Flayer</h3>
				<div class="wizard-input-section">
                          <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 120px; max-height: 120px;">
                              <img data-src="holder.js/120x120" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 120px; max-height: 120px;"></div>
                            <div>
                              <span class="btn btn-primary btn-embossed btn-file">
                                <span class="fileinput-new"><span class="fui-image"></span>  Select image</span>
                                <span class="fileinput-exists"><span class="fui-gear"></span>  Change</span>
                                <input type="file" name="...">
                              </span>
                              <a href="#" class="btn btn-primary btn-embossed fileinput-exists" data-dismiss="fileinput"><span class="fui-trash"></span>  Remove</a>
                            </div>
                          </div>
                        </div>
			</div>
			
			<div class="wizard-card">
				<h3>Event Setup</h3>

				<div class="wizard-input-section">
					<p>Make sure that all the information are correct and submit to create the event.
					</p>
                </div>


				<div class="wizard-error">
					<div class="alert alert-error">
						<strong>There was a problem</strong> with your submission.
						Please correct the errors and re-submit.
					</div>
				</div>
	
				<div class="wizard-failure">
					<div class="alert alert-error">
						<strong>There was a problem</strong> submitting the form.
						Please try again in a minute.
					</div>
				</div>
	
				<div class="wizard-success">
					<div class="alert alert-success">
						<span class="create-server-name"></span>Event Created <strong>Successfully.</strong>
					</div>
	
					<a class="btn btn-default create-another-server">Create another event</a>
					<span style="padding:0 10px">or</span>
					<a class="btn btn-success im-done">Done</a>
				</div>
			</div>
		</div>
     <!-- MODAL EDIT WIZARD END -->