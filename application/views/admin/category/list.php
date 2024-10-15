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
	                <h4 class="card-title" id="horz-layout-colored-controls"><?php echo $page_title; ?><div style="float:right;"><a href="<?php echo base_url();?>category/add_category" class="btn btn-info "><i class="icon-plus"></i></a></div></h4>
	                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
	            </div>
	            <div class="card-body collapse in">
	                <div class="card-block">
						<?php 
							 echo get_data_table('tableCategory',array('Title','Status','<i class="icon-menu"></i>'));
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
	
   var tableCategory = $('#tableCategory').DataTable({ 
		"processing": true, 
		"serverSide": true, 
		"order": [], 
		"columns": [
			{data: 'sno',},
			{data: 'title',},
			{data: 'status',},
			{data: 'action',},
			  ],
	  
		"ajax": $.fn.dataTable.pipeline({
			
			"url": "<?php echo site_url('category/category_list')?>",
			method: "POST",
		}),
		"columnDefs": [
		{ 
			"targets": [ 1, 3], 
			"orderable": false, 
		},
		],
	});
	
	$('#SearchtableCategory').click(function () {
		frm = $(this).parents('form');
		api = tableCategory;
		frm.find('[data-target]').each(function () {
			api.column($(this).data('target')).search($(this).val());
		});
		api.clearPipeline().draw();
	});
});

/* Delete */
function delete_category(id) {
	$.confirm( {
		title: 'Delete!', backgroundDismiss: false, alignMiddle: true, backgroundDismissAnimation: 'glow', buttons: {
			Delete: {
				text: 'Delete', btnClass: 'btn-danger', action: function() {
					window.location='<?php echo base_url('category/delete_category'); ?>/'+id;
				}
			}, cancel: function () {},
		}
	}
	);
}

</script>