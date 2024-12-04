<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php if ($meta) {
            echo $meta->title ? $meta->title : "Cloudi5 - Portfolio | Coimbatore";
        } else {
            echo "Cloudi5 - Portfolio | Coimbatore";
        } ?>
    </title>
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
    <link rel="canonical" href="<?php echo base_url('portfolio'); ?>" />
    <?php $this->load->view('frontend/common-css'); ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/portfolio-new.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/jquery.fancybox.min.css">
    <?php $this->load->view('frontend/fb-pixel-code'); ?>
</head>
<!-- Icon font-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/icon-font.css">

<body id="cont1">

    <?php include('header.php'); ?>

    <section class="portfolio-new-section">
        <div class="container">
            <div class="row justify-center">
                <div class="col-lg-12 text-center">
                    <h2 class="portfolio-title">
                        We deliver a diverse array of
                        <span class="animated-text">high-quality products</span>
                    </h2>
                    <p class="portfolio-desc">Here are some of our standout creations</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 text-center portfolio-filters">
                    <button class="btn filter-btn active" data-filter="all">All</button>
                    <button class="btn filter-btn" data-filter="web-design">Web Design</button>
                    <button class="btn filter-btn" data-filter="web-development">Web Development</button>
                    <button class="btn filter-btn" data-filter="mobile-app">Mobile App</button>
                    <button class="btn filter-btn" data-filter="digital-marketing">Digital Marketing</button>
                </div>
            </div>
            <div class="row" id="portfolio-grid">
                <div class="col-md-6" data-categories="web-design">
                    <a href="<?php echo base_url(); ?>portfolio-new-details">
                        <div class="portfolio-card-container">
                            <div class="client-logo">
                                <img src="<?php echo base_url(); ?>asset/images/portfolio-new/mayflower-logo.png"
                                    class="client-logo-img" alt="Clients-Logo">
                            </div>
                            <div class="client-img">
                                <img src="<?php echo base_url(); ?>asset/images/portfolio-new/mayflower-bg-img.png"
                                    class="portfolio-img" alt="Portfolio-Img">
                                <div class="tag-details">
                                    <a href="javascript:void(0);">Custom Software</a>
                                    <a href="javascript:void(0);">eCommerce</a>
                                    <a href="javascript:void(0);">Mobile App</a>
                                    <a href="javascript:void(0);">Tech Capabilities</a>
                                </div>
                            </div>
                            <a href="javascript:void(0);">
                                <h4 class="title">Delivering Exceptional Apartments & Villas with Unparalleled Quality
                                    in
                                    Coimbatore</h4>
                            </a>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mt-lg-80 mt-sm-0" data-categories="web-development">
                    <div class="portfolio-card-container">
                        <a href="javascript:void(0);">
                            <div class="client-logo">
                                <img src="<?php echo base_url(); ?>asset/images/portfolio-new/susin-logo.png"
                                    class="client-logo-img" alt="Clients-Logo">
                            </div>
                            <div class="client-img">
                                <img src="<?php echo base_url(); ?>asset/images/portfolio-new/susin-bg.png"
                                    class="portfolio-img" alt="Portfolio-Img">
                                <div class="tag-details">
                                    <a href="javascript:void(0);">Custom Software</a>
                                    <a href="javascript:void(0);">eCommerce</a>
                                    <a href="javascript:void(0);">Mobile App</a>
                                    <a href="javascript:void(0);">Tech Capabilities</a>
                                </div>
                            </div>
                            <a href="javascript:void(0);">
                                <h4 class="title">Empowering India’s Automation with Fully Manufactured Pneumatic
                                    Actuators
                                    by Susin I-Tork</h4>
                            </a>
                        </a>
                    </div>
                </div>
                <div class="col-md-6" data-categories="mobile-app">
                    <div class="portfolio-card-container">
                        <a href="javascript:void(0);">
                            <div class="client-logo">
                                <img src="<?php echo base_url(); ?>asset/images/portfolio-new/mayflower-logo.png"
                                    class="client-logo-img" alt="Clients-Logo">
                            </div>
                            <div class="client-img">
                                <img src="<?php echo base_url(); ?>asset/images/portfolio-new/mayflower-bg-img.png"
                                    class="portfolio-img" alt="Portfolio-Img">
                                <div class="tag-details">
                                    <a href="javascript:void(0);">Custom Software</a>
                                    <a href="javascript:void(0);">eCommerce</a>
                                    <a href="javascript:void(0);">Mobile App</a>
                                    <a href="javascript:void(0);">Tech Capabilities</a>
                                </div>
                            </div>
                            <a href="javascript:void(0);">
                                <h4 class="title">Delivering Exceptional Apartments & Villas with Unparalleled Quality
                                    in
                                    Coimbatore</h4>
                            </a>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 mt-lg-80 mt-sm-0" data-categories="web-design">
                    <div class="portfolio-card-container">
                        <a href="javascript:void(0);">
                            <div class="client-logo">
                                <img src="<?php echo base_url(); ?>asset/images/portfolio-new/susin-logo.png"
                                    class="client-logo-img" alt="Clients-Logo">
                            </div>
                            <div class="client-img">
                                <img src="<?php echo base_url(); ?>asset/images/portfolio-new/susin-bg.png"
                                    class="portfolio-img" alt="Portfolio-Img">
                                <div class="tag-details">
                                    <a href="javascript:void(0);">Custom Software</a>
                                    <a href="javascript:void(0);">eCommerce</a>
                                    <a href="javascript:void(0);">Mobile App</a>
                                    <a href="javascript:void(0);">Tech Capabilities</a>
                                </div>
                            </div>
                            <a href="javascript:void(0);">
                                <h4 class="title">Empowering India’s Automation with Fully Manufactured Pneumatic
                                    Actuators
                                    by Susin I-Tork</h4>
                            </a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>

    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/jquery.fancybox.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/mixitup.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/script.js"></script>

</body>

</html>