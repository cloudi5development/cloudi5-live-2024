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
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/portfolio-new-details">
    <?php $this->load->view('frontend/fb-pixel-code'); ?>
</head>
<!-- Icon font-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/icon-font.css">

<body>

    <div class="body-inner">

        <?php include 'header.php' ?>

        <div class="banner-area overlay about-banner resp-banner common-inner-banner" id="banner-area"
            alt="Web Development Company in Coimbatore" title="Portfolio Details">
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
                    <div class="col-md-12">
                        <div class="banner-tagline">
                            <span> <img src="<?php echo base_url(); ?>asset/images/web-development/star.png"
                                    alt="tagline"> Turning Ideas into Reality, Cloudi5 It</span>
                        </div>
                        <h2 class="title">MayFlower <span>Portolio</span></h2>
                    </div>
                </div>
            </div>
        </div>

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