<!DOCTYPE html>
<html lang="en-US">

<head>

   <title><?php if ($meta) {
      echo $meta->title ? $meta->title : "Cloudi5 - Write for us |  Coimbatore";
   } else {
      echo "";
   } ?></title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="<?php echo $meta ? $meta->description : ""; ?>">
   <meta name="keywords" content="<?php echo $meta ? $meta->keyword : " "; ?>">
   <meta name="robots" content="index,follow" />
   <meta name="language" content="english" />
   <meta name="Expires" content="never" />
   <meta name="Author" content="cloudi5.com" />
   <meta name="Distribution" content="Global" />
   <meta name="Rating" content="general" />
   <meta name="region" content="India" />
   <meta name="geo.region" content="Coimbatore" />
   <meta name="search engines" content="ALL" />
   <meta name="copyright" content="cloudi5.com" />
   <meta name="email" content="info@cloudi5.com" />
   <link rel="canonical" href="<?php echo base_url(); ?>aboutus" />
   <meta property="og:type" content="website" />
   <meta property="og:title" content="Cloudi5 - Web Development Company |  Digital Marketing | Coimbatore" />
   <meta property="og:description"
      content="Cloudi5 is one of the best software development, web design, mobile app development, School ERP, Digital Marketing, SEO & SMO companies in Coimbatore, Tamil Nadu, India. Global custom software development company helps the client to build innovative software products and focused on the execution delivery and support." />
   <meta property="og:url" content="<?php echo base_url(); ?>aboutus" />
   <?php include ('common-css.php') ?>
   <?php $this->load->view('frontend/common-css'); ?>
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/write-for-us.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.theme.default.min.css">
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> -->
   <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-brands/css/uicons-brands.css'>
   <?php $this->load->view('frontend/fb-pixel-code'); ?>
</head>

<body>

   <div class="body-inner">

      <?php include 'header.php' ?>

      <div class="banner-area about-banner resp-banner writeus-banner" id="banner-area"
         alt="Web Development, ERP, CRM & Web Design Company in India" title="About Us">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading text-center">
                     <h1 class="banner-title2">Share your story and be a part of this community!</h1>
                     <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li>Write for us</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>
      

      <?php include 'footer.php' ?>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script> -->
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/owl.carousel.min.js"></script>
      <!-- Form Validatation -->
      <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/form-validation.js"></script>
      <script>
         setTimeout(function () {
            $(".alert").fadeOut("slow", function () {
               $(".alert").remove();
            });

         }, 6000);
      </script>
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/common-custom.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.counterup.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/waypoints.min.js"></script>
   </div>

</body>

</html>