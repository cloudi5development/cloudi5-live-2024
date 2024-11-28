<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php if ($meta) {
        echo $meta->title ? $meta->title : "Cloudi5- Clients Logo";
    } else {
        echo "Cloudi5- Clients Logo";
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
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/clients-logo.css">
    <?php $this->load->view('frontend/fb-pixel-code'); ?>
</head>

<body>
    <div class="body-inner flutter-app-development-page">
        <?php include 'header.php' ?>

        <!-- <div class="banner-area overlay about-banner resp-banner common-inner-banner" id="banner-area"
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
                            <span>
                                <img src="<?php echo base_url(); ?>asset/images/web-development/star.png"
                                    alt="Client Showcase">
                                Showcasing Our Esteemed Clients
                            </span>
                        </div>
                        <h2 class="title">Our <span>Valued Clients</span></br>
                            Building Success Together with Cloudi5!
                        </h2>

                        <h6 class="banner-quote">Explore the brands we’ve collaborated with to build success stories,
                            one logo at a time.</h6>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <section class="client-logo-intro-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 intro-content">
                        <div class="intro-details">
                            <h2 class="title">Innovative Solutions for Modern Challenges</h2>
                            <p class="desc">We are a dynamic team of experts dedicated to delivering cutting-edge
                                solutions that
                                transform businesses. Our approach combines creativity, technology, and strategic
                                thinking to solve complex problems and drive meaningful results.</p>
                            <p class="desc">With years of experience across multiple industries, we pride ourselves on
                                our ability to
                                understand unique business needs and provide tailored, innovative solutions.</p>

                            <div class="flutter-intro-contact-btn"><a href="<?php echo base_url(); ?>contactus"
                                    class="contact-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Learn More About Us
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 intro-image">
                        <img src="<?php echo base_url(); ?>asset/images/clientele/intro-img.png" alt="Company Introduction" class="img-fluid">
                    </div>
                </div>
            </div>
        </section> -->


        <section class="client-logos-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 title">
                        <h2>Our happy Customers</h2>
                        <p>We've been fortunate to work with these incredible organizations</p>
                    </div>
                </div>

                <div class="client-logos-container">
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/mayflower.png" alt="Client Logo 1"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/baps.png" alt="Client Logo 2"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/stanes.png" alt="Client Logo 3"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/metro.png" alt="Client Logo 4"
                                class="img-fluid">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/massiva.png" alt="Client Logo 5"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/madhampatty.png"
                                alt="Client Logo 6" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/hookz.png" alt="Client Logo 1"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/susin.png" alt="Client Logo 2"
                                class="img-fluid">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/ecom365.png" alt="Client Logo 3"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/falcon.png" alt="Client Logo 4"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/vencar.png" alt="Client Logo 5"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/maloos.png" alt="Client Logo 6"
                                class="img-fluid">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/tranzmoney.png"
                                alt="Client Logo 1" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/blueway.png" alt="Client Logo 2"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/cognex.png" alt="Client Logo 3"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/ecconcept.png" alt="Client Logo 4"
                                class="img-fluid">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/famshops.png" alt="Client Logo 5"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/hydroz.png" alt="Client Logo 6"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/incredible.png"
                                alt="Client Logo 1" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/krishya.png" alt="Client Logo 2"
                                class="img-fluid">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/expert-automation.png"
                                alt="Client Logo 3" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/morden-machines.png"
                                alt="Client Logo 4" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/regulus.png" alt="Client Logo 5"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/rock-realty.png"
                                alt="Client Logo 6" class="img-fluid">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/skilledia.png" alt="Client Logo 1"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/sourzer.png" alt="Client Logo 2"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/sr-ghee.png" alt="Client Logo 3"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/strerioniks.png"
                                alt="Client Logo 4" class="img-fluid">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/svhv-school.png"
                                alt="Client Logo 5" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/talks-india.png"
                                alt="Client Logo 6" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/tra-jewel.png" alt="Client Logo 1"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/tryzon.png" alt="Client Logo 2"
                                class="img-fluid">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/vasool-line.png"
                                alt="Client Logo 3" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/veda-networks.png"
                                alt="Client Logo 4" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/vishaha.png" alt="Client Logo 5"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/xelentaa.png" alt="Client Logo 6"
                                class="img-fluid">
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- Footer start-->
        <?php include 'footer.php' ?>
        <!-- initialize jQuery Library-->
        <?php $this->load->view('frontend/common-js'); ?>

    </div>
</body>

</html>