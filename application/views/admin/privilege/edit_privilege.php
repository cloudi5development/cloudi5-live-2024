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
							<form class="form form-horizontal" id="FormValidation"  novalidate method="post" action="<?php echo base_url('privilege/update_privilege/');?>"  enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									
									<div class="form-group row">
										<label class="col-md-4 label-control">User Name<span class="required">*</span></label>
										<div class="col-md-8">
										   <select name="user_id" id="user_id" class="form-control required selectpicker">
										   <?php 
										   $user = $this->db->select('id,name')->from('users')->where('id', $edit_data->user_id)->get()->row();
											    ?>
										   <option value="<?php echo $user->id;?>" ><?php echo $user->name;?></option>
											</select>
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
													<input type="checkbox" name="all_modules" value="1" id="select_all" <?php if(!empty($edit_data->all_modules)) { if($edit_data->all_modules == 1) echo 'checked'; } ?> />
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
											<?php 
											$rights_portfolio		= json_decode($edit_data->portfolio, TRUE);
											$rights_teams		= json_decode($edit_data->teams, TRUE);
											$rights_clients		= json_decode($edit_data->clients, TRUE);
											$rights_blog			= json_decode($edit_data->blog, TRUE);
											$rights_category		= json_decode($edit_data->category, TRUE);
											$rights_comments		= json_decode($edit_data->comments, TRUE);
											$rights_job_post		= json_decode($edit_data->job_post, TRUE);
											$rights_job_application	= json_decode($edit_data->job_application, TRUE);
											$rights_enquiries		= json_decode($edit_data->enquiries, TRUE);
											$rights_write_for_us_enquiries		= json_decode($edit_data->write_for_us_enquiries, TRUE);
											$rights_newsletter		= json_decode($edit_data->newsletter, TRUE);
											$rights_privilege		= json_decode($edit_data->privilege, TRUE);
											$rights_subscribe		= json_decode($edit_data->subscribe, TRUE);
											$rights_meta_pages		= json_decode($edit_data->meta_pages, TRUE);
											$rights_settings		= json_decode($edit_data->settings, TRUE);
											?>
											
											<tr>
												<th>Portfolio </th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[portfolio][add]" value="1" <?php if(!empty($rights_portfolio['add'])){ if($rights_portfolio['add']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[portfolio][edit]" value="1" <?php if(!empty($rights_portfolio['edit'])){ if($rights_portfolio['edit']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[portfolio][view]" value="1" <?php if(!empty($rights_portfolio['view'])){ if($rights_portfolio['view']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[portfolio][delete]" value="1" <?php if(!empty($rights_portfolio['delete'])){ if($rights_portfolio['delete']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll"></td>
											</tr>
											<tr>
												<th>Teams</th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[teams][add]" value="1" <?php if(!empty($rights_teams['add'])){ if($rights_teams['add']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[teams][edit]" value="1" <?php if(!empty($rights_teams['edit'])){ if($rights_teams['edit']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[teams][view]" value="1" <?php if(!empty($rights_teams['view'])){ if($rights_teams['view']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[teams][delete]" value="1" <?php if(!empty($rights_teams['delete'])){ if($rights_teams['delete']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll"></td>
											</tr>

											<tr>
												<th>Clients</th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[clients][add]" value="1" <?php if(!empty($rights_clients['add'])){ if($rights_clients['add']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[clients][edit]" value="1" <?php if(!empty($rights_clients['edit'])){ if($rights_clients['edit']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[clients][view]" value="1" <?php if(!empty($rights_clients['view'])){ if($rights_clients['view']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[clients][delete]" value="1" <?php if(!empty($rights_clients['delete'])){ if($rights_clients['delete']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll"></td>
											</tr>


									
				
											<tr>
												<th>Blog Category </th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[category][add]" value="1" <?php if(!empty($rights_category['add'])){ if($rights_category['add']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[category][edit]" value="1" <?php if(!empty($rights_category['edit'])){ if($rights_category['edit']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[category][view]" value="1" <?php if(!empty($rights_category['view'])){ if($rights_category['view']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[category][delete]" value="1" <?php if(!empty($rights_category['delete'])){ if($rights_category['delete']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[category][download]" value="1" <?php if(!empty($rights_category['download'])){ if($rights_category['download']==1) echo 'checked'; } ?>>
												</td>
											</tr>
											<tr>
												<th class="selectAll">Blog Post</th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[blog][add]" value="1" <?php if(!empty($rights_blog['add'])){ if($rights_blog['add']==1) echo 'checked'; } ?>>
												</td>
												<td>
													<input class="checkbox" type="checkbox" name="privilege[blog][edit]" value="1" <?php if(!empty($rights_blog['edit'])){ if($rights_blog['edit']==1) echo 'checked'; } ?>>
												</td>
												<td>
													<input class="checkbox" type="checkbox" name="privilege[blog][view]" value="1" <?php if(!empty($rights_blog['view'])){ if($rights_blog['view']==1) echo 'checked'; } ?>></td>
												<td>
													<input class="checkbox" type="checkbox" name="privilege[blog][delete]" value="1" <?php if(!empty($rights_blog['delete'])){ if($rights_blog['delete']==1) echo 'checked'; } ?>>
												</td>
												<td>
													<input class="checkbox" type="checkbox" name="privilege[blog][download]" value="1" <?php if(!empty($rights_blog['download'])){ if($rights_blog['download']==1) echo 'checked'; } ?>>
												</td>
											</tr>
											<tr>
												<th>Blog Comments </th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[comments][add]" value="1" <?php if(!empty($rights_comments['add'])){ if($rights_comments['add']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[comments][edit]" value="1" <?php if(!empty($rights_comments['edit'])){ if($rights_comments['edit']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[comments][view]" value="1" <?php if(!empty($rights_comments['view'])){ if($rights_comments['view']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[comments][delete]" value="1" <?php if(!empty($rights_comments['delete'])){ if($rights_comments['delete']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[comments][download]" value="1" <?php if(!empty($rights_comments['download'])){ if($rights_comments['download']==1) echo 'checked'; } ?>>
												</td>
											</tr>
											<tr>
												<th>Job Post </th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[job_post][add]" value="1" <?php if(!empty($rights_job_post['add'])){ if($rights_job_post['add']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[job_post][edit]" value="1" <?php if(!empty($rights_job_post['edit'])){ if($rights_job_post['edit']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[job_post][view]" value="1" <?php if(!empty($rights_job_post['view'])){ if($rights_job_post['view']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[job_post][delete]" value="1" <?php if(!empty($rights_job_post['delete'])){ if($rights_job_post['delete']==1) echo 'checked'; } ?>>
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
													<input class="checkbox" type="checkbox" name="privilege[job_application][view]" value="1" <?php if(!empty($rights_job_application['view'])){ if($rights_job_application['view']==1) echo 'checked'; } ?>>
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
													<input class="checkbox" type="checkbox" name="privilege[enquiries][view]" value="1" <?php if(!empty($rights_enquiries['view'])){ if($rights_enquiries['view']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll"></td>
												<td class="selectAll"></td>
											</tr>
											<tr>
												<th>Write For Us Enquiries </th>
												<td class="selectAll"></td>
												<td class="selectAll"></td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[write_for_us_enquiries][view]" value="1" <?php if(!empty($rights_write_for_us_enquiries['view'])){ if($rights_write_for_us_enquiries['view']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll"></td>
												<td class="selectAll"></td>
											</tr>
											<tr>
												<th>Newsletter </th>
												<td class="selectAll"></td>
												<td class="selectAll"></td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[newsletter][view]" value="1" <?php if(!empty($rights_newsletter['view'])){ if($rights_newsletter['view']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll"></td>
												<td class="selectAll"></td>
											</tr>
											<tr>
												<th>Privilege </th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[privilege][add]" value="1" <?php if(!empty($rights_privilege['add'])){ if($rights_privilege['add']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[privilege][edit]" value="1" <?php if(!empty($rights_privilege['edit'])){ if($rights_privilege['edit']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[privilege][view]" value="1" <?php if(!empty($rights_privilege['view'])){ if($rights_privilege['view']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[privilege][delete]" value="1" <?php if(!empty($rights_privilege['delete'])){ if($rights_privilege['delete']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[privilege][download]" value="1" <?php if(!empty($rights_privilege['download'])){ if($rights_privilege['download']==1) echo 'checked'; } ?>>
												</td>
											</tr>
											<tr>
												<th>Subscribe</th>
												<td class="selectAll"></td>
												<td class="selectAll"></td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[subscribe][view]" value="1" <?php if(!empty($rights_subscribe['view'])){ if($rights_subscribe['view']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll"></td>
											</tr>
											<tr>
												<th>Meta Tag Pages</th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[meta_pages][add]" value="1" <?php if(!empty($rights_meta_pages['add'])){ if($rights_meta_pages['add']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[meta_pages][edit]" value="1" <?php if(!empty($rights_meta_pages['edit'])){ if($rights_meta_pages['edit']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[meta_pages][view]" value="1" <?php if(!empty($rights_meta_pages['view'])){ if($rights_meta_pages['view']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													
												</td>
											</tr>
											
											<tr>
												<th>Settings</th>
												<td class="selectAll">
													<input type="checkbox" class="checkbox" name="privilege[settings][add]" value="1" <?php if(!empty($rights_settings['add'])){ if($rights_settings['add']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[settings][edit]" value="1" <?php if(!empty($rights_settings['edit'])){ if($rights_settings['edit']==1) echo 'checked'; } ?>>
												</td>
												<td class="selectAll">
													<input class="checkbox" type="checkbox" name="privilege[settings][view]" value="1" <?php if(!empty($rights_settings['view'])){ if($rights_settings['view']==1) echo 'checked'; } ?>>
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
				$("#user_id").val('default');
				$("#user_id").selectpicker("refresh");
			}
		});
	}
	
	$(document).ready(function() 
	{
		$('#assign_employee_id').multiselect({
			includeSelectAllOption: true,
			enableFiltering:true         
		});
	});
</script>