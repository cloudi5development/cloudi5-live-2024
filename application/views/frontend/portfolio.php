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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/icon-font.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/web-dev.css">
    <?php $this->load->view('frontend/fb-pixel-code'); ?>
</head>



<body id="cont1" class="body-inner">

    <?php include('header.php'); ?>

    <!-- <div class="banner-area overlay about-banner resp-banner common-inner-banner" id="banner-area"
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
                <div class="col-md-10">
                    <div class="banner-tagline">
                        <span> <img src="<?php echo base_url(); ?>asset/images/web-development/star.png"
                                alt="Convert into Mockups"> Transform Your Vision into Digital Success!</span>
                    </div>
                    <h2 class="title">Gear up your business returns with top-performing <span>Web Development</span>
                        Company in Coimbatore!</h2>
                </div>
            </div>
        </div>
    </div> -->

    <section class="portfolio-new-section">
        <div class="container">
            <div class="row justify-center">
                <div class="col-lg-12 text-center">
                    <h2 class="portfolio-title mb-3">
                        We deliver a diverse array of
                        <span class="animated-text">high-quality products</span>
                    </h2>
                    <p class="portfolio-desc">Here are some of our standout creations</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 text-center portfolio-filters">
                    <button class="btn filter-btn active" data-filter="all">All</button>
                    <?php foreach ($category as $res_category) { ?>
                    <button class="btn filter-btn"
                        data-filter=".<?php echo strtolower(str_replace(' ', '_', $res_category->title)); ?>">
                        <?php echo ucwords($res_category->title); ?>
                    </button>
                    <?php } ?>
                </div>

            </div>
            <div class="row" id="portfolio-grid">
                <?php foreach ($portfolio as $res_portfolio) { ?>
                <div class="col-md-6"
                    data-categories="<?php echo strtolower(str_replace(' ', '_', $res_portfolio->category)); ?>">
                    <a href="javascript:void(0);">
                        <div class="portfolio-card-container">
                            <div class="client-logo">
                                <!-- <img src="<?php echo base_url(); ?>asset/images/portfolio-new/mayflower-logo.png"
                                    class="client-logo-img" alt="Clients-Logo"> -->
                                    <img src="<?php echo base_url() . $res_portfolio->thumbnail; ?>" class="client-logo-img" alt="Clients-Logo">

                            </div>
                            <div class="client-img">
                                <!-- <img src="<?php echo base_url(); ?>asset/images/portfolio-new/mayflower-bg-img.png"
                                    class="portfolio-img" alt="Portfolio-Img"> -->
                                    <img src="<?php echo base_url() . $res_portfolio->thumbnail_popup; ?>" class="portfolio-img" alt="Portfolio-Img">

                                <div class="tag-details">
                                    <a><?php echo $res_portfolio->services; ?></a>
                                </div>
                            </div>
                            <h4>
                                <a class="title"
                                    href="<?php echo base_url() . 'portfolio/' . $res_portfolio->slug . '-' . $res_portfolio->id; ?>">
                                    <?php echo ucwords($res_portfolio->title); ?></a>
                            </h4>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>


        </div>
    </section>

    <?php include('footer.php'); ?>
    <script>
    setTimeout(function() {
        $(".alert").fadeOut("slow", function() {
            $(".alert").remove();
        });
    }, 6000);
    </script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/jquery.fancybox.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/mixitup.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/script.js"></script>

    <script>
    $(document).ready(function() {
        setTimeout(function() {
            $('.portfolio-card-container').each(function(index) {
                const card = $(this);
                setTimeout(function() {
                    card.addClass('show');
                }, index * 100);
            });
        }, 100);

        $('.filter-btn').on('click', function() {
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');
            const filterValue = $(this).data('filter'); // e.g., ".web_design"
            $('#portfolio-grid > div').each(function(index) {
                const item = $(this);
                const card = item.find('.portfolio-card-container');
                const categories = item.data('categories').split(
                    ' '); // Space-separated categories

                console.log('Filter Value:', filterValue);
                console.log('Categories:', categories);

                card.removeClass('show').addClass('hide-item');
                setTimeout(() => {
                    if (filterValue === 'all' || categories.includes(filterValue
                            .substring(1))) { // compare without the dot
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