<fieldset>
	<legend><?php echo __('Supplier Details');?></legend></br>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Email</th>
			<th>Organization name</th>
			<th>Address</th>
			<th>City</th>
			<th>Contact number</th>
			<th>Tender category</th>
			<th>Tax clearance number</th>
			<th>Praz number</th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($supplierDetails as $supplierDetail): ?>
	<tr>
		<td><?php echo h($supplierDetail['SupplierDetail']['id']); ?>&nbsp;</td>
		<td><?php echo h($supplierDetail['SupplierDetail']['email_address']); ?>&nbsp;</td>
		<td><?php echo h($supplierDetail['SupplierDetail']['organization_name']); ?>&nbsp;</td>
		<td><?php echo h($supplierDetail['SupplierDetail']['org_address']); ?>&nbsp;</td>
		<td><?php echo h($supplierDetail['SupplierDetail']['city']); ?>&nbsp;</td>
		<td><?php echo h($supplierDetail['SupplierDetail']['contact_number']); ?>&nbsp;</td>
		<td>
			<?php echo h($supplierDetail['TenderCategory']['category_name']); ?>
		</td>
		<td><?php echo h($supplierDetail['SupplierDetail']['tax_clearance_number']); ?>&nbsp;</td>
		<td><?php echo h($supplierDetail['SupplierDetail']['praz_number']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $supplierDetail['SupplierDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $supplierDetail['SupplierDetail']['id']), null, __('Are you sure you want to delete # %s?', $supplierDetail['SupplierDetail']['id'])); ?>
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
<?php if ($system_group_id != 3 ){ ?>
<fieldset>
	<legend><?php echo __('Actions'); ?></legend>
	<ul>
		<li><?php echo $this->Html->link(__('New Supplier Detail'), array('action' => 'add')); ?></li>
	</ul>
</div>
<?php } ?>
<?php
	echo $this->Form->create('SupplierDetail',array('action'=>'index_pdf'));
		echo $this->Form->end('/img/excel.png',array('alt'=>'Download Excel'));
		?>
