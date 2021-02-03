<fieldset>
	<legend><?php echo __('Tender Response Parameters');?></legend></br>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Min required quotations</th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($tenderResponseParameters as $tenderResponseParameter): ?>
	<tr>
		<td><?php echo h($tenderResponseParameter['TenderResponseParameter']['id']); ?>&nbsp;</td>
		<td><?php echo h($tenderResponseParameter['TenderResponseParameter']['min_rqrd_quotations']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tenderResponseParameter['TenderResponseParameter']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tenderResponseParameter['TenderResponseParameter']['id']), null, __('Are you sure you want to delete # %s?', $tenderResponseParameter['TenderResponseParameter']['id'])); ?>
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
<fieldset>
	<legend><?php echo __('Actions'); ?></legend>
	<ul>
		<li><?php echo $this->Html->link(__('New Tender Response Parameter'), array('action' => 'add')); ?></li>
	</ul>
</fieldset>
