<div class="robust-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-body">
		<?php echo message_box('success'); ?>
		<?php echo message_box('error'); ?>
		<section id="horizontal-form-layouts">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title" id="horz-layout-colored-controls"><?php echo $page_title; ?><a style="float:right;" href="<?php echo base_url('users');?>" class="btn btn-danger">Back </a></h4>
					</div>
					<div class="card-body collapse in">
					   <div class="card-block">
					 <?php
							echo get_form_tag($update_user);?>
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-6">
									<div class="form-group row">
										<label class="col-md-3 label-control">User Type<span class="required"> *</span></label>
										<div class="col-md-9">
										  <select name="user_type" class="form-control required selectpicker" data-live-search="true" title="User Type">
											<option value="">Select User Type</option>
											<option value="Admin" <?php if($user->user_type == 'Admin'){ echo 'selected';}?>>Admin</option>
											<option value="Employee" <?php if($user->user_type == 'Employee'){ echo 'selected';}?>>Employee</option>
										  </select>
										</div>
									</div>
									<?php
										echo get_input_tag_required('text','Name','name','','',$user->name);
										echo get_input_tag_required('email','Email ID','email','','',$user->email);
										echo get_input_tag('number','Mobile','mobile','','',$user->mobile);
									?>
									<div class="form-group row">
                    					<label class="col-md-3 label-control">Image<span class="required">*</span></label>
                    					<div class="col-md-9">
                    					  <?php if(!empty($user->image)){ ?>
											<img src="<?php echo base_url() . $user->image;?>" width="75px" height="75px" alt="">
										  <?php } else{ ?>
											<img src="<?php base_url();?>assets/images/avatar.jpg" width="75px" height="75px" alt="">
										  <?php } ?>
                    					 
                    					</div>
                    				</div>	
									<div class="form-group row">
                    					<label class="col-md-3 label-control"><span class="required"></span></label>
                    					<div class="col-md-9">
                    					  <input type="file" name="image" errorCode="errorCodeimage" class="fileUpload image form-control"> 
                    					  <span style="color:red;">W:870 X H:500</span>
										  <p id="errorCode" style="color:red;"></p>
                    					</div>
                    				</div>	
									
									</div>
									
								</div>
							</div>
						<?php	
							echo get_submit_tag();
							echo get_form_tag_close();
						?>
					   </div>
					</div>
				</div>
			</div>
		</div>
		</section>
		</div>
	</div>
</div>
<!-- JS Content Start -->
<?php $this->load->view('layout/common_js'); ?>
<!-- JS Content End -->