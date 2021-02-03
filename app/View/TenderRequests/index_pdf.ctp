<fieldset>
	<legend><?php echo __('Tender Requests');?></legend></br>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Tender category</th>
			<th>Tender code</th>
			<th>Tender title</th>
			<th>Tender specification</th>
			<th>Due date</th>
			<th>Tender status</th>
			<th>Created</th>
			<th>Created by</th>
			<th>Department</th>
			<th>Tender closed</th>
			<th>Closed by</th>
	</tr>
	<?php
	foreach ($tenderRequests as $tenderRequest): ?>
	<tr>
		<td><?php echo h($tenderRequest['TenderRequest']['id']); ?>&nbsp;</td>
		<td>
			<?php echo h($tenderRequest['TenderCategory']['category_name']); ?>
		</td><td><?php
		echo h($tenderRequest['TenderRequest']['tender_code']);
		?></td>
		<td><?php echo h($tenderRequest['TenderRequest']['tender_title']); ?>&nbsp;</td>
		<td><?php echo h($tenderRequest['TenderRequest']['tender_specification']); ?>&nbsp;</td>
		<td><?php 
		echo h($tenderRequest['TenderRequest']['due_date']); ?>&nbsp;</td>
		<td>
			<?php echo h($tenderRequest['TenderStatus']['status']); ?>
		</td>
		<td><?php echo h($tenderRequest['TenderRequest']['created']); ?>&nbsp;</td>
		<td><?php echo h($tenderRequest['TenderRequest']['created_by']); ?>&nbsp;</td>
		<td>
			<?php echo h($tenderRequest['Department']['name']); ?>
		</td>
		<td><?php if(($tenderRequest['TenderRequest']['tender_closed'])==0) { echo "Open"; }
			else { echo "Closed"; } ?>&nbsp;</td>
			<td><?php echo h($tenderRequest['TenderRequest']['closed_by']); ?>&nbsp;</td>
		</td>
	</tr>
<?php endforeach; ?>
	</table>