<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php if ($career_details) {
				echo $career_details->meta_title;
			} ?></title>
	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php if ($career_details) {
											echo $career_details->meta_description;
										} ?>">
	<meta name="keywords" content="<?php if ($career_details) {
										echo $career_details->meta_keyword;
									} ?>">
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
	<link rel="canonical" href="<?php echo base_url() . 'careers-details/' . strtolower($career_details->job_id) . '/' . $career_details->slug; ?>" />	
	<?php $this->load->view('frontend/common-css'); ?>

</head>

<body id="cont1">
	<?php include('header.php'); ?>
	<div class="banner-area about-banner resp-banner" id="banner-area" alt="Job Openings in Coimbatore">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col">
					<div class="banner-heading">
						<h1 class="banner-title2"><?php echo $career_details->title; ?> Jobs </h1>
						<ol class="breadcrumb">
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li>Career</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if ($career_details) {  ?>
		<section class="career-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<?php echo message_box('success'); ?>
						<?php echo message_box('error'); ?>
						<div class="job-verticle-list">
							<div class="vertical-job-card">
								<div class="vertical-job-header">
									<div class="vrt-job-cmp-logo">
										<a href="#"><i class="<?php echo $career_details->icon; ?> pt-9" aria-hidden="true"></i></a>
									</div>
									<h4><a href="#"><?php echo $career_details->title; ?></a></h4>
									<span class="pull-right vacancy-no">Number of Vacancy <span class="v-count"><?php echo $career_details->no_of_vacancy; ?></span></span>
								</div>
								<div class="vertical-job-body">
									<div class="row">
										<div class="col-md-9 col-sm-8">
											<ul class="can-skils">
												<li><strong>Job Id: </strong><?php echo $career_details->job_id; ?></li>
												<li><strong>Job Type: </strong><?php echo $career_details->job_type; ?></li>
												<?php if (!empty($career_details->job_type)) { ?>
													<li><strong>Qualification: </strong><?php echo $career_details->qualification; ?></li>
												<?php } ?>
												<li><strong>Skills: </strong>
													<?php
													$skills = explode(',', $career_details->skills);
													foreach ($skills as $skill) {
													?>
														<span class="skill-tag"><?php echo $skill; ?></span>
													<?php } ?>
												</li>
												<li><strong>Experience: </strong><?php echo $career_details->experience; ?></li>
												<li><strong>Location: </strong><?php echo $career_details->location; ?></li>
											</ul>
										</div>
									</div>
								</div>
								<?php if (!empty($career_details->job_description)) { ?>
									<div class="vertical-job-footer">
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<?php echo $career_details->job_description; ?>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<form method="post" id="FormValidation" action="<?php echo base_url('careerform') ?>" enctype="multipart/form-data">
							<div class="job-verticle-list">
								<div class="vertical-job-card">
									<div class="vertical-job-header">
										<h4><a href="#">Submit Your Application</a></h4>
									</div>
									<div class="vertical-job-body">
										<div class="row">
											<div class="col-md-9 col-sm-8">
												<input name="website" class="form-control d-none" style="display:none;" value="">
												<input type="hidden" name="job_post_id" class="form-control" value="<?php echo $career_details->job_post_id; ?>">
												<input type="hidden" name="slug" class="form-control" value="<?php echo $career_details->slug; ?>">
												<input type="hidden" name="job_id" class="form-control" value="<?php echo strtolower($career_details->job_id); ?>">
												<div class="form-group">
													<label>Name<span class="red-text">*</span></label>
													<input type="text" name="name" class="required form-control" placeholder="Name*" value="<?php echo set_value('name'); ?>">
													<div class="red-text">
														<?php echo form_error('name'); ?>
													</div>
												</div>
												<div class="form-group">
													<label>Email<span class="red-text">*</span></label>
													<input type="email" name="email" class="required form-control" placeholder="Email*" value="<?php echo set_value('email'); ?>">
													<div class="red-text">
														<?php echo form_error('email'); ?>
													</div>
												</div>
												<div class="form-group">
													<label>Phone<span class="red-text">*</span></label>
													<input type="text" name="mobile" class="required form-control" placeholder="Phone *" value="<?php echo set_value('mobile'); ?>"  oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)" />
													<div class="red-text">
														<?php echo form_error('mobile'); ?>
													</div>
												</div>
												<div class="form-group">
													<label>Experience<span class="red-text">*</span></label>
													<input type="text" name="experience" class="required form-control" placeholder="Experience *" value="<?php echo set_value('experience'); ?>">
													<div class="red-text">
														<?php echo form_error('experience'); ?>
													</div>
												</div>
												<div class="form-group">
													<label>Upload CV<span class="red-text">*</span></label>
													<div class="custom-file-upload">
														<input type="file" class="required " name="resume" />
													</div>
													<div class="red-text">
														<?php echo form_error('resume'); ?>
													</div>
												</div>
												<div class="form-group">
													<label>Cover Letter<span class="red-text">*</span></label>
													<textarea class="form-control height-120 required " name="message" placeholder="Cover Letter *"><?php echo set_value('message'); ?></textarea>
													<div class="red-text">
														<?php echo form_error('message'); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="vertical-job-footer">
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="form-group text-center">
													<button type="submit" id="submit-button" class="btn theme-btn btn-m">Apply Now</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>
	<br>
	<?php include('footer.php'); ?>
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
	<script>
    $('#FormValidation').on('submit', function(e) {
        // Check if the form is valid before disabling the button
        if ($(this).valid()) {
            $('#submit-button').prop('disabled', true);
            $('#submit-button').text('Submitting...'); // Change button text (optional)
        }
    });
</script>


</body>

</html>