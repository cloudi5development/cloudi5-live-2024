<?php $footer_setting = $this->db->select('*')->from('settings')->get()->row();?>
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
	
	<!-- // Basic form layout section Start -->
	<?php $this->load->view('admin/'.$page_name); ?>
	<!-- // Basic form layout section end -->
	
	<footer class="footer footer-light" style="position: fixed;left: 0;bottom: 0;width: 100%;">
        <div class="row">
            <div class="clearfix text-muted mb-0 px-2">
                <div class="col-sm-6">
                <span class="float-md-left d-xs-block d-md-inline-block">
                Copyright  © <?php echo $footer_setting->copyright;?> <a href="javascript:void(0)" class="text-bold-800 grey darken-2"><?php echo ucwords($footer_setting->site_name);?> </a>, All rights reserved. 
                </span></div>
                <div class="col-sm-6">
                <span class="d-xs-block d-md-inline-block">
                Developed By <a href="<?php echo $footer_setting->developed_by_url;?>" target="_blank" class="text-bold-800 grey darken-2"><?php echo ucwords($footer_setting->developed_by);?></a>. 
                </span></div>
            </div>
        </div>
    </footer>
  </body>
</html>