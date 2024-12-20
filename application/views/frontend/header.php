<?php
$header_setting = $this->db->from('settings')->get()->row();
?>
<div class="site-top">
   <div class="topbar-transparent" id="top-bar">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
               <ul class="top-info">
                  <li><span class="info-icon"><i class="icon icon-phone3"></i></span>
                     <div class="info-wrapper">
                        <p class="info-title">Sales: <a
                              href="tel:<?php echo str_replace(' ', '', $header_setting->mobile_2); ?>"
                              class="tel btns callus"><?php echo $header_setting->mobile_2; ?></a></p>
                     </div>
                  </li>
                  <li class="hide-mob last part_hide"><span class="info-icon"><i
                           class="icon icon-map-marker2"></i></span>
                     <div class="info-wrapper">
                        <p class="info-title">MK SQURE,
                           <?php echo $header_setting->address_3 . ' ' . $header_setting->city ?>
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 text-lg-right text-md-center">
               <ul class="top-social">
                  <li>
                     <a title="Facebook" href="<?php echo $header_setting->facebook; ?>" rel="nofollow" target="_blank">
                        <span class="social-icon"><i class="fa fa-facebook"></i></span>
                     </a>
                     <a title="Twitter" href="<?php echo $header_setting->twitter; ?>" rel="nofollow" target="_blank">
                        <span class="social-icon"><img src="https://www.cloudi5.com/asset/images/twitter-white-logo.png"
                              style="height:14px;"></span>
                     </a>
                     <a title="Instagram" href="<?php echo $header_setting->instagram; ?>" rel="nofollow"
                        target="_blank">
                        <span class="social-icon"><i class="fa fa-instagram"></i></span>
                     </a>
                     <a title="Linkedin" href="<?php echo $header_setting->linkedin; ?>" rel="nofollow" target="_blank">
                        <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                     </a>
                     <!--<a title="Skype" href="https://www.skype.com/cloudi5technologies/" rel="nofollow" target="_blank">-->
                     <!--   <span class="social-icon"><i class="fa fa-skype"></i></span>-->
                     <!--</a>-->
                     <a title="Pinterest" href="<?php echo $header_setting->pinterest; ?>" rel="nofollow"
                        target="_blank">
                        <span class="social-icon"><i class="fa fa-pinterest"></i></span>
                     </a>
                     <a title="Youtube" href="<?php echo $header_setting->youtube; ?>" rel="nofollow" target="_blank">
                        <span class="social-icon"><i class="fa fa-youtube"></i></span>
                     </a>
                     <a title="thread" href="<?php echo $header_setting->google_plus; ?>" rel="nofollow"
                        target="_blank">
                        <span class="social-icon"><img
                              src="https://www.cloudi5.com/asset/images/thread-icon.png"></span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <header class="header-standard header-transparent" id="header">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <div class="container">
         <div class="site-nav-inner">
            <nav class="navbar navbar-expand-lg">
               <div class="navbar-brand navbar-header">
                  <div class="logo">
                     <a href="<?php echo base_url(); ?>">
                        <img src="<?php echo base_url(); ?>asset/images/logo.png" class="img-responsive img-mob-resp"
                           alt="Cloudi5 Technologies Logo">
                     </a>
                  </div>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                     class="navbar-toggler-icon"><i class="icon icon-menu"></i></span></button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                     <li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown">Company<i
                              class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                           <li class="nav-item"><a href="<?php echo base_url(); ?>aboutus">About Us</a></li>
                           <li><a href="<?php echo base_url(); ?>careers">Careers</a></li>
                           <li><a href="<?php echo base_url(); ?>our-clientele">Our Clientele</a></li>
                           <li><a href="<?php echo base_url(); ?>write-for-us">Write for Us</a></li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown">Services<i
                              class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="<?php echo base_url(); ?>website-design-company-in-coimbatore">Website
                                 Design</a>
                           </li>
                           <li><a href="<?php echo base_url(); ?>web-development-company-in-coimbatore">Web
                                 Development</a></li>

                           <li class="nav-item dropdown header-sub-dropdown">
                              <a class="nav-link d-flex" data-toggle="dropdown">Mobile Application
                                 Development<i class="fa fa-angle-right"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                 <li><a href="<?php echo base_url(); ?>mobile-app-development-company-in-coimbatore">Android
                                       Application Development</a></li>
                                 <li><a href="<?php echo base_url(); ?>flutter-app-development-company-in-coimbatore">Flutter
                                       App Development</a>
                                 </li>
                                 <li><a href="<?php echo base_url(); ?>ios-app-development-company-in-coimbatore">iOS
                                       App
                                       Development</a></li>
                              </ul>
                           </li>

                           <li class="nav-item"><a
                                 href="<?php echo base_url(); ?>digital-marketing-company-in-coimbatore">Digital
                                 Marketing</a></li>
                           <li><a href="<?php echo base_url(); ?>search-engine-optimization">SEO</a></li>

                        </ul>
                     </li>
                     <li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown">Products<i
                              class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                           <li class="nav-item"><a href="<?php echo base_url(); ?>school-management-software">School
                                 Management Software</a></li>
                           <li class="nav-item"><a href="<?php echo base_url(); ?>ecommerce-website-development">Multi
                                 Vendor Ecommerce Website</a></li>
                        </ul>
                     </li>
                     <li class="nav-item"><a href="<?php echo base_url('portfolio'); ?>">Portfolio</a></li>
                     <li class="nav-item"><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
                     <li class="nav-item"><a href="<?php echo base_url(); ?>contactus">Contact Us</a></li>
               </div>
            </nav>
         </div>
      </div>
   </header>
</div>