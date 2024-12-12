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
						<h4 class="card-title" id="horz-layout-colored-controls"><?php echo $page_title; ?><a style="float:right;" href="<?php echo base_url('portfolio/lists');?>" class="btn btn-danger">Back </a></h4>
					</div>
					<div class="card-body collapse in">
					   <div class="card-block">
							<form id="FormValidation" class="form form-horizontal" method="post" action="<?php echo base_url();?>portfolio/save_portfolio" enctype="multipart/form-data">	
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-md-3 label-control">Category<span class="required"> *</span></label>
											<div class="col-md-9">
											<select name="category_id" class="form-control required selectpicker" data-live-search="true" title="Category">
												<option value="">Select Category</option>
												<?php foreach($category as $res_cat){ ?>
												<option value="<?php echo $res_cat->category_id;?>"><?php echo $res_cat->title;?></option>
												<?php }?>
											</select>
											</div>
										</div>
										<?php
											echo get_input_tag_required('text','Project Title','title','','');
											echo get_input_tag_required('text','Company Name','company_name','','');
											echo get_input_tag_required('text','Services','services','','');
											echo get_input_tag_required('text','Service Categories','service_categories','','');
											echo get_input_tag_required('text','Languages','languages','','');
										?>
										<div class="form-group row">
											<label class="col-md-3 label-control">Logo</label>
											<div class="col-md-9">
												<input type="file" name="thumbnail" class="label-control form-control" value="" id="">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">Image<span class="required">*</span></label>
											<div class="col-md-9">
												<input type="file" name="thumbnail_popup" class="label-control form-control required" value="" id="">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-md-3 label-control">Display Home Page<span class="required">*</span></label>
											<div class="col-md-9">
											<select name="display_home_page" class="form-control required">
												<option value="No">No</option>
												<option value="Yes">Yes</option>
											</select>
											</div>
										</div>
									<?php
											echo get_input_tag('text','Website URL','website_url','','');
										?>
										<div class="form-group row">
											<label class="col-md-3 label-control">Display Website URL<span class="required">*</span></label>
											<div class="col-md-9">
											<select name="display_website_url" class="form-control required">
												<option value="No">No</option>
												<option value="Yes">Yes</option>
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
										<label class="col-md-3 label-control">Project Overview<span class="required">*</span></label>
										<div class="col-md-9">
										  <textarea class="form-control required" id="description" placeholder="Description" name="overview"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<table class="table table-bordered" id="portfolioTable">
										<thead>
											<tr>
												<th>Portfolio Image<span class="required" style="color:red;">*</span></th>
												<th>Remove</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="form-group">
													<input type="hidden" class="form-control" name="image_id[]" value="">
													<input type="file" name="image[]" class="label-control form-control required  required" value="" id="">
												</td>
												<td></td>
											<tr>
										</tbody>
										<tfoot>
										<th colspan="2"><a href="javascript:void(0);" class="add_portfolio_image btn btn-info "><i class="icon-plus"></i></a></th>
										</tfoot>
									</table>
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
<script type="text/javascript">
$(document).ready(function () {
	$(".add_portfolio_image").click(function () {
		$("table#portfolioTable").append(
				'<tbody><tr><td class="form-group"><input type="hidden" class="form-control" name="image_id[]" value=""><input type="file" name="image[]" class="label-control  form-control " value="" id=""></td><td><a href="javascript:void(0);" class="remImage btn btn-reset btn-circle"><i class="icon-remove"> </i></a></td><tr></tbody>'
				);
	});
	$("#portfolioTable").on('click', '.remImage', function () {
		var $row = $(this).parent().parent().remove();
	});
});
</script>
<!-- JS Content End -->
