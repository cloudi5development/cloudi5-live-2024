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
							<form class="form form-horizontal" id="FormValidation" method="post" action="<?php echo base_url();?>job_post/update_job_post/<?php echo $job_post->job_post_id;?>" enctype="multipart/form-data">	
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-6">
									<?php 
										echo get_input_tag_required('text','Job Post Date','job_post_date','','', date('d-m-Y',strtotime($job_post->job_post_date)),'readonly');
										echo get_input_tag_required('text','Job ID','job_id','','',$job_post->job_id,'readonly');
									?>
									<div class="form-group row">
										<label class="col-md-3 label-control">Job Type<span class="required"> *</span></label>
										<div class="col-md-9">
										  <select name="job_type" class="form-control required selectpicker" data-live-search="true" title="Job Type">
											<option value="">Select Job Type</option>
											<option value="Full Time" <?php if($job_post->job_type =='Full Time'){ echo 'selected'; }?>>Full Time</option>
											<option value="Part Time" <?php if($job_post->job_type =='Part Time'){ echo 'selected'; }?>>Part Time</option>
											<option value="Freelance" <?php if($job_post->job_type =='Freelance'){ echo 'selected'; }?>>Freelance</option>
											
										  </select>
										</div>
									</div>
									<?php
										echo get_input_tag_required('text','Job Title','title','','',$job_post->title);
										echo get_textarea('Qualification','qualification','','','',$job_post->qualification);
										echo get_input_tag_required('text','Experience','experience','','',$job_post->experience);
										echo get_input_tag_required('text','Location','location','','',$job_post->location);
										echo get_input_tag_required('text','Skills','skills','','',$job_post->skills);
									?>
									
									</div>
									<div class="col-md-6">
									    <?php 
									    echo get_input_tag_required('number','No Of Vacancy','no_of_vacancy','','',$job_post->no_of_vacancy);
									    echo get_input_tag_required('number','Sorting Order','sort','','',$job_post->sort);
									    ?>
										<div class="form-group row">
    										<label class="col-md-3 label-control">Job Icon<span class="required"> *</span></label>
    										<div class="col-md-9">
    										  <select name="icon" class="form-control required selectpicker" data-live-search="true" title="Job Icon">
    											<option value="">Select Job Icon</option>
    											<option value="fa fa-mobile" <?php if($job_post->icon =='fa fa-mobile'){ echo 'selected';}?>>Mobile App</option>
    											<option value="fa fa-globe" <?php if($job_post->icon =='fa fa-globe'){ echo 'selected';}?>>Web & Graphic Designer</option>
    											<option value="fa fa-phone" <?php if($job_post->icon =='fa fa-phone'){ echo 'selected';}?>>Tele Calling</option>
    											<option value="fa fa-line-chart" <?php if($job_post->icon =='fa fa-line-chart'){ echo 'selected';}?>>Digital Marketing</option>
    											
    										  </select>
    										</div>
    									</div>
    									<div class="form-group row">
    										<label class="col-md-3 label-control">Status<span class="required"> *</span></label>
    										<div class="col-md-9">
    										  <select name="status" class="form-control required" title="Status" <?php if($job_post->status =='Active'){ echo 'selected';}?>>
    											<option value="Active" <?php if($job_post->status =='Inactive'){ echo 'selected';}?>>Active</option>
    											<option value="Inactive">Inactive</option>
    											
    										  </select>
    										</div>
    									</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">Meta Title<span class="required"></span></label>
											<div class="col-md-9">
												<textarea class="form-control" placeholder="Meta Keyword" name="meta_title"><?php echo $job_post->meta_title;?></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">Meta Description<span class="required"></span></label>
											<div class="col-md-9">
												<textarea class="form-control" placeholder="Meta Description" name="meta_description"><?php echo $job_post->meta_description;?></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">Meta Keyword<span class="required"></span></label>
											<div class="col-md-9">
												<textarea class="form-control" placeholder="Meta Keyword" name="meta_keyword"><?php echo $job_post->meta_keyword;?></textarea>
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
										  <textarea class="form-control required" id="description" placeholder="Description" name="job_description"><?php echo $job_post->job_description;?></textarea>
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
