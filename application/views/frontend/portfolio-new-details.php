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
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/web-dev.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/portfolio-new-details.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/icon-font.css">
    <?php $this->load->view('frontend/fb-pixel-code'); ?>
</head>
<!-- Icon font-->

<body>

    <div class="body-inner">
        <?php include 'header.php' ?>

        <section class="portfolio-new-details">
            <div class="intro-section">
                <div class="container">
                    <div class="row">
                        <div class="circle-shape">
                            <img src="<?php echo base_url(); ?>asset/images/web-development/bg-blue.webp" alt="">
                        </div>
                        <div class="intro-detail">
                            <h2 class="stroke-text">cloudi5</h2>
                            <h2 class="title">Discover Exceptional Living with Mayflower® Enterprises</h2>
                            <p class="desc">Experience the finest in construction and property development with
                                Mayflower®
                                Enterprises. Renowned for delivering exclusive and meticulously crafted properties, our
                                Apartments & Villas in Coimbatore are designed to provide unmatched quality and a truly
                                delightful living experience.</p>
                            <img src="<?php echo base_url(); ?>asset/images/portfolio-new/portfolio-mayflower.png"
                                alt="portfolio-mayflower" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-section">
                <div class="container">
                    <div class="row">
                        <div class="circle-shape-2">
                            <img src="<?php echo base_url(); ?>asset/images/web-development/bg-blue.webp" alt="">
                        </div>
                        <div class="client-details">
                            <h2 class="stroke-text stroke-text-2">Client Overview</h2>
                            <h2 class="title"> Pioneering Excellence in Property Development</h2>
                            <p class="desc">Mayflower® Enterprises, a leader in property development, is known for
                                delivering exquisite residential properties in Coimbatore. With an unwavering focus
                                on quality and luxury, they have set new standards in the construction industry.</p>
                            <img src="<?php echo base_url(); ?>asset/images/portfolio-new/mayflower-details.png"
                                alt="portfolio-mayflower" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="challenges-section">
                <div class="container">
                    <div class="row">
                        <div class="circle-shape">
                            <img src="<?php echo base_url(); ?>asset/images/web-development/bg-blue.webp" alt="">
                        </div>
                        <div class="challenges-details">
                            <h2 class="stroke-text stroke-text-3">Challenges</h2>
                            <h2 class="title">Enhancing Digital Excellence for a Premium Brand</h2>
                            <p class="desc">For Mayflower® Enterprises, maintaining their reputation for delivering
                                premium-quality properties required a robust and efficient digital presence. The
                                primary challenges included showcasing their diverse range of Apartments and Villas
                                with the level of detail and sophistication their brand demands.</p>
                            <p class="desc">Another challenge was ensuring that potential customers could easily
                                access accurate information about available properties while creating a visually
                                compelling online experience that reflected the elegance and luxury of Mayflower®’s
                                offerings. Addressing these issues was critical to enhancing customer satisfaction
                                and streamlining internal processes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="solution-section">
                <div class="container">
                    <div class="row">
                        <div class="circle-shape-2">
                            <img src="<?php echo base_url(); ?>asset/images/web-development/bg-blue.webp" alt="">
                        </div>
                        <div class="col-lg-6">
                            <img src="<?php echo base_url(); ?>asset/images/portfolio-new/mayflower-details-1.png"
                                alt="portfolio-mayflower" class="img-fluid">
                        </div>
                        <div class="col-lg-6">
                            <div class="solution-details">
                                <h2 class="stroke-text stroke-text-4">Our Solution</h2>
                                <h2 class="title">Building a Seamless Digital Platform</h2>
                                <p class="desc">To address the challenges faced by Mayflower® Enterprises, we
                                    developed
                                    a comprehensive digital solution designed to showcase their luxurious properties
                                    and
                                    streamline their operations.</p>
                                <p class="desc">Our solution ensured that Mayflower® Enterprises could provide their
                                    clients with an experience as premium and polished as their properties.</p>

                                <a href="https://mayflowerenterprises.com/" class="contact-btn" target="_blank">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Check It Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php' ?>

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
    </div>

</body>

</html>