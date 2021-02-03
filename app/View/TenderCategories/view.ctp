<div class="tenderCategories view">
<h2><?php  echo __('Tender Category');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tenderCategory['TenderCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Name'); ?></dt>
		<dd>
			<?php echo h($tenderCategory['TenderCategory']['category_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tender Category'), array('action' => 'edit', $tenderCategory['TenderCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tender Category'), array('action' => 'delete', $tenderCategory['TenderCategory']['id']), null, __('Are you sure you want to delete # %s?', $tenderCategory['TenderCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tender Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tender Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Details'), array('controller' => 'supplier_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Detail'), array('controller' => 'supplier_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tender Requests'), array('controller' => 'tender_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tender Request'), array('controller' => 'tender_requests', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Supplier Details');?></h3>
	<?php if (!empty($tenderCategory['SupplierDetail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Email Address'); ?></th>
		<th><?php echo __('Organization Name'); ?></th>
		<th><?php echo __('Org Address'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Contact Number'); ?></th>
		<th><?php echo __('Tender Category Id'); ?></th>
		<th><?php echo __('Tax Clearance Number'); ?></th>
		<th><?php echo __('Praz Number'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tenderCategory['SupplierDetail'] as $supplierDetail): ?>
		<tr>
			<td><?php echo $supplierDetail['id'];?></td>
			<td><?php echo $supplierDetail['email_address'];?></td>
			<td><?php echo $supplierDetail['organization_name'];?></td>
			<td><?php echo $supplierDetail['org_address'];?></td>
			<td><?php echo $supplierDetail['city'];?></td>
			<td><?php echo $supplierDetail['contact_number'];?></td>
			<td><?php echo $supplierDetail['tender_category_id'];?></td>
			<td><?php echo $supplierDetail['tax_clearance_number'];?></td>
			<td><?php echo $supplierDetail['praz_number'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'supplier_details', 'action' => 'view', $supplierDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'supplier_details', 'action' => 'edit', $supplierDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'supplier_details', 'action' => 'delete', $supplierDetail['id']), null, __('Are you sure you want to delete # %s?', $supplierDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Supplier Detail'), array('controller' => 'supplier_details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tender Requests');?></h3>
	<?php if (!empty($tenderCategory['TenderRequest'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tender Category Id'); ?></th>
		<th><?php echo __('Tender Code'); ?></th>
		<th><?php echo __('Tender Title'); ?></th>
		<th><?php echo __('Tender Specification'); ?></th>
		<th><?php echo __('Due Date'); ?></th>
		<th><?php echo __('Tender Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Tender Closed'); ?></th>
		<th><?php echo __('Closed By'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tenderCategory['TenderRequest'] as $tenderRequest): ?>
		<tr>
			<td><?php echo $tenderRequest['id'];?></td>
			<td><?php echo $tenderRequest['tender_category_id'];?></td>
			<td><?php echo $tenderRequest['tender_code'];?></td>
			<td><?php echo $tenderRequest['tender_title'];?></td>
			<td><?php echo $tenderRequest['tender_specification'];?></td>
			<td><?php echo $tenderRequest['due_date'];?></td>
			<td><?php echo $tenderRequest['tender_status_id'];?></td>
			<td><?php echo $tenderRequest['created'];?></td>
			<td><?php echo $tenderRequest['created_by'];?></td>
			<td><?php echo $tenderRequest['tender_closed'];?></td>
			<td><?php echo $tenderRequest['closed_by'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tender_requests', 'action' => 'view', $tenderRequest['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tender_requests', 'action' => 'edit', $tenderRequest['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tender_requests', 'action' => 'delete', $tenderRequest['id']), null, __('Are you sure you want to delete # %s?', $tenderRequest['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tender Request'), array('controller' => 'tender_requests', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
