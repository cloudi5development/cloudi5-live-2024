<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <?php if ($this->uri->segment(2) != "") { ?>
      <title><?php echo $meta_category ? $meta_category->meta_title : 'Blog in Cloudi5 Technologies'; ?></title>
      <meta name="description" content="<?php echo $meta_category ? $meta_category->meta_description : ''; ?>">
      <meta name="keywords" content="<?php echo $meta_category ? $meta_category->meta_keyword : ''; ?>">
   <?php } else { ?>
      <title><?php echo $meta_tags->title ? $meta_tags->title : 'Blog in Cloudi5 Technologies'; ?></title>
      <meta name="description" content="<?php echo $meta_tags->description ? $meta_tags->description : ''; ?>">
      <meta name="keywords" content="<?php echo $meta_tags->keyword ? $meta_tags->keyword : ''; ?>">
   <?php } ?>
   <meta name="robots" content="index,follow" />
   <meta name="language" content="english" />
   <meta name="Expires" content="never" />
   <meta name="robots" content="noodp,noydir" />
   <meta name="Author" content="cloudi5.com" />
   <meta name="Distribution" content="Global" />
   <meta name="Rating" content="general" />
   <meta name="region" content="India" />
   <meta name="geo.region" content="Coimbatore" />
   <meta name="search engines" content="ALL" />
   <meta name="copyright" content="cloudi5.com" />
   <meta name="email" content="info@cloudi5.com" />
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <link rel="icon" href="<?php echo base_url(); ?>asset/images/favicon.png">
   <?php if ($meta_category) { ?>
      <link rel="canonical" href="<?php echo base_url($meta_category->slug . '-' . $meta_category->category_id); ?>" />
   <?php } else { ?>
      <link rel="canonical" href="<?php echo base_url(); ?>blog" />
   <?php } ?>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/admin.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/icon-font.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/blog/css/web-style.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/responsive.css">
   <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">
</head>
<body id="cont1">
   <?php include('header.php'); ?>
   <div class="banner-area" id="banner-area" alt="Job Openings in Coimbatore">
   </div>
   <section class="pt-120-blog" id="main-container">
      <div class="container">
         <div class="blog-title-h1">
            <?php
            if ($slug) { ?>
               <h1><?php echo $meta_category->title; ?> Blog</h1>
            <?php } ?>
         </div>
         <div class="row" id="postList">
            <?php
            if ($blog) {
               foreach ($blog as $res_blog) {
            ?>
                  <div class="postData col-lg-4 col-md-12">
                     <div class="ts-case-box">
                        <div class="blog-list-item">
                           <img class="img-fluid-blog" src="<?php echo base_url() . $res_blog->image; ?>" alt="<?php echo $res_blog->title; ?>">
                           <div class="blog-content-list">
                              <a class="link-more" href="<?php echo base_url() . 'blog/' . $res_blog->category_slug . '-' . $res_blog->category_id; ?>"><small class="course-highlight"><?php echo $res_blog->category; ?></small></a>
                              <h1 class="case-title"><a href="<?php echo base_url() . 'blog/' . $res_blog->slug . '-' . $res_blog->blog_id; ?>">
                                    <?php echo strip_tags((strlen($res_blog->title) > 55) ? substr($res_blog->title, 0, 55) . '...' : $res_blog->title); ?></a></h1>
                              <p><a class="readd-more link-more" href="<?php echo base_url() . 'blog/' . $res_blog->slug . '-' . $res_blog->blog_id; ?>">Read More <i class="icon icon-right-arrow2"></i></a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php }
               if ($allcount > 6) {
               ?>
                  <div id="Load-More-Btn" class="load-more col-lg-12 col-md-12" slug="<?php echo $slug; ?>" blog_id="<?php echo $blog_id; ?>" style="text-align: center;">
                     <h1 class="btn btn-primary">Load More</h1>
                  </div>
               <?php } ?>
               <input type="hidden" id="row" value="3">
               <input type="hidden" id="all" value="<?php echo $allcount; ?>">
            <?php
            } else { ?>
               <div class="load-more col-lg-12 col-md-12" slug="<?php echo $slug; ?>" blog_id="<?php echo $blog_id; ?>">
                  <div class="ts-case-box">
                     <div class="ts-case-image-wrapper">
                        <div class="ts-case-content">
                           <h3 class="case-title">No result found</h3>
                        </div>
                     </div>
                  </div>
               </div>
            <?php } ?>
         </div>
      </div>
   </section>
   <div class="gap-40"></div>
   <br>
   <?php include('footer.php'); ?>
   <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
   <script src="<?php echo base_url(); ?>assets/js/form-validation.js"></script>
   <script src="<?php echo base_url() ?>asset/blog/js/pagination.js"></script>
   <script>
      setTimeout(function() {
         $(".alert").fadeOut("slow", function() {
            $(".alert").remove();
         });
      }, 6000);
   </script>
   <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
</body>
</html>