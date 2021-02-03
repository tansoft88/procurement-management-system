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
			<?php if($system_group_id == 1){ ?>
			<th>Download Files</th>
			<?php } ?>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($tenderRequests as $tenderRequest): ?>
	<tr>
		<td><?php echo h($tenderRequest['TenderRequest']['id']); ?>&nbsp;</td>
		<td>
			<?php echo h($tenderRequest['TenderCategory']['category_name']); ?>
		</td><td><?php
		echo $this->Html->link(__($tenderRequest['TenderRequest']['tender_code']), array('controller'=>'TenderResponses','action' => 'index2',$tenderRequest['TenderRequest']['id']));
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
		<?php
				$due_date = new DateTime($tenderRequest['TenderRequest']['due_date']);
			$now = new DateTime();
		if($system_group_id == 1 and (($due_date < $now))){ ?>	
		<td>
			<?php echo $this->Form->postLink(__('Download'), array('action' => 'download_files', $tenderRequest['TenderRequest']['tender_code']), null, __('Are you sure you want to download the files for Tender # %s?', $tenderRequest['TenderRequest']['tender_code'])); ?>
		</td>
		<?php } ?>		
		<td class="actions">
		<?php if(($tenderRequest['TenderRequest']['tender_status_id'])==1 and $system_group_id ==2) { ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tenderRequest['TenderRequest']['id'])); ?>
			<?php } ?>
		</td>
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
<?php if($system_group_id != 3){ ?>	
<fieldset>
	<legend><?php echo __('Actions'); ?></legend>
	<ul>
		<li><?php echo $this->Html->link(__('New Tender Request'), array('action' => 'add')); ?></li>
	</ul>
</fieldset>
<?php } ?>
<?php
	echo $this->Form->create('TenderRequest',array('action'=>'index_pdf'));
		echo $this->Form->end('/img/excel.png',array('alt'=>'Download Excel'));
		?>
