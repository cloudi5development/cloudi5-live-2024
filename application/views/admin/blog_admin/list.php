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
	                <h4 class="card-title" id="horz-layout-colored-controls"><?php echo $page_title; ?><div style="float:right;"><a href="<?php echo base_url();?>blog_admin/add_blog" class="btn btn-info "><i class="icon-plus"></i></a></div></h4>
	                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
	            </div>
	            <div class="card-body collapse in">
	                <div class="card-block">
						<?php 
							 echo get_data_table('tableBlog',array('Blog Date','Title','Category','Status','<i class="icon-menu"></i>'));
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
	
   var tableBlog = $('#tableBlog').DataTable({ 
		"processing": true, 
		"serverSide": true, 
		"order": [], 
		"columns": [
			{data: 'sno',},
			{data: 'blog_date',},
			{data: 'title',},
			{data: 'category',},
			{data: 'status',},
			{data: 'action',},
			  ],
	  
		"ajax": $.fn.dataTable.pipeline({
			
			"url": "<?php echo site_url('blog_admin/blog_list')?>",
			method: "POST",
		}),
		"columnDefs": [
		{ 
			"targets": [ 5], 
			"orderable": false, 
		},
		],
	});
	
	$('#SearchtableBlog').click(function () {
		frm = $(this).parents('form');
		api = tableBlog;
		frm.find('[data-target]').each(function () {
			api.column($(this).data('target')).search($(this).val());
		});
		api.clearPipeline().draw();
	});
});

/* Delete */
function delete_blog(id) {
	$.confirm( {
		title: 'Delete!', backgroundDismiss: false, alignMiddle: true, backgroundDismissAnimation: 'glow', buttons: {
			Delete: {
				text: 'Delete', btnClass: 'btn-danger', action: function() {
					window.location='<?php echo base_url('blog_admin/delete_blog'); ?>/'+id;
				}
			}, cancel: function () {},
		}
	}
	);
}

</script>