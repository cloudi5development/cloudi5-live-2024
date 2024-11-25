<!DOCTYPE html>
<html lang="en-US">

<head>

   <title><?php if ($meta) {
      echo $meta->title ? $meta->title : "Write for Us - Cloudi5 Technologies Platform";
   } else {
      echo "Write for Us - Cloudi5 Technologies Platform";
   } ?></title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description"
      content="<?php echo $meta ? $meta->description : "Become a contributor and share your insights on digital marketing, web design, SEO, and web development to reach a larger audience."; ?>">
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
   <meta property="og:title" content="Write for Us - Cloudi5 Technologies Platform" />
   <meta property="og:description"
      content="Become a contributor and share your insights on digital marketing, web design, SEO, and web development to reach a larger audience." />
   <meta property="og:url" content="<?php echo base_url(); ?>write-for-us" />
   <?php include ('common-css.php') ?>
   <?php $this->load->view('frontend/common-css'); ?>
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/swiper-bundle.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/write-for-us.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/uicons-brands">
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> -->

   <link rel='stylesheet'
      href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

   <link rel='stylesheet'
      href='https://cdn-uicons.flaticon.com/2.1.0/uicons-thin-straight/css/uicons-thin-straight.css'>
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

   <?php $this->load->view('frontend/fb-pixel-code'); ?>
</head>

<body>

   <div class="body-inner">

      <?php include 'header.php' ?>

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
                     <span class="sub-title"><img
                           src="<?php echo base_url(); ?>asset/images/write-for-us/write-for-us-icon.png" alt="Hi Emoji"
                           class="write-for-icon"> Write for Us to Inspire and Engage</span>
                     <h1 class="banner-title">Do You Want to Write for <span class="highlight"> <br> Cloudi5
                           Technologies? <svg width="205" height="17" viewBox="0 0 205 17" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M2.62599 4.60245C33.6378 2.24214 117.062 -0.161247 202.664 9.10766M2.95273 14.5959C19.8661 13.505 66.1001 11.6133 101.833 13.0647"
                                 stroke="currentcolor" stroke-width="4" stroke-linecap="round"></path>
                           </svg></span>
                     </h1>
                     <p class="banner-desc">Let’s collaborate! Share your content with us to attract more visitors to
                        your site.</p>
                     <a href="#contact-us" class="contact-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Submit your article
                     </a>
                  </div>
               </div>

            </div>
         </div>
      </section>

      <section class="why-choose-us">
         <div class="container">
            <div class="row align-items-center justify-center">
               <div class="col-lg-4">
                  <div class="left-side-content">
                     <h2 class="why-choose-title">
                        Why It's Great to
                        <br> <span> Write for Us ? <img
                              src="<?php echo base_url(); ?>asset/images/write-for-us/rating.png" alt=""
                              class="rating-img"></span>
                     </h2>
                     <p class="why-choose-desc">
                        This is your moment to share your knowledge, get noticed, and engage our audience with your
                        writing.
                     </p>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="row">
                     <div class="col-lg-6">
                        <ul class="why-choose-points">
                           <li class="d-flex gap-2 pb-2">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png"
                                    alt="Point-shape">
                              </div>
                              Drive more traffic to your website
                           </li>
                           <li class="d-flex gap-2 pb-2">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png"
                                    alt="Point-shape">
                              </div>
                              Connect with a wider audience
                           </li>
                           <li class="d-flex gap-2 pb-2">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png"
                                    alt="Point-shape">
                              </div>
                              70K+ customers
                           </li>
                           <li class="d-flex gap-2 pb-2">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png"
                                    alt="Point-shape">
                              </div>
                              Exposure to our blog subscriber
                           </li>
                           <li class="d-flex gap-2 pb-2">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png"
                                    alt="Point-shape">
                              </div>
                              Boost your SEO rankings
                           </li>
                           <li class="d-flex gap-2 pb-2">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png"
                                    alt="Point-shape">
                              </div>
                              Gain credibility in your industry
                           </li>
                           <li class="d-flex gap-2 pb-2">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png"
                                    alt="Point-shape">
                              </div>
                              Enhance your brand visibility
                           </li>
                        </ul>
                     </div>
                     <div class="col-lg-6">
                        <ul class="why-choose-points">
                           <li class="d-flex gap-2 pb-2">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png"
                                    alt="Point-shape">
                              </div>
                              Receive feedback and tips to enhance your writing skills
                           </li>
                           <li class="d-flex gap-2 pb-2">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png"
                                    alt="Point-shape">
                              </div>
                              Targeted audience
                           </li>
                           <li class="d-flex gap-2 pb-2">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png"
                                    alt="Point-shape">
                              </div>
                              SEO Boost
                           </li>
                           <li class="d-flex gap-2 pb-2">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png"
                                    alt="Point-shape">
                              </div>
                              Professional exposure
                           </li>
                           <li class="d-flex gap-2 pb-2">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png"
                                    alt="Point-shape">
                              </div>
                              Access a large, engaged audience for your content
                           </li>
                           <li class="d-flex gap-2 pb-2">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png"
                                    alt="Point-shape">
                              </div>
                              Get tips on effective content marketing strategies
                           </li>
                           <li class="d-flex gap-2 pb-2">
                              <div class="icon">
                                 <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.png"
                                    alt="Point-shape">
                              </div>
                              Contribute to discussions on trending topics
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="categories-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 ">
                  <div class="heading-content">
                     <div class="sub-heading">
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/dots.png" alt="Sub-Heading-Design">
                        <span>What we offers</span>
                     </div>
                     <h2>What We’re Looking For?</h2>
                  </div>
               </div>
               <div class="col-lg-7 right-side-content">
                  <div class="about-desc">
                     <p>We accept well-researched, original, and detailed articles on the following topics when you
                        write for us:</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12 categories-contents">
                  <ul class="categories-container">
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-cube fa-2x mb-3X"></i>
                           <h4>Blockchain</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-mobile-android fa-2x mb-3"></i>
                           <h4>Mobile App Development</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-megaphone fa-2x mb-3"></i>
                           <h4>Digital Marketing</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-search fa-2x mb-3"></i>
                           <h4>Search Engine Optimization (SEO)</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-web-grid fa-2x mb-3"></i>
                           <h4>Website Development</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-brush-alt fa-2x mb-3"></i>
                           <h4>Web Designing</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-share fa-2x mb-3"></i>
                           <h4>Social Media Marketing</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-shield-check fa-2x mb-3"></i>
                           <h4>Cyber Security</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-pen fa-2x mb-3"></i>
                           <h4>Content Marketing</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-palette fa-2x mb-3"></i>
                           <h4>Graphic Designing</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-shopping-cart fa-2x mb-3"></i>
                           <h4>Ecommerce Web Solutions</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class='bx bx-pointer fa-2x mb-3'></i>
                           <h4>Pay-Per-Click (PPC) Advertising</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-building fa-2x mb-3"></i>
                           <h4>Enterprise Resource Planning</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-server fa-2x mb-3"></i>
                           <h4>Web Hosting</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-copyright fa-2x mb-3"></i>
                           <h4>Branding</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-brain fa-2x mb-3"></i>
                           <h4>Artificial Intelligence</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class='bx bx-devices fa-2x mb-3'></i>
                           <h4>AR/VR</h4>
                        </div>
                     </li>
                     <li>
                        <div class="categories-list">
                           <i class="uil uil-users-alt fa-2x mb-3"></i>
                           <h4>CRM (Customer Relationship Management)</h4>
                        </div>
                     </li>
                  </ul>
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
                        How to Become a Contributor</span>
                     <h2 class="process-title">Become part of our growing team of writers and share your expertise with
                        a wider audience
                     </h2>
                     <p class="process-desc">Follow these simple steps to write for us and get your work featured on our
                        platform.</p>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="process-steps-container">
                     <div class="process-step-box">
                        <div class="process-boxs">
                           <div class="icon">
                              <img src="<?php echo base_url(); ?>asset/images/write-for-us/pitch-your-topic.png"
                                 alt=" Pitch Your Topic" class="process-icon">
                           </div>
                           <h4> Pitch Your Topic</h4>
                        </div>
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/process-shape-1.webp" alt="shape"
                           class="process-shape">
                        <div class="process-boxs">
                           <div class="icon">
                              <img src="<?php echo base_url(); ?>asset/images/write-for-us/get-approval.png"
                                 alt="Get Approval" class="process-icon">
                           </div>
                           <h4>
                              Get Approval
                           </h4>
                        </div>
                        <img src="<?php echo base_url(); ?>asset/images/write-for-us/process-shape-1.webp" alt="shape"
                           class="process-shape">
                        <div class="process-boxs">
                           <div class="icon">
                              <img src="<?php echo base_url(); ?>asset/images/write-for-us/submit-article.png"
                                 alt="Submit Your Article" class="process-icon">
                           </div>
                           <h4>
                              Submit Your Article
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
                     <h2 class="guide-title">Writing Guidelines or our principles<img
                           src="<?php echo base_url(); ?>asset/images/write-for-us/writing.png" alt=""
                           class="writing-img"></h2>
                     <p class="guide-desc">To help your blog get approved easily, please follow these guidelines
                        closely.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <ul class="writing-guide-points">
                     <li class="d-flex gap-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Display originality in your writing for greater impact.
                     </li>
                     <li class="d-flex gap-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Word Count Length should be 800 to 1,000 words.
                     </li>
                     <li class="d-flex gap-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Avoid promotional content in your writing.
                     </li>
                     <li class="d-flex gap-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Use keywords naturally throughout your content.
                     </li>
                     <li class="d-flex gap-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Ensure high content quality in your writing.
                     </li>
                     <!-- <li class="d-flex gap-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Choose article ideas that capture interest.
                     </li> -->
                  </ul>
               </div>
               <div class="col-lg-6">
                  <ul class="writing-guide-points">

                     <li class="d-flex gap-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Learn about our writer compensation.
                     </li>
                     <li class="d-flex gap-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Use a cover image of 1200 x 650 pixels.
                     </li>
                     <li class="d-flex gap-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Avoid any company mentions in your writing.
                     </li>
                     <li class="d-flex gap-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Format your content for a clean layout.
                     </li>
                     <li class="d-flex gap-2">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/check.svg" alt="Point-shape">
                        </div>
                        Know the article submission process clearly.
                     </li>
                  </ul>
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
                        <h4>Write for Us and Improve Your Website to New Heights!</h4>
                     </div>
                  </div>
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
                        Publish Process</span>
                     <h2 class="service-title">What will we never publish?
                     </h2>
                     <p class="service-desc">Our platform is built on trust Write for us positively!</p>
                  </div>
               </div>
            </div>
            <div class="row mt-5 spacing">
               <div class="col-lg-4">
                  <div class="offer-box p-2">
                     <div class="offer-contents">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/published-content.png" alt=""
                              class="Offer-icon">
                        </div>
                        <h4>
                           Previously Published Content</h4>
                        <p>Do not submit previously published work, as we value originality.
                        </p>
                     </div>
                  </div>
                  <div class="offer-box p-2">
                     <div class="offer-contents">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/flawed-articles.png" alt=""
                              class="Offer-icon">
                        </div>
                        <h4>
                           Flawed or Misinformed Articles</h4>
                        <p>We don’t accept flawed or misinformed articles, as accuracy matters.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 top-spacing">
                  <div class="offer-box p-2">
                     <div class="offer-contents">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/self-promotion.png" alt=""
                              class="Offer-icon">
                        </div>
                        <h4>
                           Excessive Self-Promotion</h4>
                        <p>Maintain no self-promotion and concentrate on valuable topics.
                        </p>
                     </div>
                  </div>
                  <div class="offer-box p-2">
                     <div class="offer-contents">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/prohibited-topics.png" alt=""
                              class="Offer-icon">
                        </div>
                        <h4>
                           Irrelevant or Prohibited Topics</h4>
                        <p>Ensure topics are relevant, as we do not accept prohibited content.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="offer-box p-2">
                     <div class="offer-contents">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/harmful-perspectives.png" alt=""
                              class="Offer-icon">
                        </div>
                        <h4>
                           Disrespectful or Harmful Perspectives</h4>
                        <p>Submissions should reflect a respectful and safe perspective.</p>
                     </div>
                  </div>
                  <div class="offer-box p-2">
                     <div class="offer-contents">
                        <div class="icon">
                           <img src="<?php echo base_url(); ?>asset/images/write-for-us/outdated-information.png" alt=""
                              class="Offer-icon">
                        </div>
                        <h4>
                           Outdated Information </h4>
                        <p>Keep your articles free from outdated information.</p>
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
                     <h2 class="cta-title">Cloudi5 Technologies is a trusted name in the industry.
                     </h2>
                     <p class="cta-desc">We value our guest writers! Write for us to share your knowledge and help
                        others improve their websites!</p>
                     <a href="#contact-us" class="contact-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Become a Contributor
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
                  Have questions about becoming a contributor?
               </h2>
               <div class="description">
                  <p>Check our FAQ to learn how to write for us and share your expertise!</p>
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
                                 1. What are the benefits of writing for Cloudi5?
                              </button>
                           </h5>
                           <div class="content-area">
                              <div class="content-body pt-4">
                                 <p class="desc">
                                    By writing for Cloudi5, you'll gain exposure to a large audience through our
                                    well-performing blog. Become a contributor and tap into our huge number of visitors
                                    who regularly read our content, helping to boost your visibility and establish your
                                    expertise.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-single">
                           <h5 class="header-area ">
                              <button
                                 class="accordion-btn d-flex align-items-center text-start d-flex position-relative w-100"
                                 type="button">
                                 2. How can I submit my guest post to Cloudi5?
                              </button>
                           </h5>
                           <div class="content-area">
                              <div class="content-body pt-4">
                                 <p class="desc">To submit your guest post, simply fill out the form mentioned below
                                    with your article details and contact information. Our editorial team will review
                                    your submission and get back to you.</p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-single">
                           <h5 class="header-area ">
                              <button
                                 class="accordion-btn d-flex align-items-center text-start d-flex position-relative w-100"
                                 type="button">
                                 3. Who can contribute to the Cloudi5 blog?
                              </button>
                           </h5>
                           <div class="content-area">
                              <div class="content-body pt-4">
                                 <p class="desc">
                                    We accept contributions from experienced writers, industry experts, tech
                                    enthusiasts, and content creators who can provide insightful and original articles.
                                    If you’re interested, write for us on topics like digital marketing, web design,
                                    SEO, mobile development, and more!
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-single">
                           <h5 class="header-area ">
                              <button
                                 class="accordion-btn d-flex align-items-center text-start d-flex position-relative w-100"
                                 type="button">
                                 4. How long does it take for my article to be published?
                              </button>
                           </h5>
                           <div class="content-area">
                              <div class="content-body pt-4">
                                 <p class="desc">
                                    After submission, it typically takes 5 to 7 days for us to review, edit, and
                                    schedule your article for publication. We will notify you once it goes live on our
                                    website.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-single">
                           <h5 class="header-area ">
                              <button
                                 class="accordion-btn d-flex align-items-center text-start d-flex position-relative w-100"
                                 type="button">
                                 5. Can I include links in my guest post?
                              </button>
                           </h5>
                           <div class="content-area">
                              <div class="content-body pt-4">
                                 <p class="desc">
                                    Yes, you may include one or two relevant links to reputable sources within your
                                    article. However, promotional or affiliate links must be disclosed and approved by
                                    our team. When you submit your article, ensure that any links enhance the value of
                                    the content.
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

      <section class="write-for-contact" id="contact-us">
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
                           <option value="" selected disabled hidden></option>
                           <option value="guest">Guest Post</option>
                           <option value="sponsored">Sponsored Post</option>
                        </select>
                        <label for="customerStatus" class="form-label">Post Type</label>
                     </div>

                  </div>
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

      <section class="write-for-tag-section">
         <div class="container">
            <div class="row">
               <div class="tag-details">
                  <p class="tag-contents"> <b>Tags Details:</b>
                     Blockchain + write for us|
                     Blockchain + become a contributor |
                     Blockchain + guest blogs |
                     Mobile app development + write for us |
                     Mobile app development + become a contributor |
                     Mobile app development + guest blogs |
                     Mobile app development + submit an article|
                     Digital marketing + write for us |
                     Digital marketing + become a contributor |
                     Digital marketing + guest blogs |
                     Digital marketing + submit an article |
                     SEO + write for us |
                     SEO + become a contributor |
                     SEO + guest blogs |
                     SEO + submit an article |
                     Website development + write for us |
                     Website development + become a contributor |
                     Website development + guest blogs |
                     Website development + submit an article |
                     Web designing + write for us |
                     Web designing + become a contributor |
                     Web designing + guest blogs |
                     Web designing + submit an article |
                     Social media marketing + write for us |
                     Social media marketing + become a contributor |
                     Social media marketing + guest blogs |
                     Social media marketing + submit an article |
                     Cyber security + write for us |
                     Cyber security + become a contributor |
                     Cyber security + guest blogs |
                     Cyber security + submit an article |
                     Content marketing + write for us |
                     Content marketing + become a contributor |
                     Content marketing + guest blogs |
                     Content marketing + submit an article |
                     Graphic designing + write for us |
                     Graphic designing + become a contributor |
                     Graphic designing + guest blogs |
                     Graphic designing + submit an article |
                     Ecommerce web solutions + write for us |
                     Ecommerce web solutions + become a contributor |
                     Ecommerce web solutions + guest blogs |
                     Ecommerce web solutions + submit an article |
                     PPC advertising + write for us |
                     PPC advertising + become a contributor |
                     PPC advertising + guest blogs |
                     PPC advertising + submit an article |
                     ERP + write for us |
                     ERP + become a contributor |
                     ERP + guest blogs |
                     ERP + submit an article |
                     Web hosting + write for us |
                     Web hosting + become a contributor |
                     Web hosting + guest blogs |
                     Web hosting + submit an article |
                     Branding + write for us |
                     Branding + become a contributor |
                     Branding + guest blogs |
                     Branding + submit an article |
                     Artificial intelligence + write for us |
                     Artificial intelligence + become a contributor |
                     Artificial intelligence + guest blogs |
                     Artificial intelligence + submit an article |
                     AR/VR + write for us |
                     AR/VR + become a contributor |
                     AR/VR + guest blogs |
                     AR/VR + submit an article |
                     CRM + write for us |
                     CRM + become a contributor |
                     CRM + guest blogs |
                     CRM + submit an article |
                  </p>
               </div>
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