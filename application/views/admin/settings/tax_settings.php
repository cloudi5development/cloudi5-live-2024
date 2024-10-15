<section id="horizontal-form-layouts">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="horz-layout-colored-controls"><?php echo $page_title; ?></h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						 <form class="form form-horizontal" id="FormValidation"  novalidate method="post" action="<?php echo base_url('settings/update_tax_settings/');?>"  enctype="multipart/form-data">
							<div class="">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-md-3 label-control">GSTIN<span class="required">*</span></label>
											<div class="col-md-9">
											  <input type="hidden" class="form-control" placeholder="Tax ID" name="tax_id" value="<?php if(!empty($tax->tax_id)){ echo $tax->tax_id;}?>">
											  <input type="text" class="form-control required" placeholder="GSTIN" name="gstin" value="<?php if(!empty($tax->gstin)){ echo $tax->gstin;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">Tax Name<span class="required">*</span></label>
											<div class="col-md-9">
											  <input type="text" class="form-control required" placeholder="Tax Name" name="name" value="<?php if(!empty($tax->name)){ echo $tax->name;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">Percentage<span class="required">*</span></label>
											<div class="col-md-9">
											  <input type="number" class="form-control required" placeholder="Percentage" name="percentage" value="<?php if(!empty($tax->percentage)){ echo $tax->percentage;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">CGST<span class="required">*</span></label>
											<div class="col-md-9">
											  <input type="number" class="form-control required" placeholder="CGST" name="cgst" value="<?php if(!empty($tax->cgst)){ echo $tax->cgst;}?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">SGST<span class="required">*</span></label>
											<div class="col-md-9">
											  <input type="number" class="form-control required" placeholder="SGST" name="sgst" value="<?php if(!empty($tax->sgst)){ echo $tax->sgst;}?>">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-actions center">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>