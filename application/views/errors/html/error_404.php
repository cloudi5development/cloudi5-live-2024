<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$ci = new CI_Controller();
$ci =& get_instance();
$ci->load->helper('url');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="container">
	<center><img src="<?php echo base_url(); ?>assets/images/pnf.jpg" alt="" width="50%"></center>
	<br>
	<hr>
	<center><a class="btn btn-success" title="Home Page" href="<?php echo base_url();?>">Home Page</a></center>
	<hr>
	</div>
</body>
</html>