<div class="robust-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-body">
		<?php echo message_box('success'); ?>
		<?php echo message_box('error'); ?>
		<section id="basic-form-layouts">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body collapse in">
					   <div class="card-block">
							<form class="form form-horizontal" id="FormValidation"  novalidate method="post" action="<?php echo base_url('settings/uploadSiteMap');?>"  enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-6">
										<p style="text-align:center;"><b> Site Map Settings</b></p>	
										<div class="form-group row">
											<label class="col-md-4 label-control">Site Map File<span class="required">*</span></label>
											<div class="col-md-8">
												<input type="file" id="sitemap" class="form-control required" name="sitemap" accept="text/xml">
												<small class="text-info"> ( Only XML File Format Supported* )</small>
											</div>
										</div>
									</div>
									
								</div>
								<div class="form-actions center">
									<button type="submit" class="btn btn-info ">Submit</button>
								</div>
							</form>
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