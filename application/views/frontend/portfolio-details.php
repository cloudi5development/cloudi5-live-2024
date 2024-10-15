<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $portfolio->meta_title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo $portfolio->meta_description; ?>">
  <meta name="keywords" content="<?php echo $portfolio->meta_keyword; ?>">
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
  <link rel="canonical" href="<?php echo base_url() . 'portfolio/' . $portfolio->slug . '-' . $portfolio->id; ?>" />
  <?php $this->load->view('frontend/common-css'); ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/jquery.fancybox.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/jquery.fancybox.min.css">
</head>

<body id="cont1">
  <?php include('header.php'); ?>
  <div class="banner-area about-banner resp-banner" id="banner-area" alt="Portfolio">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <div class="banner-heading">
            <h1 class="banner-title"><?php echo $portfolio->title; ?> Portfolio</h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <li><a href="<?php echo base_url('portfolio'); ?>">Portfolio</a></li>
              <li><?php echo $portfolio->title; ?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio -->
  <section class="projects-detail-section">
    <div class="container">
      <div class="gallery-boxed">
        <div class="row clearfix">
          <div class="column col-lg-9 col-md-9 col-sm-12">
            <div class="single-item-carousel owl-carousel owl-theme">
              <?php foreach ($images as $res_image) { ?>
                <div class="slide">
                  <div class="image">
                    <img src="<?php echo base_url() . $res_image->image; ?>" alt="" />
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="column col-lg-3 col-md-3 col-sm-12">
            <h3>Project Info</h3>
            <ul class="project-info">
              <li><span class="fa fa-user"></span>Clients:<?php echo $portfolio->company_name; ?></li>
              <li style="text-indent: -12.9px;padding-left: 26px;"><span class="fa fa-tag"></span>Categories: <?php echo $portfolio->service_categories; ?></li>
              <li style="text-indent: -12.9px;padding-left: 26px;"><span class="fa fa-desktop"></span>Languages: <?php echo $portfolio->languages; ?></li>
              <?php if ($portfolio->display_website_url == 'Yes') { ?>
                <li style="text-indent: -12.9px;padding-left: 26px;"><span class="fa fa-globe"></span>Website: <?php echo $portfolio->website_url; ?></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="lower-content">
        <div class="row clearfix">
          <div class="column list-style-four col-lg-8 col-md-12 col-sm-12">
            <h3><?php echo $portfolio->title; ?></h3>
            <?php echo $portfolio->overview; ?>
          </div>
        </div>
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
  <script src="<?php echo base_url(); ?>asset/js/owl.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/mixitup.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/script.js"></script>
</body>

</html>