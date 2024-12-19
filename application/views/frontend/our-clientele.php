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
                    <?php foreach ($clients as $our_client) { ?>
                        <div class="col-6 col-md-6 col-lg-3 col-sm-6 client-logo">
                        <img src="<?php echo base_url() . $our_client->image; ?>" class="img-fluid" alt="<?php echo $our_client->image_alt_tag ?>">
                           
                        </div>
                        <?php } ?>
                       
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