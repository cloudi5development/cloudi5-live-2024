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
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/swiper-bundle.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/write-for-us.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.theme.default.min.css">
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> -->

   <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-brands/css/uicons-brands.css'>
   <link rel='stylesheet'
      href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

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

      <!-- <section class="write-for-us-home">
         <div class="container-fluid">
            <div class="row">
               <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/write-for-us-home-1.png"
                           alt="Home-Img-1">
                        <div class="bg-shadow-circle-1"></div>
                        <div class="bg-shadow-circle-2"></div>
                        <div class="slide-content">
                           <h2 class="title">Collaborate and Share Your Knowledge</h2>
                           <p class="description">Partner with us to publish high-quality content that informs and
                              engages industry professionals.</p>
                           <a href="javascript:void(0);" class="btn-write">
                              <button class="contact-btn">
                                 Get Started Now
                                 <span class="first"></span>
                                 <span class="second"></span>
                                 <span class="third"></span>
                                 <span class="fourth"></span>
                              </button>
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/write-for-us-home-2.png"
                           alt="Home-Img-2">
                        <div class="bg-shadow-circle-1"></div>
                        <div class="bg-shadow-circle-2"></div>
                        <div class="slide-content">
                           <h2 class="title">Make Your Expertise Known</h2>
                           <p class="description">Become a recognized thought leader by writing for our corporate blog
                              and engaging with a broad audience.</p>
                           <a href="javascript:void(0);" class="btn-write">
                              <button class="contact-btn">
                                 Get Started Now
                                 <span class="first"></span>
                                 <span class="second"></span>
                                 <span class="third"></span>
                                 <span class="fourth"></span>
                              </button>
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/write-for-us-home-3.png"
                           alt="Home-Img-3">
                        <div class="bg-shadow-circle-1"></div>
                        <div class="bg-shadow-circle-2"></div>
                        <div class="slide-content">
                           <h2 class="title">Publish Your Expert Opinions</h2>
                           <p class="description">Share your take on current trends, challenges, and opportunities in
                              the corporate world with our readers.</p>
                           <a href="javascript:void(0);" class="btn-write">
                              <button class="contact-btn">
                                 Get Started Now
                                 <span class="first"></span>
                                 <span class="second"></span>
                                 <span class="third"></span>
                                 <span class="fourth"></span>
                              </button>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-pagination"></div>
               </div>
            </div>
         </div>
      </section> -->

      <section class="write-for-us-home">
         <div class="circle-shape">
            <img src="<?php echo base_url(); ?>asset/images/write-for-us/circle-2-img.png" alt="img">
         </div>
         <div class="arrow-shape">
            <img src="<?php echo base_url(); ?>asset/images/write-for-us/arrow-up-img-1.png" alt="img">
         </div>
         <div class="ball-pulse-effect">
            <div class="ball-shape">

            </div>
         </div>
         <div class="container">
            <div class="row justify-center align-items-center">
               <div class="col-lg-9">
                  <div class="banner-contents">
                     <span class="sub-title"><img src="<?php echo base_url(); ?>asset/images/write-for-us/hii-emoji.svg"
                           alt="Hi Emoji" class="hi-emoji"> Leading Digital Solutions Provider in Coimbatore</span>
                     <h1 class="banner-title">Secure your websites with
                        cloud-based <span class="highlight">platform. <svg width="205" height="17" viewBox="0 0 205 17"
                              fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M2.62599 4.60245C33.6378 2.24214 117.062 -0.161247 202.664 9.10766M2.95273 14.5959C19.8661 13.505 66.1001 11.6133 101.833 13.0647"
                                 stroke="currentcolor" stroke-width="4" stroke-linecap="round"></path>
                           </svg></span>
                     </h1>
                     <p class="banner-desc">These tools can help you reach your target audience, improve your website's
                        visibility, and track your results.</p>
                     <a href="javascript:void(0);" class="contact-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Let's Discuss your Project
                     </a>
                  </div>
               </div>

            </div>
         </div>
      </section>

      <section class="why-choose-us">
         <div class="container">
            <div class="row align-items-center justify-center">
               <div class="col-lg-6">
                  <div class="left-side-content">
                     <h2 class="why-choose-title">
                        Why Should You
                        <br> <span> Write for Us ? <img
                              src="<?php echo base_url(); ?>asset/images/write-for-us/rating.png" alt=""
                              class="rating-img"></span>
                     </h2>
                     <p class="why-choose-desc">
                        Because it’s your chance to share your expertise, amplify your voice, and captivate our audience
                        with your writing skills.
                     </p>
                  </div>
               </div>
               <div class="col-lg-6">
                  <ul class="why-choose-points">
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png" alt="Point-shape">
                        </div>
                        High DA (72) for domain value
                     </li>
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png" alt="Point-shape">
                        </div>
                        Impressive DR (90) and UR (83)
                     </li>
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png" alt="Point-shape">
                        </div>
                        1M+ monthly blog visitors
                     </li>
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png" alt="Point-shape">
                        </div>
                        Backlink to your site
                     </li>
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png" alt="Point-shape">
                        </div>
                        89K+ customers
                     </li>
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png" alt="Point-shape">
                        </div>
                        Exposure to our blog subscribers
                     </li>
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png" alt="Point-shape">
                        </div>
                        Mentions in newsletter and social media
                     </li>
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png" alt="Point-shape">
                        </div>
                        Plus exciting additional benefits…
                     </li>
                  </ul>
               </div>

            </div>
         </div>
      </section>

      <section class="about-us-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 ">
                  <div class="heading-content">
                     <div class="sub-heading">
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/dots.png" alt="Sub-Heading-Design">
                        <span>About Us</span>
                     </div>
                     <h2>Powerful agency for corporate business.</h2>
                  </div>
               </div>
               <div class="col-lg-7 right-side-content">
                  <div class="about-desc">
                     <p>We strive to develop real-world web solutions that are ideal for small to large projects with
                        bespoke project requirements. we compelling web, which are the right-fit for your target.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class=".col-lg-12 about-us-contents">
                  <div class="row">
                     <div class="col-lg-3 text-center about-details">
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/about-icon-01.png" alt="">
                        <h5>Trusted company</h5>
                        <p>We deliver email marketing campaigns to audience.</p>
                     </div>
                     <div class="col-lg-3 text-center about-details">
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/about-icon-02.png" alt="">
                        <h5>Professional work</h5>
                        <p>We also help our clients with social media strategy.</p>
                     </div>
                     <div class="col-lg-3 text-center about-details">
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/about-icon-03.png" alt="">
                        <h5>Award winning</h5>
                        <p>We believe in challenges so we have made challenges.</p>
                     </div>
                     <div class="col-lg-3 text-center about-details">
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/about-icon-04.png" alt="">
                        <h5>Help any time</h5>
                        <p>We never fail for support for your business anywhere.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="cta-section">
         <div class="container">
            <div class="row justify-center">
               <div class="col-auto">
                  <div class="cta-details">
                     <div class="cta-icons">
                        <i class="fi fi-rr-comment-dots"></i>
                     </div>
                     <div class="cta-contents">
                        <h4>Let's make something great work together. <a href="javascript:void(0);"
                              class="call-action">Got a project in mind?</a></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="our-process">
         <div class="container">
            <div class="row justify-center align-items-center">
               <div class="col-lg-9">
                  <div class="process-contents">
                     <span class="sub-title">
                        How We Get Things Done</span>
                     <h2 class="process-title">Drive Business Growth with High-Performing Web Designs
                     </h2>
                     <p class="process-desc">We follow a clear and structured process to ensure your project is
                        delivered on time and exceeds expectations.</p>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="process-steps-container">
                     <div class="process-step-box">
                        <div class="process-boxs">
                           <div class="icon">
                              <img src="<?php echo base_url(); ?>asset/images/write-for-us/process-img-1.png" alt=""
                                 class="Process-icon">
                           </div>
                           <h4> Discovery and Planning</h4>
                        </div>
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/process-shape-1.webp" alt=""
                           class="process-shape">
                        <div class="process-boxs">
                           <div class="icon">
                              <img src="<?php echo base_url(); ?>asset/images/write-for-us/process-img-2.png" alt=""
                                 class="Process-icon">
                           </div>
                           <h4>
                              Design and Development
                           </h4>
                        </div>
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/process-shape-1.webp" alt=""
                           class="process-shape">
                        <div class="process-boxs">
                           <div class="icon">
                              <img src="<?php echo base_url(); ?>asset/images/write-for-us/process-img-3.png" alt=""
                                 class="Process-icon">
                           </div>
                           <h4>
                              Testing and Launch
                           </h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="writing-guide">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="writing-guide-contents">
                     <h2 class="guide-title">Writing Guidelines<img
                           src="<?php echo base_url(); ?>asset/images/write-for-us/writing.png" alt=""
                           class="writing-img"></h2>
                     <p class="guide-desc">Please adhere to the following guidelines to ensure a smooth approval process
                        for your blog.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <ul class="writing-guide-points">
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Minimum article word count: 1500 words
                     </li>
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Use Arial (12pt) font for text
                     </li>
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Up to 02 no-follow links allowed
                     </li>
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Include at least ONE link to a relevant Cloudways blog
                     </li>
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Engaging, unique, and well-formatted content required
                     </li>
                  </ul>
               </div>
               <div class="col-lg-6">
                  <ul class="writing-guide-points">
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Provide sources for any statistics
                     </li>
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Credit the original author for quotes/references
                     </li>
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Properly format titles and headings
                     </li>
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Use relevant images, charts, and infographics
                     </li>
                     <li class="d-flex gap-2 pb-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Include key takeaways to keep readers interested
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>

      <section class="our-service">
         <div class="container">
            <div class="row justify-center align-items-center">
               <div class="col-lg-9">
                  <div class="service-contents text-center">
                     <span class="sub-title">
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/dots.png" alt="Sub-Heading-Design">
                        What we offers</span>
                     <h2 class="service-title">List of Categories
                     </h2>
                     <p class="service-desc">Discover how we design, develop, and implement effective solutions to
                        enhance your business.</p>
                  </div>
               </div>
            </div>
            <div class="row mt-5 spacing">
               <div class="col-lg-4">
                  <div class="offer-box p-2">
                     <div class="offer-contents">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/web-designing.png" alt=""
                              class="Offer-icon">
                        </div>
                        <h4>Custom Website Design</h4>
                        <!-- <p>We create visually stunning and user-friendly websites tailored to your brand's unique
                           identity. Our design process prioritizes your goals.</p> -->
                        <!-- <a href="javascript:void(0);" class="know-more-btn text-decoration-none text-dark">
                           <span
                              class="hover-icon d-inline-flex align-items-center justify-content-center rounded-circle border mr-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-arrow-right">
                                 <line x1="5" y1="12" x2="19" y2="12"></line>
                                 <polyline points="12 5 19 12 12 19"></polyline>
                              </svg>
                           </span>
                           <span class="know-more-text">Know More</span>
                        </a> -->
                     </div>
                  </div>
                  <div class="offer-box p-2">
                     <div class="offer-contents">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/web-development.png" alt=""
                              class="Offer-icon">
                        </div>
                        <h4>Responsive Web Development</h4>
                        <!-- <p>Our websites are built to perform seamlessly across all devices and screen sizes. We focus on
                           responsive design principles to ensure that your site looks and functions perfectly.</p> -->
                        <!-- <a href="javascript:void(0);" class="know-more-btn text-decoration-none text-dark">
                           <span
                              class="hover-icon d-inline-flex align-items-center justify-content-center rounded-circle border mr-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-arrow-right">
                                 <line x1="5" y1="12" x2="19" y2="12"></line>
                                 <polyline points="12 5 19 12 12 19"></polyline>
                              </svg>
                           </span>
                           <span class="know-more-text">Know More</span>
                        </a> -->
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 top-spacing">
                  <div class="offer-box p-2">
                     <div class="offer-contents">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/e-commerce.png" alt=""
                              class="Offer-icon">
                        </div>
                        <h4>E-commerce Solutions</h4>
                        <!-- <p>We provide end-to-end e-commerce services, from setting up your online store to integrating
                           secure payment gateways.</p> -->
                        <!-- <a href="javascript:void(0);" class="know-more-btn text-decoration-none text-dark">
                           <span
                              class="hover-icon d-inline-flex align-items-center justify-content-center rounded-circle border mr-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-arrow-right">
                                 <line x1="5" y1="12" x2="19" y2="12"></line>
                                 <polyline points="12 5 19 12 12 19"></polyline>
                              </svg>
                           </span>
                           <span class="know-more-text">Know More</span>
                        </a> -->
                     </div>
                  </div>
                  <div class="offer-box p-2">
                     <div class="offer-contents">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/seo.png" alt=""
                              class="Offer-icon">
                        </div>
                        <h4>Search Engine Optimization (SEO)</h4>
                        <!-- <p>Enhance your website's visibility with our SEO services. We employ best practices to optimize
                           your site for search engines.</p> -->
                        <!-- <a href="javascript:void(0);" class="know-more-btn text-decoration-none text-dark">
                           <span
                              class="hover-icon d-inline-flex align-items-center justify-content-center rounded-circle border mr-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-arrow-right">
                                 <line x1="5" y1="12" x2="19" y2="12"></line>
                                 <polyline points="12 5 19 12 12 19"></polyline>
                              </svg>
                           </span>
                           <span class="know-more-text">Know More</span>
                        </a> -->
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="offer-box p-2">
                     <div class="offer-contents">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/cms.png" alt=""
                              class="Offer-icon">
                        </div>
                        <h4>Content Management Systems (CMS)</h4>
                        <!-- <p>We develop websites using user-friendly CMS platforms that allow you to easily manage and
                           update
                           your content.</p> -->
                        <!-- <a href="javascript:void(0);" class="know-more-btn text-decoration-none text-dark">
                           <span
                              class="hover-icon d-inline-flex align-items-center justify-content-center rounded-circle border mr-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-arrow-right">
                                 <line x1="5" y1="12" x2="19" y2="12"></line>
                                 <polyline points="12 5 19 12 12 19"></polyline>
                              </svg>

                           </span>
                           <span class="know-more-text">Know More</span>
                        </a> -->
                     </div>
                  </div>
                  <div class="offer-box p-2">
                     <div class="offer-contents">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/digital.png" alt=""
                              class="Offer-icon">
                        </div>
                        <h4>Digital Marketing Services</h4>
                        <!-- <p>Our comprehensive digital marketing strategies include social media management, email
                           marketing,
                           and pay-per-click advertising.</p> -->
                        <!-- <a href="javascript:void(0);" class="know-more-btn text-decoration-none text-dark">
                           <span
                              class="hover-icon d-inline-flex align-items-center justify-content-center rounded-circle border mr-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-arrow-right">
                                 <line x1="5" y1="12" x2="19" y2="12"></line>
                                 <polyline points="12 5 19 12 12 19"></polyline>
                              </svg>

                           </span>
                           <span class="know-more-text">Know More</span>
                        </a> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- <section class="partners-section">
         <div class="container">
            <div class="row justify-center">
               <div class="col-lg-5">
                  <div class="partners-contents">
                     <span class="sub-title">
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/dots.png" alt="Sub-Heading-Design">
                        Our Partners
                     </span>
                     <h2 class="partners-title">Collaborators Who Appreciate Us</h2>
                     <p class="partners-desc">Together with our partners, we turn ambitious ideas into successful
                        projects that make a difference.</p>

                     <a href="javascript:void(0);" class="cont-btn">Contact Us<div class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-arrow-right">
                              <line x1="5" y1="12" x2="19" y2="12"></line>
                              <polyline points="12 5 19 12 12 19"></polyline>
                           </svg>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="partners-img-list row justify-center">
                     <div class="col-4">
                        <div class="list-imgs bg-white text-center">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/pertner-log-1.svg" alt="">
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="list-imgs bg-white text-center">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/pertner-log-2.svg" alt="">
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="list-imgs bg-white text-center">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/pertner-log-3.svg" alt="">
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="list-imgs bg-white text-center">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/pertner-log-4.svg" alt="">
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="list-imgs bg-white text-center">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/pertner-log-5.svg" alt="">
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="list-imgs bg-white text-center">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/pertner-log-6.svg" alt="">
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="list-imgs bg-white text-center">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/pertner-log-7.svg" alt="">
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="list-imgs bg-white text-center">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/pertner-log-8.svg" alt="">
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="list-imgs bg-white text-center">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/pertner-log-4.svg" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->

      <section class="write-for-cta-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <img src="<?php echo base_url(); ?>asset/images/write-for-us/cta-left-img.png" alt="CTA-Img"
                     class="img-fulid cta-left-img">
               </div>
               <div class="col-lg-6">
                  <div class="cta-contents">
                     <span class="sub-title">
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/dots.png" alt="Sub-Heading-Design">
                        How We Get Things Done</span>
                     <h2 class="cta-title">Accelerate Your Business Growth with Top-Quality Web Designs
                     </h2>
                     <p class="cta-desc">We implement a systematic approach to guarantee timely project delivery while
                        exceeding your expectations.</p>
                     <a href="javascript:void(0);" class="contact-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Let's Discuss your Project
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="write-for-faq position-relative">
         <!-- <div class="faq-shape">
            <img src="<?php echo base_url(); ?>asset/images/write-for-us/faq-shape.svg" alt="img" class="">
         </div> -->
         <div class="container position-relative">
            <div class="faqs-title text-center">
               <span class="sub-title">
                  <img src="http://192.168.29.179/websites/cloudi5-live-2024/asset/images/write-for-us/dots.png"
                     alt="Sub-Heading-Design">
                  Faq</span>
               <h2 class="faq-title">
                  Any questions? Check out the FAQ
               </h2>
               <div class="description">
                  <p>Interested in contributing to our IT blog? Here are answers to frequently asked questions about our
                     guest posting opportunities.</p>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="faq">
                     <div class="accordion-section">
                        <div class="accordion-single">
                           <h5 class="header-area">
                              <button
                                 class="accordion-btn d-flex align-items-center text-start d-flex position-relative w-100"
                                 type="button">
                                 1. What topics are we looking for?
                              </button>
                           </h5>
                           <div class="content-area">
                              <div class="content-body pt-4">
                                 <p class="desc">
                                    We're interested in articles covering a wide range of IT topics, including but not
                                    limited to:
                                    software development, cloud computing, cybersecurity, AI and machine learning,
                                    DevOps, IT infrastructure, and emerging technologies.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-single">
                           <h5 class="header-area ">
                              <button
                                 class="accordion-btn d-flex align-items-center text-start d-flex position-relative w-100"
                                 type="button">
                                 2. What are our submission guidelines?
                              </button>
                           </h5>
                           <div class="content-area">
                              <div class="content-body pt-4">
                                 <ul>
                                    <li>Articles should be 1000-2000 words long</li>
                                    <li>Content must be original and not published elsewhere</li>
                                    <li>Include relevant examples, case studies, or data to support your points</li>
                                    <li>Use a clear, engaging writing style suitable for both beginners and experts</li>
                                    <li>Proper attribution for any external sources or references</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-single">
                           <h5 class="header-area ">
                              <button
                                 class="accordion-btn d-flex align-items-center text-start d-flex position-relative w-100"
                                 type="button">
                                 3. What's in it for contributors?
                              </button>
                           </h5>
                           <div class="content-area">
                              <div class="content-body pt-4">
                                 <p class="desc">
                                    Contributors benefit from exposure to our large readership of IT professionals,
                                    opportunities to establish themselves as thought leaders,
                                    networking with other industry experts, and compensation for accepted articles
                                    (rates discussed upon acceptance).
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-single">
                           <h5 class="header-area ">
                              <button
                                 class="accordion-btn d-flex align-items-center text-start d-flex position-relative w-100"
                                 type="button">
                                 4. How to submit your article?
                              </button>
                           </h5>
                           <div class="content-area">
                              <div class="content-body pt-4">
                                 <p class="desc">
                                    To submit your article or pitch an idea, please email us at
                                    submissions@itcompany.com with your name, brief bio, article title and outline,
                                    your expertise in the topic, and any relevant writing samples. We'll review your
                                    submission and respond within 5-7 business days.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="write-for-contact">
         <div class="sparkle-shape">
            <img src="<?php echo base_url(); ?>asset/images/write-for-us/sparkle.png" alt="">
         </div>
         <div class="container">
            <div class="form-section">
               <h2 class="contact-title">Submit Your Information <img
                     src="<?php echo base_url(); ?>asset/images/write-for-us/paper-plane.png" alt=""
                     class="paper-plane-img"></h2>
               <form>
                  <div class="row">
                     <div class="col-md-4 form-group">
                        <input type="text" class="form-control" id="firstName" placeholder=" " required>
                        <label for="firstName" class="form-label">First Name <span class="required">*</span></label>
                     </div>
                     <div class="col-md-4 form-group">
                        <input type="text" class="form-control" id="lastName" placeholder=" " required>
                        <label for="lastName" class="form-label">Last Name <span class="required">*</span></label>
                     </div>
                     <div class="col-md-4 form-group">
                        <input type="email" class="form-control" id="email" placeholder=" " required>
                        <label for="email" class="form-label">Email Address <span class="required">*</span></label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 form-group">
                        <input type="email" class="form-control" id="email" placeholder=" " required>
                        <label for="email" class="form-label">Post Title<span class="required">*</span></label>
                     </div>
                     <div class="col-md-6 form-group">
                        <select class="form-select" id="customerStatus" required>
                           <option value="yes">Guest Post</option>
                           <option value="no">Sponsored Post</option>
                        </select>
                        <label for="customerStatus" class="form-label">Post Type</label>
                     </div>
                  </div>
                  <!-- <div class="row">
                     <div class="col-md-6 form-group">
                        <input type="url" class="form-control" id="website" placeholder=" ">
                        <label for="website" class="form-label">Website's URL</label>
                     </div>
                     <div class="col-md-6 form-group">
                        <select class="form-select" id="customerStatus" required>
                           <option value="yes">Yes</option>
                           <option value="no">No</option>
                        </select>
                        <label for="customerStatus" class="form-label">Are You a Cloudi5 Customer?</label>
                     </div>
                  </div> -->
                  <!-- <div class="row">
                     <div class="col-md-6 form-group">
                        <input type="text" class="form-control" id="twitter" placeholder=" ">
                        <label for="twitter" class="form-label">Twitter Profile</label>
                     </div>
                     <div class="col-md-6 form-group">
                        <input type="text" class="form-control" id="linkedin" placeholder=" ">
                        <label for="linkedin" class="form-label">LinkedIn Profile</label>
                     </div>
                  </div> -->
                  <div class="row justify-center">
                     <div class="col-md-12 form-group">
                        <textarea class="form-control" id="bio" placeholder=" " required></textarea>
                        <label for="bio" class="form-label">Post Summary <span class="required">*</span></label>
                     </div>
                     <button type="submit" class="contact-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Submit Your Details
                     </button>
                  </div>

               </form>
            </div>
         </div>
      </section>

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
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/swiper-bundle.min.js"></script>

      <script>
         $(document).ready(function () {
            $('.accordion-single:first-child .accordion-btn').addClass('active');
            $('.accordion-single:first-child .content-area').show();

            $('.accordion-btn').on('click', function () {
               var $this = $(this);
               var $parent = $this.closest('.accordion-single');
               var $content = $parent.find('.content-area');

               if ($this.hasClass('active')) {
                  $this.removeClass('active');
                  $content.slideUp();
               } else {
                  $('.accordion-btn').removeClass('active');
                  $('.content-area').slideUp();
                  $this.addClass('active');
                  $content.slideDown();
               }
            });
         });
      </script>

   </div>

</body>

</html>