<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $blog->meta_title; ?></title>
    <meta name="description" content="<?php echo $blog->meta_description; ?>">
    <meta name="keywords" content="<?php echo $blog->meta_keyword; ?>">
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
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Facebook & LinkedIn & Twitter-->
    <meta property="og:title" content="<?php echo ucwords($blog->title); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo base_url() . 'blog/' . $blog->slug . '-' . $blog->blog_id; ?>" />
    <meta property="og:description" content="<?php echo $blog->meta_description; ?>" />
    <meta property="og:image" content="<?php echo base_url() . $blog->image; ?>" />
    <meta property="og:image:alt" content="<?php echo ucwords($blog->title); ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@Cloudi5india" />
    <!--------------->
    <link rel="icon" href="<?php echo base_url(); ?>asset/images/favicon.png">
    <link rel="canonical" href="<?php echo base_url() . 'blog/' . $blog->slug . '-' . $blog->blog_id; ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/admin.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/icon-font.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/blog/css/web-style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/blog/css/blog-style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">
    
</head>

<body id="cont1">
    <div class="body-inner">
        <?php include('header.php'); ?>
        <div class="banner-area" id="banner-area" alt="Web Development, ERP, CRM & Web Design Company in India" title="About Us">
        </div>
        <div class="pt-100-blog1 blog_main_wrapper blog-detail-bg">
            <div class="blog_right_toggle_sidebar">
                <div class="outer_close"></div>
                <div class="blog_togglediv">
                    <a href="javascript:;" class="toggle_close"></a>
                    <div class="blog_sidebar">
                        <div class="widget widget_social">
                            <div class="blog_main_heading_div">
                                <div class="blog_heading_div">
                                    <h3 class="blog_bg_pink">CONNECT</h3>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <div class="widget_social_link">
                                        <a target="_blank" data-bi-name="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url() . 'blog/' . $blog->slug . '-' . $blog->blog_id; ?>">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <p>Share</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget_social_link">
                                        <a target="_blank" class="share-twitter" data-bi-name="twitter" href="https://twitter.com/intent/tweet?original_referer=<?php echo base_url() . 'blog/' . $blog->slug . '-' . $blog->blog_id; ?>&amp;text=&amp;tw_p=tweetbutton&amp;url=<?php echo base_url() . 'blog/' . $blog->slug . '-' . $blog->blog_id; ?>">
                                        <img src="<?php echo base_url(); ?>asset/images/twitter"
                                        alt="web design company in coimbatore">
                                        </a>
                                        <p>Share</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget_social_link">
                                        <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url() . 'blog/' . $blog->slug . '-' . $blog->blog_id; ?>&title=<?php echo $blog->title; ?>&summary=<?php echo (strip_tags(strlen($blog->description)) > 75) ? strip_tags(substr($blog->description, 0, 75)) . '...' : strip_tags($blog->description); ?>&source=LinkedIn">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                        <p>Share</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget_social_link">
                                        <a href="https://www.instagram.com/cloudi5technologies/" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                        <p>Share</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget_social_link">
                                        <a href="https://www.youtube.com/channel/UCipbazIFWezUFdQfeyfF0QQ" target="_blank">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                        <p>Share</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget_social_link">
                                        <a href="http://pinterest.com/pin/create/button/?url=<?php echo base_url() . 'blog/' . $blog->slug . '-' . $blog->blog_id; ?>" target="_blank">
                                            <i class="fa fa-pinterest-p"></i>
                                        </a>
                                        <p>Share</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_recent_news">
                            <div class="blog_main_heading_div">
                                <div class="blog_heading_div">
                                    <h3 class="blog_bg_lightblue">Recent News</h3>
                                </div>
                            </div>
                            <ul>
                                <?php
                                foreach ($recent as $res_recent) {
                                ?>
                                    <li>
                                        <div class="blog_news">
                                            <div class="blog_news_title">
                                                <h4><a href="<?php echo base_url() . 'blog/' . $res_recent->slug . '-' . $res_recent->blog_id; ?>"><?php echo $res_recent->title; ?></a></h4>
                                                <p><?php echo date('M d,Y', strtotime($res_recent->blog_date)); ?>- <?php echo $res_recent->category; ?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="widget widget_categories">
                            <div class="blog_main_heading_div">
                                <div class="blog_heading_div">
                                    <h3 class="blog_bg_lightgreen">categories</h3>
                                </div>
                            </div>
                            <ul>
                                <?php
                                foreach ($category as $res_cat) {
                                    $Catcount = $this->db->select('blog_id')->from('blog')->where(array('category_id' => $res_cat->category_id, 'status' => 'Active'))->get();
                                ?>
                                    <li><a href="#"><?php echo $res_cat->title; ?> <span>(<?php echo $Catcount->num_rows(); ?>)</span></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="widget widget_special_post">
                            <div class="blog_main_heading_div">
                                <div class="blog_heading_div">
                                    <h3 class="blog_bg_pink">don't miss</h3>
                                </div>
                            </div>
                            <ul>
                                <?php
                                foreach ($featured as $res_feat) {
                                    $Commcount = $this->db->select('comment_id')->from('comments')->where(array('blog_id' => $res_feat->blog_id))->get();
                                ?>
                                    <li>
                                        <div class="blog_post_slider_wrapper">
                                            <a href="<?php echo base_url() . 'blog/' . $res_feat->slug . '-' . $res_feat->blog_id; ?>" class="blog_post_slider_img">
                                                <img src="<?php echo base_url() . $res_feat->image; ?>" class="img-fluid" alt="" width="240" height="220">
                                            </a>
                                            <div class="blog_post_slider_content">
                                                <h2><a href="<?php echo base_url() . 'blog/' . $res_feat->slug . '-' . $res_feat->blog_id; ?>"><?php echo ucwords($res_feat->title); ?></a></h2>
                                                <ul class="blog_meta_tags">
                                                    <li><span class="blog_bg_pink"><?php echo $Commcount->num_rows(); ?></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog_main_wrapper blog_toppadder60 blog_bottompadder60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                            <div class="blog_post_style2 blog_single_div">
                                <div class="blog_post_style2_img wow fadeInUp">
                                    <img src="<?php echo base_url() . $blog->image; ?>" class="img-fluid" alt="<?php echo $blog->image_alt_tag; ?>">
                                </div>
                                <div class="blog_post_style2_content wow fadeInUp">
                                    <h1 class="blog-title"><?php echo  ucwords($blog->title); ?></h1>
                                    <div class="blog_author_data">
                                        <a>
                                            <?php if (!empty($blog->author_image)) { ?>
                                                <img src="<?php echo base_url() . $blog->author_image; ?>" class="img-fluid" alt="" width="34" height="34">
                                            <?php } else { ?>
                                                <img src="<?php echo base_url('assets/images/avatar.jpg'); ?>" class="img-fluid" alt="" width="34" height="34">
                                            <?php } ?>
                                            <?php echo $blog->author_name; ?></a>
                                    </div>
                                    <!-- <ul class="blog_meta_tags">
                                        <li><span class="blog_bg_pink"><?php echo count($BlogCmtcnt); ?></span></li>
                                    </ul> -->
                                    <?php echo $blog->description; ?>
                                </div>
                            </div>
                            <?php if ($comments) { ?>
                                <div class="blog_comment_div">
                                    <h3 class="wow fadeInUp">Comments <span>(<?php echo count($BlogCmtcnt); ?>)</span></h3>
                                    <ol class="comment-list">
                                        <?php
                                        foreach ($comments as $res_comment) {
                                        ?>
                                            <li class="wow fadeInUp">
                                                <div class="blog_comment">
                                                    <div class="blog_comment_img">
                                                        <?php /* if(!empty($res_comment->created_at)){ ?>
											<img src="<?php echo base_url().$res_comment->created_at;?>" class="img-fluid" alt="">
											<?php }else{ ?>
											<img src="<?php echo base_url();?>assets/images/avatar.jpg" class="img-fluid" alt="">
											<?php } */ ?>
                                                    </div>
                                                    <div class="blog_comment_data">
                                                        <h3><?php echo ucwords($res_comment->name); ?> <span>- <?php echo date('d M Y', strtotime($res_comment->created_at)); ?></span></h3>
                                                        <p><?php echo strip_tags($res_comment->message); ?></p>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ol>
                                </div>
                            <?php } ?>
                            <?php echo message_box('success'); ?>
                            <?php echo message_box('error'); ?>
                            <div class="blog_comment_formdiv wow fadeInUp">
                                <h3>Leave Comments</h3>
                                <form id="CommentsValidation" class="comment-form" action="<?php echo base_url('comments/save_comments'); ?>" method="post">
                                    <input type="hidden" name="blog" value="<?php echo $blog->blog_id; ?>">
                                    <div class="blog_row">
                                        <div class="blog_halfbox">
                                            <div class="blog_form_group">
                                                <input name="website" class="form-control d-none" value="">
                                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name*" value="<?php echo set_value('name'); ?>">
                                            </div>
                                        </div>
                                        <div class="blog_halfbox">
                                            <div class="blog_form_group">
                                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email*" value="<?php echo set_value('email'); ?>">
                                            </div>
                                        </div>
                                        <div class="blog_halfbox">
                                            <div class="blog_form_group">
                                                <input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile Number*" value="<?php echo set_value('mobile'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog_row">
                                        <div class="blog_form_group">
                                            <textarea name="message" class="form-control" placeholder="Enter Your Message*" rows="5" value="<?php echo set_value('message'); ?>"></textarea>
                                        </div>
                                    </div>
                                    <div class="blog_row">
                                        <div class="g-recaptcha" data-sitekey="6Lf0WYUUAAAAAMi0BjYIrf8I-9G5cS-kJ04d8MEL"></div>
                                        <?php echo form_error('g-recaptcha-response', '<div class="error">', '</div>'); ?>
                                    </div>
                                    <div class="blog_row">
                                        <button type="submit" class="blog_btn blog_bg_pink">Post comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-12 theiaStickySidebar">
                            <div class="blog_sidebar">
                                <div class="widget widget_social wow fadeInUp">
                                    <div class="blog_main_heading_div">
                                        <div class="blog_heading_div">
                                            <h3 class="blog_bg_pink">CONNECT</h3>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="widget_social_link">
                                                <a target="_blank" data-bi-name="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url() . 'blog/' . $blog->slug . '-' . $blog->blog_id; ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <p>Share</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget_social_link">
                                                <a target="_blank" class="share-twitter" data-bi-name="twitter" href="https://twitter.com/intent/tweet?original_referer=<?php echo base_url() . 'blog/' . $blog->slug . '-' . $blog->blog_id; ?>&amp;text=&amp;tw_p=tweetbutton&amp;url=<?php echo base_url() . 'blog/' . $blog->slug . '-' . $blog->blog_id; ?>">
                                                    <img src="<?php echo base_url(); ?>asset/images/twitter.svg"
                                        alt="web design company in coimbatore">
                                                </a>
                                                <p>Share</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget_social_link">
                                                <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url() . 'blog/' . $blog->slug . '-' . $blog->blog_id; ?>&title=<?php echo $blog->title; ?>&summary=<?php echo (strip_tags(strlen($blog->description)) > 75) ? strip_tags(substr($blog->description, 0, 75)) . '...' : strip_tags($blog->description); ?>&source=LinkedIn">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                                <p>Share</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget_social_link">
                                                <a href="https://www.instagram.com/cloudi5technologies/" target="_blank">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                                <p>Share</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget_social_link">
                                                <a href="https://www.youtube.com/channel/UCipbazIFWezUFdQfeyfF0QQ" target="_blank">
                                                    <i class="fa fa-youtube-play"></i>
                                                </a>
                                                <p>Share</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget_social_link">
                                                <a href="http://pinterest.com/pin/create/button/?url=<?php echo base_url() . 'blog/' . $blog->slug . '-' . $blog->blog_id; ?>" target="_blank">
                                                    <i class="fa fa-pinterest-p"></i>
                                                </a>
                                                <p>Share</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget widget_recent_news wow fadeInUp">
                                    <div class="blog_main_heading_div">
                                        <div class="blog_heading_div">
                                            <h3 class="blog_bg_lightblue">Recent News</h3>
                                        </div>
                                    </div>
                                    <ul>
                                        <?php
                                        foreach ($recent as $res_recent) {
                                        ?>
                                            <li>
                                                <div class="blog_news">
                                                    <div class="blog_news_title">
                                                        <h4><a href="<?php echo base_url() . 'blog/' . $res_recent->slug . '-' . $res_recent->blog_id; ?>"><?php echo $res_recent->title; ?></a></h4>
                                                        <p><?php echo date('M d,Y', strtotime($res_recent->blog_date)); ?>- <?php echo $res_recent->category; ?></p>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="widget widget_categories wow fadeInUp">
                                    <div class="blog_main_heading_div">
                                        <div class="blog_heading_div">
                                            <h3 class="blog_bg_lightgreen">categories</h3>
                                        </div>
                                    </div>
                                    <ul>
                                        <?php
                                        foreach ($category as $res_cat) {
                                            $Catcount = $this->db->select('blog_id')->from('blog')->where(array('category_id' => $res_cat->category_id, 'status' => 'Active'))->get();
                                        ?>
                                            <li><a href="<?php echo base_url() . 'blog/' . $res_cat->slug . '-' . $res_cat->category_id; ?>"><?php echo $res_cat->title; ?> <span>(<?php echo $Catcount->num_rows(); ?>)</span></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="widget widget_special_post wow fadeInUp">
                                    <div class="blog_main_heading_div">
                                        <div class="blog_heading_div">
                                            <h3 class="blog_bg_pink">don't miss</h3>
                                        </div>
                                    </div>
                                    <ul>
                                        <?php
                                        foreach ($featured as $res_feat) {
                                            $Commcount = $this->db->select('comment_id')->from('comments')->where(array('blog_id' => $res_feat->blog_id))->get();
                                        ?>
                                            <li>
                                                <div class="blog_post_slider_wrapper">
                                                    <a href="<?php echo base_url() . 'blog/' . $res_feat->slug . '-' . $res_feat->blog_id; ?>" class="blog_post_slider_img">
                                                        <img src="<?php echo base_url() . $res_feat->image; ?>" class="img-fluid-side-blog" alt="" width="240" height="220">
                                                    </a>
                                                    <div class="blog_post_slider_content">
                                                        <h2><a href="<?php echo base_url() . 'blog/' . $res_feat->slug . '-' . $res_feat->blog_id; ?>"><?php echo ucwords($res_feat->title); ?></a></h2>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                               
                                <?php if (!empty($blog->ads_image)) { ?>
                                    <div class="ads_widget wow fadeInUp">
                                        <a><img src="<?php echo base_url() . $blog->ads_image; ?>" class="img-fluid" alt=""></a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
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
        <script src='https://www.google.com/recaptcha/api.js'></script>
</body>

</html>