<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
<head>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() . $settings->favicon;?>">
	
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendors.min.css"/>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/icomoon.css">
	
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    
	<link href="<?php echo base_url();?>assets/css/admin.css" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  </head>
  <title><?php echo $page_title;?></title>
  <body data-open="click" style="background: url(<?php echo base_url() . $settings->background_image;?>) no-repeat fixed !important; background-size: cover !important;" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column bg-cyan bg-lighten-2 fixed-navbar">  

    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="col-md-4 offset-md-4 col-xs-8 offset-xs-2 box-shadow-2 p-0">
	<div class="card border-grey border-lighten-3 px-2 py-2 row mb-0" style="background-color: rgba(218, 218, 218, 0.92);padding-top: 0px !important; padding-left: 0px !important; padding-right: 0px !important;">
	<div class="">
			<div class="card-title text-xs-center" style="background: rgba(29, 43, 54, 0.85); color: #ffffff; padding: 16px;  font-size: 17px;">
			<?php echo strtoupper($settings->site_name);?>
			</div>
		<div class="card-body collapse in">
			<div class="card-block">
			<?php echo message_box('success'); ?>
			<?php echo message_box('error'); ?>
			<form class="formhorizontal" id="FormValidation" method="POST" action="<?php echo base_url('accesspanel/checkuser');?>">	
				<fieldset class="form-group has-feedback has-icon-left">
					<input type="text" class="form-control required input-lg" name="username" id="user-name" value="<?php echo set_value('username'); ?>" placeholder="Enter Email ID" tabindex="1">
					<div class="form-control-position">
						<i class="icon-head"></i>
					</div>
					<div class="help-block font-small-3"></div>
					<div style="color:#F00;">
					<?php   echo form_error('username');?>
					</div>	
				</fieldset>
				<fieldset class="form-group has-feedback has-icon-left">
					<input type="password" class="form-control required input-lg" id="password" name="password" value="<?php echo set_value('password'); ?>"  placeholder="Enter Password" tabindex="2" >
					<div class="form-control-position">
						<i class="icon-key3"></i>
					</div>
					<div class="help-block font-small-3"></div>
					<div style="color:#F00;">
					<?php   echo form_error('password');?>
					</div>	
				</fieldset>
				<fieldset class="form-group row">
					<div class="col-md-6 col-xs-12 text-xs-center text-md-left">
						<fieldset>
							<input type="checkbox" id="remember_me" class="chk-remember">
							<label for="remember-me"> Remember Me</label>
						</fieldset>
					</div>
					
					<div class="col-md-6 col-xs-12 text-xs-center text-md-right"><a href="<?php echo base_url();?>accesspanel/forgot_password" class="card-link">Forgot Password?</a></div>
					
				</fieldset>
				
				<button type="submit" class="btn btn-danger btn-block btn-lg"><i class="icon-unlock2"></i> Login</button>
			</form>
			</div>
		</div>
		
	</div>
</section>
        </div>
      </div>
    </div>
	<footer class="footer navbar-fixed-bottom footer-dark">
       <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block" style="color: #fff;">Copyright  © <?php echo $settings->copyright;?> <?php echo ucwords($settings->site_name);?>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block" style="color: #fff;">Developed By <a href="<?php echo $settings->developed_by_url;?>" target="_blank" style="color:#fffa23;"> <?php echo ucwords($settings->developed_by);?></a></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url();?>assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->

    <!-- BEGIN ROBUST JS-->
	<script src="<?php echo base_url();?>assets/js/app.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
	<script src="<?php echo base_url();?>assets/js/form-validation.js"></script>
	<script>
		setTimeout(function() {
			$(".alert").fadeOut("slow", function() {
				$(".alert").remove();
			});
		}, 6000);
	
		$(function() {
			if (localStorage.chkbx && localStorage.chkbx != '') {
				$('#remember_me').attr('checked', 'checked');
				$('#user-name').val(localStorage.usrname);
				$('#password').val(localStorage.pass);
			} else {
				$('#remember_me').removeAttr('checked');
				$('#user-name').val('');
				$('#password').val('');
			}
			$('#remember_me').click(function() {

				if ($('#remember_me').is(':checked')) {
					// save username and password
					localStorage.usrname = $('#user-name').val();
					localStorage.pass = $('#password').val();
					localStorage.chkbx = $('#remember_me').val();
				} else {
					localStorage.usrname = '';
					localStorage.pass = '';
					localStorage.chkbx = '';
				}
			});
		});
	</script>
  </body>
</html>