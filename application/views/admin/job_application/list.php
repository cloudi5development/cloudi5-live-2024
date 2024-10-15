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
	                <h4 class="card-title" id="horz-layout-colored-controls"><?php echo $page_title; ?></h4>
	                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
	            </div>
	            <div class="card-body collapse in">
	                <div class="card-block">
						<?php 
							 echo get_data_table('tableJobApplication',array('Apply Date','Job Id','Job Title','Name','Email','Mobile','Experience','Resume','Message'));
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
<?php $this->load->view('layout/datatable_js'); ?>
<!-- JS Content End -->
<script type="text/javascript">	

/** Blog **/
$(document).ready(function() {
	
   var tableJobApplication = $('#tableJobApplication').DataTable({ 
		"processing": true, 
		"serverSide": true, 
		"order": [], 
		"columns": [
			{data: 'sno',},
			{data: 'job_apply_date',},
			{data: 'job_id',},
			{data: 'title',},
			{data: 'name',},
			{data: 'email',},
			{data: 'mobile',},
			{data: 'experience',},
			{data: 'resume',},
			{data: 'message',},
			  ],
	  
		"ajax": $.fn.dataTable.pipeline({
			
			"url": "<?php echo site_url('job_application/job_application_list')?>",
			method: "POST",
		}),
		"columnDefs": [
		{ 
			"targets": [ 8, 9 ], 
			"orderable": false, 
		},
		],
	});
	
	$('#SearchtableBlog').click(function () {
		frm = $(this).parents('form');
		api = tableJobApplication;
		frm.find('[data-target]').each(function () {
			api.column($(this).data('target')).search($(this).val());
		});
		api.clearPipeline().draw();
	});
});
</script>