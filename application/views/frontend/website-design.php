<!DOCTYPE html>
<html lang="en-US">

<head>
    <title><?php if ($meta) {
                echo $meta->title ? $meta->title : "Cloudi5 - Best Web Design Company in Coimbatore | Ecommerce Website";
            } else {
                echo "Cloudi5 - Best Web Design Company in Coimbatore | Ecommerce Website";
            } ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $meta ? $meta->description : "";  ?>">
    <meta name="keywords" content="<?php echo $meta ? $meta->keyword : " ";  ?>">
    <link rel="canonical" href="<?php echo base_url(); ?>website-design" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Cloudi5 - Best Web Design Company | Ecommerce Website Design | Coimbatore" />
    <meta property="og:description" content="Cloudi5 is the creative and professional web designing company located in Coimbatore, Tamil Nadu, India. The best web designing company providing a wide range of services for Website designing from outsourcing projects. Also expertise in eCommerce website design at an affordable cost." />
    <meta property="og:url" content="<?php echo base_url(); ?>website-design" />
    <meta name="robots" content="index,follow" />
    <link rel="alternate" href="<?php echo base_url(); ?>website-design" hreflang="x-default" />
    <!-- CSS styles-->
    <?php $this->load->view('frontend/common-css'); ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/fonts/flaticon.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/animate.css" />
    <!-- Header Menu styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/website-design.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <style type="text/css">
        .header-standard ul.navbar-nav>li:hover>a {
            color: #ffffff;
        }

        .navbar-nav>.nav-item:hover>.nav-link {
            color: #ffffff;
        }

        ul.navbar-nav>li.active>a:before,
        ul.navbar-nav>li:hover>a:before {
            border-color: #ffffff;
            opacity: 1;
            -webkit-transform: scale(1) translateZ(0);
            transform: scale(1) translateZ(0);
        }

        /* Only For Live to avoid Lines */
    </style>

    <!-- Global site tag (gtag.js) - Google Ads: 856568699 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-856568699"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "AW-856568699");
    </script>
    <?php $this->load->view('frontend/fb-pixel-code'); ?>
</head>

<body id="cont1">
    <div class="body-inner body-bg-1" id="">
        <?php include 'redbg-header.php' ?>
        <!-- Start Main Section -->
        <section class="img_banner_section img_banner_section_height">
            <div class="container">
                <div class="sketch-1">
                    <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/banner-pattern-2.png" height="80" width="80" alt="pattern" class="banner-pattern-1" />
                </div>
                <div class="sketch-2">
                    <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/banner-bottom-pattern.png" height="80" width="80" alt="pattern" class="" />
                </div>
                <div class="sketch-3">
                    <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/banner-pattern-3.png" alt="pattern" height="80" width="80" class="single-star-pattern" />
                </div>

                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-7">
                        <div class="banner_iner">
                            <h1>Best Web Design
                                <!-- <span class="underline-pattern">
                                    <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/banner-underline-pattern.png" alt="pattern" class="" />
                                </span> -->
                                Company in Coimbatore
                            </h1>
                            <p class="wow fadeInLeft" data-wow-delay=".5s">We build sites that deserve applause, not yawns.
                                Professional, Polished, and Positively enchanting sites.
                            </p>

                            <a href="javascript:void(0);" class="contact-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Build Your Dream Site
                            </a>
                            <!-- <div class="banner_btn">
                                <a href="<?php echo base_url(); ?>contactus" class="btn grdnt-purple ecom-ban-btn-txt ecom-btn-pd wd-b-btn" data-wow-delay=".5s"><span class="btn-pulso"></span>Build Your Dream Site</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInDown" data-wow-delay=".5s">
                        <div class="banner_img">
                            <img src="<?php echo base_url(); ?>asset/images/wd-page/banner-img.png" alt="Web design company" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="banner_line">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div> -->
        </section>
        <section>
            <div class="banner-service-area">
                <div class="container">
                    <div class="service-wrapper">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="service-card style-2">
                                    <div class="corner top-left"></div>
                                    <div class="corner top-right"></div>
                                    <div class="corner bottom-left"></div>
                                    <div class="corner bottom-right"></div>
                                    <div class="service-card-icon">


                                        <div class="service-card-icon-wrapper mt-10">
                                            <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/unique-design.png" class="service-icon-1" alt="service-img">
                                        </div>
                                        <div class="service-card-number">01</div>
                                    </div>
                                    <h4 class="service-card-title">Unique Web Design</h4>
                                    <p class="service-card-text focus-content content">
                                        The unique work process is a standout factor that differentiates us
                                        from the rest. Our designers take utmost care of everything
                                        like no one else to make your site successful.
                                        The uniqueness of the web design reflects your brand explicitly
                                        to build a strong identity among the customers.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-card style-2">
                                    <div class="corner top-left"></div>
                                    <div class="corner top-right"></div>
                                    <div class="corner bottom-left"></div>
                                    <div class="corner bottom-right"></div>
                                    <div class="service-card-icon">

                                        <div class="service-card-icon-wrapper">
                                            <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/quality-assurance.png" class="service-icon-2" alt="service-img">
                                        </div>
                                        <div class="service-card-number">02</div>
                                    </div>
                                    <h4 class="service-card-title">Quality Assurance (QA)</h4>
                                    <p class="service-card-text  focus-content content">
                                        Quality that speaks is the driving force of our success.
                                        We deploy and implement an enormous number of quality
                                        checkpoints before taking the website to live servers.
                                        Our web designing team retains high standards and utilizes
                                        the latest technology in every web design that we create.
                                    </p>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-card style-2">
                                    <div class="corner top-left"></div>
                                    <div class="corner top-right"></div>
                                    <div class="corner bottom-left"></div>
                                    <div class="corner bottom-right"></div>
                                    <div class="service-card-icon">

                                        <div class="service-card-icon-wrapper">
                                            <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/customer-satisfaction.png" class="service-icon-3" alt="service-img">
                                        </div>
                                        <div class="service-card-number">03</div>
                                    </div>
                                    <h4 class="service-card-title">Customer Satisfaction</h4>
                                    <p class="service-card-text  focus-content content">
                                        Our organization works passionately to earn customers satisfaction
                                        from everyone we work. We are committed to building sites that meet your expectations.
                                        We believe happy customers are the spirit of never-ending business growth.
                                        Customization of our web designs satisfies your needs regardless of the nature of your business.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <!-- <section class="our_services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="services_content_iner">
                            <div class="single_services_section wow fadeInDown wd-service-ind" data-wow-delay=".3s">
                                <a href="#" class="services_section_bg bg_1"></a>
                                <div class="single_section_content">
                                    <h5>Unique Web Design</h5>
                                    <h3>The unique work process is a standout factor that differentiates us from the rest. Our designers take utmost care of everything like no one else to make your site successful. The uniqueness of the web design reflects your brand explicitly to build a strong identity among the customers.</h3>
                                </div>
                            </div>
                            <div class="single_services_section wow fadeInDown wd-service-ind" data-wow-delay=".5s">
                                <a href="#" class="services_section_bg bg_2"></a>
                                <div class="single_section_content">
                                    <h5>Quality Assurance (QA)</h5>
                                    <h3>Quality that speaks is the driving force of our success. We deploy and implement an enormous number of quality checkpoints before taking the website to live servers. Our web designing team retains high standards and utilizes the latest technology in every web design that we create.</h3>
                                </div>
                            </div>
                            <div class="single_services_section wow fadeInDown wd-service-ind" data-wow-delay=".7s">
                                <a href="#" class="services_section_bg bg_3"></a>
                                <div class="single_section_content">
                                    <h5>Customer Satisfaction</h5>
                                    <h3>Our organization works passionately to earn customers satisfaction from everyone we work. We are committed to building sites that meet your expectations. We believe happy customers are the spirit of never-ending business growth. Customization of our web designs satisfies your needs regardless of the nature of your business.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- START WORK PROCESS -->
        <!-- <section class="pos-r">
            <div class="container">
                <div class="wow fadeInLeft animated wd-service-inleft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="text-center">
                        <h2 class="wd-title">Principles of Our Web Design Company</h2>
                        <p>We earn client satisfaction via design principles.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                            <div class="featured-item style-3">
                                <div class="featured-icon"><i class="flaticon-ui"></i><span class="border-anim"></span></div>
                                <div class="featured-title">
                                    <h5>Creative Designs</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Designing sites with creative ideas that perform to deliver faster results than your competitors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                            <div class="featured-item style-3">
                                <div class="featured-icon"><i class="flaticon-ui"></i><span class="border-anim"></span></div>
                                <div class="featured-title">
                                    <h5>SEO friendly Website design</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Our designs meet all the foundational requirements of the standard SEO guidelines.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                            <div class="featured-item style-3">
                                <div class="featured-icon"><i class="flaticon-ui"></i><span class="border-anim"></span></div>
                                <div class="featured-title">
                                    <h5>Responsive Design</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Building device-compatible web designs that display elegantly on all screen resolutions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                            <div class="featured-item style-3">
                                <div class="featured-icon"><i class="flaticon-ui"></i><span class="border-anim"></span></div>
                                <div class="featured-title">
                                    <h5>Mobile-Friendly Design</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Your Website will look great and work smoothly on any device, phone, tablet, or computer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section> -->

        <section class="principle-sec  ">
            <!-- <div class="shape-image-animation p-0">
                <svg xmlns="http://www.w3.org/2000/svg" widht="auto" height="100" viewBox="0 150 3000 100">
                    <path class="st1" d="M 0 190 C 1200 400 1200 50 3000 190 L 3000 350 L 0 350 L 0 190" fill="#f7e9ea">
                        <animate attributeName="d" dur="8s" values="M 0 190 C 1200 400 1200 50 3000 190 L 3000 350 L 0 350 L 0 190;
                    M 0 190 C 400 50 400 400 3000 190 L 3000 350 L 0 350 L 0 190;
                    M 0 190 C 1200 400 1200 50 3000 190 L 3000 350 L 0 350 L 0 190" repeatCount="indefinite"></animate>
                    </path>
                    <path class="st1" d="M 0 190 C 1200 400 1200 50 3000 190 L 3000 350 L 0 350 L 0 190" fill="#f7e9ea">
                        <animate attributeName="d" dur="5s" values="M 0 190 C 1200 400 1200 50 3000 190 L 3000 350 L 0 350 L 0 190;
                    M 0 190 C 400 50 400 400 3000 190 L 3000 350 L 0 350 L 0 190;
                    M 0 190 C 1200 400 1200 50 3000 190 L 3000 350 L 0 350 L 0 190" repeatCount="indefinite"></animate>
                    </path>
                </svg>
            </div> -->
            <div class="principle-company-section pt-120 mt-100">

                <div class="container">


                    <div class="principle-sketch-1">
                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/ring-pattern.png" height="80" width="80" alt="pattern" class="banner-pattern-1" />
                    </div>
                    <div class="principle-sketch-2">
                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/solid-pattern.png" height="80" width="80" alt="pattern" class="" />
                    </div>
                    <div>
                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/arrow-up-light.svg" class="princi-pattern-1 move-horizontal" height="80" width="80" alt="priciple-img">
                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/arrow-up-light.svg" class="princi-pattern-2 move-horizontal" height="80" width="80" alt="priciple-img">
                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/arrow-up-light.svg" class="princi-pattern-3 move-horizontal " height="80" width="80" alt="priciple-img">
                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/arrow-up-light.svg" class="princi-pattern-4 move-horizontal" height="80" width="80" alt="priciple-img">
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <div class="principle-section-title mb-60">
                                <span class="sub-title">
                                    We earn client satisfaction via design principles
                                </span>
                                <h2 class="title">Principles of Our Web Design Company</h2>

                            </div>
                        </div>
                        <div class="col-lg-auto align-self-start">
                            <div class="principle-button-wrapper">
                                <!-- <a href="" class="btn btn-wrapper"> Know more
                                    <i class="icon-btn fi fi-rr-arrow-right"></i>
                                </a> -->
                                <a href="javascript:void(0);" class="contact-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    View More Details
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="content-card-wrapper">
                        <div class="container">

                            <div class="row justify-content-center card-section-wrapper">
                                <div class="col-xl-3 col-md-6 card-section-col">

                                    <div class="principle-card style3">
                                        <div class="principle-card-icon-item">
                                            <div class="principle-card-icon">
                                                <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/principle-icon-1.png" class="principle-icon-1" alt="service-img">
                                            </div>
                                            <h4 class="principle-card-title">Creative <br> Designs</h4>
                                            <p class="principle-card-text">
                                                Designing sites with creative ideas that perform to deliver faster results than your competitors.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 card-section-col">

                                    <div class="principle-card style3">
                                        <div class="principle-card-icon-item">
                                            <div class="principle-card-icon">
                                                <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/principle-icon-2.png" class="principle-icon-1" alt="service-img">
                                            </div>
                                            <h4 class="principle-card-title">SEO friendly Website design</h4>
                                            <p class="principle-card-text">

                                                Our designs meet all the foundational requirements of the standard SEO guidelines.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="col-xl-3 col-md-6 card-section-col">

                                    <div class="principle-card style3">
                                        <div class="principle-card-icon-item">
                                            <div class="principle-card-icon">
                                                <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/principle-icon-3.png" class="principle-icon-1" alt="service-img">
                                            </div>
                                            <h4 class="principle-card-title">Responsive <br> Design</h4>
                                            <p class="principle-card-text">

                                                Building device-compatible web designs that display elegantly on all screen resolutions.
                                            </p>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6 card-section-col">

                                    <div class="principle-card style3">
                                        <div class="principle-card-icon-item">
                                            <div class="principle-card-icon">
                                                <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/principle-icon-4.png" class="principle-icon-1" alt="service-img">
                                            </div>
                                            <h4 class="principle-card-title">Mobile-Friendly Design</h4>
                                            <p class="principle-card-text">
                                                Your Website will look great and work smoothly on any device, phone, tablet, or computer.
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



        <section>
            <div class="leading-webdesign mt-100">
                <div class="">
                    <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/spin.svg" class="spin leading-webdesign-bg-shape" alt="spin-img">
                </div>
                <div class="container">
                    <div class="row leading-webdesign-content-wrapper">
                        <div class="col-lg-4 p-0">
                            <div class="leading-img-wrapper">
                                <div class="image-box-1">
                                    <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/leading-company-bg-image-1.webp" class="leading-img-pattern" alt="priciple-img">
                                </div>
                                <div class="image-box">
                                    <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/business-icon-1.png" class="priciple-img move-y" alt="priciple-img">
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 p-0">
                            <div>
                                <h1 class="leading-webdesign-content-title">
                                    <span class="leading-content-wrapper">
                                        Leading Web Design <i class="fi fi-rr-arrow-small-right arrow-up-right"></i></span>

                                    <span class="leading-content-wrapper">
                                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/spin.svg" class="spin" alt="spin-img">
                                        Company in Coimbatore
                                    </span>
                                </h1>
                                <p class="mb-35">
                                    Welcome to Cloudi5 Technologies, your best website designing company in Coimbatore.
                                    If you've been feeling like you've looked at a million web design companies and they all seem the same,
                                    we get it. But unlike the rest, At Cloudi5, we're different.
                                </p>
                                <!-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="list-wrap">
                                            <ul>
                                                <li class="icon-sec">
                                                    <i class="fi fi-br-check check-icon"></i>Personalized campaigns
                                                </li>
                                                <li class="icon-sec">
                                                    <i class="fi fi-br-check check-icon"></i>Email autoresponders
                                                </li>
                                                <li class="icon-sec">
                                                    <i class="fi fi-br-check check-icon"></i>Best Solutions & Service
                                                </li>
                                                <li class="icon-sec">
                                                    <i class="fi fi-br-check check-icon"></i>Latest Technology
                                                </li>
                                                <li class="icon-sec">
                                                    <i class="fi fi-br-check check-icon"></i>World Best Service
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="list-wrap">
                                            <ul>
                                                <li class="icon-sec">
                                                    <i class="fi fi-br-check check-icon"></i>24H Customer Service
                                                </li>
                                                <li class="icon-sec">
                                                    <i class="fi fi-br-check check-icon"></i>Generate Ideas
                                                </li>
                                                <li class="icon-sec">
                                                    <i class="fi fi-br-check check-icon"></i>Product Create
                                                </li>
                                                <li class="icon-sec">
                                                    <i class="fi fi-br-check check-icon"></i>Databse Security
                                                </li>
                                                <li class="icon-sec">
                                                    <i class="fi fi-br-check check-icon"></i>Product Design
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                                <p class="mb-35">
                                    Our team of skilled professionals is dedicated to creating websites that
                                    not only look stunning but also generate results.
                                    We'll finish your project on time and on budget,
                                    making sure everything goes smoothly.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row  leading-webdesign-content-wrapper">

                        <div class="col-lg-6 p-0">
                            <div>

                                <p class="mb-35">
                                    Using the latest technology, we create websites that not only look amazing but also help your business succeed.
                                    Whether you're just starting out or you're a big company, we can bring your ideas to life.
                                    What makes us different is our commitment to doing a great job.
                                    We listen carefully to what you need and then create a custom solution just for you.
                                </p>

                                <p class="mb-35">
                                    Our goal is not just to meet your expectations but to exceed them,
                                    giving you a website that looks great and works perfectly.
                                    So, if you're ready to take your online presence to the next level,
                                    partner with Cloudi5 Technologies today.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="leading-img-wrapper">
                                <div class="image-box">
                                    <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/business-potential.png" class="priciple-img-2 move-y" alt="priciple-img">
                                </div>
                                <div class="image-box-1">
                                    <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/leading-company-bg-image-1.webp" class="leading-img-pattern-1" alt="priciple-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section>
            <div class="our-process-section mb-60">
                <div class="container-lg container-fluid ">
                    <div class="row mb-60">
                        <div class="col-lg-12">
                            <div class="our-process-title">
                                <h2>Our Solution
                                    <br><span>Process</span>
                                </h2>
                                <div class="dash-and-paragraph">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477 65">
                                        <path d="M0.333333 3C0.333333 4.47276 1.52724 5.66667 3 5.66667C4.47276 5.66667 5.66667 4.47276 5.66667 3C5.66667 1.52724 4.47276 0.333333 3 0.333333C1.52724 0.333333 0.333333 1.52724 0.333333 3ZM475 3L475.255 3.42984L476.82 2.5H475V3ZM438.668 65L441.872 60.197L436.111 59.8239L438.668 65ZM3 3.5H475V2.5H3V3.5ZM474.745 2.57016C459.928 11.3742 441.341 27.8789 438.461 60.47L439.457 60.5581C442.3 28.3895 460.613 12.1303 475.255 3.42984L474.745 2.57016Z"></path>
                                    </svg>

                                    <div class="btn-and-paragraph">
                                        <p>Digital agencies can vary in size and specialization. Some may focus on specific niches, such as healthcare or e-commerce, while others may offer a comprehensive.</p>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="process-section-wrapper">
                    <div class="row" id="scroll-progress">
                        <div class="col-lg-6">

                            <div class="fixed-column">
                                <div class="progress-container">
                                    <svg class="progress-ring" width="100%" height="auto" viewBox="0 0 200 200">
                                        <circle cx="100" cy="100" r="90" fill="#c9daed" stroke="#e6e6e6" stroke-width="6" />
                                        <circle class="progress" cx="100" cy="100" r="90" fill="#e8f2fd" stroke="#f4cb0a" stroke-width="6" stroke-dasharray="565.48" stroke-dashoffset="565.48" />
                                    </svg>
                                    <div class="step-text">Step 1/4</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="scrolling-column">
                                <div class="card scrolling-card-wrapper" data-index="1">
                                    <div class="process-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 70 70">
                                            <path d="M58.3331 63C58.3331 50.1144 47.8856 39.6669 35 39.6669C22.1144 39.6669 11.6669 50.1144 11.6669 63H7C7 47.537 19.537 35 35 35C50.463 35 63 47.537 63 63H58.3331ZM39.6669 7C39.6669 19.8856 50.1144 30.3338 63 30.3338V35C47.537 35 35 22.463 35 7H39.6669Z"></path>
                                            <path d="M56 21C59.866 21 63 17.866 63 14C63 10.134 59.866 7 56 7C52.134 7 49 10.134 49 14C49 17.866 52.134 21 56 21Z"></path>
                                            <path d="M35.0001 63.0007C40.1546 63.0007 44.3332 58.8221 44.3332 53.6676C44.3332 48.513 40.1546 44.3345 35.0001 44.3345C29.8456 44.3345 25.667 48.513 25.667 53.6676C25.667 58.8221 29.8456 63.0007 35.0001 63.0007Z" fill="#F5BEBE"></path>
                                            <path d="M18.6669 30.3338C25.1104 30.3338 30.3338 25.1104 30.3338 18.6669C30.3338 12.2234 25.1104 7 18.6669 7C12.2234 7 7 12.2234 7 18.6669C7 25.1104 12.2234 30.3338 18.6669 30.3338Z" fill="#F5BEBE"></path>
                                        </svg>
                                    </div>
                                    <div class="our-process-content">
                                        <h3>Discussions</h3>
                                        <p> We collaborate with you to define your brand, goals, and success metrics.</p>

                                        <ul>
                                            <li><i class="fi fi-rr-plus-small"></i>Kick-off Meeting</li>
                                            <li><i class="fi fi-rr-plus-small"></i>Requirement Gathering</li>
                                            <li><i class="fi fi-rr-plus-small"></i>Market Research</li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="card scrolling-card-wrapper" data-index="2">
                                    <div class="process-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 70 70">
                                            <path d="M60.9 25.69H44.31V9.1C44.31 7.91 45.22 7 46.41 7H60.9C62.09 7 63 7.91 63 9.1V23.59C63 24.71 62.09 25.69 60.9 25.69ZM44.31 44.31H25.69V27.79C25.69 26.6 26.6 25.69 27.79 25.69H44.38V44.31H44.31ZM23.59 63H9.1C7.91 63 7 62.09 7 60.9V46.41C7 45.22 7.91 44.31 9.1 44.31H25.69V60.9C25.69 62.09 24.71 63 23.59 63ZM9.1 7H22.54C23.73 7 24.29 8.4 23.45 9.24L9.24 23.45C8.4 24.29 7 23.66 7 22.54V9.1C7 7.91 7.91 7 9.1 7Z"></path>
                                            <path d="M60.9001 63.0001H46.4101C45.2201 63.0001 44.3101 62.0901 44.3101 60.9001V44.3101H60.9001C62.0901 44.3101 63.0001 45.2201 63.0001 46.4101V60.9001C63.0001 62.0901 62.0901 63.0001 60.9001 63.0001Z"></path>
                                        </svg>
                                    </div>
                                    <div class="our-process-content">
                                        <h3>Wireframe</h3>
                                        <p> We create a blueprint (wireframes) for smooth navigation before design.</p>
                                        <ul>
                                            <li><i class="fi fi-rr-plus-small"></i>Sketching Layouts</li>
                                            <li><i class="fi fi-rr-plus-small"></i>User Flow</li>
                                            <li><i class="fi fi-rr-plus-small"></i>Feedback Loop</li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="card scrolling-card-wrapper" data-index="3">
                                    <div class="process-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 70 70">
                                            <path d="M58.3331 63C58.3331 50.1144 47.8856 39.6669 35 39.6669C22.1144 39.6669 11.6669 50.1144 11.6669 63H7C7 47.537 19.537 35 35 35C50.463 35 63 47.537 63 63H58.3331ZM39.6669 7C39.6669 19.8856 50.1144 30.3338 63 30.3338V35C47.537 35 35 22.463 35 7H39.6669Z"></path>
                                            <path d="M56 21C59.866 21 63 17.866 63 14C63 10.134 59.866 7 56 7C52.134 7 49 10.134 49 14C49 17.866 52.134 21 56 21Z"></path>
                                            <path d="M35.0001 63.0007C40.1546 63.0007 44.3332 58.8221 44.3332 53.6676C44.3332 48.513 40.1546 44.3345 35.0001 44.3345C29.8456 44.3345 25.667 48.513 25.667 53.6676C25.667 58.8221 29.8456 63.0007 35.0001 63.0007Z" fill="#F5BEBE"></path>
                                            <path d="M18.6669 30.3338C25.1104 30.3338 30.3338 25.1104 30.3338 18.6669C30.3338 12.2234 25.1104 7 18.6669 7C12.2234 7 7 12.2234 7 18.6669C7 25.1104 12.2234 30.3338 18.6669 30.3338Z" fill="#F5BEBE"></path>
                                        </svg>
                                    </div>
                                    <div class="our-process-content">
                                        <h3>UI & Develop</h3>
                                        <p>Our designers create a user-friendly & visually appealing interface. Skilled developers bring it to life.</p>
                                        <ul>
                                            <li><i class="fi fi-rr-plus-small"></i>Visual Style Guide</li>
                                            <li><i class="fi fi-rr-plus-small"></i>High-Fidelity Mockups</li>
                                            <li><i class="fi fi-rr-plus-small"></i>Client Review</li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="card scrolling-card-wrapper card-wrapper-last" data-index="4">
                                    <div class="process-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 70 70">
                                            <g>
                                                <path d="M67.6527 16.0958C68.7855 14.6144 67.827 11.5646 65.5614 12.436C60.246 14.5273 54.7564 19.1456 51.1838 23.6767C47.4368 28.4693 46.7397 34.5689 48.4825 40.3199C51.0095 48.6851 58.4161 54.1748 65.5614 58.6188C68.8726 60.7101 71.8353 55.4818 68.6112 53.3905C63.383 50.1665 57.5448 46.071 54.9307 40.3199C52.9265 35.7888 52.9265 30.6477 56.2377 26.6394C59.5489 22.7182 64.4286 20.1041 67.6527 16.0958ZM1.42836 53.3905C-1.88286 55.3947 1.16694 60.6229 4.47816 58.6188C11.6234 54.1748 18.943 48.6851 21.5571 40.3199C23.2998 34.7432 22.6899 28.6435 19.1172 24.0253C15.6317 19.407 9.96781 14.6144 4.5653 12.5231C2.29973 11.6518 1.25408 14.7016 2.474 16.1829C5.61095 20.1041 10.3164 22.7182 13.6276 26.4651C17.1131 30.4734 17.2873 35.7017 15.196 40.4942C12.4948 46.071 6.56946 50.1665 1.42836 53.3905ZM53.3622 1.36957C50.1381 6.59781 46.0426 12.436 40.2916 15.0501C35.7604 17.0543 30.6193 17.0543 26.611 13.7431C22.6027 10.4319 19.9886 5.55216 15.9803 2.32808C14.5861 1.1953 11.5363 2.24094 12.4077 4.50651C14.499 9.82189 19.1172 15.3115 23.6484 18.8842C28.4409 22.6311 34.5405 23.3282 40.2916 21.5854C48.6568 19.0584 54.1464 11.6518 58.5904 4.50651C60.5946 1.1953 55.4535 -1.85451 53.3622 1.36957ZM58.5904 65.5898C54.1464 58.4445 48.6568 51.125 40.2916 48.5108C34.7148 46.7681 28.6152 47.3781 23.9969 50.9507C19.3786 54.4362 14.5861 60.1001 12.4948 65.5026C11.6234 67.7682 14.6732 68.8138 16.1546 67.5939C20.0757 64.457 22.6899 59.7516 26.4368 56.4403C30.4451 52.9548 35.6733 52.7806 40.4659 54.8719C46.2169 57.486 50.2252 63.3242 53.5365 68.5524C55.4535 71.8636 60.5946 68.901 58.5904 65.5898Z"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="our-process-content">
                                        <h3>Product Delivery</h3>
                                        <p> We ensure on-time launch with optimal performance through testing and your feedback.</p>
                                        <ul>
                                            <li><i class="fi fi-rr-plus-small"></i>Quality Assurance</li>
                                            <li><i class="fi fi-rr-plus-small"></i>Development</li>
                                            <li><i class="fi fi-rr-plus-small"></i>Post-Launch Support</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>







        <!-- <section class="process-section">
            <div class="curve"></div>
            <div class="bubble-dotted">
                <span class="dotted dotted-1"></span>
                <span class="dotted dotted-2"></span>
                <span class="dotted dotted-3"></span>
                <span class="dotted dotted-4"></span>
                <span class="dotted dotted-5"></span>
                <span class="dotted dotted-6"></span>
                <span class="dotted dotted-7"></span>
                <span class="dotted dotted-8"></span>
                <span class="dotted dotted-9"></span>
                <span class="dotted dotted-10"></span>
            </div>
            <div class="faded-text style-two">
                <div class="f-text"><span>Process</span></div>
            </div>
            <div class="auto-container">
                <div class="sec-title style-two centered text-center">
                    <h2 class="wd-title">Our Web Design Process</h2>
                    <p>We plan and implement a successful 4-step smart approach that is essential to take your business towards success.</p>
                </div>
                <div class="row clearfix">
                  
                    <div class="process-block col-sm-3">
                        <div class="inner-box">
                            <div class="pattern-layer"></div>
                            <div class="count hide-section"><span>01</span></div>
                            <div class="icon-box"><span class="flaticon-user"></span></div>
                            <h4>Discussions</h4>
                            <div class="text">We collaborate with you to define your brand, goals, and success metrics.</div>
                        </div>
                    </div>
                   
                    <div class="process-block col-sm-3">
                        <div class="inner-box">
                            <div class="pattern-layer"></div>
                            <div class="count hide-section"><span>02</span></div>
                            <div class="icon-box"><span class="flaticon-monitor"></span></div>
                            <h4>Wireframe</h4>
                            <div class="text">We collaborate with you to define your brand, goals, and success metrics.</div>
                        </div>
                    </div>
                   
                    <div class="process-block col-sm-3">
                        <div class="inner-box">
                            <div class="pattern-layer"></div>
                            <div class="count hide-section"><span>03</span></div>
                            <div class="icon-box"><span class="flaticon-line-chart"></span></div>
                            <h4>UI &amp; Develop</h4>
                            <div class="text">Our designers create a user-friendly & visually appealing interface. Skilled developers bring it to life.</div>
                        </div>
                    </div>
                  
                    <div class="process-block col-sm-3">
                        <div class="inner-box">
                            <div class="pattern-layer"></div>
                            <div class="count hide-section"><span>04</span></div>
                            <div class="icon-box"><span class="flaticon-alarm-clock-1"></span></div>
                            <h4>Product Delivery</h4>
                            <div class="text">We ensure on-time launch with optimal performance through testing and your feedback.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="webinar-area mt-100">
            <div class="row m-0">
                <div class="col-lg-6 p-0">
                    <div class="webinar-video-image-1 wow slideInLeft animated content-desktop">
                        <img src="<?php echo base_url(); ?>asset/images/wd-page/box1.jpg" alt="E-Commerce Website Design">
                    </div>
                </div>

                <div class="col-lg-6 p-0">
                    <div class="webinar-content">
                        <h2>E-Commerce Website Design</h2>
                        <p>You are just a few clicks away from the customized <a href="<?php echo base_url('ecommerce-website-development'); ?>"><strong>web design solutions</strong></a> that simplify your business challenges, provide instant connection, and secures your transactions. We adopt out-of-box thinking and proven strategies to build high performing <br><strong>E-commerce websites</strong> that boost business sale and audience reach. Our Web Designs focuses on customer needs capturing clients' business essence and vision. The e-commerce sites present a feel and look of an online store by user-friendly signup & checkout process, high-quality product image, optimized search bars, proper placement of shopping cart and CTAs, and easy navigation through product categories.</p>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-lg-6 p-0">
                    <div class="webinar-content">
                        <h2>Website Redesign and Maintenance</h2>
                        <p>We shape your business with specific redesigning techniques that fulfill your requirements and don't fade away with the changing trends. Website redesign enhances the visually appealing and usability features of a site. Our redesigning services deploy the latest designs and technologies to create faster loading <strong>responsive web designs</strong> for the existing sites, and few SEO aspects are added to the redesigned one. Maintenance services help to increase and sustain customer engagement rates by providing regular website and technical updates, checks for broken links, images, and the functionality of databases etc.</p>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="webinar-video-image wow slideInRight animated content-desktop">
                        <img src="<?php echo base_url(); ?>asset/images/wd-page/box2.jpg" alt="Website Redesign and Maintenance">
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="section is-sm is-dark section-call2action">
            <div class="container">
                <div class="call2action-box flex vcenter">
                    <div class="col-sm-4">
                        <div class="box-left content-desktop">
                            <img class="screen" src="<?php echo base_url(); ?>asset/images/wd-page/call2action.png" alt="Web Design" />
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="box-right">
                            <div class="box-content">
                                <h2 class="section-title">Let’s Create Your Success Together</h2>
                                <p class="section-desc float-left">Contact Our Web Design Company in Coimbatore </p>
                                <div class="float-right mob-btn-fl-none">
                                    <a href="<?php echo base_url(); ?>contactus" class="btn grdnt-purple"><span class="">Contact Us</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section>
            <div class="container mt-60 mb-60">


                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="web-technology-title text-center mb-40">Website design Services We Offer</h2>
                    </div>
                </div>
                <div class="web-technology-section">
                    <div class="row">
                        <div class="col-lg-4 p-0">
                            <div class="techno-card card-one">
                                <div class="circle"></div>
                                <div class="techno-card-content">
                                    <div class="techno-icon">
                                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/principle-icon-1.png" class="custom-webdesign tech-icon" alt="E-Commerce Website Design">
                                    </div>
                                    <div class="card-content">
                                        <h3>Custom Web Design</h3>
                                        <p>Imagine a website built entirely around your needs and brand.
                                            That's custom design! We don't use templates; we create a website from scratch that reflects your unique style,
                                            targets your ideal customers, and does exactly what you need it to do.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="techno-card card-two">
                                <div class="circle"></div>
                                <div class="techno-card-content">
                                    <div class="techno-icon">
                                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/wordpress.png" class="custom-webdesign tech-icon" alt="E-Commerce Website Design">
                                    </div>
                                    <div class="card-content">
                                        <h3>WordPress Design</h3>
                                        <p>WordPress is a popular platform that lets you make changes without needing coding skills.
                                            It's perfect for blogs, portfolios, or businesses that regularly update their content.
                                            Cloudi5 will design a WordPress website that's both beautiful and user-friendly for you to manage.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="techno-card card-three">
                                <div class="circle"></div>
                                <div class="techno-card-content">
                                    <div class="techno-icon">
                                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/ui-design.png" class="custom-webdesign tech-icon" alt="E-Commerce Website Design">
                                    </div>
                                    <div class="card-content">
                                        <h3>Web UI/UX Design</h3>
                                        <p>A website should be both attractive and easy to use. That's where UI/UX design comes in.
                                            UI focuses on the look and feel, while UX ensures visitors can find what they need quickly and easily.
                                            We create websites that are not only stunning but also intuitive and enjoyable to navigate.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="techno-card card-four">
                                <div class="circle"></div>
                                <div class="techno-card-content">
                                    <div class="techno-icon">
                                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/landing_page-img.png" class="custom-webdesign tech-icon" alt="E-Commerce Website Design">
                                    </div>
                                    <div class="card-content">
                                        <h3>Landing Page Design</h3>
                                        <p>Need a focused web page for a specific marketing campaign?
                                            Landing pages are designed to capture leads and drive conversions.
                                            We create high-performing landing pages with a clear call to action,
                                            maximizing the impact of your marketing efforts.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="techno-card card-five">
                                <div class="circle"></div>
                                <div class="techno-card-content">
                                    <div class="techno-icon">
                                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/amp_icon.png" class="custom-webdesign tech-icon" alt="E-Commerce Website Design">
                                    </div>
                                    <div class="card-content">
                                        <h3>AMP Web Design</h3>
                                        <p>With everyone using smartphones, website speed is more important than ever.
                                            AMP (Accelerated Mobile Pages) technology makes your website load lightning-fast on mobile devices.
                                            Cloudi5 can design an AMP website that keeps your visitors happy and engaged,
                                            no matter what device they use.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="techno-card card-six">
                                <div class="circle"></div>
                                <div class="techno-card-content">
                                    <div class="techno-icon">
                                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/ecommerce-icon.png" class="custom-webdesign tech-icon" alt="E-Commerce Website Design">
                                    </div>
                                    <div class="card-content">
                                        <h3>E-commerce Website Design</h3>
                                        <p>Increase sales and brand awareness with a user-friendly online store.
                                            Cloudi5 will create a beautiful and functional e-commerce platform to showcase your
                                            products and streamline the customer journey, making buying a pleasure for your customers.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="techno-card card-seven">
                                <div class="circle"></div>
                                <div class="techno-card-content">
                                    <div class="techno-icon">
                                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/redesign-image-1.png" class="custom-webdesign tech-icon" alt="E-Commerce Website Design">
                                    </div>
                                    <div class="card-content">
                                        <h3>Website Redesign</h3>
                                        <p>Is your website feeling outdated? We can give it a makeover!
                                            Cloudi5 will redesign your website to improve user experience,
                                            update the look and feel, and ensure it reflects your current brand identity.
                                            It's like giving your website a fresh start.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="techno-card card-eight">
                                <div class="circle"></div>
                                <div class="techno-card-content">
                                    <div class="techno-icon">
                                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/web-maintenance.png" class="custom-webdesign tech-icon" alt="E-Commerce Website Design">
                                    </div>
                                    <div class="card-content">
                                        <h3>Website Maintenance</h3>
                                        <p>Cloudi5 offers website maintenance plans to ensure your website is secure, up-to-date,
                                            and performing at its best. We'll handle tasks like software updates, security checks,
                                            and performance optimization,
                                            allowing you to focus on running your business.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="techno-card card-eight">
                                <div class="circle"></div>
                                <div class="techno-card-content">
                                    <div class="techno-icon">
                                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/cms-webdesign.png" class="custom-webdesign tech-icon " alt="E-Commerce Website Design">
                                    </div>
                                    <div class="card-content">
                                        <h3>CMS Web Design</h3>
                                        <p>Custom CMS web pages that are visually appealing and optimized for SEO.
                                            allowing you to focus on running your business.
                                            Easy website management system.
                                            Improved online presence with CMS web designing services.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </section>









        <section>
            <div class="container cta-container">

                <div class="pattern-img-curve">
                    <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/cta-section-highlighting.png" class="cta-pattern-1" alt="priciple-img">
                </div>
                <div class="call-to-action-sec mb-50">
                    <div>
                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/cta-pattern-1.webp" class="cta-pattern-1-wrapper spin" width="100" height="100" alt="priciple-img">
                    </div>


                    <div class="pattern-img-curve">

                        <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/cta-pattern.png" class="cta-pattern" alt="priciple-img">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-xl-8 p-0">
                            <div class="subscribe-inner-area">
                                <div class="cta-section-title">
                                    <p class="desc">Let's Create Your Success Together</p>
                                    <h2 class="title">
                                        Ready to get started with <br>
                                        your new project today?
                                    </h2>

                                    <a href="javascript:void(0);" class="contact-btn btn-cta">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        Contact Us
                                    </a>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </section>



        <!-- Banner -->
        <!-- START FEATURES -->
        <section id="feature" class="feature_area feature_area_bg section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                        <div class="single_feature mt_60">
                            <h2 class="text-center">Our Web Design and Development Technologies</h2>
                            <p>You can spread your wings worldwide and build a powerful brand with updated web designing skills that complement the advancing business expansion trends. Our expert team designs your websites using the latest technologies like HTML 4 & 5, Bootstrap, Angular and Vue.js and Content Management System (CMS) - WordPress, Shopify, Magento and Joomla. We deploy PHP frameworks like Laravel and CodeIgniter for <a href="<?php echo base_url('web-development'); ?>"><strong>Web Development.</strong></a></p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                        <div class="feature_img">
                            <img data-animate="fadeInLeftBig" src="<?php echo base_url(); ?>asset/images/wd-page/icon.png" class="img-fluid fadeInLeftBig animated" alt="Web Design Frameworks" />
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="wd-section tech-web-dev pt-60 pb-60 mt-20 mb-20">
                <div class="container">
                    <!-- <h2 class="section-title-wd">The Technologies We use at Cloudi5 Technologies</h2> -->

                    <div class="d-flex justify-content-center">
                        <div class="css-masonry">
                            <!-- Bootstrap -->
                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/html.webp" alt="Html">
                                    <div class="tech-name">HTML</div>
                                </div>
                            </div>

                            <!-- Magento -->
                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/laravel.png" alt="Laravel">
                                    <div class="tech-name">Laravel</div>
                                </div>
                            </div>

                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/css.webp" alt="Css">
                                    <div class="tech-name">CSS</div>
                                </div>
                            </div>

                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/php.webp" alt="PHP">
                                    <div class="tech-name">PHP</div>
                                </div>
                            </div>


                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/js.webp" alt="JavaScript">
                                    <div class="tech-name">JavaScript</div>
                                </div>
                            </div>


                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/react.webp" alt="ReactJs">
                                    <div class="tech-name">React JS</div>
                                </div>
                            </div>
                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/bootstrap.png"
                                        alt="Bootstrap">
                                    <div class="tech-name">Bootstrap</div>
                                </div>
                            </div>


                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/typescript.webp" alt="Jquery">
                                    <div class="tech-name">Typescript</div>
                                </div>
                            </div>

                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/jquery.webp" alt="Jquery">
                                    <div class="tech-name">Jquery</div>
                                </div>
                            </div>

                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/vue.webp" alt="Vue">
                                    <div class="tech-name">Vue JS</div>
                                </div>
                            </div>
                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/photoshop.webp"
                                        alt="Photoshop">
                                    <div class="tech-name">Photoshop</div>
                                </div>
                            </div>
                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/sql.webp" alt="SQL">
                                    <div class="tech-name">MySQL</div>
                                </div>
                            </div>
                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/angular.png" alt="Angular">
                                    <div class="tech-name">Angular</div>
                                </div>
                            </div>

                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/node.webp" alt="Node">
                                    <div class="tech-name">Node JS</div>
                                </div>
                            </div>
                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/wordpress.webp"
                                        alt="Wordpress">
                                    <div class="tech-name">Wordpress</div>
                                </div>
                            </div>
                            <div class="tech-card size-2">
                                <div class="tech-item">
                                    <img src="<?php echo base_url(); ?>asset/images/web-development/tech/mongo.webp" alt="MongoDB">
                                    <div class="tech-name">MongoDB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio -->
        <!-- <section class="projects-page-section pt-50">
            <div class="container">
                <div class="h4 lrg text-center"> Our <span class="red-text">Portfolio </div><span class="red-border-line">&nbsp;</span>
                <div class="mixitup-gallery pt-30">
                    <div class="filters clearfix">

                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="filter active" data-role="button" data-filter="all">All</li>
                            <?php foreach ($category as $res_category) { ?>
                                <li class="filter" data-role="button" data-filter=".<?php echo strtolower(str_replace(' ', '_', $res_category->title)); ?>"><?php echo ucwords($res_category->title); ?></li>
                            <?php } ?>
                        </ul>

                    </div>
                    <div class="filter-list row clearfix" id="MixItUpC72ED9">
                        <?php foreach ($portfolio as $res_portfolio) { ?>
                            <div class="gallery-item-two mix <?php echo strtolower(str_replace(' ', '_', $res_portfolio->category)); ?> col-lg-4 col-md-6 col-sm-12 d-inlineb">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="<?php echo base_url(); ?>asset/images/default_image.png" data-src="<?php echo base_url() . $res_portfolio->thumbnail; ?>" data-srcset="<?php echo base_url() . $res_portfolio->thumbnail; ?>" class="lazy" alt="Cloudi5 Portfolio">
                                        <div class="overlay-box">
                                            <div class="overlay-inner">
                                                <div class="content">
                                                    <a href="<?php echo base_url() . $res_portfolio->thumbnail_popup; ?>" data-fancybox="gallery-3" data-caption="" class="link"><span class="fa fa-search-plus"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="lower-box">
                                        <h3><a href="<?php echo base_url() . 'portfolio/' . $res_portfolio->slug . '-' . $res_portfolio->id; ?>"> <?php echo ucwords($res_portfolio->title); ?></a></h3>
                                        <div class="category"><?php echo $res_portfolio->services; ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="text-center"><a class="btn btn-primary" href="<?php echo base_url(); ?>portfolio"> View More Portfolio</a></div>
                </div>
            </div>
        </section> -->

        <!-- FAQ-section-starts -->
        <section>
            <div class="faq-section">
                <div>

                </div>
                <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/faq-pattern-1.webp" class="faq-pattern-1-wrapper spin" alt="priciple-img">
                <div>

                </div>
                <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/faq-pattern-2.webp" class="faq-pattern-2-wrapper spin" alt="priciple-img">
                <div>
                    <img src="<?php echo base_url(); ?>asset/images/webdesign-page-img/text-shape-pattern.webp" class="text-shape-pattern" alt="priciple-img">
                </div>
                <div class="container position-relative">
                    <div class="faq-container">
                        <div class="faq-title">
                            <h2 class="title">Frequently Asked Questions</h2>
                            <div>
                                <svg class="highlight" viewBox="0 0 65 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="none" clip-rule="evenodd" d="M43.8083 51.3755C46.1973 51.4486 48.5601 51.5419 50.9497 51.5457C51.4638 51.5484 51.877 51.1374 51.8757 50.6285C51.8761 50.1162 51.4585 49.701 50.9477 49.7C48.5713 49.6944 46.2285 49.6026 43.856 49.5292C43.3434 49.515 42.9184 49.9161 42.9047 50.4219C42.8927 50.9327 43.2957 51.3612 43.8083 51.3755Z" fill="#fb4834" stroke="#fb4834"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M34.3909 34.0184C40.2156 29.2556 45.7937 24.2013 51.512 19.3174C51.8999 18.9843 51.9423 18.4022 51.6096 18.0158C51.2736 17.6279 50.6909 17.5797 50.2997 17.9111C44.5929 22.7884 39.0263 27.8359 33.2114 32.587C32.8152 32.9119 32.7611 33.4925 33.0856 33.8872C33.4134 34.2835 33.9963 34.3399 34.3909 34.0184Z" fill="#fb4834" stroke="#fb4834"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.6786 20.5825C12.4979 14.4934 14.1488 8.34326 16.0364 2.27486C16.1848 1.78908 15.9115 1.27162 15.4249 1.11827C14.935 0.963313 14.4153 1.23663 14.2636 1.72078C12.3761 7.79745 10.722 13.9542 8.9028 20.0516C8.75779 20.539 9.03602 21.0548 9.52582 21.2015C10.019 21.3499 10.532 21.0732 10.6786 20.5825Z" fill="#fb4834" stroke="#fb4834"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="faq-item">
                                    <div class="accordion-section">
                                        <div class="accordion-single">
                                            <h5 class="header-area">
                                                <button type="button" class="accordion-btn d-flex align-item-center text-start w-100">
                                                    How can I get started with Cloudi5?
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body">
                                                    <p class="content-desc">Contact us today for a free consultation!
                                                        We would be happy to discuss your website needs and answer any questions you may have.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-single">
                                            <h5 class="header-area">
                                                <button type="button" class="accordion-btn d-flex align-item-center text-start w-100">
                                                    Do you offer SEO Services?
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body">
                                                    <p class="content-desc">Yes,We offer SEO services to help your website rank higher in Search Engine Results Pages (SERPs)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-single">
                                            <h5 class="header-area">
                                                <button type="button" class="accordion-btn d-flex align-item-center text-start w-100">
                                                    Do you provide website security measures?
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body">
                                                    <p class="content-desc">Yes, we take website security seriously and implement measures to protect your website from threats and vulnerabilities.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-single">
                                            <h5 class="header-area">
                                                <button type="button" class="accordion-btn d-flex align-item-center text-start w-100">
                                                    Can I update my website content myself?
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body">
                                                    <p class="content-desc">Yes, We use content Management systems (CMS) like WordPress that allow you to easily update your websites content without needing technical knowledge</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-single">
                                            <h5 class="header-area">
                                                <button type="button" class="accordion-btn d-flex align-item-center text-start w-100">
                                                    How much does a website typically cost?
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body">
                                                    <p class="content-desc">Contact us today for a free consultation!
                                                        The cost of a website will vary depending on the size and complexity of the project. However, we offer competitive rates and can provide a free quote for your project.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-single">
                                            <h5 class="header-area">
                                                <button type="button" class="accordion-btn d-flex align-item-center text-start w-100">
                                                    Can you help me with content creation for my website?
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body">
                                                    <p class="content-desc">Contact us today for a free consultation!
                                                        The cost of a website will vary depending on the size and complexity of the project. However, we offer competitive rates and can provide a free quote for your project.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- FAQ-section-ends -->

        <section class="video-section wd-video-section">
            <div class="container">
                <h2>Have a Project? Let's make it together </h2>
                <div class="title"> Our experts are ready to design a brand for your business</div>
                <div class="">
                    <a href="<?php echo base_url(); ?>contactus" class="btn grdnt-purple btn-webdesign">Contact Us</a>
                </div>
            </div>
            <div class="waveWrapper hide-section">
                <div class="wave waveTop"></div>
                <div class="wave waveMiddle"></div>
            </div>
        </section>
        <!-- Footer -->
        <?php $this->load->view('frontend/footer'); ?>

        <!-- Javascript Files -->
        <?php $this->load->view('frontend/common-js'); ?>
        <!-- To Avoid Console Error -->
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.counterup.min.js"></script>
        <!-- To Avoid Console Error -->

        <!-- Portfolio -->
        <script async src="<?php echo base_url(); ?>asset/js/jquery.fancybox.js"></script>
        <script async src="<?php echo base_url(); ?>asset/js/mixitup.js"></script>
        <script async src="<?php echo base_url(); ?>asset/js/script.js"></script>
        <!-- Portfolio End -->
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
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-TTPGBC2');


            $(document).ready(function() {
                $(".accordion-single .header-area").on("click", function() {
                    var $accordionItem = $(this).closest(".accordion-single");
                    var $contentArea = $(this).next(".content-area");

                    if ($accordionItem.hasClass("active")) {
                        $accordionItem.removeClass("active");
                        $contentArea.slideUp();
                    } else {
                        $(".accordion-single").removeClass("active");
                        $accordionItem.addClass("active");
                        $(".content-area").not($contentArea).slideUp();
                        $contentArea.slideDown();
                    }
                });
            });




            // progress-multi-step

            const scrollingColumn = document.querySelector('.scrolling-column');
            const progressRing = document.querySelector('.progress');
            const stepText = document.querySelector('.step-text');
            const cards = document.querySelectorAll('.card');
            const totalCards = cards.length;

            scrollingColumn.addEventListener('scroll', () => {
                const scrollPercentage = scrollingColumn.scrollTop / (scrollingColumn.scrollHeight - scrollingColumn.clientHeight);
                const progress = Math.min(scrollPercentage * totalCards, totalCards - 0.01);
                const dashoffset = 565.48 - (progress * 565.48 / totalCards);

                progressRing.style.strokeDashoffset = dashoffset;

                const currentStep = Math.floor(progress) + 1;
                stepText.textContent = `Step ${currentStep}/${totalCards}`;
            });
        </script>
        <!-- End Google Tag Manager -->
    </div>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Cloudi5 Technologies Website Design Company",
            "url": "<?php echo base_url(); ?>website-design-company-in-coimbatore",
            "logo": "<?php echo base_url(); ?>asset/images/logo-cloudi5-technologies.png",
            "image": "<?php echo base_url(); ?>asset/images/wd-page/banner-img.png",
            "description": "Cloudi5 a leading Web design company in Coimbatore design websites with expertise that helps to elevate your business. Contact Us For More Information!",
            "telephone": "09787467575",
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 11.003531,
                "longitude": 76.947791
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "5",
                "bestRating": "5",
                "ratingCount": "20"
            },

            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Coimbatore",
                "addressRegion": "TN",
                "streetAddress": "MK SQURE, Sivanandapuram",
                "postalCode": "641036"
            },
            "openingHours": [
                "Mo-Sa 09:30 Am-08.00Pm"
            ]
        }
    </script>

</body>

</html>