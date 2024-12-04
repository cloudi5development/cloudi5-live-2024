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
							 echo get_data_table('tableEnquiries',array('Enquiry Date','IP','Name','Email','Mobile','Post Title','Post Type', 'Post Summary','Actions'));
							 echo get_popup_tag('ModalViewEnquiry','View-Enquiries-Content');
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
	
   var tableEnquiries = $('#tableEnquiries').DataTable({ 
		"processing": true, 
		"serverSide": true, 
		"order": [], 
		"columns": [
			{data: 'sno',},
			{data: 'created_at',},
			{data: 'ip',},
			{data: 'first_name',},
			{data: 'email',},
			{data: 'mobile',},
			{data: 'post_title',},
			{data: 'post_type',},
            {data: 'post_summary',},
			{data: 'status',},
			  ],
	  
		"ajax": $.fn.dataTable.pipeline({
			
			"url": "<?php echo site_url('Write_for_us_enquiry/enquiries_list')?>",
			method: "POST",
		}),
		"columnDefs": [
		{ 
			"targets": [ 1, 5, 6], 
			"orderable": false, 
		},
		],
	});
	
	$('#SearchtableEnquiries').click(function () {
		frm = $(this).parents('form');
		api = tableEnquiries;
		frm.find('[data-target]').each(function () {
			api.column($(this).data('target')).search($(this).val());
		});
		api.clearPipeline().draw();
	});
});

$(document).ready(function(){
	$(document).on('click', '#ViewEnquiry', function(e){
		var enquiries_id = $(this).data('id');
		$('#View-Enquiries-Content').html('');
			$.ajax({
				type: 'POST',
				data:{enquiries_id:enquiries_id},
				dataType: 'html',
				url: '<?php echo base_url();?>Write_for_us_enquiry/view',
				success: function(response)
				{
					$('#View-Enquiries-Content').html('');    
					$('#View-Enquiries-Content').html(response);
				}
			});
	});
});
/* Delete */
function delete_enquiry(id) {
	$.confirm( {
		title: 'Delete!', backgroundDismiss: false, alignMiddle: true, backgroundDismissAnimation: 'glow', buttons: {
			Delete: {
				text: 'Delete', btnClass: 'btn-danger', action: function() {
					window.location='<?php echo base_url('Write_for_us_enquiry/delete_enquiry'); ?>/'+id;
				}
			}, cancel: function () {},
		}
	}
	);
}
</script>