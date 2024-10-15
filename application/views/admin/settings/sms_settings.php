<?php 
//$active_sms_service = $this->db->get_where('settings' , array('type' => 'active_sms_service'))->row()->description;
?>
<section class="input-validation">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><?php echo $page_title; ?></h4>
          
        </div>
        <div class="card-body collapse in">
      
					<div class="card-block">
						
						<ul class="nav nav-tabs nav-top-border no-hover-bg nav-justified">
							
							<li class="nav-item">
								<a class="nav-link active" id="link-tab1" data-toggle="tab" href="#link1" aria-controls="link1" aria-expanded="false">Enable/Disable</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" id="linkOpt-tab1" data-toggle="tab" href="#linkOpt1" aria-controls="linkOpt1"> SMS Provider Setting</a>
							</li>
						</ul>
						<div class="tab-content px-1 pt-1">
						
							<div class="tab-pane fade active in" id="link1" role="tabpanel" aria-labelledby="link-tab1" aria-expanded="false">
								
                              
										 <div class="col-md-6" >
										  <form class="form-horizontal striped-labels" id="" novalidate method="post" action="<?php echo base_url('settings/sms_settings/enable');?>">
											<div class="form-group row">
												<label class="col-md-4 label-control">Enable/Disable<span class="required" style="color:red;">*</span></label>
												<div class="col-md-8">
												<div class="controls">
												<input type="checkbox" id="switchery2" name="sms[sms_enable]" class="switchery" value="1" <?php if($get_enable['sms_enable'] == 1) {echo 'checked';} ?>/>
												
												 <button type="submit" class="btn btn-success">Submit <i class="icon-thumbs-up position-right"></i></button>
												</div>
												</div>

											</div>
											
                                        </form>
									</div>
                                
                          
							
							</div>
							
							<div class="tab-pane fade" id="linkOpt1" role="tabpanel" aria-labelledby="linkOpt-tab1" aria-expanded="false">
								<form class="form-horizontal striped-labels" id="FormValidation" novalidate method="post" action="<?php echo base_url('settings/sms_settings/sms_provider_setting');?>">
										 <div class="col-md-6">
											<div class="form-group row">
													<label class="col-md-4 label-control">Select A Service<span class="required" style="color:red;">*</span></label>
													<div class="col-md-8">
													<div class="controls">
													  <select name="sms_provider[active_sms_service]"  class="form-control required">
														<option value="" >--Select--</option>
														<option value="clickatell" <?php if ($sms_provider['active_sms_service'] == 'clickatell') echo 'selected';?>>
														Clickatell</option>
														</select>
														
													</div>
													</div>
												</div>
											<div class="form-group row">
												<label class="col-md-4 label-control">Username<span class="required" style="color:red;">*</span></label>
												<div class="col-md-8">
												<div class="controls">
												  <input type="text" class="form-control required" placeholder="Username"  name="sms_provider[username]" value="<?php echo $sms_provider['username']; ?>">
												</div>
												</div>
											</div>
											
											<div class="form-group row">
												<label class="col-md-4 label-control">Password<span class="required" style="color:red;">*</span></label>
												<div class="col-md-8">
												<div class="controls">
												<input type="password" class="form-control required" name="sms_provider[password]" 
															value="<?php echo $sms_provider['password']; ?>">
												</div>
												</div>
											</div>
											
											<div class="form-group row">
												<label class="col-md-4 label-control">Send ID <span class="required" style="color:red;">*</span></label>
												<div class="col-md-8">
												<div class="controls">
												  <input type="text" class="form-control required" placeholder="Enter Api Key" name="sms_provider[sender_id]" value="<?php echo $sms_provider['sender_id']; ?>">
												</div>
												</div>
											</div>
										
											 <div class="text-xs-right">
												<button type="submit" class="btn btn-success">Submit <i class="icon-thumbs-up position-right"></i></button>
											</div> 
										
									</div>
							</form>
							</div>
						</div>
					</div>
				</div>
		
	
      </div>
	  
    </div>
  </div>
</section>
