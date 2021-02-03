<div class="tenderStatuses view">
<h2><?php  echo __('Tender Status');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tenderStatus['TenderStatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($tenderStatus['TenderStatus']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tender Status'), array('action' => 'edit', $tenderStatus['TenderStatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tender Status'), array('action' => 'delete', $tenderStatus['TenderStatus']['id']), null, __('Are you sure you want to delete # %s?', $tenderStatus['TenderStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tender Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tender Status'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tender Requests'), array('controller' => 'tender_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tender Request'), array('controller' => 'tender_requests', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tender Requests');?></h3>
	<?php if (!empty($tenderStatus['TenderRequest'])):?>
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
		foreach ($tenderStatus['TenderRequest'] as $tenderRequest): ?>
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
