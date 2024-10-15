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
	                <?php 
	                    if(!empty($access) && $this->session->userdata('login_type') !='Super Admin'){
							if (array_key_exists('edit' , $access))
							{ 
	                ?>
	                <h4 class="card-title" id="horz-layout-colored-controls"><a href="<?php echo base_url();?>privilege/add_privilege" class="btn btn-info "><i class="icon-plus"></i></a></h4>
					<?php 	}
	                    }
	                    else{
        		    ?>
        		    <h4 class="card-title" id="horz-layout-colored-controls"><a href="<?php echo base_url();?>privilege/add_privilege" class="btn btn-info "><i class="icon-plus"></i></a></h4>
        		    <?php } ?>
	            </div>
				<div class="card-body collapse in">
	                <div class="card-block">
						<table id="tablePrivilegeList" class="display table table-striped table-bordered " cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>S.No</th>
									<th>User Type</th>
									<th>Name</th>
									<th>Email</th>
									<th>Mobile</th>
									<th><i class="icon-menu"></i></th>
								</tr>
							</thead>
							<tbody>
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
<?php $this->load->view('layout/datatable_js'); ?>
<!-- JS Content End -->
<script type="text/javascript">
/** Privilege List ***/
	$(document).ready(function() {
		var tablePrivilegeList = $('#tablePrivilegeList').DataTable({ 
			"processing": true,
			"serverSide": true,
			"order": [], 
			"columns": [
				{data: 'sno',},
				{data: 'user_type',},
				{data: 'name',},
				{data: 'email',},
				{data: 'mobile',},
				{data: 'actions',},
				  ],
			"ajax": $.fn.dataTable.pipeline({
				
				"url": "<?php echo site_url('privilege/privilege_list')?>",
				method: "POST",
			}),

			"columnDefs": [
			{ 
				"targets": [ 0, 4 ], 
				"orderable": false,
			},
			],
			
		  });
		

		$('#SearchPrivilegeTable').click(function () {
			frm = $(this).parents('form');
			api = tablePrivilegeList;
			frm.find('[data-target]').each(function () {
				api.column($(this).data('target')).search($(this).val());
			});
			api.clearPipeline().draw();
		});
	});
		
	function delete_privilege(id) {
		$.confirm({
			title: 'Delete!',
			backgroundDismiss: false,
			alignMiddle: true,
			backgroundDismissAnimation: 'glow',
			buttons: {
				ok: function () {
					window.location =  '<?php echo base_url('privilege/delete_privilege'); ?>/'+id;
				},
				cancel: function () {
				},
			}
		});
	}
</script>
