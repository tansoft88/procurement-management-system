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
			<th>Tender closed</th>
			<th>Respond to tender</th>
	</tr>
	<?php
	foreach ($tenderRequests as $tenderRequest): ?>
	<tr>
		<td><?php echo h($tenderRequest['TenderRequest']['id']); ?>&nbsp;</td>
		<td>
			<?php echo h($tenderRequest['TenderCategory']['category_name']); ?>
		</td>
		<td><?php echo h($tenderRequest['TenderRequest']['tender_code']); ?>&nbsp;</td>
		<td><?php echo h($tenderRequest['TenderRequest']['tender_title']); ?>&nbsp;</td>
		<td><?php echo h($tenderRequest['TenderRequest']['tender_specification']); ?>&nbsp;</td>
		<td><?php echo h($tenderRequest['TenderRequest']['due_date']); ?>&nbsp;</td>
		<td>
			<?php echo h($tenderRequest['TenderStatus']['status']); ?>
		</td>
		<td><?php echo h($tenderRequest['TenderRequest']['created']); ?>&nbsp;</td>
			<td><?php if(($tenderRequest['TenderRequest']['tender_closed'])==0) { echo "Open"; }
			else { echo "Closed"; } ?>&nbsp;</td>
		<td><?php 
				$due_date = new DateTime($tenderRequest['TenderRequest']['due_date']);
			$now = new DateTime();
		if($system_group_id == 3 and (($due_date >= $now)) and (($tenderRequest['TenderRequest']['tender_closed'])==0)){ 
		echo $this->Html->link("http://localhost/procurement/TenderResponses/add/".$tenderRequest['TenderRequest']['tender_code']."/".$tenderRequest['TenderRequest']['id']); 
		} ?>&nbsp;</td>
			</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</fieldset></br>

