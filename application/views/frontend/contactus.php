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
   <!-- Form Validation-->
   <link href="<?php echo base_url(); ?>assets/css/admin.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>asset/css/contact-us.css" rel="stylesheet">
   <?php $this->load->view('frontend/fb-pixel-code'); ?>
</head>

<body id="cont" class="body-inner">
   <div>
      <?php include 'header.php' ?>
      <div class="banner-area overlay about-banner resp-banner common-inner-banner" id="banner-area"
         alt="Web Development Company in Coimbatore" title="Website Development">
         <div class="inner-pattern"> <img
               src="<?php echo base_url(); ?>asset/images/home/svg/common-inner-banner-pattern.svg"
               alt="banner-pattern">
         </div>
         <div class="container banner-content">
            <div class="row justify-content-center">
               <div class="shape-wrapper">
                  <div class="shape-tri-1">
                     <img src="<?php echo base_url(); ?>asset/images/home/banner_shape02.png" alt="Shape-1">
                  </div>
                  <div class="shape-tri-3">
                     <img src="<?php echo base_url(); ?>asset/images/web-development/bg-blue.webp" alt="Shape-3">
                  </div>
                  <div class="shape-tri-4">
                     <img src="<?php echo base_url(); ?>asset/images/web-development/bg-blue.webp" alt="Shape-4">
                  </div>
               </div>
               <div class="col-md-10 col-12 banner-inner-text">
                  <div class="banner-tagline">
                     <span> <img src="<?php echo base_url(); ?>asset/images/web-development/star.png"
                           alt="Convert into Mockups"> Transform Your Vision into Digital Success!</span>
                  </div>
                  <h2 class="title">We Listen, We Care <span>We Respond</span></h2>
               </div>
            </div>
         </div>
      </div>

      <section class="contact-details">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 contact-title-sec">
                  <h2 class="text-center">Contact Our Client-Friendly Team</h2>
                  <p class="text-center"> Web design, Web Development, Mobile App Development & Digital Marketing</p>
               </div>
               <div class="details-section mt-20">
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="details-card">
                           <div class="details-icon">
                              <img src="<?php echo base_url(); ?>asset/images/contactUs/contact-location-icon.webp" class="contact-icon" alt="Mail Id">
                           </div>
                           <div class="details-content mt-10">
                              <span>
                                 Location
                              </span>
                              <p class="text-center"><?php echo $contact_setting->address_1; ?><br> <?php echo $contact_setting->address_2 . ' ' . $contact_setting->address_3; ?> <br><?php echo $contact_setting->city . ' ' . $contact_setting->pincode; ?>, <?php echo $contact_setting->state; ?>, India</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="details-card">
                           <div class="details-icon">
                              <img src="<?php echo base_url(); ?>asset/images/contactUs/contact-message-icon.webp" class="contact-icon" alt="Mail Id">
                           </div>
                           <div class="details-content mt-10">
                              <span>Send a message</span>
                              <p><img src="<?php echo base_url(); ?>asset/images/footer-bmail.png" alt="Mail Id"></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="details-card">
                           <div class="details-icon">
                              <img src="<?php echo base_url(); ?>asset/images/contactUs/contact-phone-icon.webp" class="contact-icon" alt="Mail Id">
                           </div>
                           <div class="details-content mt-10">
                              <span>Let's talk with us</span>
                              <p class="mb-0 web-phone d-block"><strong>Sales:</strong> <?php echo $contact_setting->mobile_2; ?></p>
                              <a href="tel:+919787467575" class="mb-0 mob-phone d-none"><strong>Sales:</strong><?php echo $contact_setting->mobile_2; ?></a>
                              <p class="mb-0 web-phone d-block"><strong>Support:</strong> <?php echo $contact_setting->mobile_1; ?></p>
                              <a href="tel:+919159913344" class="mb-0 mob-phone d-none"><strong>Support:</strong><?php echo $contact_setting->mobile_1; ?></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="details-card">
                           <div class="details-icon">
                              <img src="<?php echo base_url(); ?>asset/images/contactUs/contact-join-team-icon.webp" class="contact-icon" alt="Mail Id">
                           </div>
                           <div class="details-content mt-10">
                              <span>Join our team</span>
                              <p class="mb-0 web-phone d-block">+91 95970 16798</p>
                              <a href="tel:+919597016798" class="mb-0 mob-phone d-none">+91 95970 16798</a>
                              <p><img src="<?php echo base_url(); ?>asset/images/career-mail.png" alt="Mail Id"></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="form-section mt-20 ">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-12 p-0">
                  <div class="form-section-wrapper">
                     <form id="FormValidation" action="<?php echo base_url('contactform'); ?>" method="post" enctype="multipart/form-data">
                        <?php echo message_box('success'); ?>
                        <?php echo message_box('error'); ?>
                        <div class="row">
                           <div class="col-lg-12 form-heading mt-10 mb-20">
                              <h2>How can we help you?</h2>
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 60 60" fill="none">
                                    <g clip-path="url(#clip0_1_4884)">
                                       <path d="M59.9592 6.05565C60.2517 4.69407 58.9168 3.54599 57.6147 4.04286L1.13085 25.6051C0.451054 25.8647 0.00140954 26.5163 3.3079e-06 27.2439C-0.00140293 27.9716 0.445663 28.6249 1.12452 28.8871L16.9919 35.0153V54.3174C16.9919 55.1317 17.551 55.8392 18.3432 56.0275C19.1301 56.2147 19.9506 55.8403 20.3195 55.1085L26.8821 42.0858L42.8972 53.9712C43.8714 54.6942 45.2717 54.2344 45.6262 53.0725C60.579 4.04673 59.9326 6.17882 59.9592 6.05565ZM46.0163 12.2335L18.5006 31.8293L6.66146 27.2569L46.0163 12.2335ZM20.5075 34.7159L44.4918 17.6352C23.8536 39.4072 24.9315 38.2613 24.8415 38.3824C24.7078 38.5623 25.0741 37.8612 20.5075 46.9232V34.7159ZM42.9906 49.6626L28.8936 39.2006L54.3829 12.3108L42.9906 49.6626Z" fill="#0b2359"></path>
                                    </g>
                                    <defs>
                                       <clipPath id="clip0_1_4884">
                                          <rect width="60" height="60" fill="white"></rect>
                                       </clipPath>
                                    </defs>
                                 </svg>
                              </span>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 form-group mt-20 mb-0">
                              <input type="text" name="website" class="form-control" style="display:none;">
                              <input type="text" class="form-input" id="firstName" name="contactname" value="<?php echo set_value('contactname'); ?>" placeholder=" " required>
                              <label for="firstName" class="floating-label">First Name <span
                                    class="required">*</span></label>
                              <?php echo form_error('contactname', '<div class="error">', '</div>'); ?>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 form-group mt-20 mb-0">
                              <input type="text" class="form-input" id="business" placeholder=" " name="businessname" value="<?php echo set_value('businessname'); ?>">
                              <label for="business" class="floating-label">Business <span
                                    class="required"></span></label>
                              <?php echo form_error('businessname', '<div class="error">', '</div>'); ?>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 form-group mt-20 mb-0">
                              <input type="number" class="form-input" id="phone" placeholder=" " name="contactphone" value="<?php echo set_value('contactphone'); ?>">
                              <label for="phone" class="floating-label">Phone Number <span
                                    class="required"></span></label>
                              <?php echo form_error('contactphone', '<div class="error">', '</div>'); ?>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 form-group mt-20 mb-0">
                              <input type="email" class="form-input" id="email" placeholder=" " name="contactemail" value="<?php echo set_value('contactemail'); ?>" required>
                              <label for="email" class="floating-label">Email Address <span
                                    class="required">*</span></label>
                              <?php echo form_error('contactemail', '<div class="error">', '</div>'); ?>
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12  form-group mt-20 mb-0">
                              <textarea type="text" class="form-input" id="message" rows="3" placeholder=" " name="contactdescription"
                                 required><?php echo set_value('contactdescription'); ?></textarea>
                              <label for="message" class="floating-label">Write your message<span
                                    class="required">*</span></label>
                              <?php echo form_error('contactdescription', '<div class="error">', '</div>'); ?>
                           </div>
                           <div class="col-xl-12 mt-30">
                              <div class="g-recaptcha" data-sitekey="6Lf0WYUUAAAAAMi0BjYIrf8I-9G5cS-kJ04d8MEL"></div>
                              <?php echo form_error('g-recaptcha-response', '<div class="error">', '</div>'); ?>
                           </div>
                           <div class="col-xl-12 mt-30">
                              <div class="btn-wrapper ">
                                 <button type="submit" class="submit-btn">Submit</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12 p-0 ">
                  <div>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15663.458235321368!2d76.9936509!3d11.0487799!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859196af1d857%3A0xb7a08f850c62d14a!2sCloudi5%20Technologies!5e0!3m2!1sen!2sin!4v1733296133038!5m2!1sen!2sin" class="map-section" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="social-media-section mt-60 mb-60">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-12">
                  <div class="social-icons-title">
                     <h2>Connect with social media</h2>
                  </div>
               </div>
               <div class="col-lg-2">
                  <div class="social-horizontal-line"></div>
               </div>
               <div class="col-lg-6 icons-section col-md-12">
                  <a href="<?php echo $contact_setting->facebook; ?>" class="facebook" target="_blank">
                     <span><i class="fa fa-facebook social-media-icon"></i></span>
                  </a>
                  <a href="<?php echo $contact_setting->twitter; ?>" class="twitter" target="_blank">
                     <span class="twitter-social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 512 512">
                           <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" stroke="#ffffff" />
                        </svg>
                     </span>
                  </a>
                  <a href="<?php echo $contact_setting->instagram; ?>" class="instagram" target="_blank">
                     <span><i class="fa fa-instagram social-media-icon"></i></span>
                  </a>
                  <a href="<?php echo $contact_setting->linkedin; ?>" class="linkedin" target="_blank">
                     <span><i class="fa fa-linkedin social-media-icon"></i></span>
                  </a>
                  <a href="<?php echo $contact_setting->pinterest; ?>" class="pinterest" target="_blank">
                     <span><i class="fa fa-pinterest social-media-icon"></i></span>
                  </a>
                  <a href="<?php echo $contact_setting->youtube; ?>" class="youtube" target="_blank">
                     <span><i class="fa fa-youtube social-media-icon"></i></span>
                  </a>
                  <a href="<?php echo $contact_setting->google_plus; ?>" class="threads" target="_blank">
                     <span>
                        <img src="<?php echo base_url(); ?>asset/images/thread-icon.png" width="34" class="social-icon" alt="thread-img">
                     </span>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <?php include 'footer.php' ?>
      <!-- initialize jQuery Library-->
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <?php $this->load->view('frontend/common-js'); ?>

   </div>
</body>

</html>