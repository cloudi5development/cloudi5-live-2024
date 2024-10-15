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
	                <h4 class="card-title" id="horz-layout-colored-controls"><?php echo $page_title; ?><div style="float:right;"></div></h4>
	                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
	            </div>
	            <div class="card-body collapse in">
	                <div class="card-block">
						<?php 
							 echo get_data_table('tableSubscribe',array('Subscribe Date','IP','Email'));
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

/** Testimonials **/
$(document).ready(function() {
	
   var tableSubscribe = $('#tableSubscribe').DataTable({ 
		"processing": true, 
		"serverSide": true, 
		"order": [], 
		"columns": [
			{data: 'sno',},
			{data: 'created_at',},
			{data: 'ip',},
			{data: 'email',},
			  ],
	  
		"ajax": $.fn.dataTable.pipeline({
			
			"url": "<?php echo site_url('subscribe/subscribe_list/'.$page)?>",
			method: "POST",
		}),
		"columnDefs": [
		{ 
			"targets": [ 1, 2, 0,3], 
			"orderable": false, 
		},
		],
	});
	
	$('#SearchtableSubscribe').click(function () {
		frm = $(this).parents('form');
		api = tableSubscribe;
		frm.find('[data-target]').each(function () {
			api.column($(this).data('target')).search($(this).val());
		});
		api.clearPipeline().draw();
	});
});
</script>