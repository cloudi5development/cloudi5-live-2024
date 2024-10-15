<div class="robust-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-body">
		<?php echo message_box('success'); ?>
		<?php echo message_box('error'); ?>
		<section id="basic-form-layouts">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					
					<div class="card-body collapse in">
					   <div class="card-block">
					   <form class="form form-horizontal" id="FormValidation"  novalidate method="post" action="<?php echo base_url('settings/save_common_settings/');?>"  enctype="multipart/form-data">
	                    	<div class="">
	                    		<div class="row">
	                    			<div class="col-md-6">
									<p style="text-align:center;"><b> Site Settings </b></p>
										<div class="form-group row">
											<label class="col-md-4 label-control">Site Name <span class="required">*</span></label>
											<div class="col-md-8">
											  <input type="hidden" class="form-control" name="settings_id" value="<?php if($edit_data){ echo $edit_data->settings_id;}?>">
											  <input type="text" class="form-control required" placeholder="Site Name" name="site_name" value="<?php if($edit_data){ echo $edit_data->site_name;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">Email Address <span class="required">*</span></label>
											<div class="col-md-8">
											  <input type="email" class="form-control required" placeholder="Email Address" name="email_id_1" value="<?php if($edit_data){ echo $edit_data->email_id_1;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">Alternate Email Address <span class="required"></span></label>
											<div class="col-md-8">
											  <input type="email" class="form-control" placeholder="Alternate Email Address" name="email_id_2" value="<?php if($edit_data){ echo $edit_data->email_id_2;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">Mobile No<span class="required"> *</span></label>
											<div class="col-md-8">
											  <input type="text" class="form-control required" placeholder="Mobile No" name="mobile_1" value="<?php if($edit_data){ echo $edit_data->mobile_1;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">Alternate Mobile No<span class="required"></span></label>
											<div class="col-md-8">
											  <input type="text" class="form-control" placeholder="Alternate Mobile No" name="mobile_2" value="<?php if($edit_data){ echo $edit_data->mobile_2;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">Landline No<span class="required"></span></label>
											<div class="col-md-4">
											  <input type="number" id="" class="form-control " placeholder="Landline Number" name="landline_1" value="<?php if($edit_data){ echo $edit_data->landline_1;}?>">
											</div>
											<label class="col-md-1 label-control">Ex<span class="required"></span></label>
											<div class="col-md-3">
											  <input type="text" class="remv form-control" placeholder="Extension" name="extension_1" value="<?php if($edit_data){ echo $edit_data->extension_1;}?>" style="border-color: none !important;">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">Landline No 2<span class="required"></span></label>
											<div class="col-md-4">
											  <input type="number" id="" class="form-control" placeholder="Landline NO 2" name="landline_2" value="<?php if($edit_data){ echo $edit_data->landline_2;}?>">
											</div>
											<label class="col-md-1 label-control">Ex<span class="required"></span></label>
											<div class="col-md-3">
											  <input type="text" class="remv form-control" placeholder="Extension" name="extension_2" value="<?php if($edit_data){ echo $edit_data->extension_2;}?>" style="border-color: none !important;">
											</div>
										</div>
										
									<p style="text-align:center;"><b> Address Settings </b></p>	
										<div class="form-group row">
											<label class="col-md-4 label-control">Address Line 1<span class="required">*</span></label>
											<div class="col-md-8">
											  <input type="text" class="form-control required" placeholder="Address Line 1" name="address_1" value="<?php if($edit_data){ echo $edit_data->address_1;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">Address Line 2<span class="required"></span></label>
											<div class="col-md-8">
											  <input type="text" class="form-control" placeholder="Address Line 2" name="address_2" value="<?php if($edit_data){ echo $edit_data->address_2;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">Address Line 3<span class="required"></span></label>
											<div class="col-md-8">
											  <input type="text" class="form-control" placeholder="Address Line 3" name="address_3" value="<?php if($edit_data){ echo $edit_data->address_3;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">City <span class="required">*</span></label>
											<div class="col-md-8">
											  <input type="text" class="form-control required" placeholder="City" name="city" id="" value="<?php if($edit_data){ echo $edit_data->city;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">State <span class="required">*</span></label>
											<div class="col-md-8">
											 <input type="text" class="form-control required" placeholder="State" name="state" id="" value="<?php if($edit_data){ echo $edit_data->state;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">Pin code<span class="required">*</span></label>
											<div class="col-md-8">
											  <input type="number" class="form-control required" placeholder="Pin code" name="pincode" id="pincode" value="<?php if($edit_data){ echo $edit_data->pincode;}?>">
											</div>
										</div>
										
										<p style="text-align:center;"><b> Panel  Settings</b></p>	
									<?php if(!empty($edit_data->background_image)){?>
									<div class="form-group row">
										<label class="col-md-4 label-control"><span class="required"></span></label>
										<div class="col-md-8" style="text-align: center;">
										  <a title="Click to Download Background Image" href="<?php echo base_url() .$edit_data->background_image;?>" download><img src="<?php echo base_url() .$edit_data->background_image;?>" width="100px" height="100px"></a>
										</div>
									</div>
									<?php } ?>
									<div class="form-group row">
										<label class="col-md-4 label-control">Background Image<span class="required">*</span></label>
										<div class="col-md-8">
										  <input type="file" id="" class="form-control <?php if(empty($edit_data->background_image)){ echo'required';}?>" name="background_image">
										</div>
									</div>
									<?php if(!empty($edit_data->favicon)){?>
									<div class="form-group row">
										<label class="col-md-4 label-control"><span class="required"></span></label>
										<div class="col-md-8" style="text-align: center;">
										  <a title="Click to Download Favicon" href="<?php echo base_url() .$edit_data->favicon;?>" download><img src="<?php echo base_url() .$edit_data->favicon;?>" width="15px" height="15px"></a>
										</div>
									</div>
									<?php } ?>
									<div class="form-group row">
										<label class="col-md-4 label-control">Favicon<span class="required">*</span></label>
										<div class="col-md-8">
										  <input type="file" id="" class="form-control <?php if(empty($edit_data->favicon)){ echo'required';}?>" name="favicon">
										</div>
									</div>
									
				                    </div>
									<div class="col-md-6">						
									<p style="text-align:center;"><b> Social Media Link's </b></p>
									<div class="form-group row">
										<label class="col-md-4 label-control">Whatsapp<span class="required"></span></label>
										<div class="col-md-8">
										  <input type="text" id="" class="form-control" placeholder="Whatsapp" name="whatsapp" value="<?php if($edit_data){ echo $edit_data->whatsapp;}?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4 label-control">Facebook<span class="required"></span></label>
										<div class="col-md-8">
										  <input type="text" id="" class="form-control" placeholder="Facebook" name="facebook" value="<?php if($edit_data){ echo $edit_data->facebook;}?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4 label-control">Instagram<span class="required"></span></label>
										<div class="col-md-8">
										  <input type="text" id="" class="form-control" placeholder="Instagram" name="instagram" value="<?php if($edit_data){ echo $edit_data->instagram;}?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4 label-control">Linkedin<span class="required"></span></label>
										<div class="col-md-8">
										  <input type="text" id="" class="form-control" placeholder="Linkedin" name="linkedin" value="<?php if($edit_data){ echo $edit_data->linkedin;}?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4 label-control">Twitter<span class="required"></span></label>
										<div class="col-md-8">
										  <input type="text" id="" class="form-control" placeholder="Twitter" name="twitter" value="<?php if($edit_data){ echo $edit_data->twitter;}?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4 label-control">Youtube<span class="required"></span></label>
										<div class="col-md-8">
										  <input type="text" id="" class="form-control" placeholder="Youtube" name="youtube" value="<?php if($edit_data){ echo $edit_data->youtube;}?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4 label-control">Google Plus<span class="required"></span></label>
										<div class="col-md-8">
										  <input type="text" id="" class="form-control" placeholder="Google Plus" name="google_plus" value="<?php if($edit_data){ echo $edit_data->google_plus;}?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4 label-control">Pinterest<span class="required"></span></label>
										<div class="col-md-8">
										  <input type="text" id="" class="form-control" placeholder="Pinterest" name="pinterest" value="<?php if($edit_data){ echo $edit_data->pinterest;}?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4 label-control">Blogger<span class="required"></span></label>
										<div class="col-md-8">
										  <input type="text" id="" class="form-control" placeholder="Blogger" name="blogspot" value="<?php if($edit_data){ echo $edit_data->blogspot;}?>">
										</div>
									</div>
									
									<p style="text-align:center;"><b> Email Settings </b></p>	
										<div class="form-group row">
											<label class="col-md-4 label-control">Host<span class="required">*</span></label>
											<div class="col-md-8">
											  <input type="text" id="" class="form-control required" placeholder="Host" name="email_host" value="<?php if($edit_data){ echo $edit_data->email_host;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">Secure<span class="required">*</span></label>
											<div class="col-md-8">
											  <input type="text" id="" class="form-control required" placeholder="Secure" name="email_secure" value="<?php if($edit_data){ echo $edit_data->email_secure;}?>">
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-md-4 label-control">Port<span class="required">*</span></label>
											<div class="col-md-8">
											  <input type="text" id="" class="form-control required" placeholder="Port" name="email_port" value="<?php if($edit_data){ echo $edit_data->email_port;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">User Name<span class="required">*</span></label>
											<div class="col-md-8">
											  <input type="text" id="" class="form-control required" placeholder="User Name" name="email_user_name" value="<?php if($edit_data){ echo $edit_data->email_user_name;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">Password<span class="required">*</span></label>
											<div class="col-md-8">
											  <input type="password" id="" class="form-control required" placeholder="Password" name="email_password" value="<?php if($edit_data){ echo $edit_data->email_password;}?>">
											</div>
										</div>
										<p style="text-align:center;"><b> Footer Setting</b></p>	
										<div class="form-group row">
											<label class="col-md-4 label-control">Copyright ©<span class="required"> *</span></label>
											<div class="col-md-2">
											  <input type="number" id="" class="form-control required" placeholder="Copyright ©" name="copyright" value="<?php if($edit_data){ echo $edit_data->copyright;}?>">
											</div>
											<div class="col-md-6">
											<input type="text" class="form-control" value="<?php if($edit_data){ echo $edit_data->site_name;}?>" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">Developed By<span class="required"> </span></label>
											<div class="col-md-8">
											  <input type="text" id="" class="form-control" placeholder="Developed By" name="developed_by" value="<?php if($edit_data){ echo $edit_data->developed_by;}?>" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">Developed By URL<span class="required"> </span></label>
											<div class="col-md-8">
											  <input type="url" id="" class="form-control " placeholder="Developed By URL" name="developed_by_url" value="<?php if($edit_data){ echo $edit_data->developed_by_url;}?>" readonly>
											</div>
										</div>
				                    </div>
		                        </div>
							</div>
	                        <div class="form-actions center">
								<button type="submit" class="btn btn-info ">Submit</button>
	                        </div>
	                    </form>
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