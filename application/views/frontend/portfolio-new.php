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
    <!-- <div class="banner-area about-banner resp-banner" id="banner-area" alt="Portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="banner-heading">
                        <h1 class="banner-title2">Portfolio</h1>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li>Portfolio</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Portfolio -->
    <!-- <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <section class="projects-page-section">
                        <div class="auto-container">
                            <div class="mixitup-gallery">
                                <div class="filters clearfix">
                                    <ul class="filter-tabs filter-btns text-center clearfix">
                                        <li class="filter active" data-role="button" data-filter="all">All</li>
                                        <?php foreach ($category as $res_category) { ?>
                                            <li class="filter" data-role="button" data-filter=".<?php echo strtolower(str_replace(' ', '_', $res_category->title)); ?>">
                                                <?php echo ucwords($res_category->title); ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="filter-list row clearfix" id="MixItUpC72ED9">
                                    <?php foreach ($portfolio as $res_portfolio) { ?>
                                        <div class="gallery-item-two mix <?php echo strtolower(str_replace(' ', '_', $res_portfolio->category)); ?> col-lg-4 col-md-6 col-sm-12 d-inlineb">
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <img src="<?php echo base_url() . $res_portfolio->thumbnail; ?>" alt="">
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">
                                                                <a href="<?php echo base_url() . $res_portfolio->thumbnail_popup; ?>" data-fancybox="gallery-3" data-caption="" class="link"><span class="fa fa-search-plus"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="lower-box">
                                                    <h3><a href="<?php echo base_url() . 'portfolio/' . $res_portfolio->slug . '-' . $res_portfolio->id; ?>">
                                                            <?php echo ucwords($res_portfolio->title); ?></a></h3>
                                                    <div class="category"><?php echo $res_portfolio->services; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section> -->

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
                    <a href="javascript:void(0);">
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
                            <h4 class="title">Delivering Exceptional Apartments & Villas with Unparalleled Quality in
                                Coimbatore</h4>
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
                            <h4 class="title">Empowering India’s Automation with Fully Manufactured Pneumatic Actuators
                                by Susin I-Tork</h4>
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
                            <h4 class="title">Delivering Exceptional Apartments & Villas with Unparalleled Quality in
                                Coimbatore</h4>
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
                            <h4 class="title">Empowering India’s Automation with Fully Manufactured Pneumatic Actuators
                                by Susin I-Tork</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php include('footer.php'); ?>
    <script>
        setTimeout(function () {
            $(".alert").fadeOut("slow", function () {
                $(".alert").remove();
            });
        }, 6000);
    </script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/jquery.fancybox.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/mixitup.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/script.js"></script>

    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.portfolio-card-container').each(function (index) {
                    const card = $(this);
                    setTimeout(function () {
                        card.addClass('show');
                    }, index * 100);
                });
            }, 100);
            $('.filter-btn').on('click', function () {
                $('.filter-btn').removeClass('active');
                $(this).addClass('active');
                const filterValue = $(this).data('filter');
                $('#portfolio-grid > div').each(function (index) {
                    const item = $(this);
                    const card = item.find('.portfolio-card-container');
                    const categories = item.data('categories').split(',');
                    card.removeClass('show').addClass('hide-item');
                    setTimeout(() => {
                        if (filterValue === 'all' || categories.includes(filterValue)) {
                            item.removeClass('hide');
                            setTimeout(() => {
                                card.removeClass('hide-item').addClass('show');
                            }, index * 100);
                        } else {
                            item.addClass('hide');
                        }
                    }, 500);
                });
            });
        });
    </script>
</body>

</html>