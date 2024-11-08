<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php if ($meta) {
        echo $meta->title ? $meta->title : "Cloudi5 - Flutter App Development Company in Coimbatore";
    } else {
        echo "Cloudi5 - Flutter App Development Company in Coimbatore";
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
    <link rel="canonical" href="<?php echo base_url(); ?>flutter-app-development" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Flutter App Development Company in Coimbatore" />
    <meta property="og:description"
        content="Cloudi5 is the Leading Flutter app development company in Coimbatore, creating innovative mobile solutions. Get custom apps designed for your business needs." />
    <meta property="og:url" content="<?php echo base_url(); ?>flutter-app" />
    <?php $this->load->view('frontend/common-css'); ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/mob-app.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/flutter-app.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/web-dev.css">
    <?php $this->load->view('frontend/fb-pixel-code'); ?>
</head>

<body>
    <div class="body-inner flutter-app-development-page">
        <?php include 'header.php' ?>

        <div class="banner-area overlay about-banner resp-banner common-inner-banner" id="banner-area"
            alt="Web Development Company in Coimbatore" title="Flutter App Development">
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
                    <div class="col-md-12 text-center">
                        <div class="banner-tagline">
                            <span> <img src="<?php echo base_url(); ?>asset/images/web-development/star.png"
                                    alt="Convert into Mockups"> Crafting Digital Pathways to Your Business Goals</span>
                        </div>
                        <h2 class="title">Best <span>Flutter App Development</span></br>
                            Company in Coimbatore!</h2>
                        <h6 class="banner-quote">Think it, Flutter it! Build groundbreaking apps with Cloudi5,
                            Coimbatore's most innovative
                            Flutter team.</h6>
                    </div>
                </div>
            </div>
        </div>

        <section class="clients-logo pt-50 pb-50">
            <div class="container-fluid">
                <div class="client-logo-details">
                    <div class="clients-title">
                        <h6>Our Trusted Partner</h6>
                    </div>
                    <div class="marquee">
                        <div class="marquee-content">
                            <div class="marquee-item">
                                <img src="<?php echo base_url(); ?>asset/images/clients/blueway.jpg" alt="Client 1">
                            </div>
                            <div class="marquee-item">
                                <img src="<?php echo base_url(); ?>asset/images/clients/ecc.jpg" alt="Client 2">
                            </div>
                            <div class="marquee-item">
                                <img src="<?php echo base_url(); ?>asset/images/clients/healthsy.jpg" alt="Client 3">
                            </div>
                            <div class="marquee-item">
                                <img src="<?php echo base_url(); ?>asset/images/clients/xpert.jpg" alt="Client 4">
                            </div>
                            <div class="marquee-item">
                                <img src="<?php echo base_url(); ?>asset/images/clients/tryzone.jpg" alt="Client 5">
                            </div>
                            <!-- Duplicate items for seamless looping -->
                            <div class="marquee-item">
                                <img src="<?php echo base_url(); ?>asset/images/clients/blueway.jpg" alt="Client 1">
                            </div>
                            <div class="marquee-item">
                                <img src="<?php echo base_url(); ?>asset/images/clients/ecc.jpg" alt="Client 2">
                            </div>
                            <div class="marquee-item">
                                <img src="<?php echo base_url(); ?>asset/images/clients/healthsy.jpg" alt="Client 3">
                            </div>
                            <div class="marquee-item">
                                <img src="<?php echo base_url(); ?>asset/images/clients/xpert.jpg" alt="Client 4">
                            </div>
                            <div class="marquee-item">
                                <img src="<?php echo base_url(); ?>asset/images/clients/tryzone.jpg" alt="Client 5">
                            </div>
                        </div>
                    </div>
                    <div class="clients-title-2">
                        <h6>Almost 20+ Partner we have</h6>
                    </div>
                </div>
            </div>
        </section>

        <!-- flutter-intro-section-1-start  -->
        <section class="pt-80 pb-80 flutter-intro-section">
            <div class="row">
                <!-- <div class="img-wrapper">
                    <div class="shape-1">
                        <img src="<?php echo base_url(); ?>asset/images/web-development/tech/bg-pattern-sec-1.png"
                            alt="Convert into Mockups">
                    </div>
                    <div class="shape-2">
                        <img src="<?php echo base_url(); ?>asset/images/web-development/tech/shape-2.png"
                            alt="Convert into Mockups">
                    </div>
                </div> -->
                <div class="container d-flex section-intro">

                    <div class="col-md-7 p-0">
                        <div class="tagline">Need an app that's as smooth as a butterfly's wings?</div>
                        <div class="title">
                            <h3 class="common_h4">Best Flutter App Development Company in Coimbatore!</h3>
                        </div>
                        <div class="section-content">
                            <p class="title-content">
                                Flutter is the perfect framework for creating apps that are as smooth as a butterfly's
                                wings. With its fast rendering engine, Flutter ensures that your app's animations and
                                transitions are silky smooth, providing users with a delightful experience. Let Cloudi5
                                Technologies, <span>the leading Flutter app development
                                    company in Coimbatore</span>, transform your app idea into a beautiful and seamless
                                reality.
                                Our expert Flutter developers use the power of Flutter to build high-performance apps
                                that are both visually stunning and flawlessly functional. We're the Flutter experts in
                                Coimbatore, ready to turn your app vision into reality.
                            </p>
                            <div class="flutter-intro-contact-btn"><a href="javascript:void(0);" class="contact-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Flutter It Now!
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 section-content-image">
                        <div class="f-img-1">
                            <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/flutter.png"
                                alt="Flutter App Development">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- flutter-intro-section-1-end -->



        <section class="pt-80 pb-80 flutter-dev-process">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="title">Our Streamlined Flutter App Development Process</h2>
                    </div>
                    <div class="col-lg-7 flutter-service-intro d-flex">
                        <div class="col-lg-8">
                            <p class="content">Cloudi5, a top Flutter app development company in Coimbatore, is proud of
                                our simple, efficient process. We guide you from planning to testing, delivering
                                high-quality, user-friendly apps that exceed expectations.</p>
                        </div>
                        <div class="col-lg-4 text-right btn-col">
                            <div class="flutter-services-contact-btn"><a href="javascript:void(0);" class="contact-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Flutter It Now!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-80 pb-30 align-items-center flutter-service-card-box">
                    <div class="col-lg-4 p-0">
                        <div class="col-lg-12 mb-25">
                            <div class="service-card-box">
                                <div class="service-icon">
                                    <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/maintenance.png"
                                        alt="Flutter App Development">
                                </div>

                                <div class="service-title">
                                    <h4>Requirement Gathering</h4>
                                </div> <span class="service-num">
                                    <h1>01</h1>
                                </span>
                                <div class="service-content">
                                    <p>We thoroughly explore to understand your app's purpose, target audience, and
                                        business
                                        goals, ensuring strategic alignment and market relevance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 deploy-tab">
                            <div class="service-card-box">
                                <div class="service-icon">
                                    <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/deployment.png"
                                        alt="Flutter App Development">
                                </div>
                                <div class="service-title">
                                    <h4>Deployment & Optimization</h4>
                                </div>
                                <span class="service-num">
                                    <h1>04</h1>
                                </span>
                                <div class="service-content">
                                    <p>We ensure a seamless app store launch with optimized listings for
                                        discoverability,
                                        maximizing your app's reach to potential users.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0">
                        <div class="col-lg-12 col-mid">
                            <div class="service-card-box">
                                <div class="service-icon">
                                    <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/prototype.png"
                                        alt="Flutter App Development">
                                </div>
                                <div class="service-title">
                                    <h4>Design & Prototyping</h4>
                                </div>
                                <span class="service-num">
                                    <h1>02</h1>
                                </span>
                                <div class="service-content">
                                    <p>Our UI/UX experts create user journeys and information architecture, followed by
                                        wireframes and mockups for early feedback and a user-centric design foundation.
                                    </p>
                                    <div class="service-content-img">
                                        <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/design-prototype.png"
                                            alt="Flutter App Development">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0">
                        <div class="col-lg-12 mb-25">
                            <div class="service-card-box">
                                <div class="service-icon">
                                    <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/development.png"
                                        alt="Flutter App Development">
                                </div>
                                <div class="service-title">
                                    <h4>Development</h4>
                                </div>
                                <span class="service-num">
                                    <h1>03</h1>
                                </span>
                                <div class="service-content">
                                    <p>Our skilled Flutter developers turn designs into high-performing apps, using
                                        agile
                                        methods for continuous feedback integration and clean, maintainable code.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 deploy-tab-view">
                            <div class="service-card-box">
                                <div class="service-icon">
                                    <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/deployment.png"
                                        alt="Flutter App Development">
                                </div>
                                <div class="service-title">
                                    <h4>Deployment & Optimization</h4>
                                </div>
                                <span class="service-num">
                                    <h1>04</h1>
                                </span>
                                <div class="service-content">
                                    <p>We ensure a seamless app store launch with optimized listings for
                                        discoverability,
                                        maximizing your app's reach to potential users.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="service-card-box">
                                <div class="service-icon">
                                    <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/support.png"
                                        alt="Flutter App Development">
                                </div>
                                <div class="service-title">
                                    <h4>Support & Maintenance</h4>
                                </div>
                                <span class="service-num">
                                    <h1>05</h1>
                                </span>
                                <div class="service-content">
                                    <p>Our dedication continues after launch with comprehensive plans for addressing
                                        issues,
                                        fixing bugs, and implementing security updates for a successful app.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- 
        flutter-services-start -->
        <section class="pt-80 pb-80 flutter-services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="title">Cloudi5’s Flutter App Development Services</h2>
                    </div>
                    <div class="col-lg-7 flutter-service-intro d-flex">
                        <div class="col-lg-8">
                            <p class="content">Need a stunning app for iOS and Android, but on a tight timeline and
                                budget?
                                Flutter is the
                                answer, and Cloudi5 is your expert. We develop custom apps using a single codebase,
                                saving
                                you time and money. Our passionate developers deliver exceptional UI/UX, integrate APIs
                                seamlessly, and ensure flawless performance. Let's turn your vision into a reality with
                                the
                                power of Flutter.</p>
                        </div>
                        <div class="col-lg-4 text-right btn-col">
                            <div class="flutter-services-contact-btn"><a href="javascript:void(0);" class="contact-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Flutter It Now!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-80 pb-30 service-row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card-box">
                            <div class="service-icon">
                                <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/custom-app.png"
                                    alt="Flutter App Development">
                            </div>
                            <div class="service-title">
                                <h4>Custom App Development</h4>
                            </div>
                            <div class="service-content">
                                <p>Our skilled developers transform your vision into a feature-rich, custom Flutter app
                                    that aligns with your unique business goals and target audience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card-box">
                            <div class="service-icon">
                                <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/cross-platform.png"
                                    alt="Flutter App Development">
                            </div>
                            <div class="service-title">
                                <h4>Cross-Platform Development</h4>
                            </div>
                            <div class="service-content">
                                <p>Utilize Flutter's single codebase to build beautiful, native apps for iOS and
                                    Android, expanding your market reach and reducing development time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 consulting-mid">
                        <div class="service-card-box">
                            <div class="service-icon">
                                <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/consulting-service.png"
                                    alt="Flutter App Development">
                            </div>
                            <div class="service-title">
                                <h4>Flutter Consulting Services</h4>
                            </div>
                            <div class="service-content">
                                <p>Our seasoned consultants provide strategic advice, handle technical complexities, and
                                    ensure your app is built for success, from exploration to launch.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-40 service-row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card-box">
                            <div class="service-icon">
                                <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/enterprise.png"
                                    alt="Flutter App Development">
                            </div>
                            <div class="service-title">
                                <h4>Flutter Enterprise App Development</h4>
                            </div>
                            <div class="service-content">
                                <p>Develop robust enterprise apps with seamless integration to existing systems,
                                    ensuring secure, high-performing mobile solutions for your organization.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card-box">
                            <div class="service-icon">
                                <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/upgrading.png"
                                    alt="Flutter App Development">
                            </div>
                            <div class="service-title">
                                <h4>Flutter App Upgrade & Migration</h4>
                            </div>
                            <div class="service-content">
                                <p>Breathe new life into it with a Flutter upgrade or migrate smoothly from another
                                    framework, ensuring a sustainable mobile presence.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="service-card-box maintenance-last">
                            <div class="service-icon">
                                <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/flutter-maintenance.png"
                                    alt="Flutter App Development">
                            </div>
                            <div class="service-title">
                                <h4>App Maintenance and Support</h4>
                            </div>
                            <div class="service-content">
                                <p>We offer ongoing maintenance and support plans to keep your app running
                                    flawlessly,
                                    addressing bugs, and implementing essential security updates.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 
        <section class="goto-app-flutter pt-60 pb-60" id="main-container">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/hire-flutter-app-developers.webp"
                            class="app-side-img" alt="Android Application Development Services | Cloudi5" width="100%">
                    </div>
                    <div class="col-sm-7">
                        <h3 class="common_h4">Meet Your <span class="grad-text">Go-To App Developers</span> in
                            Coimbatore</span>
                        </h3>
                        <p> At Cloudi5 Technologies, we’re your skilled <span class="grad-text">app developers in
                                Coimbatore</span>, ready to pilot
                            your app dreams into the digital sky! Just like a pilot carefully navigates their aircraft
                            through the clouds, our talented team expertly builds custom mobile apps that align with
                            your unique goals. Whether you’re looking for a sleek Android app, a stunning iOS app, or a
                            flexible cross-platform solution, we’re in the cockpit with you every step of the way.</p>
                        <p>With a blend of innovative ideas and the latest technology, we ensure your app not only soars
                            high but also lands smoothly in the hands of your users. Let’s team up and take your
                            business to new heights in the digital world!.</p>
                    </div>
                </div>
            </div>
        </section> -->
        <!--<div class="row services-section-wrapper">-->
        <!--    <div class="col-md-5 col-md-offset-1 col-md-push-6 services-section-text">-->
        <!--        <h2 class="text-left service-section-heading service-section-heading-h2">Our Turnkey <span class="grad-text">Android App Development</span></h2>-->
        <!--        <p class="text-left service-section-description">Cloudi5 Technologies possess the right technology and workforce to provide successful and user-friendly mobile applications that your business needs to capture the expansive online audience. With our rich experience and expertise in the field, we help you build Android Apps that deliver information with an element of creativity and innovativeness.</p>-->
        <!--        <p>We are experts in bringing you the highly responsive, device compatible, personalized and interactive Android application. Taking into account even the minute details, we bring your app to launch phase by an in-depth understanding of your requirements and the current market trend to materialize your vision.</p>-->
        <!--        <div class="z-clear"></div>-->
        <!--    </div>-->
        <!--    <div class="col-md-6 services-image col-md-pull-6"><img src="<?php echo base_url(); ?>asset/images/android-application-development-services-cloudi5.png" class="app-side-img" alt="Android Application Development Services | Cloudi5" width="100%"></div>-->
        <!--    <div class="z-clear"></div>-->
        <!--</div>-->


        <!-- <section class="process-mobile">
            <div class="container">
                <div class="row step-row">
                    <div class="col-lg-12">
                        <div class="col-md-4 right-fix">
                            <div class="timeline-container">
                                <div class="stepper-item active" data-step="1">
                                    <div class="step-counter">1</div>
                                    <div class="step-name">Discussion of the idea</div>
                                    <div class="step-line"></div>
                                </div>

                                <div class="stepper-item" data-step="2">
                                    <div class="step-counter">2</div>
                                    <div class="step-name">Estimation</div>
                                    <div class="step-line"></div>
                                </div>

                                <div class="stepper-item" data-step="3">
                                    <div class="step-counter">3</div>
                                    <div class="step-name">Proposal</div>
                                    <div class="step-line"></div>
                                </div>

                                <div class="stepper-item" data-step="4">
                                    <div class="step-counter">4</div>
                                    <div class="step-name">Development</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 left-scroll">
                            <div class="content-container">
                                <div id="step1" class="content-card active" data-step="1">
                                    <div class="card">
                                        <div class="card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                            </svg>
                                        </div>
                                        <h3 class="card-title">Discussion of the idea</h3>
                                        <p class="card-text">
                                            The idea stage is a crucial step in any agile development project.
                                            We use this phase to understand your vision, requirements, and objectives.
                                            Our team of experts will help refine your concept and ensure it aligns with
                                            current market needs and technical feasibility.
                                        </p>
                                    </div>
                                </div>

                                <div id="step2" class="content-card" data-step="2">
                                    <div class="card">
                                        <div class="card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <h3 class="card-title">Estimation</h3>
                                        <p class="card-text">
                                            Our estimation process involves detailed analysis of project 
                                            s,
                                            resource allocation, and timeline planning. We break down the project into
                                            manageable sprints and provide accurate time and cost estimates based on
                                            our extensive experience.
                                        </p>
                                    </div>
                                </div>

                                <div id="step3" class="content-card" data-step="3">
                                    <div class="card">
                                        <div class="card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                        <h3 class="card-title">Proposal</h3>
                                        <p class="card-text">
                                            Based on our discussions and estimations, we create a comprehensive project
                                            proposal. This document outlines the project scope, deliverables, timeline,
                                            cost breakdown, and technical specifications. It serves as a roadmap for
                                            the entire development process.
                                        </p>
                                    </div>
                                </div>

                                <div id="step4" class="content-card" data-step="4">
                                    <div class="card">
                                        <div class="card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                            </svg>
                                        </div>
                                        <h3 class="card-title">Development</h3>
                                        <p class="card-text">
                                            The development phase is where your project comes to life. Our agile
                                            methodology ensures regular updates and iterations, allowing for feedback
                                            and adjustments throughout the process. We maintain transparency and
                                            quality at every step.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="flutter-better-apps pt-40 pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="background-flutter">
                        <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/better-app.svg"
                            alt="spark">
                    </div>
                    <div class="col-md-12 col-lg-8 pb-60 title-better">
                        <div class="tagline">
                            Building Better Apps Faster
                        </div>
                        <h2 class="section-title-wd mb-0 text-center">The Benefits of <span
                                class="grad-text">Flutter</span>
                            Development</h2>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <p>Flutter helps you make great mobile apps, and Cloudi5 knows how to use it best. We'll help
                            you get your app out faster, make it look great, and save you money. Let Cloudi5 help you
                            build your dream app.</p>
                        <ul>
                            <li> <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/spark.svg"
                                    alt="spark">Fast Development & Hot Reload</li>
                            <li><img src="<?php echo base_url(); ?>asset/images/flutter-app-development/codebase.svg"
                                    alt="codebase">Single Codebase for All Platforms</li>
                            <li><img src="<?php echo base_url(); ?>asset/images/flutter-app-development/palette.svg"
                                    alt="palette">Expressive UI & Rich Ecosystem</li>
                            <li><img src="<?php echo base_url(); ?>asset/images/flutter-app-development/money.svg"
                                    alt="money">Cost-Effective Development</li>

                            <li><img src="<?php echo base_url(); ?>asset/images/flutter-app-development/laptop.svg"
                                    alt="laptop">High Developer Productivity</li>
                            <li><img src="<?php echo base_url(); ?>asset/images/flutter-app-development/ui.svg"
                                    alt="palette">Native Performance & Consistent UX</li>
                            <li><img src="<?php echo base_url(); ?>asset/images/flutter-app-development/arrow.svg"
                                    alt="arrow">Cross-Platform Future</li>
                            <li><img src="<?php echo base_url(); ?>asset/images/flutter-app-development/globe.svg"
                                    alt="globe">Open-Source & Scalable</li>

                        </ul>
                    </div>
                    <div class="col-md-none col-lg-4">
                        <div class="flutter-better-img-left">
                            <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/flutter-better.png"
                                alt="Flutter in Laptop">
                        </div>
                        <div class="flutter-better-icon-left">
                            <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/flutter-icon.png"
                                alt="Flutter icon">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="flutter-team pt-60 pb-60">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <!-- <div class="background-flutter">
                        <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/pat.png" alt="spark">
                    </div> -->
                    <div class="col-md-12 col-lg-10">
                        <h2 class="section-title-wd mb-0 text-center">Hire Cloudi5's <span class="grad-text">Elite
                                Flutter</span> Development Team</h2>
                    </div>
                    <div class="col-md-6">
                        <div class="tagline">
                            Building Better Apps Faster
                        </div>
                        <p>Your mobile app deserves the best, and Cloudi5 has it! We have a team of award-winning
                            Flutter developers in Coimbatore who are passionate about creating amazing apps. They're not
                            just coding superstars – they're also strategic thinkers who will work with you to
                            understand your app's goals and who it's for. This teamwork ensures your app looks great and
                            keeps users coming back for more.</p>
                        <p> Trust Cloudi5 for your Flutter app development needs and
                            experience the difference our talented team can make.</p>
                        <a href="javascript:void(0);" class="contact-btn m-0">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Talk to Our Experts!
                        </a>
                    </div>
                    <div class="col-md-6 flutter-person-img-col">
                        <div class="flutter-person-img">
                            <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/hire-flutter.png"
                                alt="hire-flutter">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="flutter-tech services-section pt-60 pb-60">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-10 flutter-tech-content">
                        <h2 class="section-title-wd text-center">Why Choose
                            <span class="text-gradient">Cloudi5 Technologies</span> for Your Flutter App?
                        </h2>
                        <p class="f-tech-description">Need a standout app but confused about who to build it with?
                            Cloudi5 Technologies,
                            Coimbatore's Flutter experts, are here for you! Here's why we're your perfect partner:</p>
                    </div>
                    <div class="row service-flutter-tech">
                        <div class="col-lg-4 mt-90 odr-2">
                            <div class="service-list">
                                <div class="service-item" data-section="02" id="service-item-2">
                                    <h2 class="service-title">
                                        <span class="number">02.</span>
                                        Fast & Cost-Effective
                                    </h2>
                                    <p class="service-description">
                                        Flutter's magic of one codebase for all platforms saves you big! We build apps
                                        faster, saving you both time and money.
                                    </p>
                                </div>
                                <div class="service-item" data-section="03" id="service-item-3">
                                    <h2 class="service-title">
                                        <span class="number">03.</span>
                                        User-Friendly Flutter Apps
                                    </h2>
                                    <p class="service-description">
                                        We make beautiful, easy-to-use apps with Flutter! Smooth animations make them
                                        fun to
                                        use, keeping people happy and coming back for more.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 odr-1">
                            <div class="services-list">
                                <!-- Service 1 -->
                                <div class="service-item active" data-section="01">
                                    <h2 class="service-title">
                                        <span class="number">01.</span>
                                        Flutter Masters
                                    </h2>
                                    <p class="service-description">
                                        Our team loves and breathes Flutter! They're highly skilled app builders who
                                        constantly push the limits of this amazing technology.
                                    </p>
                                </div>
                            </div>

                            <div class="image-container">
                                <div class="image-wrapper">
                                    <!-- Images -->
                                    <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/flutter-master.png"
                                        alt="master" class="main-image active" data-section="01">
                                    <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/cost-effective.png"
                                        alt="cost-effective" class="main-image" data-section="02">
                                    <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/user-friendly.png"
                                        alt="user-friendly" class="main-image" data-section="03">
                                    <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/quality.png"
                                        alt="quality" class="main-image" data-section="04">
                                    <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/vision.png"
                                        alt="vision" class="main-image" data-section="05">

                                    <!-- Orange Accent Bars -->
                                    <!-- <div class="accent-bar top"></div> -->
                                    <!-- <div class="accent-bar bottom"></div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-90 odr-3">
                            <div class="service-list">
                                <div class="service-item" data-section="04" id="service-item-4">
                                    <h2 class="service-title">
                                        <span class="number">04.</span>
                                        Quality You Can Trust
                                    </h2>
                                    <p class="service-description">
                                        We take quality seriously. Rigorous testing ensures your app is bug-free and
                                        runs
                                        smoothly. Your satisfaction is our priority, so expect an app you'll be proud
                                        of.
                                    </p>
                                </div>

                                <div class="service-item" data-section="05" id="service-item-5">
                                    <h2 class="service-title">
                                        <span class="number">05.</span>
                                        Your Vision, Our Expertise
                                    </h2>
                                    <p class="service-description">
                                        We collaborate closely, keeping you informed throughout development while
                                        providing
                                        ongoing support to ensure your app's success

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <div class="image-container">
                            <div class="image-wrapper">
                                                     <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/flutter-master.png"
                                    alt="spark" class="main-image active" data-section="01">
                                <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/cost-effective.png"
                                    alt="spark" class="main-image" data-section="02">
                                <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/user-friendly.png"
                                    alt="spark" class="main-image" data-section="03">
                                <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/user-friendly.png"
                                    alt="spark" class="main-image" data-section="04">
                                <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/user-friendly.png"
                                    alt="spark" class="main-image" data-section="05">

                            </div>
                        </div>
                    </div> -->

                    <!-- Content Column -->
                    <!-- <div class="col-lg-6">
                        <div class="services-list">
                       
                            <div class="service-item active" data-section="01">
                                <h2 class="service-title">
                                    <span class="number">01.</span>
                                    Flutter Masters
                                </h2>
                                <p class="service-description">
                                    Our team loves and breathes Flutter! They're highly skilled app builders who
                                    constantly push the limits of this amazing technology.
                                </p>
                            </div>

                
                            <div class="service-item" data-section="02">
                                <h2 class="service-title">
                                    <span class="number">02.</span>
                                    Fast & Cost-Effective
                                </h2>
                                <p class="service-description">
                                    Flutter's magic of one codebase for all platforms saves you big! We build apps
                                    faster, saving you both time and money.
                                </p>
                            </div>

                  
                            <div class="service-item" data-section="03">
                                <h2 class="service-title">
                                    <span class="number">03.</span>
                                    User-Friendly Flutter Apps
                                </h2>
                                <p class="service-description">
                                    We make beautiful, easy-to-use apps with Flutter! Smooth animations make them fun to
                                    use, keeping people happy and coming back for more.
                                </p>
                            </div>

                         
                            <div class="service-item" data-section="04">
                                <h2 class="service-title">
                                    <span class="number">04.</span>
                                    Quality You Can Trust
                                </h2>
                                <p class="service-description">
                                    We take quality seriously. Rigorous testing ensures your app is bug-free and runs
                                    smoothly. Your satisfaction is our priority, so expect an app you'll be proud of.
                                </p>
                            </div>

                            <div class="service-item" data-section="05">
                                <h2 class="service-title">
                                    <span class="number">05.</span>
                                    Your Vision, Our Expertise
                                </h2>
                                <p class="service-description">
                                    We collaborate closely, keeping you informed throughout development while providing
                                    ongoing support to ensure your app's success

                                </p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

        </section>


        <!-- faq start -->
        <section class="faq-section-wd pt-60 pb-60">
            <div class="faq-section container">
                <div class="row faq-tab">
                    <div class="col-lg-4 col-md-10">
                        <div class="faq-header">
                            <p><span class="tagline">FAQ</span></p>
                            <h2 class="section-title-wd">
                                Everything You Need to Know!
                            </h2>
                            <p class="faq-description">The future is Flutter-ing bright Don't Miss Out!
                                <br />Are you ready?
                            </p>
                            <a href="javascript:void(0);" class="contact-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Join the Revolution!
                            </a>
                        </div>
                    </div>

                    <div class="col-md-11 col-lg-8">
                        <div class="accordion" id="faqAccordion">
                            <!-- FAQ Item 1 -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            1. How much does it cost to develop a Flutter app with Cloudi5?
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#faqAccordion">
                                    <div class="card-body">
                                        The cost of your app development project will depend on factors like features,
                                        complexity, and timeline. We offer free consultations to discuss your project
                                        and provide a custom quote.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 2 -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            2. How long does it typically take to develop a Flutter app?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Development timelines vary depending on the app's complexity. However, Flutter's
                                        features like hot reload can significantly accelerate development compared to
                                        traditional methods.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 3 -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            3. Can you help me develop apps for both iOS and Android using Flutter?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Absolutely! Flutter's single codebase approach allows us to build beautiful,
                                        native-looking apps for both platforms efficiently, saving you time and
                                        resources compared to developing separate apps for each platform.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            4. Do I need to have a detailed app idea before contacting Cloudi5?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#faqAccordion">
                                    <div class="card-body">
                                        No worries! We can help you brainstorm concepts, define your target
                                        audience, and refine your app idea during our initial consultation.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            5. Is Flutter a secure framework for app development?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Yes, Flutter prioritizes security. It uses Google's strong security features
                                        and offers tools to help developers build secure apps. Our experienced
                                        developers follow best practices to ensure your app is well-protected.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq end -->

        <!--Testimonial-->
        <!-- web-dev cta -->
        <section class="wd-section flutter-section-cta">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="shape-wrapper">
                        <div class="shape-cta-1">
                            <img src="<?php echo base_url(); ?>asset/images/web-development/shape-1.png"
                                alt="Shape-Dot">
                        </div>
                        <div class="shape-cta-2">
                            <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/cta-flutter-pattern.svg"
                                alt="Shape-Dot">
                        </div>
                        <!-- <div class="shape-cta-3">
                        <img src="<?php echo base_url(); ?>asset/images/flutter-app-development/doodle-corner.webp"
                            alt="doodle">
                    </div> -->
                    </div>
                    <div class="col-md-10">
                        <div class="cta-content cta-content-overlay">
                            <h3>
                                From concept to code, let's Flutter your app idea into reality. Start your journey with
                                us!
                            </h3>
                            <a href="javascript:void(0);" class="contact-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Start the Journey!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer start-->
        <?php include 'footer.php' ?>
        <!-- initialize jQuery Library-->
        <?php $this->load->view('frontend/common-js'); ?>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/owl.carousel.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.card').click(function (e) {
                    // Prevent default behavior only if clicking on card but not on the collapse itself
                    if (!$(e.target).hasClass('collapse') && !$(e.target).parents('.collapse').length) {
                        e.preventDefault();

                        // Find the collapse element within this card
                        const collapseElement = $(this).find('.collapse');

                        // Find the button within this card
                        const button = $(this).find('.card-header button');

                        // Toggle the collapse
                        collapseElement.collapse('toggle');

                        // Toggle aria-expanded
                        button.attr('aria-expanded', button.attr('aria-expanded') === 'true' ? 'false' : 'true');
                    }
                });

                $('.collapse').on('show.bs.collapse', function () {
                    $(this).prev('.card-header').addClass('active');
                }).on('hide.bs.collapse', function () {
                    $(this).prev('.card-header').removeClass('active');
                });
                $(document).ready(function () {
                    $('.card').click(function (e) {
                        if (!$(e.target).hasClass('collapse') && !$(e.target).parents('.collapse').length) {
                            e.preventDefault();
                            const collapseElement = $(this).find('.collapse');
                            const button = $(this).find('.card-header button');
                            collapseElement.collapse('toggle');
                            button.attr('aria-expanded', button.attr('aria-expanded') === 'true' ? 'false' : 'true');
                        }
                    });

                    $('.collapse')
                        .on('show.bs.collapse', function () {
                            $(this).prev('.card-header').addClass('active');
                            $(this).css('height', 'auto');
                        })
                        .on('hide.bs.collapse', function () {
                            $(this).prev('.card-header').removeClass('active');
                        })
                        .on('shown.bs.collapse', function () {
                            $(this).css('height', 'auto');
                        });
                    $('<style>')
                        .prop('type', 'text/css')
                        .html(`
            .card-header button.btn-link {
                white-space: normal !important;
                text-align: left;
                height: auto !important;
                padding: 15px;
                line-height: 1.5;
            }
            .collapse.show {
                height: auto !important;
                max-height: none !important;
            }
        `)
                        .appendTo('head');
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const serviceItems = document.querySelectorAll('.service-item');
                const images = document.querySelectorAll('.main-image');

                // Function to activate image and service item
                function activate(section) {
                    // Update images
                    images.forEach(img => {
                        if (img.dataset.section === section) {
                            img.classList.add('active');
                        } else {
                            img.classList.remove('active');
                        }
                    });

                    // Update service items
                    serviceItems.forEach(item => {
                        if (item.dataset.section === section) {
                            item.classList.add('active');
                        } else {
                            item.classList.remove('active');
                        }
                    });
                }

                // Add hover events to service items
                serviceItems.forEach(item => {
                    item.addEventListener('mouseenter', () => {
                        activate(item.dataset.section);
                    });
                });

                // Set initial active state
                activate('01');
            });
        </script>
    </div>
</body>

</html>