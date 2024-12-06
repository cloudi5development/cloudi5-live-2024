<?php 
$footer_setting = $this->db->from('settings')->get()->row();
?>
<div id="getstarted"></div>
<footer class="footer" id="footer-hide">
    <section class="lets_talksection">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="headerdiv text-left">
                        <h2>DO YOU HAVE A <br>PROJECT IN MIND?</h2>
                        <p>Lets get Started!</p>
                    </div>
                    <div class="sidebtns">
                        <a class="btns write">
                            <span><i class="fa fa-paper-plane-o"></i></span>
                            <div>
                                <p class="mb-0">WRITE TO US</p> <img src="<?php echo base_url(); ?>asset/images/write-to-us.png" alt="Mail Id">
                            </div>
                        </a>
                        <a href="tel:<?php echo str_replace(' ', '', $footer_setting->mobile_1); ?>" class="btns callus">
                            <span><i class="fa fa-mobile"></i></span>
                            <div>
                                <p class="mb-0">SUPPORT</p> <b><?php echo $footer_setting->mobile_1; ?></b>
                            </div>
                        </a>
                    </div>
                    <ul class="list-unstyled address">
                        <li><span>Address :</span> <?php echo $footer_setting->address_1; ?><br> <?php echo $footer_setting->address_2 .' '. $footer_setting->address_3; ?> <br><?php echo $footer_setting->city .' '. $footer_setting->pincode; ?>, <?php echo $footer_setting->state; ?>, India</li>
                    </ul>
                    <!--<div class="or"><span>OR</span></div>-->
                </div>
                <div class="col-sm-6">
                    <div class="get_in_touch">
                        <?php echo message_box('success'); ?>
                        <?php echo message_box('error'); ?>
                        <div id="sucess_project_frm"></div>
                        <form class="project_frm" id="CommonValidation" action="<?php echo base_url('commonform'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="customcol col-sm-6">
                                    <div class="form-group">
                                        <input name="website" class="form-control input-lg" style="display:none;" value="">
                                        <input name="your_name" class="required form-control input-lg" placeholder="Your Name*" value="<?php echo set_value('your_name'); ?>">
                                        <?php echo form_error('your_name', '<div class="error">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="customcol col-sm-6">
                                    <div class="form-group">
                                        <input name="your_phone" class=" form-control input-lg" placeholder="Phone" value="<?php echo set_value('your_phone'); ?>">
                                        <?php echo form_error('your_phone', '<div class="error">', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="customcol col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="your_email" class="required form-control input-lg" placeholder="Your E-mail*" value="<?php echo set_value('your_email'); ?>">
                                        <?php echo form_error('your_email', '<div class="error">', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="customcol col-sm-12">
                                    <div class="form-group">
                                        <textarea class="required form-control input-lg" name="message" rows="6" placeholder="Message*" style="z-index: auto; position: relative; line-height: 21.3333px; font-size: 16px; transition: none 0s ease 0s; background: transparent !important;"><?php echo set_value('message'); ?></textarea>
                                        <?php echo form_error('message', '<div class="error">', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="customcol col-sm-12">
                                    <div class="g-recaptcha" data-sitekey="6Lf0WYUUAAAAAMi0BjYIrf8I-9G5cS-kJ04d8MEL"></div>
                                    <?php echo form_error('g-recaptcha-response', '<div class="error">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="customcol col-sm-12 text-center">
                                    <div class="form-group" style="padding-top: 10px;">
                                        <button type="submit" id="project_btn" data-ladda="loading" class="btn btn-primary text-uppercase m-w-160 btn btn-bluedark btn-bold btn-lg waves-effect waves-button waves-light">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<section class="clients-area content-desktop" id="clients-area">
    <div class="container">
        <h3 class="text-center">Trusted By</h3><br>
        <div class="row">
            <div class="col-sm-12 owl-carousel owl-theme text-center partners" id="partners-carousel">
                 <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/healthsy.jpg" alt="healthsy">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/cognex.jpg" alt="Cognex">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/ecc.jpg" alt="EC Concept">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/skilledia.jpg" alt="skilledia">
                </figure>
                <figure class="item partner-logo last">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/dreamspoon.jpg" alt="dreamspoon">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/tryzone.jpg" alt="tryzone">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/aalayam.jpg" alt="aalayam">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/rockrealty.jpg" alt="rockrealty">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/study-help.jpg" alt="study-help">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/techsolve.jpg" alt="techsolve">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/blueway.jpg" alt="blueway">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/susin.jpg" alt="susin">
                </figure>
                 <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/vencar.jpg" alt="vencar">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/missiva.jpg" alt="missiva">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/toi.jpg" alt="toi">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/sanviha.jpg" alt="sanviha">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/xpert.jpg" alt="xpert">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/laglaze.jpg" alt="laglaze">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/vishaha.jpg" alt="vishaha">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/taras.jpg" alt="taras">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/incredible.jpg" alt="incredible">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/maloos.jpg" alt="maloos">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/mdm.jpg" alt="mdm">
                </figure>
                <figure class="item partner-logo">
                    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/veda-networks.jpg" alt="veda networks">
                </figure>
                
                <!--<figure class="item partner-logo last">-->
                <!--    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/evecollections.png" alt="evecollections">-->
                <!--</figure>-->
                <!--<figure class="item partner-logo last">-->
                <!--    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/lrmoverseas.png" alt="lrmoverseas">-->
                <!--</figure>-->
                <!--<figure class="item partner-logo">-->
                <!--    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/intechgroups.png" alt="intechgroups Institute Website Design">-->
                <!--</figure>-->
                <!--<figure class="item partner-logo last">-->
                <!--    <img class="img-fluid" src="<?php echo base_url(); ?>asset/images/clients/dezignmedia.png" alt="dezignmedia">-->
                <!--</figure>-->
            </div>
        </div>
    </div>
</section>
<section class="pre-footer">
    <div class="footer-top">
        <div class="footer-top-bg row">
            <div class="col-sm-4 footer-box"><i class="icon icon-phone3"></i>
                <div class="footer-box-content">
                    <h3>Call Us</h3>
                    <p>Support: <a href="tel:<?php echo str_replace(' ', '', $footer_setting->mobile_1); ?>" class="tel btns callus"><?php echo $footer_setting->mobile_1; ?></a></p>
                    <p>Sales: <a href="tel:<?php echo str_replace(' ', '', $footer_setting->mobile_2); ?>" class="tel btns callus"><?php echo $footer_setting->mobile_2; ?></a></p>
                </div>
            </div>
            <div class="col-sm-4 footer-box"><i class="icon icon-envelope"></i>
                <div class="footer-box-content">
                    <h3>Mail Us</h3>
                    <img src="<?php echo base_url(); ?>asset/images/mailid.png" alt="Mail Id">
                </div>
            </div>
            <div class="col-sm-4 footer-box"><i class="fa fa-share"></i>
                <div class="footer-box-content">
                    <h3>Follow Us</h3>
                    <div class="Social-Footer">
                        <ul class="icons-ul">
                            <li class="facebook"><a href="<?php echo $footer_setting->facebook; ?>" rel="nofollow" target="_blank"><span class="fa fa-facebook hvr-icon-up"></span></a></li>
                            <li class="twitter"><a href="<?php echo $footer_setting->twitter; ?>" rel="nofollow" target="_blank"><img src="https://www.cloudi5.com/asset/images/twitter-white-logo.png" style="height:13px;"></a></li>
                            <li class="instagram"><a href="<?php echo $footer_setting->instagram; ?>" rel="nofollow" target="_blank"><span class="fa fa-instagram hvr-icon-up"></span></a></li>
                            <li class="linkedin"><a href="<?php echo $footer_setting->linkedin; ?>" rel="nofollow" target="_blank"><span class="fa fa-linkedin hvr-icon-up"></span></a></li>
                            <li class="pinterest"><a href="<?php echo $footer_setting->pinterest; ?>" rel="nofollow" target="_blank"><span class="fa fa-pinterest hvr-icon-up"></span></a></li>
                            <li class="youtube"><a href="<?php echo $footer_setting->youtube; ?>" rel="nofollow" target="_blank"><span class="fa fa-youtube hvr-icon-up"></span></a></li>
                            <li class="thread"><a href="<?php echo $footer_setting->google_plus; ?>" rel="nofollow" target="_blank"><span class=""><img src="<?php echo base_url(); ?>asset/images/thread-icon.png" /></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>About Us</h3>
                    <div class="">
                        <p>Earnest team committed to delivering the best in industry. We’re more than happy to deliver you the best! Reach out to partner with us.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Product & Services</h3>
                    <ul class="footer-services-list">
                        <li><a href="<?php echo base_url(); ?>web-development-company-in-coimbatore">Web Development</a></li>
                        <li><a href="<?php echo base_url(); ?>website-design">Web Design</a></li>
                        <li><a href="<?php echo base_url(); ?>mobile-application-development-android-app">Android App Development</a></li>
                        <li><a href="<?php echo base_url(); ?>digital-marketing-company-in-coimbatore">Digital Marketing</a></li>
                        <li><a href="<?php echo base_url(); ?>school-management-software">School Management Software</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Quick Links</h3>
                    <ul class="quick-links-list">
                        <li><a href="<?php echo base_url('portfolio'); ?>">Portfolio</a></li>
                        <li><a href="<?php echo base_url(); ?>blog">Blog</a></li>
                        <li><a href="<?php echo base_url(); ?>careers">Careers</a></li>
                        <li><a href="<?php echo base_url(); ?>aboutus">About Us</a></li>
                        <li><a href="<?php echo base_url(); ?>contactus">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Contacts</h3>
                    <ul class="footer-contact-list">
                        <li><span>Address :</span> <?php echo $footer_setting->address_1; ?><br> <?php echo $footer_setting->address_2 .' '. $footer_setting->address_3; ?> <br><?php echo $footer_setting->city .' '. $footer_setting->pincode; ?>, <?php echo $footer_setting->state; ?>, India</li>
                        <li><span>Email:</span> <img src="<?php echo base_url(); ?>asset/images/footer-mail.png" alt="Mail Id"></li>
                        <li><span>Sales:</span> <?php echo $footer_setting->mobile_2; ?></li>
                        <li><span>Support:</span> <?php echo $footer_setting->mobile_1; ?></li>
                        <li><span>Careers:</span> +91 95970 16798</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <p>Copyright © <?php echo date("Y"); ?> Cloudi5 Technologies. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                    <p>
                        <a href="<?php echo base_url('terms'); ?>">Terms and Conditions</a> |
                        <a href="<?php echo base_url('privacy-policy'); ?>">Privacy Policy</a> |
                        <a href="<?php echo base_url('cancellation-policy'); ?>">Cancellation Policy</a> | <a href="<?php echo base_url('refund-policy'); ?>">Refund Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="lines hide-section">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</footer>
<!-- Footer end-->
<div class="back-to-top affix" id="back-to-top" data-spy="affix" data-offset-top="10">
    <button class="btn btn-danger content-desktop" title="Back to Top">
        <i class="fa fa-angle-double-up"></i>
    </button>
</div>
<!-- End Back to Top-->
<div class="whats_app"><a href="https://api.whatsapp.com/send?phone=919159913344" rel="nofollow" target="_blank"><img src="<?php echo base_url(); ?>asset/images/whats_app.png" alt="919159913344" class="whats_app zoom-in-zoom-out" title="919159913344"></a> </div>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5b2260a370971d3d70af7388/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<script type="text/javascript">
    $(window).on('load', function() {
        setTimeout(function() {
            $('#subscribeModal').modal('show');
        }, 5000);
    });
    $('#Reloadpage').click(function() {
        location.reload();
    });
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TTPGBC2');
</script>
<!-- End Google Tag Manager -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-856568699">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-856568699');
</script>