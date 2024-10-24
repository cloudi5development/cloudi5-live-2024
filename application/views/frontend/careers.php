<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>
        <?php if ($meta) {
            echo $meta->title ? $meta->title : "Cloudi5 - Android Developer Job | Web Designer Vacancy | Coimbatore";
        } else {
            echo "Cloudi5 - Android Developer Job | Web Designer Vacancy | Coimbatore";
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
    <link rel="canonical" href="<?php echo base_url(); ?>careers" />
    <?php $this->load->view('frontend/common-css'); ?>
    <?php $this->load->view('frontend/fb-pixel-code'); ?>
</head>

<body id="cont1">
    <?php include('header.php'); ?>
    <div class="banner-area about-banner" id="banner-area" alt="Job Openings in Coimbatore">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="banner-heading">
                        <h1 class="banner-title2">Starting a New Chapter in Your Career? Begin Here with Cloudi5</h1>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li>Career</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="career-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <?php foreach ($careers as $res_career) { ?>
                        <div class="job-verticle-list">
                            <div class="vertical-job-card">
                                <div class="vertical-job-header">
                                    <div class="vrt-job-cmp-logo">
                                        <a href="#"><i class="<?php echo $res_career->icon; ?> pt-9" aria-hidden="true"></i></a>
                                    </div>
                                    <h4><a href="#"><?php echo $res_career->title; ?></a></h4>
                                    <span class="pull-right vacancy-no">Number of Vacancy <span class="v-count"><?php echo $res_career->no_of_vacancy; ?></span></span>
                                </div>
                                <div class="vertical-job-body">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-8">
                                            <ul class="can-skils">
                                                <li><strong>Job Id: </strong><?php echo $res_career->job_id; ?></li>
                                                <li><strong>Job Type: </strong><?php echo $res_career->job_type; ?></li>
                                                <li><strong>Skills: </strong>
                                                    <?php
                                                    $skills = explode(',', $res_career->skills);
                                                    foreach ($skills as $skill) {
                                                    ?>
                                                        <span class="skill-tag"><?php echo $skill; ?></span>
                                                    <?php } ?>
                                                </li>
                                                <li><strong>Experience: </strong><?php echo $res_career->experience; ?></li>
                                                <li><strong>Location: </strong><?php echo $res_career->location; ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="vrt-job-act">
                                                <a href="<?php echo base_url('careers-details/' . strtolower($res_career->job_id) . '/' . $res_career->slug) ?>" class="btn-job theme-btn job-apply">View & Apply Job</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vertical-job-footer">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <p>Send your resume to <b class="send-resume">careers@cloudi5.com</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <br>
    <?php include('footer.php'); ?>
    <!-- Apply Job Popup -->
    <div class="modal fade" id="apply-job" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="myModalLabel2">
                <div class="modal-body">
                    <div class="text-center">
                        <img src="<?php echo base_url(); ?>assets/images/logo.jpg" class="img-responsive" alt="Logo">
                        <h4 class="mrg-0">Career</h4>
                    </div>
                    <form>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label>Upload CV</label>
                            <div class="custom-file-upload">
                                <input type="file" id="file" name="myfiles[]" multiple />
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control height-120" placeholder="Your Message"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="button" class="btn theme-btn btn-m">Save & Apply</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Apply Job Popup -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/form-validation.js"></script>
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