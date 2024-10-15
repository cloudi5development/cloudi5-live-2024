<?php 
$contact_setting = $this->db->from('settings')->get()->row();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title><?php if ($meta) {
               echo $meta->title ? $meta->title : "Cloudi5 - Web Development | Web Design | School ERP | SEO | Coimbatore";
            } else {
               echo "Cloudi5 - Web Development | Web Design | School ERP | SEO | Coimbatore";
            } ?></title>
   <meta name="description" content="<?php echo $meta ? $meta->description : "";  ?>">
   <meta name="keywords" content="<?php echo $meta ? $meta->keyword : " ";  ?>">
   <meta name="robots" content="index,follow" />
   <meta name="language" content="english" />
   <meta name="Expires" content="never" />
   <meta name="revisit-after" content="Daily" />
   <meta name="Author" content="cloudi5.com" />
   <meta name="Distribution" content="Global" />
   <meta name="Rating" content="general" />
   <meta name="region" content="India" />
   <meta name="geo.region" content="Coimbatore" />
   <meta name="search engines" content="ALL" />
   <meta name="copyright" content="cloudi5.com" />
   <meta name="email" content="info@cloudi5.com" />
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <link rel="canonical" href="<?php echo base_url(); ?>contactus" />
   <meta property="og:type" content="website" />
   <meta property="og:title" content="Cloudi5 - Web Development | Web Design | School ERP | SEO | Coimbatore" />
   <meta property="og:description" content="Cloudi5 is Best Software Development Company in Coimbatore, Tamil Nadu, India. we provide services for Android App & Web Development, web design, mobile app, Digital Marketing services including SEO, SEM, SMO, and SMM. Our major products are School ERP (School Management software) and Ecommerce software." />
   <meta property="og:url" content="<?php echo base_url(); ?>contactus" />
   <!-- Mobile Specific Metas -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <!-- CSS -->
   <?php $this->load->view('frontend/common-css'); ?>
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.theme.default.min.css">
   <!-- Form Validation-->
   <link href="<?php echo base_url(); ?>assets/css/admin.css" rel="stylesheet">
   <?php $this->load->view('frontend/fb-pixel-code'); ?>
</head>
<body id="cont">
   <div class="body-inner">
      <?php include 'header.php' ?>
      <div class="banner-area about-banner resp-banner" id="banner-area">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h2 class="banner-title2">We Listen, We Care,<br> We Respond</h2>
                     <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li>Contact Us</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section class="main-container bg-pattern-1" id="main-container">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                  <h2 class="section-title conn-title">Contact Our Client-Friendly Team</h2>
                  <h1 class="con-title"><span>Web design, Web Development, Mobile App Development & Digital Marketing</span></h1>
               </div>
            </div>
            <div class="ts-form form-boxed" id="ts-form">
               <div class="">
                  <div class="contact-wrapper">
                     <div class="contact-box form-box">
                        <form class="contact-form" id="FormValidation" action="<?php echo base_url('contactform'); ?>" method="post" enctype="multipart/form-data">
                           <?php echo message_box('success'); ?>
                           <?php echo message_box('error'); ?>
                           <div class="error-container"></div>
                           <div class="contact-right">
                              <div class="moonray-form-p2c21081f79 ussr">
                                 <div class="moonray-form moonray-form-label-pos-stacked">
                                    <div class="two-column">
                                       <div class="two-column-left">
                                          <div class="icon-set"><img src="<?php echo base_url(); ?>asset/images/boy.png" alt="First Name"></div>
                                          <input type="text" name="website" class="form-control" style="display:none;">
                                          <input name="contactname" type="text" class="required moonray-form-input" id="" value="<?php echo set_value('contactname'); ?>" placeholder="Your First Name*">
                                          <?php echo form_error('contactname', '<div class="error">', '</div>'); ?>
                                       </div>
                                       <div class="two-column-right">
                                          <div class="icon-set"><img src="<?php echo base_url(); ?>asset/images/office.png" alt="Business Name"></div>
                                          <input name="businessname" type="text" class="moonray-form-input" id="" value="<?php echo set_value('businessname'); ?>" placeholder="Business Name">
                                          <?php echo form_error('businessname', '<div class="error">', '</div>'); ?>
                                       </div>
                                    </div>
                                    <div class="two-column">
                                       <div class="two-column-left">
                                          <div class="icon-set"><img src="<?php echo base_url(); ?>asset/images/checklist.png" alt="Office Phone"></div>
                                          <input name="contactphone" type="tel" class=" moonray-form-input" id="" value="<?php echo set_value('contactphone'); ?>" placeholder="Phone Number">
                                          <?php echo form_error('contactphone', '<div class="error">', '</div>'); ?>
                                       </div>
                                       <div class="two-column-right">
                                          <div class="email">
                                             <div class="icon-set"><img src="<?php echo base_url(); ?>asset/images/contact-email.png" alt="Email"></div>
                                             <input name="contactemail" type="email" class="required moonray-form-input" id="" value="<?php echo set_value('contactemail'); ?>" placeholder="Your Email*">
                                             <?php echo form_error('contactemail', '<div class="error">', '</div>'); ?>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="one-column">
                                       <div class="email">
                                          <div class="icon-set"><img src="<?php echo base_url(); ?>asset/images/project.png" alt="Project Description"></div>
                                          <textarea name="contactdescription" class="required moonray-form-input" id="" placeholder="Message*"><?php echo set_value('contactdescription'); ?></textarea>
                                          <?php echo form_error('contactdescription', '<div class="error">', '</div>'); ?>
                                       </div>
                                    </div>
                                    <div class="one-column">
                                       <div class="g-recaptcha" data-sitekey="6Lf0WYUUAAAAAMi0BjYIrf8I-9G5cS-kJ04d8MEL"></div>
                                       <?php echo form_error('g-recaptcha-response', '<div class="error">', '</div>'); ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="text-center padd-co">
                              <button class="btn btn-primary tw-mt-30" type="submit">Submit </button>
                           </div>
                        </form>
                     </div>
                     <div class="contact-box info-box">
                        <div class="contact-info-right">
                           <h3>Contact Us</h3>
                           <div class="ts-contact-info">
                              <span class="ts-contact-icon float-left"><i class="icon icon-map-marker2"></i></span>
                              <div class="ts-contact-content">
                                 <h3 class="ts-contact-title">Find Us</h3>
                                 <p><?php echo $contact_setting->address_1; ?><br> <?php echo $contact_setting->address_2 .' '. $contact_setting->address_3; ?> <br><?php echo $contact_setting->city .' '. $contact_setting->pincode; ?>, <?php echo $contact_setting->state; ?>, India</p>
                              </div>
                           </div>
                           <div class="ts-contact-info">
                              <span class="ts-contact-icon float-left"><i class="icon icon-phone3"></i></span>
                              <div class="ts-contact-content">
                                 <h3 class="ts-contact-title">Call Us</h3>
                                 <p><a href="tel:<?php echo str_replace(' ', '', $header_setting->mobile_2); ?>" class="tel btns callus">Sales: <?php echo $contact_setting->mobile_2; ?></p>
                                 <p><a href="tel:<?php echo str_replace(' ', '', $header_setting->mobile_1); ?>" class="tel btns callus">Support: <?php echo $contact_setting->mobile_1; ?></p>
                                 <p><a href="tel:+91959716798" class="tel btns callus">Careers: (+91) 95970 16798</p>
                              </div>
                           </div>
                           <div class="ts-contact-info last">
                              <span class="ts-contact-icon float-left"><i class="icon icon-envelope"></i></span>
                              <div class="ts-contact-content">
                                 <h3 class="ts-contact-title">Mail Us</h3>
                                 <p><img src="<?php echo base_url(); ?>asset/images/footer-mail.png" alt="Mail Id"></p>
                              </div>
                           </div>
                           <div class="Social-Footer">
                              <h3 class="ts-contact-title">Follow Us</h3>
                              <ul class="icons-ul">
                                <li class="facebook"><a href="<?php echo $contact_setting->facebook; ?>" rel="nofollow" target="_blank"><span class="fa fa-facebook hvr-icon-up"></span></a></li>
                                <li class="twitter"><a href="<?php echo $contact_setting->twitter; ?>" rel="nofollow" target="_blank"><img src="https://www.cloudi5.com/asset/images/twitter-white-logo.png" style="height:13px;"></a></li>
                                <li class="instagram"><a href="<?php echo $contact_setting->instagram; ?>" rel="nofollow" target="_blank"><span class="fa fa-instagram hvr-icon-up"></span></a></li>
                                <li class="linkedin"><a href="<?php echo $contact_setting->linkedin; ?>" rel="nofollow" target="_blank"><span class="fa fa-linkedin hvr-icon-up"></span></a></li>
                                <li class="pinterest"><a href="<?php echo $contact_setting->pinterest; ?>" rel="nofollow" target="_blank"><span class="fa fa-pinterest hvr-icon-up"></span></a></li>
                                <li class="youtube"><a href="<?php echo $contact_setting->youtube; ?>" rel="nofollow" target="_blank"><span class="fa fa-youtube hvr-icon-up"></span></a></li>
                                <li class="thread"><a href="<?php echo $contact_setting->google_plus; ?>" rel="nofollow" target="_blank"><span class=""><img src="<?php echo base_url(); ?>asset/images/thread-icon.png" /></span></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include 'footer.php' ?>
      <!-- initialize jQuery Library-->
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <?php $this->load->view('frontend/common-js'); ?>
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/owl.carousel.min.js"></script>
      
   </div>
</body>
</html>