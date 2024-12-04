<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php if ($meta) {
        echo $meta->title ? $meta->title : "Cloudi5’s Gallery of Trust | Meet Our Exceptional Clients";
    } else {
        echo "Cloudi5’s Gallery of Trust | Meet Our Exceptional Clients";
    } ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="<?php echo $meta ? $meta->description : "Explore Cloudi5’s esteemed clientele – a group of elite brands who trust our innovative tech solutions that spark creativity, boost success and shake things up!"; ?>">
    <meta name="keywords"
        content="<?php echo $meta ? $meta->keyword : "Clientele, Our Clients, Trusted by Leading Businesses, Cloudi5 Clients, Client Success Stories, Top Clients, Business Partnerships, Client Relationships, Global Clientele, Client Portfolio, Successful Client Collaborations, Cloudi5 Client List, Client Testimonial"; ?>">
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
    <link rel="canonical" href="<?php echo base_url(); ?>Cloudi5’s Gallery of Trust | Meet Our Exceptional Clients" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Cloudi5’s Gallery of Trust | Meet Our Exceptional Clients" />
    <meta property="og:description"
        content="Explore Cloudi5’s esteemed clientele – a group of elite brands who trust our innovative tech solutions that spark creativity, boost success and shake things up!" />
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
    <div class="body-inner">
        <?php include 'header.php' ?>

        <section class="client-logos-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 title">
                        <h2>Our happy Customers</h2>
                        <p>Meet our delighted clients and find out why they love Cloudi5.</p>
                    </div>
                </div>

                <div class="client-logos-container">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-3 col-sm-6 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/mayflower.png" alt="mayflower"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 col-sm-6 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/svhv-school.png" alt="svhv-school"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 col-sm-6 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/stanes.png" alt="stanes"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 col-sm-6 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/metro.png" alt="metro"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/baps.png" alt="baps"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/madhampatty.png" alt="madhampatty"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/hookz.png" alt="hookz"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/susin.png" alt="susin"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/ecom365.png" alt="ecom365"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/falcon.png" alt="falcon"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/vencar.png" alt="vencar"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/maloos.png" alt="maloos"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/tranzmoney.png" alt="tranzmoney"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/blueway.png" alt="blueway"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/cognex.png" alt="cognex"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/ecconcept.png" alt="ecconcept"
                                class="img-fluid">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/famshops.png" alt="famshops"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/hydroz.png" alt="hydroz"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/incredible.png" alt="incredible"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/krishya.png" alt="krishya"
                                class="img-fluid">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/expert-automation.png"
                                alt="automation" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/morden-machines.png"
                                alt="morden-machines" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/regulus.png" alt="regulus"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/rock-realty.png" alt="rock-realty"
                                class="img-fluid">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/skilledia.png" alt="skilledia"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/sourzer.png" alt="sourzer"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/sr-ghee.png" alt="sr-ghee"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/strerioniks.png" alt="strerioniks"
                                class="img-fluid">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/massiva.png" alt="massiva"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/talks-india.png" alt="talks-india"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/tra-jewel.png" alt="tra-jewel"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/tryzon.png" alt="tryzon"
                                class="img-fluid">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/vasool-line.png" alt="vasool-line"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/veda-networks.png"
                                alt="veda-networks" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/vishaha.png" alt="vishaha"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/xelentaa.png" alt="xelentaa"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/aalayam.png" alt="aalayam"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/dream-spoon.png" alt="dream-spoon"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/eduwing.png" alt="eduwing"
                                class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 client-logo">
                            <img src="<?php echo base_url(); ?>asset/images/clientele/krishna-impex.png"
                                alt="krishna-impex" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer start-->
        <?php include 'footer.php' ?>
        <!-- initialize jQuery Library-->

    </div>
</body>

</html>