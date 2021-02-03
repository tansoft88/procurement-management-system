	<ul><li><?php echo $this->Html->link(__('<< BACK'), array('controller'=>'TenderRequests','action' => 'index')); ?></li></ul>
<fieldset>
	<legend><?php echo __('Tender Responses');?></legend>

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Tender request code</th>
			<th>Supplier</th>
			<th>Response summary</th>
			<th>File attachment</th>
			<th>Created</th>
			<th>Created by</th>
			<th>Modified</th>
			<th>Approved</th>
			<th>Approved by</th>
			<?php if($system_group_id == 1){ ?>
			<th class="actions"><?php echo __('Actions');?></th>
			<?php } ?>
	</tr>
	<?php
	foreach ($tenderResponses as $tenderResponse){ ?>
	<tr>
		<td><?php echo h($tenderResponse['TenderResponse']['id']); ?>&nbsp;</td>
		<td>
			<?php echo h($tenderResponse['TenderRequest']['tender_code']); ?>
		</td>
		<td>
			<?php echo h($tenderResponse['SupplierDetail']['organization_name']); ?>
		</td>
		<td><?php echo h($tenderResponse['TenderResponse']['response_summary']); ?>&nbsp;</td>
		<td><?php echo h($tenderResponse['TenderResponse']['file_attachment']); ?>&nbsp;</td>
		<td><?php echo h($tenderResponse['TenderResponse']['created']); ?>&nbsp;</td>
		<td><?php echo h($tenderResponse['TenderResponse']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($tenderResponse['TenderResponse']['modified']); ?>&nbsp;</td>
		<td><?php if(($tenderResponse['TenderResponse']['approved'])==0){ echo "Pending"; }
		elseif(($tenderResponse['TenderResponse']['approved'])==1){echo "Approved"; } 
		elseif(($tenderResponse['TenderResponse']['approved'])==2){echo "Unsuccessful"; }?>&nbsp;</td>
		<td><?php echo h($tenderResponse['TenderResponse']['approved_by']); ?>&nbsp;</td>
		<?php if($system_group_id == 1){ ?>
		<td class="actions">
			<?php if(($tenderResponse['TenderResponse']['approved'])==0){ echo $this->Form->postLink(__('Approve'), array('action' => 'approve_quote', $tenderResponse['TenderResponse']['id']), null, __('Are you sure you want to approve Response # %s?', $tenderResponse['TenderResponse']['id'])); } ?>
		</td>
		<?php } ?>
	</tr>
<?php } ?>
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

