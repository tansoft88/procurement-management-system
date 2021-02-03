<div class="supplierDetails view">
<h2><?php  echo __('Supplier Detail');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($supplierDetail['SupplierDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Address'); ?></dt>
		<dd>
			<?php echo h($supplierDetail['SupplierDetail']['email_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organization Name'); ?></dt>
		<dd>
			<?php echo h($supplierDetail['SupplierDetail']['organization_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Org Address'); ?></dt>
		<dd>
			<?php echo h($supplierDetail['SupplierDetail']['org_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($supplierDetail['SupplierDetail']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Number'); ?></dt>
		<dd>
			<?php echo h($supplierDetail['SupplierDetail']['contact_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tender Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($supplierDetail['TenderCategory']['id'], array('controller' => 'tender_categories', 'action' => 'view', $supplierDetail['TenderCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Clearance Number'); ?></dt>
		<dd>
			<?php echo h($supplierDetail['SupplierDetail']['tax_clearance_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Praz Number'); ?></dt>
		<dd>
			<?php echo h($supplierDetail['SupplierDetail']['praz_number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Supplier Detail'), array('action' => 'edit', $supplierDetail['SupplierDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Supplier Detail'), array('action' => 'delete', $supplierDetail['SupplierDetail']['id']), null, __('Are you sure you want to delete # %s?', $supplierDetail['SupplierDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tender Categories'), array('controller' => 'tender_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tender Category'), array('controller' => 'tender_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tender Responses'), array('controller' => 'tender_responses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tender Response'), array('controller' => 'tender_responses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tender Responses');?></h3>
	<?php if (!empty($supplierDetail['TenderResponse'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tender Request Id'); ?></th>
		<th><?php echo __('Supplier Detail Id'); ?></th>
		<th><?php echo __('Response Summary'); ?></th>
		<th><?php echo __('File Attachment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Approved'); ?></th>
		<th><?php echo __('Approved By'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($supplierDetail['TenderResponse'] as $tenderResponse): ?>
		<tr>
			<td><?php echo $tenderResponse['id'];?></td>
			<td><?php echo $tenderResponse['tender_request_id'];?></td>
			<td><?php echo $tenderResponse['supplier_detail_id'];?></td>
			<td><?php echo $tenderResponse['response_summary'];?></td>
			<td><?php echo $tenderResponse['file_attachment'];?></td>
			<td><?php echo $tenderResponse['created'];?></td>
			<td><?php echo $tenderResponse['created_by'];?></td>
			<td><?php echo $tenderResponse['modified'];?></td>
			<td><?php echo $tenderResponse['approved'];?></td>
			<td><?php echo $tenderResponse['approved_by'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tender_responses', 'action' => 'view', $tenderResponse['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tender_responses', 'action' => 'edit', $tenderResponse['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tender_responses', 'action' => 'delete', $tenderResponse['id']), null, __('Are you sure you want to delete # %s?', $tenderResponse['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tender Response'), array('controller' => 'tender_responses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
