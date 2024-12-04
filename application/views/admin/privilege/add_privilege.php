<div class="robust-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-body">
		<?php echo message_box('success'); ?>
		<?php echo message_box('error'); ?>
		<section id="basic-form-layouts">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title" id="horz-layout-colored-controls"><a style="float:right;" href="<?php echo base_url('privilege');?>" class="btn btn-danger">Back </a></h4>
					</div>
					<div class="card-body collapse in">
					   <div class="card-block">
							<form class="form form-horizontal" id="FormValidation"  novalidate method="post" action="<?php echo base_url('privilege/save_privilege/');?>"  enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-md-4 label-control">User Name<span class="required">*</span></label>
										<div class="col-md-8">
										   <select name="user_id[]" id="user_id" multiple="multiple"  class="form-control required">
											<?php
												foreach($users as $user){ ?>
												<option value="<?php echo $user->id;?>"><?php echo $user->name;?></option>
												<?php } ?>
											</select>
										  <label id="user_id-error" class="error" for="user_id"></label>
										</div>
									</div>
									
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="col-sm-7">
										<table class="table table-bordered datatable" width="100%">
										<thead>
											<tr>
												<th style="color:red;text-align: center;font-weight: bold;">Modules</th>
												<th colspan="5" style="color:red;text-align: center;font-weight: bold;">Enable/Disable</th>
												
											</tr>
											<tr>
												<th colspan="4"></th>
												<th colspan="">Select All</th>
												<th colspan="">
													<input type="checkbox" name="all_modules" value="1" id="select_all" />
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th></th>
												<th>Add</th>
												<th>Edit</th>
												<th>View</th>
												<th>Delete</th>
												<th>Download</th>
											</tr>
											<tr>
												<th class="selectAll">Portfolio</th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[portfolio][add]" value="1">
												</td>
												<td>
													<input class="checkbox" type="checkbox" name="privilege[portfolio][edit]" value="1">
												</td>
												<td>
													<input class="checkbox" type="checkbox" name="privilege[portfolio][view]" value="1"></td>
												<td>
													<input class="checkbox" type="checkbox" name="privilege[portfolio][delete]" value="1">
												</td>
												<td></td>
											</tr>
											<tr>
												<th class="selectAll">Blog Category</th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[category][add]" value="1">
												</td>
												<td>
													<input class="checkbox" type="checkbox" name="privilege[category][edit]" value="1">
												</td>
												<td>
													<input class="checkbox" type="checkbox" name="privilege[category][view]" value="1"></td>
												<td>
													<input class="checkbox" type="checkbox" name="privilege[category][delete]" value="1">
												</td>
												<td></td>
											</tr>
											<tr>
												<th>Blog Post </th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[blog][add]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[blog][edit]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[blog][view]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[blog][delete]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[blog][download]" value="1">
												</td>
											</tr>
											<tr>
												<th>Blog Comments </th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[comments][add]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[comments][edit]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[comments][view]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[comments][delete]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[comments][download]" value="1">
												</td>
											</tr>
											<tr>
												<th>Job Post </th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[job_post][add]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[job_post][edit]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[job_post][view]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[job_post][delete]" value="1">
												</td>
												<td class="selectAll">
													
												</td>
											</tr>
											<tr>
												<th>Job Application </th>
												<td class="selectAll">
													
												</td>
												<td class="selectAll">
													
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[job_application][view]" value="1">
												</td>
												<td class="selectAll">
													
												</td>
												<td class="selectAll">
													
												</td>
											</tr>
											<tr>
												<th>Contact Enquiries </th>
												<td class="selectAll"></td>
												<td class="selectAll"></td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[enquiries][view]" value="1">
												</td>
												<td class="selectAll"></td>
												<td class="selectAll"></td>
											</tr>
											<tr>
												<th>Write For Us Enquiries </th>
												<td class="selectAll"></td>
												<td class="selectAll"></td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[write_for_us_enquiries][view]" value="1">
												</td>
												<td class="selectAll"></td>
												<td class="selectAll"></td>
											</tr>
											<tr>
												<th>News Letter </th>
												<td class="selectAll"></td>
												<td class="selectAll"></td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[newsletter][view]" value="1">
												</td>
												<td class="selectAll"></td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[newsletter][download]" value="1">
												</td>
											</tr>
											<tr>
												<th>Subscribe </th>
												<td class="selectAll"></td>
												<td class="selectAll"></td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[subscribe][view]" value="1">
												</td>
												<td class="selectAll"></td>
												<td class="selectAll"></td>
											</tr>
											<tr>
												<th>Privilege </th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[privilege][add]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[privilege][edit]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[privilege][view]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[privilege][delete]" value="1">
												</td>
												<td></td>
											</tr>
											<tr>
												<th>Meta Tag Pages</th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[meta_pages][add]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[meta_pages][edit]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[meta_pages][view]" value="1">
												</td>
												<td class="selectAll">
													
												</td>
											</tr>
											<tr>
												<th>Site Settings</th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[settings][add]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[settings][edit]" value="1">
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[settings][view]" value="1">
												</td>
												<td class="selectAll">
													
												</td>
											</tr>
										</tbody>
										</table>
	
									</div>
								
							</div>
						</div>	   
						<div class="form-actions center">
							<button type="submit" class="btn btn-success">Submit</button>
							<a href="<?php echo base_url('privilege');?>" class="btn btn-danger">Back </a>
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
<script type="text/javascript">
	$(document).ready(function() 
	{
		$('#user_id').multiselect({ 
		  includeSelectAllOption: true,
		   enableFiltering:true         
		});
	
		$('#assign_employee_id').multiselect({
			includeSelectAllOption: true,
			enableFiltering:true         
		});
	});
	$(document).ready(function(){
		$('#select_all').on('click',function(){
			if(this.checked){
				$('.checkbox').each(function(){
					this.checked = true;
				});
			}else{
				 $('.checkbox').each(function(){
					this.checked = false;
				});
			}
		});
		
		$('.checkbox').on('click',function(){
			if($('.checkbox:checked').length == $('.checkbox').length){
				$('#select_all').prop('checked',true);
			}else{
				$('#select_all').prop('checked',false);
			}
		});
	});
	
	function getEmployee(designation_id) {
		$.ajax({
			url: '<?php echo base_url();?>privilege/getEmployee/' + designation_id ,
			success: function(response)
			{	
				jQuery('#user_id').html(response);
				$("#user_id").multiselect('destroy');
				$("#user_id").multiselect();
			}
		});
	}
	
</script>