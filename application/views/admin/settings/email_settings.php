<section class="input-validation">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><?php echo $page_title; ?></h4>
          
        </div>
        <div class="card-body collapse in">
          <div class="card-block ">
		  
				<form class="form-horizontal striped-labels" id="FormValidation" novalidate method="post" action="<?php echo base_url('settings/update_email_settings');?>">
					 <div class="row form-body">
				    <div class="col-md-6">
					<div class="form-group row">
					<label class="col-md-4 label-control">Select A Mailer<span class="required" style="color:red;">*</span></label>
					<div class="col-md-8">
					<div class="controls">
					  <select name="email_settings[mail_type]"  class="form-control required">
						<option value="" >--Select--</option>
						<option value="php_mailer" <?php if ($email_settings['mail_type'] == 'php_mailer') echo 'selected';?>>
						PHP Mailer</option>
						</select>
						
					</div>
					</div>
				</div>
					<div class="form-group row">
						<label class="col-md-4 label-control">Host Name<span class="required" style="color:red;">*</span></label>
						<div class="col-md-8">
						<div class="controls">
						  <input type="text" class="form-control required" placeholder="Host Name"  name="email_settings[host_name]" value="<?php echo $email_settings['host_name']; ?>">
						</div>
						</div>
						</div>
						
					 <div class="form-group row">
						<label class="col-md-4 label-control">Username<span class="required" style="color:red;">*</span></label>
						<div class="col-md-8">
						<div class="controls">
						  <input type="text" class="form-control required" placeholder="Username"  name="email_settings[smtp_user]" value="<?php echo $email_settings['smtp_user']; ?>">
						</div>
						</div>
						</div>
						
						 <div class="form-group row">
						<label class="col-md-4 label-control">Password<span class="required" style="color:red;">*</span></label>
						<div class="col-md-8">
						<div class="controls">
						<input type="password" class="form-control required" name="email_settings[smtp_password]"  placeholder="Password"
	                                value="<?php echo $email_settings['smtp_password']; ?>">
						</div>
						</div>
						</div>
						
						<div class="form-group row">
							<label class="col-md-4 label-control">Encryption<span class="required" style="color:red;">*</span></label>
									<div class="col-md-8">
										<div class="controls">
											<select name="email_settings[encryption]"  class="form-control required">
												<option value="" >--Select--</option>
												<option value="ssl" <?php if ($email_settings['encryption'] == 'ssl') echo 'selected';?>>SSL</option>
												<option value="tsl" <?php if ($email_settings['encryption'] == 'tsl') echo 'selected';?>>TSL</option>
														
														</select>
														
													</div>
													</div>
												</div>
					
						
					
	                   <div class="text-xs-right">
                    <button type="submit" class="btn btn-success">Submit <i class="icon-thumbs-up position-right"></i></button>
                    </div> 
					</div> 
					
					  <div class="col-md-6">
					  
					  <div class="form-group row">
						<label class="col-md-4 label-control">From<span class="required" style="color:red;">*</span></label>
						<div class="col-md-8">
						<div class="controls">
						<input type="text" class="form-control required" name="email_settings[from_mail]"  placeholder="From"
	                                value="<?php echo $email_settings['from_mail']; ?>">
						</div>
						</div>
						</div>
						
						
						<div class="form-group row">
						<label class="col-md-4 label-control">Port <span class="required" style="color:red;">*</span></label>
						<div class="col-md-8">
						<div class="controls">
						<input type="text" class="form-control required" name="email_settings[smtp_port]"  placeholder="Port"
	                                value="<?php echo $email_settings['smtp_port']; ?>">
						</div>
						</div>
						</div>
						<div class="form-group row">
						<label class="col-md-4 label-control">Footer <span class="required" style="color:red;">*</span></label>
						<div class="col-md-8">
						<div class="controls">
						<input type="text" class="form-control required" name="email_settings[footer]"  placeholder="Footer"
	                                value="<?php echo $email_settings['footer']; ?>">
						</div>
						</div>
						</div>
						<div class="form-group row">
						<label class="col-md-4 label-control">Mail Path <span class="required" style="color:red;">*</span></label>
						<div class="col-md-8">
						<div class="controls">
						<input type="text" class="form-control required" name="email_settings[mail_path]"  placeholder="Mail Path"
	                                value="<?php echo $email_settings['mail_path']; ?>">
						</div>
						</div>
						</div>
						
					  </div>
					
                  </div> 
	                </form>
							
			</div>
        </div>

      </div>
    </div>
  </div>
</section>