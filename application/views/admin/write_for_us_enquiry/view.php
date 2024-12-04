<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title" id="myModalLabel">Write for us Enquiries Information - <b><font color="#ff6347"><?php echo $write_for_us_enquiries->first_name;?></b></font></h4>
	</div>
	<div class="row" style="padding: 10px 20px 10px 20px;">
		<div class="col-md-12">
		<table class="display table table-bordered " cellspacing="0" width="100%">
			<tbody>
				<tr>
					<th>IP</th>
					<td><?php echo $write_for_us_enquiries->ip;?></td>
				</tr>
				<tr>
					<th>Name</th>
					<td><?php echo $write_for_us_enquiries->first_name;?></td>
				</tr>
				<tr>
					<th>Phone Number</th>
					<td><?php echo $write_for_us_enquiries->phone_number;?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><?php echo $write_for_us_enquiries->email;?></td>
				</tr>
				<tr>
					<th>Post Title</th>
					<td><?php echo $write_for_us_enquiries->post_title;?></td>
				</tr>
				<tr>
					<th>Post Type</th>
					<td><?php echo $write_for_us_enquiries->post_type;?></td>
				</tr>
				
				<tr>
					<th>Post Summary</th>
					<td><?php echo $write_for_us_enquiries->post_summary;?></td>
				</tr>
				
				<tr>
					<th>Created At</th>
					<td><?php echo date('d-m-Y h:i a',strtotime($write_for_us_enquiries->created_at));?></td>
				</tr>
				
			</tbody>
		</table>
		</div>
	</div>
</div>

