<div class="robust-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-body">
		<?php echo message_box('success'); ?>
		<?php echo message_box('error'); ?>
		<section id="horizontal-form-layouts">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title" id="horz-layout-colored-controls"><?php echo $page_title; ?><a style="float:right;" href="<?php echo base_url('job_post');?>" class="btn btn-danger">Back </a></h4>
					</div>
					<div class="card-body collapse in">
					   <div class="card-block">
					 <?php
							//echo get_form_tag($save_job_post);?>
							<form class="form form-horizontal" id="FormValidation" method="post" action="<?php echo base_url();?>job_post/save_job_post" enctype="multipart/form-data">	
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-6">
									<?php 
										echo get_input_tag_required('text','Job Post Date','job_post_date','','', date('d-m-Y'),'readonly');
										echo get_input_tag_required('text','Job ID','job_id','','',$jobId,'readonly');
									?>
									<div class="form-group row">
										<label class="col-md-3 label-control">Job Type<span class="required"> *</span></label>
										<div class="col-md-9">
										  <select name="job_type" class="form-control required selectpicker" data-live-search="true" title="Job Type">
											<option value="">Select Job Type</option>
											<option value="Full Time">Full Time</option>
											<option value="Part Time">Part Time</option>
											<option value="Freelance">Freelance</option>
											
										  </select>
										</div>
									</div>
									<?php
										echo get_input_tag_required('text','Job Title','title','','');
										echo get_textarea('Qualification','qualification','','','');
										echo get_input_tag_required('text','Experience','experience','','');
										echo get_input_tag_required('text','Location','location','','');
										echo get_input_tag_required('text','Skills','skills','','');
									?>
									
									</div>
									<div class="col-md-6">
									    <?php 
									    echo get_input_tag_required('number','No Of Vacancy','no_of_vacancy','','');
									    echo get_input_tag_required('number','Sorting Order','sort','','');
									    ?>
										<div class="form-group row">
    										<label class="col-md-3 label-control">Job Icon<span class="required"> *</span></label>
    										<div class="col-md-9">
    										  <select name="icon" class="form-control required selectpicker" data-live-search="true" title="Job Icon">
    											<option value="">Select Job Icon</option>
    											<option value="fa fa-mobile">Mobile App</option>
    											<option value="fa fa-globe">Web & Graphic Designer</option>
    											<option value="fa fa-phone">Tele Calling</option>
    											<option value="fa fa-line-chart">Digital Marketing</option>
    											
    										  </select>
    										</div>
    									</div>
    									<div class="form-group row">
    										<label class="col-md-3 label-control">Status<span class="required"> *</span></label>
    										<div class="col-md-9">
    										  <select name="status" class="form-control required" title="Status">
    											<option value="Active">Active</option>
    											<option value="Inactive">Inactive</option>
    											
    										  </select>
    										</div>
    									</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">Meta Title<span class="required"></span></label>
											<div class="col-md-9">
												<textarea class="form-control" placeholder="Meta Keyword" name="meta_title"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">Meta Description<span class="required"></span></label>
											<div class="col-md-9">
												<textarea class="form-control" placeholder="Meta Description" name="meta_description"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">Meta Keyword<span class="required"></span></label>
											<div class="col-md-9">
												<textarea class="form-control" placeholder="Meta Keyword" name="meta_keyword"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-md-2 label-control">Job Description<span class="required">*</span></label>
										<div class="col-md-8">
										  <textarea class="form-control required" id="description" placeholder="Description" name="job_description"></textarea>
										</div>
									</div>
								</div>
							</div>
						<?php	
							echo get_submit_tag();
							echo get_form_tag_close();
						?>
					   </div>
					</div>
				</div>
			</div>
		</div>
		</section>
		</div>
	</div>
</div>
<!-- JS Content Start -->
<?php $this->load->view('layout/common_js'); ?>
<script src="//cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
<script type="text/javascript">	
$(document).ready(function(){
	CKEDITOR.replace('description'); 
});


</script>
<!-- JS Content End -->
