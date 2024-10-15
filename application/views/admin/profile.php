<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
	<head>
		<!-- CSS Content Start -->
		<?php $this->load->view('layout/include_css'); ?>
		<!-- Css Content End -->
	</head>
	<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
    <!-- Header Top Content Start -->
		<?php $this->load->view('layout/include_top'); ?>
	<!-- Header Top Content End -->
	<!-- Menu Content Start -->
		<?php $this->load->view('layout/include_menu'); ?>
	<!-- Menu Content End -->
	
    <div class="robust-content content container-fluid">
		<div class="content-wrapper">
			<div class="content-body">
				<!-- // Basic form layout section Start -->
				<?php echo message_box('success'); ?>
				<?php echo message_box('error'); ?>
				<section id="horizontal-form-layouts">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title" id="horz-layout-colored-controls"><?php echo $page_title; ?></h4>
									<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
								</div>
<div class="card-body collapse in">
	<div class="card-block">
	<?php $id=$edit_profile->id; ?>
		<div class="form-body">
			<div class="row">
				<form class="form form-horizontal" id="FormValidation" method="post" action="<?php echo base_url('accesspanel/profile_update/'.$id);?>" enctype="multipart/form-data">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-md-3 label-control">Name<span class="required">*</span></label>
							<div class="col-md-9">
							  <input type="text" class="form-control required" name="name" value="<?php echo $edit_profile->name ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 label-control">User Name(E-Mail)<span class="required">*</span></label>
							<div class="col-md-9">
							  <input type="email" class="form-control required" name="email" value="<?php echo $edit_profile->email ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 label-control"><span class="required"></span></label>
							<div class="col-md-9">
							  <?php if($edit_profile->image !='') { ?>
								<input type="hidden" name="image_old" value="<?php echo $edit_profile->image; ?>" class="form-control"> 
								<img src="<?php echo base_url();?><?php echo $edit_profile->image; ?>" width="216px" height="63px">
							<?php }  else { ?>
								 <img src="<?php echo base_url();?>assets/images/avatar.jpg" alt="" width="100px" height="60px">
							<?php } ?>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 label-control">Profile Image<span class="required"></span></label>
							<div class="col-md-9">
							  <input type="file" id="fileUpload" name="image" class="form-control"> (<span style="color:red;">W:216 X H:69</span>)
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 label-control">Mobile<span class="required">*</span></label>
							<div class="col-md-9">
							  <input type="text" class="form-control  required" name="mobile" value="<?php echo $edit_profile->mobile ?>">
							</div>
						</div>
						<div class="text-xs-right">
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>
					
				</form>
				
				<form class="form-horizontal" id="PasswordValidation"  novalidate method="post" action="<?php echo base_url('accesspanel/password_update/'.$id);?>">		
					<div class="col-md-6">
					<h3>Change Password</h3><hr>
						<div class="form-group row">
							<label class="col-md-3 label-control">Current Password <span class="required">*</span></label>
							<div class="col-md-9">
							  <input type="password" class="form-control required" name="current_password" value="<?php echo set_value('current_password');?>">
								<div style="color:#F00;">
									<?php echo form_error('current_password'); ?>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 label-control">New Password<span class="required">*</span></label>
							<div class="col-md-9">
							  <input type="password" class="form-control required" name="new_password" value="<?php echo set_value('new_password');?>">
								<div style="color:#F00;">
									<?php echo form_error('new_password'); ?>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 label-control">Confirm Password <span class="required">*</span></label>
							<div class="col-md-9">
							  <input type="password" class="form-control required" name="conform_password" value="<?php echo set_value('conform_password');?>">
								<div style="color:#F00;">
									<?php echo form_error('conform_password'); ?>
								</div>
							</div>
							
						</div>
						<div class="text-xs-right">
							<button type="submit" class="btn btn-success">Submit</button>
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
				<!-- // Basic form layout section end -->
			</div>
		</div>
    </div>
	<footer class="footer footer-light" style="position: fixed;left: 0;bottom: 0;width: 100%;">
        <div class="row">
            <div class="clearfix text-muted mb-0 px-2">
                <div class="col-sm-6">
                <span class="float-md-left d-xs-block d-md-inline-block">
                Copyright  © <?php echo $settings->copyright;?> <a href="javascript:void(0)" class="text-bold-800 grey darken-2"><?php echo ucwords($settings->site_name);?> </a>, All rights reserved. 
                </span></div>
                <div class="col-sm-6">
                <span class="d-xs-block d-md-inline-block">
                Developed By <a href="<?php echo $settings->developed_by_url;?>" target="_blank" class="text-bold-800 grey darken-2"><?php echo ucwords($settings->developed_by);?></a>. 
                </span></div>
            </div>
        </div>
    </footer>
    
	<!-- JS Content Start -->
		<?php $this->load->view('layout/common_js'); ?>
	<!-- JS Content End -->
  </body>
</html>