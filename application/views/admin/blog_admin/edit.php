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
						<h4 class="card-title" id="horz-layout-colored-controls"><?php echo $page_title; ?><a style="float:right;" href="<?php echo base_url('blog_admin');?>" class="btn btn-danger">Back </a></h4>
					</div>
					<div class="card-body collapse in">
					   <div class="card-block">
					 <?php
							//echo get_form_tag($update_blog);?>
					<form class="form form-horizontal" method="post" action="<?php echo base_url();?>blog_admin/update_blog/<?php echo $blog->blog_id;?>" enctype="multipart/form-data">	
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-6">
									<div class="form-group row">
										<label class="col-md-3 label-control">Category<span class="required"> *</span></label>
										<div class="col-md-9">
										  <select name="category_id" class="form-control required selectpicker" data-live-search="true" title="Category">
											<option value="">Select Category</option>
											<?php foreach($category as $res_cat){ ?>
											<option value="<?php echo $res_cat->category_id;?>" <?php if($blog->category_id == $res_cat->category_id){ echo 'selected';}?>><?php echo $res_cat->title;?></option>
											<?php }?>
										  </select>
										</div>
									</div>
									<?php
										echo get_input_tag_required('text','Blog Date','blog_date','','datepicker',$blog->blog_date);
										echo get_input_tag_required('text','Title','title','','',$blog->title);
									?>
									<div class="form-group row">
										<label class="col-md-3 label-control"><span class="required"></span></label>
										<div class="col-md-9">
										  <?php if($blog->image !='') { ?>
											<img src="<?php echo base_url();?><?php echo $blog->image; ?>" width="150px" height="150px">
										<?php }  else { ?>
											 <img src="<?php echo base_url();?>assets/images/user.jpg" alt="" width="100px" height="60px">
										<?php } ?>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">Image<span class="required">*</span></label>
											<div class="col-md-9">
											  <input type="file" name="image" class="fileUpload image form-control" errorCode="errorCodeimage" > 
											  <span style="color:red;">W:870 X H:500</span>
											  <p id="errorCodeimage" style="color:red;"></p>
											</div>
										</div>
									</div>	
									<?php
										echo get_input_tag('text','Image Alt Tag','image_alt_tag','','',$blog->image_alt_tag);
										echo get_input_tag('text','Author Name','author_name','','',$blog->author_name);
									?>
									
									<div class="form-group row">
										<label class="col-md-3 label-control"><span class="required"></span></label>
										<div class="col-md-9">
										  <?php if($blog->author_image !='') { ?>
											<img src="<?php echo base_url();?><?php echo $blog->author_image; ?>" width="150px" height="150px">
										<?php }  else { ?>
											 <img src="<?php echo base_url();?>assets/images/avatar.jpg" alt="" width="100px" height="60px">
										<?php } ?>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">Author Image<span class="required"></span></label>
											<div class="col-md-9">
											  <input type="file" name="author_image" class="fileUpload image form-control" errorCode="errorCodeauthor"> 
											  <span style="color:red;">W:100 X H:100</span>
											  <p id="errorCodeauthor" style="color:red;"></p>
											</div>
										</div>
									</div>	
									
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-md-3 label-control"><span class="required"></span></label>
											<div class="col-md-9">
											  <?php if($blog->ads_image !='') { ?>
												<img src="<?php echo base_url();?><?php echo $blog->ads_image; ?>" width="150px" height="150px">
											<?php }  else { ?>
												 <img src="<?php echo base_url();?>assets/images/avatar.jpg" alt="" width="100px" height="60px">
											<?php } ?>
											</div>
											<div class="form-group row">
												<label class="col-md-3 label-control">Ads Image<span class="required"></span></label>
												<div class="col-md-9">
												  <input type="file" name="ads_image" class="fileUpload image form-control" errorCode="errorCodeads"> 
												  <span style="color:red;">W:280 X H:363</span>
												  <p id="errorCodeads" style="color:red;"></p>
												</div>
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-md-3 label-control">Featured<span class="required"> *</span></label>
											<div class="col-md-9">
											<select name="featured" class="form-control required">
												<option value="No" <?php if($blog->featured =='No'){ echo 'selected';} ?>>No</option>
												<option value="Yes" <?php if($blog->featured =='Yes'){ echo 'selected';} ?>>Yes</option>
											</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">Meta Title<span class="required"></span></label>
											<div class="col-md-9">
												<textarea class="form-control" placeholder="Meta Keyword" name="meta_title"><?php echo $blog->meta_title; ?></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">Meta Description<span class="required"></span></label>
											<div class="col-md-9">
												<textarea class="form-control" placeholder="Meta Description" name="meta_description"><?php echo $blog->meta_description; ?></textarea>
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-md-3 label-control">Meta Keyword<span class="required"></span></label>
											<div class="col-md-9">
												<textarea class="form-control" placeholder="Meta Keyword" name="meta_keyword"><?php echo $blog->meta_keyword; ?></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-md-1 label-control">Description<span class="required">*</span></label>
										<div class="col-md-8">
										  <textarea class="form-control required" id="description" placeholder="Description" name="description"><?php echo $blog->description;?></textarea>
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