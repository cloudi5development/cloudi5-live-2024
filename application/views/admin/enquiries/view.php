<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title" id="myModalLabel">Enquiries Information - <b><font color="#ff6347"><?php echo $enquiries->name;?></b></font></h4>
	</div>
	<div class="row" style="padding: 10px 20px 10px 20px;">
		<div class="col-md-12">
		<table class="display table table-bordered " cellspacing="0" width="100%">
			<tbody>
				<tr>
					<th>IP</th>
					<td><?php echo $enquiries->ip;?></td>
				</tr>
				<tr>
					<th>Name</th>
					<td><?php echo $enquiries->name;?></td>
				</tr>
				<tr>
					<th>Phone Number</th>
					<td><?php echo $enquiries->phone;?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><?php echo $enquiries->email;?></td>
				</tr>
				<tr>
					<th>Business Name</th>
					<td><?php echo $enquiries->business_name;?></td>
				</tr>
				<tr>
					<th>Skype ID/Whatsapp No.</th>
					<td><?php echo $enquiries->skype_whatsapp;?></td>
				</tr>
				<tr>
					<th>What are you looking for?</th>
					<td><?php echo $enquiries->looking_for;?></td>
				</tr>
				<tr>
					<th>Your Budget</th>
					<td><?php echo $enquiries->budget;?></td>
				</tr>
				<tr>
					<th>When Do You Want  To Get  Started?</th>
					<td><?php echo $enquiries->started_on;?></td>
				</tr>
				<tr>
					<th>Subject</th>
					<td><?php echo $enquiries->subject;?></td>
				</tr>
				<tr>
					<th>Comments</th>
					<td><?php echo $enquiries->comments;?></td>
				</tr>
				<tr>
					<th>Created At</th>
					<td><?php echo date('d-m-Y h:i a',strtotime($enquiries->cteated_at));?></td>
				</tr>
				
			</tbody>
		</table>
		</div>
	</div>
</div>

