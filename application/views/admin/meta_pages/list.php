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
						<h4 class="card-title" id="horz-layout-colored-controls"><?php echo $page_title; ?><a style="float:right;" href="<?php echo base_url('category');?>" class="btn btn-danger">Back </a></h4>
					</div>
					<div class="card-body collapse in">
					   <div class="card-block">
					 <?php
							echo get_form_tag($save_meta_tags);?>
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-6">
										<?php
										$sno=1; 
										 foreach($pages as $page){
											$meta = $this->db->select('*')->from('meta_tags')->where('page',$page)->get()->row();
										?>
										<p style="text-align:center;"><b> <?php echo ucwords(str_replace('_',' ',$page));?> Page </b></p>
										<div class="form-group row">
											<label class="col-md-4 label-control">Meta title <span class="required">*</span></label>
											<div class="col-md-8">
												<textarea class="form-control" rows="2" placeholder="Meta Title" name="title[<?php echo $page;?>]" autocomplete="off"><?php if($meta){echo $meta->title;} ?></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">Meta Description <span class="required">*</span></label>
											<div class="col-md-8">
												<textarea class="form-control" rows="4" placeholder="Meta Description" name="description[<?php echo $page;?>]" autocomplete="off"><?php if($meta){echo $meta->description;} ?></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-4 label-control">Meta Keyword <span class="required">*</span></label>
											<div class="col-md-8">
												<textarea class="form-control" rows="4" placeholder="Meta Keyword" name="keyword[<?php echo $page;?>]" ><?php if($meta){echo $meta->keyword;} ?></textarea>
											</div>
										</div>
										<?php if($sno%5==0){?>
										</div>
										<div class="col-md-6">
										<?php } ?>
										 <?php $sno++;} ?>
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
<!-- JS Content End -->