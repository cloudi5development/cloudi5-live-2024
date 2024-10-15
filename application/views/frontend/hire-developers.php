<!DOCTYPE html>
<html lang="en-US">

<head>

   <title><?php if ($meta) {
               echo $meta->title ? $meta->title : "Cloudi5 - Web Development Company |  Digital Marketing | Coimbatore";
            } else {
               echo "Cloudi5 - Hire Developers | Website";
            } ?></title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="<?php echo $meta ? $meta->description : "";  ?>">
   <meta name="keywords" content="<?php echo $meta ? $meta->keyword : " ";  ?>">
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
   <link rel="canonical" href="<?php echo base_url(); ?>hire-developers" />
   <meta property="og:type" content="website" />
   <meta property="og:title" content="Cloudi5 - Web Development Company |  Digital Marketing | Coimbatore" />
   <meta property="og:description" content="Cloudi5 is one of the best software development, web design, mobile app development, School ERP, Digital Marketing, SEO & SMO companies in Coimbatore, Tamil Nadu, India. Global custom software development company helps the client to build innovative software products and focused on the execution delivery and support." />
   <meta property="og:url" content="<?php echo base_url(); ?>hire-developers" />
   <?php $this->load->view('frontend/common-css'); ?>
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/hire-developers-css.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/animate.css" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
</head>

<body id="cont1">

   <div class="body-inner">

      <?php include 'header.php' ?>
      <!-- banner-section-start -->
      <section class="slider__area pt-150 z-index-1 p-relative fix" data-bg-color="green-light-3">
                  <div class="slider__shape">
                     <img  src="<?php echo base_url(); ?> asset/images/slider-shape-4.png" class="slider__shape-19" alt="">
                  </div>
                  <div class="container">
                     <div class="row align-items-end">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 mb-150">
                           <div class="slider__content-7">
                              <h3 class="slider__title-7">It’s time to <br> join the 
                                 <span class="slider-highlight">
                                    startup
                                    <svg width="250" height="26" viewBox="0 0 250 26" fill="none">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M0.459201 25.994C82.2393 7.58611 164.636 5.58178 245.781 17.018C247.392 17.2457 249.788 15.2732 249.987 12.2303C250.189 9.13152 247.943 6.69806 246.327 6.44239C164.573 -6.54524 82.4933 0.442568 0.329759 24.3485C-0.192484 24.501 -0.0532686 26.1099 0.459201 25.994Z" fill="currentColor"></path>
                                    </svg>
                                 </span> 
                                 business
                              </h3>
                              <p>Elementum ipsum donec usodales porttitor mauris augue fermentum sagittis elementum.</p>

                              <div class="slider__subscribe">
                                 <form action="#">
                                 <div class="">
                                       <div class="">
                                       </div>
                                       <button type="submit" class="tp-btnr-yellow tp-btn-shine-effect">Get Started</button>
                                    </div>
                                 </form>

                                 <div class="slider__subscribe-list">
                                    <ul>
                                       <li><i class="fa fa-check"></i> No credit card necessary</li>
                                       <li><i class="fa fa-check"></i> Cancel anytime</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                           <div class="slider__thumb-wrapper-7">
                           <img  src="<?php echo base_url(); ?> asset/images/slider-shape-1.png" class="slider__thumb-7-shape-1" alt="">
                              <img  src="<?php echo base_url(); ?> asset/images/slider-shape-4.png" class="slider__thumb-7-shape-2" alt="">
                              <img src="<?php echo base_url(); ?>asset/images/slider-shape-2.png"class="slider__thumb-7-shape-2" data-parallax="{&quot;y&quot;: -100, &quot;smoothness&quot;: 80}"  alt="" style="transform:translate3d(0px, -44.144px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, -44.144px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                              <img  src="<?php echo base_url(); ?>asset/images/slider-shape-3.png"class="slider__thumb-7-shape-3" data-parallax="{&quot;y&quot;: 100, &quot;smoothness&quot;: 80}" alt="" style="transform:translate3d(0px, 42.973px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 42.973px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                              <div class="slider__thumb-7">
                                 <img  src="<?php echo base_url(); ?>asset/images/slider-1.png">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
      </section>
      <!-- banner-section-end -->

      <!-- Explore-Features-section-start -->
      <section class="features__area p-relative z-index-1 pb-50 pt-125">
                  <div class="features__shape">
                     <img src="<?php echo base_url(); ?> asset/images/features-shape-2.png" class="features__shape-6"  alt="">
                     <!-- <img  src="<?php echo base_url(); ?> asset/images/slider-shape-2.png" class="features__shape-6" alt=""> -->
                  </div>
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-xxl-7 col-xl-8 col-lg-9">
                           <div class="section__title-wrapper-7 text-center mb-60">
                              <span class="section__title-pre-7">Explore Features</span>
                              <h3 class="section__title-7">Harry for every
                                 <span class="section__title-7-highlight">
                                   business
                                    <svg width="240" height="22" viewBox="0 0 240 22" fill="none">
                                       <path class="wow" fill-rule="evenodd" clip-rule="evenodd" d="M0.440833 21.1152C78.9497 6.16225 158.05 4.53412 235.949 13.8239C237.497 14.0088 239.796 12.4065 239.988 9.93474C240.181 7.4176 238.026 5.44088 236.474 5.2332C157.99 -5.31675 79.1936 0.359501 0.316568 19.7785C-0.184784 19.9023 -0.0511379 21.2092 0.440833 21.1152Z" fill="currentColor" style="visibility: visible; animation-name: section_stroke, section_stroke_fill;"></path>
                                    </svg>                                 
                                 </span> 
                                 <span class="linear-gradient">you need.</span></h3>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 ">
                           <div class="features__item-7 text-center mb-30 wow fadeInDown wd-service-ind" data-wow-delay=".5s">
                              <div class="features__icon-7">
                                 <span>
                                    <img src="<?php echo base_url(); ?>asset/images/features-icon-1.png" alt="">
                                 </span>
                              </div>
                              <div class="features__content-7">
                                 <h3 class="features__title-7">Manage Expenses</h3>
                                 <p>Build an online store that rank higher &amp; sell more and integrates easily.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                           <div class="features__item-7 text-center mb-30 transition-3 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
                              <div class="features__icon-7">
                                 <span>
                                    <img src="<?php echo base_url(); ?>asset/images/features-icon-2.png" alt="">
                                 </span>
                              </div>
                              <div class="features__content-7">
                                 <h3 class="features__title-7">Responsive any device</h3>
                                 <p>Build an online store that rank higher &amp; sell more and integrates easily.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                           <div class="features__item-7 text-center mb-30 transition-3 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.7s; animation-name: fadeInUp;">
                              <div class="features__icon-7">
                                 <span>
                                    <img src="<?php echo base_url(); ?>asset/images/features-icon-3.png" alt="">
                                 </span>
                              </div>
                              <div class="features__content-7">
                                 <h3 class="features__title-7">World-class support</h3>
                                 <p>Build an online store that rank higher &amp; sell more and integrates easily.</p>
                              
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-xxl-10 col-xl-10 col-lg-11">
                           <div class="features__offer text-center mt-20 wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.9s; animation-name: fadeInUp;">
                              <span>NEW FEATURES</span>
                              <p> If you want to join the effort and help with the plugin, please <a href="#">Let Us Know</a>.</p>
                           </div>
                        </div>
                     </div>
                  </div>
      </section>
      <!-- Explore-Features-section-end -->

      <!-- about-us area-section-start -->
      <section class="about__area p-relative z-index-1 pt-120 pb-140">
                  <div class="about__shape">
                     <img class="about__shape-7" src="<?php echo base_url(); ?> asset/images/about-shape-1.png" alt="">
                  </div>
                  <div class="container">
                     <div class="row">
                        <div class="col-xxl-6 col-lg-6 wow fadeInLeft" data-wow-delay=".5s">
                           <div class="about__thumb-wrapper-7">
                              <div class="about__thumb-7">
                                 <img src="<?php echo base_url(); ?>asset/images/about-img-1.jpg" alt="">
                              </div>
                              <div class="about__analysis" data-parallax="{&quot;y&quot;: -90, &quot;smoothness&quot;: 70}" style="transform:translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                                 <div class="about__analysis-top">
                                    <div class="about__analysis-icon">
                                       <span><i class="fa fa-arrow-circle-o-down"></i></span>
                                       <p>Data Analysis</p>
                                    </div>
                                    <div class="about__analysis-content">
                                       <div class="about__analysis-item">
                                          <h4>$48,662.44</h4>
                                          <p>Your monthly saving</p>
                                       </div>
                                       <div class="about__analysis-item-2">
                                          <h4>$2,485,166.42</h4>
                                          <p>Your total saving</p>
                                       </div>
                                       <div class="about__analysis-discount">
                                          <span>-32.56%</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6 wow fadeInRight" data-wow-delay=".5s">
                           <div class="about__wrapper-7 pt-35">
                              <div class="section__title-wrapper-7 mb-40">
                                 <span class="section__title-pre-7">Who we Are</span>
                                 <h3 class="section__title-7">We know your 
                                    problem &amp; 
                                    <span class="section__title-7-highlight">
                                    <span class="linear-gradient">  solution </span>
                                       <svg width="240" height="22" viewBox="0 0 240 22" fill="none">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M0.440833 21.1152C78.9497 6.16225 158.05 4.53412 235.949 13.8239C237.497 14.0088 239.796 12.4065 239.988 9.93474C240.181 7.4176 238.026 5.44088 236.474 5.2332C157.99 -5.31675 79.1936 0.359501 0.316568 19.7785C-0.184784 19.9023 -0.0511379 21.2092 0.440833 21.1152Z" fill="currentColor"></path>
                                       </svg>                                 
                                    </span>
                                 </h3>

                                 <p>Understand the growth of your product and direct  it better, with Harry.</p>
                              </div>
                              <div class="about__list about__list-counter">
                                 <div class="about__list-item d-flex align-items-start">
                                    <div class="about__list-icon">
                                       <span></span>
                                    </div>
                                    <div class="about__list-content">
                                       <h3 class="about__list-title">See the action in live</h3>
                                       <p>Our consultants specialise in one of five practice development.</p>
                                    </div>
                                 </div>
                                 <div class="about__list-item d-flex align-items-start">
                                    <div class="about__list-icon">
                                       <span></span>
                                    </div>
                                    <div class="about__list-content">
                                       <h3 class="about__list-title">See the action in live</h3>
                                       <p>Our consultants specialise in one of five practice development.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="about__btn-7">
                                 <a href="#" class="tp-btnr-border tp-btn-shine-effect tp-link-btn-3">
                                    More About us 
                                    <span>
                                       <i class="fa fa-arrow-right"></i>
                                    </span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
      </section>
      <!-- about-us area-section-end -->

      <!--top-reasons-section-start--->
      <section class="community pt-40 pb-100 style-5">
                  <div class="container">
                     <div class="section-head text-center mb-40 style-5 wow fadeInRight" data-wow-delay=".5s">
                        <h2 class="mb-20"> Top <span class="linear-gradient"> Reasons </span> </h2>
                        <p>Unify your business data in one simple ecommerce dashboard</p>
                     </div>
                     <div class="content rounded-pill style-5 wow fadeInDown" data-wow-delay=".5s">
                        <div class="commun-card">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/hire/code3d.png" alt="">
                              </div>
                              <div class="inf">
                                 <h5>Front-End Friendly</h5>
                              </div>
                        </div>
                        <div class="commun-card">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/hire/price3d.png" alt="">
                              </div>
                              <div class="inf">
                                 <h5>Affordable Price</h5>
                              </div>
                        </div>
                        <div class="commun-card">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/hire/message3d.png" alt="">
                              </div>
                              <div class="inf">
                                 <h5>Affordable Price</h5>
                              </div>
                        </div>
                     </div>
                  </div>
      </section>
      <!--top-reasons-section-end--->
      <!-- service-section-start -->
      <section class="services__area grey-bg-8 pt-110 pb-130 p-relative z-index-1">
                  <div class="services__shape">
                     <img class="services__shape-4" src="<?php echo base_url(); ?>asset/images/hire/services-shape-1.png" alt="">
                     <img class="services__shape-5" src="<?php echo base_url(); ?>asset/images/hire/services-shape-2.png" alt="">
                     <img class="services__shape-6" src="<?php echo base_url(); ?>asset/images/hire/services-shape-3.png" alt="">
                     <img class="services__shape-7" src="<?php echo base_url(); ?>asset/images/hire/services-shape-4.png" alt="">
                     <img class="services__shape-8" src="<?php echo base_url(); ?>asset/images/hire/services-shape-5.png" alt="">
                     <img class="services__shape-9" data-parallax="{&quot;y&quot;: 150, &quot;smoothness&quot;: 10}" src="<?php echo base_url(); ?>asset/images/hire/services-shape-6.png" alt="" style="transform:translate3d(0px, 0.015px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 0.015px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                  </div>
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-xxl-8 col-xl-8 col-lg-10">
                           <div class="services__section-title-5 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
                              <div class="section__title-wrapper-5 mb-70 text-center">
                                 <span class="section__title-pre-5">What We Create</span>
                                 <h3 class="section__title-5">We provide wide range of  <span class="linear-gradient"> digital services</span></h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                           <div class="services__item-5 mb-30 white-bg wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                              <div class="services__item-5-inner text-center transition-3  white-bg">
                                 <div class="services__content-5">
                                    <h3 class="services__title-5">
                                       Strategy &amp; Research.
                                    </h3>
                                    <p>Our design services starts and ends best in class experience.</p>
         
                                    <div class="services__btn-5">
                                       <a href="#" class="tp-link-btn-circle justify-content-center">
                                          See More
                                          <span>
                                             <i class="fa fa-arrow-right"></i>
                                             <i class="fa fa-arrow-right"></i>
                                          </span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="services__thumb-5">
                                    <img src="<?php echo base_url(); ?>asset/images/hire/services-1.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                           <div class="services__item-5 mb-30 white-bg wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
                              <div class="services__item-5-inner text-center transition-3  white-bg">
                                 <div class="services__content-5">
                                    <h3 class="services__title-5">
                                    UI/UX Analysis
                                    </h3>
                                    <p>Our design services starts and ends best in class experience.</p>
         
                                    <div class="services__btn-5">
                                       <a href="#" class="tp-link-btn-circle justify-content-center">
                                          See More
                                          <span>
                                             <i class="fa fa-arrow-right"></i>
                                             <i class="fa fa-arrow-right"></i>
                                          </span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="services__thumb-5">
                                    <img src="<?php echo base_url(); ?>asset/images/hire/services-2.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                           <div class="services__item-5 mb-30 white-bg wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.7s; animation-name: fadeInUp;">
                              <div class="services__item-5-inner text-center transition-3  white-bg">
                                 <div class="services__content-5">
                                    <h3 class="services__title-5">
                                       Search Optimization
                                    </h3>
                                    <p>Our design services starts and ends best in class experience.</p>
         
                                    <div class="services__btn-5">
                                       <a href="#" class="tp-link-btn-circle justify-content-center">
                                          See More
                                          <span>
                                             <i class="fa fa-arrow-right"></i>
                                             <i class="fa fa-arrow-right"></i>
                                          </span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="services__thumb-5">
                                    <img src="<?php echo base_url(); ?>asset/images/hire/services-3.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-lg-8 col-xl-8 col-lg-10 ">
                           <div class="ticket__wrapper mt-50 d-md-flex align-items-center justify-content-between" data-bg-color="blue-bg-2">
                              <div class="ticket__inner d-sm-flex align-items-center">
                                 <div class="ticket__shape">
                                    <img class="ticket__shape-1 wow fadeInDown" data-wow-delay=".3s" data-wow-duration="1s" src="<?php echo base_url(); ?>asset/images/hire/ticket-shape-1.png" alt="" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
                                    <img class="ticket__shape-2 wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s" src="<?php echo base_url(); ?>asset/images/hire/ticket-shape-2.png" alt="" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInDown;">
                                    <img class="ticket__shape-3 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s" src="<?php echo base_url(); ?>asset/images/hire/ticket-shape-3.png" alt="" style="visibility: visible; animation-duration: 1s; animation-delay: 0.7s; animation-name: fadeInUp;">
                                 </div>
                                 <div class="ticket__icon mr-15">
                                    <img src="<?php echo base_url(); ?>asset/images/hire/ticket-icon.png" alt="">
                                 </div>
                                 <div class="ticket__content">
                                    <h4 class="ticket__title">Contact us to</h4>
                                    <p>Get a professional service.</p>
                                 </div>
                              </div>
                              <div class="ticket__btn">
                                 <a href="#" class="tp-btn-white-sm">Submit a Ticket</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
      </section>
      <!-- service-section-end -->

      <!----chart-banner-section-start---->
      <section class="chat-banner style-7">
                  <div class="container">
                     <div class="row align-items-end">
                        <div class="col-lg-3 col-sm-6 d-none d-lg-block">
                              <div class="img img1  wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                                 <img src="<?php echo base_url(); ?>asset/images/hire/vector1.png" alt="">
                              </div>
                        </div>
                        <div class="col-lg-5">
                              <div class="info">
                                 <p> Hire Us For Your Project </p>
                                 <h3> Lets Work Together </h3>
                                 <div class="btns mt-50">
                                    <a href="#" class="btn btn-icon-circle rounded-pill bg-black fw-bold text-white me-4 mb-lg-0">
                                          <small> Estimate Project <i class="fa fa-long-arrow-right"></i> </small>
                                    </a>
                                    <a href="#" class="btn btn-icon-circle rounded-pill fw-bold brd-light text-white hover-blue7 mobile-view-margin">
                                          <small> Contact Us <i class="fa fa-long-arrow-right bg-light"></i> </small>
                                    </a>
                                 </div>
                              </div>
                        </div>
                        <div class="col-lg-4">
                              <div class="img img2 wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                                 <img src="<?php echo base_url(); ?>asset/images/hire/vector2.png" alt="">
                              </div>
                        </div>
                     </div>
                  </div>
      </section>
      <!----chart-banner-section-end---->

      <!-- what-we-do-section-start -->
      <div class="rs-services services-main-home bg1 pt-153 pb-160 md-pt-75 md-pb-80">
                  <div class="container custom">
                     <div class="sec-title text-center mb-55 md-mb-35">
                        <span class="sub-text">
                           What We Do
                        </span>
                        <h2 class="title">
                           Services we can
                          <span class="linear-gradient"> help you.</span>
                        </h2>
                     </div>
                     <div class="row">
                        <div class="col-lg-4 col-md-6 mb-35 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                           <div class="services-item">
                              <div class="services-wrap">
                                 <div class="services-img">
                                    <img src="<?php echo base_url(); ?>asset/images/hire/icons1.png" alt="Images">
                                 </div>
                                 <div class="services-content">
                                    <h2 class="title"><a href="#">Digital Marketing</a></h2>
                                    <p class="services-txt"> Ullamcorper malesuada proin libero nunc. Quis ipsum suspen.</p>
                                    <div class="services-button">
                                          <a href="#">
                                                   <span class="btn-text">
                                                      Read More                           
                                                   </span>
                                                   <i class="fa fa-long-arrow-right"></i>
                                                </a> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-35 wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
                           <div class="services-item">
                              <div class="services-wrap">
                                 <div class="services-img">
                                    <img src="<?php echo base_url(); ?>asset/images/hire/icons2.png" alt="Images">
                                 </div>
                                 <div class="services-content">
                                    <h2 class="title"><a href="#">Video Production</a></h2>
                                    <p class="services-txt"> Ullamcorper malesuada proin libero nunc. Quis ipsum suspen.</p>
                                    <div class="services-button">
                                          <a href="#">
                                                   <span class="btn-text">
                                                      Read More                           
                                                   </span>
                                                   <i class="fa fa-long-arrow-right"></i>
                                                </a> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-35 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                           <div class="services-item">
                              <div class="services-wrap">
                                 <div class="services-img">
                                    <img src="<?php echo base_url(); ?>asset/images/hire/icons3.png" alt="Images">
                                 </div>
                                 <div class="services-content">
                                    <h2 class="title"><a href="#">Branding Design</a></h2>
                                    <p class="services-txt"> Ullamcorper malesuada proin libero nunc. Quis ipsum suspen.</p>
                                    <div class="services-button">
                                          <a href="#">
                                                   <span class="btn-text">
                                                      Read More                           
                                                   </span>
                                                   <i class="fa fa-long-arrow-right"></i>
                                                </a> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-35 mobile-view-mb-35 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                           <div class="services-item">
                              <div class="services-wrap">
                                 <div class="services-img">
                                    <img src="<?php echo base_url(); ?>asset/images/hire/icons4.png" alt="Images">
                                 </div>
                                 <div class="services-content">
                                    <h2 class="title"><a href="#">UX Design</a></h2>
                                    <p class="services-txt"> Ullamcorper malesuada proin libero nunc. Quis ipsum suspen.</p>
                                    <div class="services-button">
                                          <a href="#">
                                                   <span class="btn-text">
                                                      Read More                           
                                                   </span>
                                                   <i class="fa fa-long-arrow-right"></i>
                                                </a> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 sm-mb-35 mobile-view-mb-35 wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
                           <div class="services-item">
                              <div class="services-wrap">
                                 <div class="services-img">
                                    <img src="<?php echo base_url(); ?>asset/images/hire/icons5.png" alt="Images">
                                 </div>
                                 <div class="services-content">
                                    <h2 class="title"><a href="#">Web Development</a></h2>
                                    <p class="services-txt"> Ullamcorper malesuada proin libero nunc. Quis ipsum suspen.</p>
                                    <div class="services-button">
                                          <a href="#">
                                                   <span class="btn-text">
                                                      Read More                           
                                                   </span>
                                                   <i class="fa fa-long-arrow-right"></i>
                                                </a> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mobile-view-mb-35 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                           <div class="services-item">
                              <div class="services-wrap">
                                 <div class="services-img">
                                    <img src="<?php echo base_url(); ?>asset/images/hire/icons6.png" alt="Images">
                                 </div>
                                 <div class="services-content">
                                    <h2 class="title"><a href="#">eCommerce</a></h2>
                                    <p class="services-txt"> Ullamcorper malesuada proin libero nunc. Quis ipsum suspen.</p>
                                    <div class="services-button">
                                          <a href="#">
                                                   <span class="btn-text">
                                                      Read More                           
                                                   </span>
                                                   <i class="fa fa-long-arrow-right"></i>
                                                </a> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
      </div>
      <!-- what-we-do-section-end -->

      <!-- about-1-area-section-start -->
      <section class="support__area p-relative z-index-1 pt-160 pb-70">
            <div class="support__shape">
               <img class="support__shape-4" src="<?php echo base_url(); ?>asset/images/hire/support-shape-4.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 col-lg-6 wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                     <div class="support__wrapper pt-25">
                        <div class="section__title-wrapper-7">
                           <span class="section__title-pre-7">Efficient</span>
                           <h3 class="section__title-7">Straight 
                           <span class="linear-gradient"> to the point                 
                              </span>
                           </h3>
                        </div>
                        <p>A startup  is started by individual founders or entrepreneurs <br> to search for a repeatable </p>

                        <div class="support__item-wrapper">
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="support__item mb-55">
                                    <div class="support__icon">
                                       <span>
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M18.4698 16.83L18.8598 19.99C18.9598 20.82 18.0698 21.4 17.3598 20.97L13.1698 18.48C12.7098 18.48 12.2599 18.45 11.8199 18.39C12.5599 17.52 12.9998 16.42 12.9998 15.23C12.9998 12.39 10.5398 10.09 7.49985 10.09C6.33985 10.09 5.26985 10.42 4.37985 11C4.34985 10.75 4.33984 10.5 4.33984 10.24C4.33984 5.68999 8.28985 2 13.1698 2C18.0498 2 21.9998 5.68999 21.9998 10.24C21.9998 12.94 20.6098 15.33 18.4698 16.83Z" stroke="#04121F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M13 15.2298C13 16.4198 12.56 17.5198 11.82 18.3898C10.83 19.5898 9.26 20.3598 7.5 20.3598L4.89 21.9098C4.45 22.1798 3.89 21.8098 3.95 21.2998L4.2 19.3298C2.86 18.3998 2 16.9098 2 15.2298C2 13.4698 2.94 11.9198 4.38 10.9998C5.27 10.4198 6.34 10.0898 7.5 10.0898C10.54 10.0898 13 12.3898 13 15.2298Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>                                                                                         
                                       </span>
                                    </div>
                                    <div class="support__content">
                                       <h3 class="support__title">No meetings</h3>
                                       <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex consequat.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="support__item mb-55">
                                    <div class="support__icon">
                                       <span>
                                          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M15.63 6.39014C15.63 6.39014 15.66 5.44014 15.63 5.13014C15.46 3.09014 14.13 2.39014 11.52 2.39014H5.21C2.05 2.39014 1 3.44014 1 6.60014V15.0201C1 16.2801 1.38 17.5501 2.37 18.3601L3 18.8101" stroke="#04121F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M15.7398 9.75977V15.0198C15.7398 18.1798 14.6898 19.2298 11.5298 19.2298H6.25977" stroke="#04121F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M21.0002 5.5498V14.6198C21.0002 16.2898 19.8802 16.8698 18.5202 15.9098L15.7402 13.9598" stroke="#04121F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M21.0195 1L1.01953 21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>                                             
                                       </span>
                                    </div>
                                    <div class="support__content">
                                       <h3 class="support__title">24/7 support </h3>
                                       <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex consequat.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="support__btn">
                           <a href="#" class="tp-btnr-2 mr-5 mb-15 tp-btn-shine-effect">Get Started Now</a>
                           <a href="#" class="tp-btnr-border-2 mb-15 tp-btn-shine-effect tp-link-btn-3">
                              Try For Free
                              <span>
                                 <i class="fa fa-arrow-right"></i>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-lg-6 wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
                     <div class="support__thumb-wrapper pl-100">
                        <div class="support__shape">
                           <img class="support__shape-1" src="<?php echo base_url(); ?>asset/images/hire/support-shape-1.png" alt="">
                           <img class="support__shape-2" data-parallax="{&quot;y&quot;: -50, &quot;smoothness&quot;: 40}" src="<?php echo base_url(); ?>asset/images/hire/support-shape-2.png" alt="" style="transform:translate3d(0px, -0.2px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, -0.2px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                           <img class="support__shape-3" data-parallax="{&quot;y&quot;: 50, &quot;smoothness&quot;: 40}" src="<?php echo base_url(); ?>asset/images/hire/support-shape-3.png" alt="" style="transform:translate3d(0px, 33.562px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 33.562px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                        </div>
                        <div class="support__thumb">
                           <img class="" src="<?php echo base_url(); ?>asset/images/hire/support-img-1.jpg" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </section>
      <!-- about-1-area-section-end -->

      <!-- hire-section-by-designation-start -->
      <section class="features text-center pb-100 pt-70 " id="features">
        <div class="container">
          <div class="row clearfix">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
              <div class="heading text-center">
                <p class="heading-subtitle">our future</p>
                <h2 class="heading-title">our amazing features</h2>
              </div>
            </div>
            <!-- End .col-lg-6 -->
          </div>
          <!-- End .row  -->
          <div class="row">
            <!-- Panel #1  -->
            <div class="col-12 col-lg-4 ">
              <div class="feature-panel feature-panel-1">
                <div class="feature-icon">
                <div class="features-icon features-icon-1">
                  <div class="feautre-imgages">
                      <img src="<?php echo base_url(); ?>asset/images/hire/react.svg" alt="Images" class="feautres-images">
                  </div>
                </div>
                </div>
                <div class="feature-text">
                  <h4 class="feature-text-1">Hire ReactJS Developers</h4>
                  <p>We provide the best UI/UX Design by following the latest trends of the market We provide the best UI/UX Design by following the latest trends of the market</p>
                </div>
              </div>
              <!-- End .feature-panel -->
            </div>
            <!-- End .col-12-->
            <!-- Panel #2-->
            <div class="col-12 col-lg-4 ">
              <div class="feature-panel feature-panel-2">
                <div class="feature-icon">
                <div class="features-icon features-icon-2">
                  <div class="feautre-imgages">
                      <img src="<?php echo base_url(); ?>asset/images/hire/node_js.svg" alt="Images" class="feautres-images">
                  </div>
                </div>
                </div>
                <div class="feature-text">
                  <h4 class="feature-text-2">Hire NodeJS Developers</h4>
                  <p>We provide the best UI/UX Design by following the latest trends of the market We provide the best UI/UX Design by following the latest trends of the market</p>
                </div>
              </div>
              <!-- End .feature-panel -->
            </div>
            <!-- End .col-12-->
            <!-- Panel #3-->
            <div class="col-12 col-lg-4 ">
              <div class="feature-panel mb-5 feature-panel-3">
                <div class="feature-icon">
                <div class="features-icon features-icon-3">
                  <div class="feautre-imgages">
                      <img src="<?php echo base_url(); ?>asset/images/hire/laravel_developers.svg" alt="Images" class="feautres-images">
                  </div>
                </div>
                </div>
                <div class="feature-text">
                  <h4 class="feature-text-3">Hire Laravel Developers</h4>
                  <p>We provide the best UI/UX Design by following the latest trends of the market We provide the best UI/UX Design by following the latest trends of the market</p>
                </div>
              </div>
              <!-- End .feature-panel -->
            </div>
            <!-- End .col-12-->
            <!-- Panel #4-->
            <div class="col-12 col-lg-4  ">
              <div class="feature-panel mb-5 feature-panel-4">
                <div class="feature-icon">
                <div class="features-icon">
                  <div class="feautre-imgages">
                      <img src="<?php echo base_url(); ?>asset/images/hire/php.svg" alt="Images" class="feautres-images">
                  </div>
                </div>
                </div>
                <div class="feature-text">
                  <h4 class="feature-text-4">Hire PHP Developers</h4>
                  <p>We provide the best UI/UX Design by following the latest trends of the market We provide the best UI/UX Design by following the latest trends of the market</p>
                </div>
              </div>
              <!-- End .feature-panel -->
            </div>
            <!-- End .col-12-->
            <!-- Panel #5-->
            <div class="col-12 col-lg-4 ">
              <div class="feature-panel mb-5 feature-panel-5">
                <div class="feature-icon">
                <div class="features-icon features-icon-5">
                  <div class="feautre-imgages">
                      <img src="<?php echo base_url(); ?>asset/images/hire/angular.svg" alt="Images" class="feautres-images">
                  </div>
                </div>
                </div>
                <div class="feature-text">
                  <h4 class="feature-text-5">Hire AngularJS Developers</h4>
                  <p>We provide the best UI/UX Design by following the latest trends of the market We provide the best UI/UX Design by following the latest trends of the market</p>
                </div>
              </div>
              <!-- End .feature-panel -->
            </div>
            <!-- End .col-12-->
               <!-- Panel #6-->
               <div class="col-12 col-lg-4 ">
              <div class="feature-panel mb-5 feature-panel-6">
                <div class="feature-icon">
                <div class="features-icon  features-icon-6">
                  <div class="feautre-imgages">
                      <img src="<?php echo base_url(); ?>asset/images/hire/full_Stack.svg" alt="Images" class="feautres-images">
                  </div>
                </div>
                </div>
                <div class="feature-text">
                  <h4 class="feature-text-6">Full Stack Developers</h4>
                  <p>We provide the best UI/UX Design by following the latest trends of the market We provide the best UI/UX Design by following the latest trends of the market</p>
                </div>
              </div>
              <!-- End .feature-panel -->
            </div>
            <!-- End .col-12-->
               <!-- Panel #7-->
               <div class="col-12 col-lg-4 ">
              <div class="feature-panel feature-panel-7">
                <div class="feature-icon">
                <div class="features-icon features-icon-7">
                  <div class="feautre-imgages">
                      <img src="<?php echo base_url(); ?>asset/images/hire/android.svg" alt="Images" class="feautres-images">
                  </div>
                </div>
                </div>
                <div class="feature-text">
                  <h4 class="feature-text-7">Hire Android developers</h4>
                  <p>We provide the best UI/UX Design by following the latest trends of the market We provide the best UI/UX Design by following the latest trends of the market</p>
                </div>
              </div>
              <!-- End .feature-panel -->
            </div>
            <!-- End .col-12-->
               <!-- Panel #9-->
               <div class="col-12 col-lg-4 ">
              <div class="feature-panel feature-panel-9">
                <div class="feature-icon">
                <div class="features-icon features-icon-9">
                  <div class="feautre-imgages">
                      <img src="<?php echo base_url(); ?>asset/images/hire/app_developer.svg" alt="Images" class="feautres-images">
                  </div>
                </div>
                </div>
                <div class="feature-text">
                  <h4 class="feature-text-9">App Developers</h4>
                  <p>We provide the best UI/UX Design by following the latest trends of the market We provide the best UI/UX Design by following the latest trends of the market</p>
                </div>
              </div>
              <!-- End .feature-panel -->
            </div>
          <!-- End .row  -->
        </div>
        <!-- End .container-->
      </section>
      <!-- hire-section-by-designation-end -->
      
      <!--testimonial-section-start-->
   <section class="test style-4 pt-70">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-5  wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="section-head style-4">
                                <small class="title_small">Testimonials</small>
                                <h2 class="mb-30">Loved From <span> Customers </span> </h2>
                            </div>
                            <p class="text mb-40">
                                Notero loved from thoudsands customer worldwide and get trusted from big companies.
                            </p>
                            <div class="numbs">
                                <div class="num-card">
                                    <div class="icon img-contain">
                                        <img src="<?php echo base_url(); ?>asset/images/hire/testi_s4_ic1.png" alt="">
                                    </div>
                                    <h2>2,5M+</h2>
                                    <p>Downloaded and <br> Installation</p>
                                </div>
                                <div class="num-card">
                                    <div class="icon img-contain">
                                        <img src="<?php echo base_url(); ?>asset/images/hire/testi_s4_ic2.png" alt="">
                                    </div>
                                    <h2>4.8/5</h2>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Based on 1,258 reviews</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-70">
                                <a href="https://www.apple.com/app-store/" class="btn rounded-pill bg-blue4 fw-bold text-white me-4" target="_blank">
                                    <small>Contact Us</small>
                                </a>
                                <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity="" class="play-btn">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="testi-cards">
                                <div class="client_card wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                    <div class="user_img">
                                        <img src="<?php echo base_url(); ?>asset/images/hire/user4.png" alt="">
                                    </div>
                                    <div class="inf_content">
                                        <div class="stars mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h6>
                                            “You can even send emails to Evernote and gather  <br> all of the things you need in a single place.”
                                        </h6>
                                        <p>jurgen k.   <span class="text-muted-1"> /  Senior Marketing at <span>Brator</span> </span></p>
                                    </div>
                                </div>
                                <div class="client_card wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
                                    <div class="user_img">
                                        <img src="<?php echo base_url(); ?>asset/images/hire/user5.png" alt="">
                                    </div>
                                    <div class="inf_content">
                                        <div class="stars mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h6>
                                            “Notero - 1st my choice for notes app. Awesome”
                                        </h6>
                                        <p>foden p.  <span class="text-muted-1"> /  Director at <span>Ecoland Resort</span> </span></p>
                                    </div>
                                </div>
                                <div class="client_card wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                    <div class="user_img">
                                        <img src="<?php echo base_url(); ?>asset/images/hire/user6.png" alt="">
                                    </div>
                                    <div class="inf_content">
                                        <div class="stars mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h6>
                                            “.This app is seriously good. It’s simple, clean and <br> a real joy to use.”                                    </h6>
                                        <p>Kerry T. <span class="text-muted-1"> /  Designer at <span>Teckzone Inc</span> </span></p>
                                    </div>
                                </div>
                                <img src="<?php echo base_url(); ?>asset/images/hire/contact_globe.svg" alt="" class="testi-globe">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   </section>
      <!--testimonial-section-end-->
<section class="bg-purple pb-50">
      <div class="col-12 col-lg-8 mx-auto text-center">
         <h1 class="font-weight-bolder mb-4 text-white">Our Clients Reviews</h1>
      </div>
      <section class="testimonial__area p-relative z-index-1 pt-120 testimonial__gradient-bg fix pb-125">
            <div class="testimonial__shape">
               <img class="testimonial__shape-3" src="<?php echo base_url(); ?>asset/images/hire/testimonial-shape-1.png" alt="">
               <img class="testimonial__shape-4" src="<?php echo base_url(); ?>asset/images/hire/testimonial-shape-2.png" alt="">
               <img class="testimonial__shape-5" src="<?php echo base_url(); ?>asset/images/hire/testimonial-shape-3.png" alt="">
               <img class="testimonial__shape-6" src="<?php echo base_url(); ?>asset/images/hire/testimonial-shape-4.png" alt="">
               <img class="testimonial__shape-7" src="<?php echo base_url(); ?>asset/images/hire/testimonial-shape-5.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-10  wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
                     <div class="section__title-wrapper-5 mb-10">
                        <span class="section__title-pre-5">success Stories</span>
                        <h3 class="sections__main-tittle">Why customers <span>love working</span> with us</h3>
                     </div>
                  </div>
               </div>
<div class="col-12 testimonials owl-theme owl-carousel  wow fadeInDown" data-wow-delay=".7s" data-wow-duration="1s">
   <div class="p-5 bg-white shadow-sm  border-radius-new bs-1"> <img src="https://annedece.sirv.com/Images/commos.png" class="pb-4 comms">
   <p class="text-muted-1">Lorem ipsum dolor sit amet, Sed sit amet ex id turpis consectetur adipiscing elit. Sed velit tellus, facilisis at ultrices eu, ultrices sed justo. </p>

   <div class="d-flex align-items-center pt-3">
      <div class="author-img mr-3"> <img src="https://annedece.sirv.com/Images/pexels-andrea-piacquadio-762020%20(1).jpg"> </div>
      <div>
         <h5 class="m-0 testimonial__avater-title-5">Kevin Rich</h5>
         <p class="m-0 pt-1 testimonial__avater-designation-5">Web Developer</p>
       
      </div>
   </div>
   </div>
   <div class="p-5 bg-white shadow-sm border-radius-new bs-1"> <img src="https://annedece.sirv.com/Images/commos.png" class="pb-4 comms">
   <p class="text-muted-1">Lorem ipsum dolor sit amet, Sed sit amet ex id turpis consectetur adipiscing elit. Sed velit tellus, facilisis at ultrices eu, ultrices sed justo. </p>

   <div class="d-flex align-items-center pt-3">
      <div class="author-img mr-3"> <img src="https://annedece.sirv.com/Images/pexels-stefan-stefancik-91227.jpg"> </div>
      <div>
         <h5 class="m-0 testimonial__avater-title-5">James Rosan</h5>
         <p class="m-0 pt-1 testimonial__avater-designation-5">Digital Marketer</p>
      
      </div>
   </div>
   </div>
   <div class="p-5 bg-white shadow-sm border-radius-new bs-1"> <img src="https://annedece.sirv.com/Images/commos.png" class="pb-4 comms">
   <p class="text-muted-1">Lorem ipsum dolor sit amet, Sed sit amet ex id turpis consectetur adipiscing elit. Sed velit tellus, facilisis at ultrices eu, ultrices sed justo. </p>

   <div class="d-flex align-items-center pt-3">
      <div class="author-img mr-3"> <img src="https://annedece.sirv.com/Images/pexels-andrea-piacquadio-839011.jpg"> </div>
      <div>
         <h5 class="m-0 testimonial__avater-title-5">Peterson Root</h5>
         <p class="m-0 pt-1 testimonial__avater-designation-5">UI/UX Designer</p>
   
      </div>
   </div>
   </div>
   <div class="p-5 bg-white shadow-sm border-radius-new bs-1"> <img src="https://annedece.sirv.com/Images/commos.png" class="pb-4 comms">
   <p class="text-muted-1">Lorem ipsum dolor sit amet, Sed sit amet ex id turpis consectetur adipiscing elit. Sed velit tellus, facilisis at ultrices eu, ultrices sed justo. </p>
  
   <div class="d-flex align-items-center pt-3">
      <div class="author-img mr-3"> <img src="https://annedece.sirv.com/Images/pexels-tim-savage-736716.jpg"> </div>
      <div>
         <h5 class="m-0 testimonial__avater-title-5">John More</h5>
         <p class="m-0 small font-medium">Co-Founder</p>
      </div>
   </div>
   </div>
</div>
               <div class="testimonial__nav-wrapper">
                  <div class="row align-items-center">
                     <div class="col-sm-6">
                        <div class="testimonial__rating-5 d-flex align-items-center">
                           <div class="testimonial__rating-logo mr-15">
                              <img src="<?php echo base_url(); ?>asset/images/hire/testimonial-rating-logo.png" alt="">
                           </div>
                           <div class="testimonial__rating-content">
                              <div class="testimonial__rating testimonial__rating-5">
                                 <a href="#">
                                    <i class="fa fa-star"></i>
                                 </a>
                                 <a href="#">
                                    <i class="fa fa-star"></i>
                                 </a>
                                 <a href="#">
                                    <i class="fa fa-star"></i>
                                 </a>
                                 <a href="#">
                                    <i class="fa fa-star"></i>
                                 </a>
                                 <a href="#">
                                    <i class="fa fa-star"></i>
                                 </a>
                              </div>
                              <p>4.8 Rating on Google</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                     </div>
                  </div>
               </div>
            </div>
         </section>
   </div>
   </div>
</section>
      <!-- testimonial-section-end -->
      <!-- contact-section-start -->
      <div class="rs-contact contact-style1 purple-bg">
				<div class="container custom">
					<div class="row">
						<div class="col-lg-6 model-img wow fadeInLeft data-wow-delay=".7s" data-wow-duration="1s"></div>
						<div class="col-lg-6">
							<div class="contact-wrap">
								<div class="sec-title mb-10 md-mb-50">
									<span class="sub-text">
										Lets talk
									</span>
									<h2 class="title white-color pb-20">
										Have any  project? 
									</h2>
								</div>
							    <div id="form-messages"></div>
							    <form id="contact-form" method="post" action="mailer.php">
							        <fieldset>
							            <div class="row">
							                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
							                    <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
							                </div> 
							                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
							                    <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
							                </div>   
							                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
							                    <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
							                </div>
							                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
							                    <input class="from-control" type="text" id="website" name="website" placeholder="Your Website" required="">
							                </div>
							                <div class="col-lg-12 mb-30">
							                    <textarea class="from-control" id="message" name="message" placeholder="Your Message Here" required=""></textarea>
							                </div>
							            </div>
							            <div class="btn-part">                                            
							                <div class="form-group mb-0">
							                    <input class="readon submit" type="submit" value="Submit Now">
							                </div>
							            </div> 
							        </fieldset>
							    </form> 
							   	<div class="address-widget">
		   						    <div class="address-wrap">
		   		                        <div class="address-icon  btn-pulso-1"> 
		   		                           <i class="fa fa-phone "></i>
		   		                        </div>
		   		                        <div class="content-txt">
		   		                        	<span class="des">+91 91599 13344</span>
		   		                        </div>
		   		                    </div>
							   	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="contact-animate">
					<div class="animation one wow fadeInDown" data-wow-delay=".7s" data-wow-duration="1s">
						<img class="rotated-style" src="<?php echo base_url(); ?>asset/images/hire/slide-img1.png" alt="Images">
					</div>
					<div class="animation two wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
						<img class="rotated-style" src="<?php echo base_url(); ?>asset/images/hire/asset-1.png" alt="Images">
					</div>
					<div class="animation three wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1s">
						<img class="rotated-style" src="<?php echo base_url(); ?>asset/images/hire/asset-2.png" alt="Images">
					</div>
					<div class="animation four wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1s">
						<img class="rotated-style" src="<?php echo base_url(); ?>asset/images/hire/slide-img2.png" alt="Images">
					</div>
				</div>
			</div>
         <!-- contact-section-end -->
         <!-- get-in-touch-with-us-section-start -->
      <section class="cta__area p-relative z-index-1">
                  <div class=" cta__overlay-5"></div>
                  <div class="container">
                     <div class="cta__inner-5" data-bg-color="blue-dark">
                        <div class="cta__shape">
                           <img class="cta__shape-7 wow fadeInDown" data-wow-delay=".3s" data-wow-duration="1s" src="<?php echo base_url(); ?>asset/images/hire/cta-shape-1.png" alt="" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
                           <img class="cta__shape-8 wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s" src="<?php echo base_url(); ?>asset/images/hire/cta-shape-2.png" alt="" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInDown;">
                           <img class="cta__shape-9 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s" src="<?php echo base_url(); ?>asset/images/hire/cta-shape-3.png" alt="" style="visibility: visible; animation-duration: 1s; animation-delay: 0.7s; animation-name: fadeInUp;">
                           <img class="cta__shape-10 wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s" src="<?php echo base_url(); ?>asset/images/hire/cta-shape-4.png" alt="" style="visibility: visible; animation-duration: 1s; animation-delay: 0.9s; animation-name: fadeInUp;">
                           <img class="cta__shape-11 wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s" src="<?php echo base_url(); ?>asset/images/hire/cta-shape-5.png" alt="" style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeInUp;">
                           <img class="cta__shape-12 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s" src="<?php echo base_url(); ?>asset/images/hire/cta-shape-6.png" alt="" style="visibility: visible; animation-duration: 1s; animation-delay: 0.7s; animation-name: fadeInUp;">
                           <img class="cta__shape-13 wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s" src="<?php echo base_url(); ?>asset/images/hire/cta-shape-7.png" alt="" style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: fadeInUp;">
                           <img class="cta__shape-14 wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s" src="<?php echo base_url(); ?>asset/images/hire/cta-shape-8.png" alt="" style="visibility: visible; animation-duration: 1s; animation-delay: 0.9s; animation-name: fadeInUp;">
                           <img class="cta__shape-15 wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s" src="<?php echo base_url(); ?>asset/images/hire/cta-shape-9.png" alt="" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInUp;">
                           <img class="cta__shape-16 wow fadeInUp" data-wow-delay="1.1s" data-wow-duration="1s" src="<?php echo base_url(); ?>asset/images/hire/cta-shape-10.png" alt="" style="visibility: visible; animation-duration: 1s; animation-delay: 1.1s; animation-name: fadeInUp;">
                        </div>
                        <div class="row align-items-center">
                           <div class="col-xxl-8 col-xl-8 col-lg-8">
                              <div class="cta__content-5">
                                 <span>Get to meet Your Next Agency</span>

                                 <h3 class="cta__title-5">Let’s talk about your next business challenge</h3>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-4 col-lg-4">
                              <div class="cta__btn-5 text-lg-end">
                                 <a href="#" class="tp-btn-orange-2">Get in Touch</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
      </section>
      <!-- get-in-touch-with-us-section-end -->
      <?php include 'footer.php' ?>
      <?php $this->load->view('frontend/common-js'); ?>
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/owl.carousel.min.js"></script>
       <!-----------wow-animation------------- -->
         <!-- On Scroll Animation -->
         <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/wow.min.js"></script>
        <script type="text/javascript">
            wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 100
            });
            wow.init();
        </script>
        <!-- On Scroll Animation End-->
      <!-- Form Validatation -->
      <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/form-validation.js"></script>
      <script>
         setTimeout(function() {
            $(".alert").fadeOut("slow", function() {
               $(".alert").remove();
            });

         }, 6000);
      </script>

      <script>
            $('.testimonials').owlCarousel({
            loop:true,
            margin:20,
            nav:false,
            dots:true,
            responsive:{
               0:{
                     items:1
               },
               600:{
                     items:1
               },
               1000:{
                     items:3
               }
            }
         })
      </script>
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/common-custom.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.counterup.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/waypoints.min.js"></script>
   </div>
</body>
</html>