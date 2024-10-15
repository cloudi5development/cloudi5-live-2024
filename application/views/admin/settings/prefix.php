<div class="robust-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-body">
		<section id="basic-form-layouts">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title" id="horz-layout-colored-controls"></h4>
					</div>
					<div class="card-body collapse in">
					   <div class="card-block">
							<table id="EmptyTable" class="table table-striped table-bordered display" width="100%">
							<thead>
								<tr>
									<th class="active">Sl</th>
									<th class="active">Prefix Type</th>
									<th class="active">Prefix Code</th>
									<th class="active">Sufix Code</th>
									<th class="active">Update</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$n=1;
								if (!empty($manage_prefix)){ foreach ($manage_prefix as $get) {
								?>
								<tr>
									<td ><?php echo  $n ?></td>
									<form role="form" enctype="multipart/form-data" id="FormValidation" action="<?php echo base_url();?>settings/update_prefix" method="post">
										<td><?php echo $get->prefix_type ?></td>
										<!-- Update Prefix Code-->
										<td>
											<input type="hidden" class="form-control" name="prefix_id"  value="<?php echo $get->prefix_id ?>">
											<input type="text" class="form-control" name="prefix_code"  value="<?php echo $get->prefix_code ?>">
										</td>
										<td><input type="text" class="form-control" name="sufix_code"  value="<?php echo $get->sufix_code ?>"></td>
										<td >
											<button type="submit"  value="Click"><i class="icon-edit"></i></button>
										</td>
									</form>
								</tr>
								<?php 
								$n++;
								} } else { ?>
								<td colspan="6">
								<strong>There is no record for display</strong>
								</td>
								<?php } ?>
							</tbody>
						</table>
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