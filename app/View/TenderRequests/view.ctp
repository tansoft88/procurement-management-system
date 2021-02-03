<div class="tenderRequests view">
<h2><?php  echo __('Tender Request');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tenderRequest['TenderRequest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tender Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tenderRequest['TenderCategory']['id'], array('controller' => 'tender_categories', 'action' => 'view', $tenderRequest['TenderCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tender Code'); ?></dt>
		<dd>
			<?php echo h($tenderRequest['TenderRequest']['tender_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tender Title'); ?></dt>
		<dd>
			<?php echo h($tenderRequest['TenderRequest']['tender_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tender Specification'); ?></dt>
		<dd>
			<?php echo h($tenderRequest['TenderRequest']['tender_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Due Date'); ?></dt>
		<dd>
			<?php echo h($tenderRequest['TenderRequest']['due_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tender Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tenderRequest['TenderStatus']['id'], array('controller' => 'tender_statuses', 'action' => 'view', $tenderRequest['TenderStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tenderRequest['TenderRequest']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($tenderRequest['TenderRequest']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tender Closed'); ?></dt>
		<dd>
			<?php echo h($tenderRequest['TenderRequest']['tender_closed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closed By'); ?></dt>
		<dd>
			<?php echo h($tenderRequest['TenderRequest']['closed_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tender Request'), array('action' => 'edit', $tenderRequest['TenderRequest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tender Request'), array('action' => 'delete', $tenderRequest['TenderRequest']['id']), null, __('Are you sure you want to delete # %s?', $tenderRequest['TenderRequest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tender Requests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tender Request'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tender Categories'), array('controller' => 'tender_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tender Category'), array('controller' => 'tender_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tender Statuses'), array('controller' => 'tender_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tender Status'), array('controller' => 'tender_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tender Responses'), array('controller' => 'tender_responses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tender Response'), array('controller' => 'tender_responses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tender Responses');?></h3>
	<?php if (!empty($tenderRequest['TenderResponse'])):?>
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
		foreach ($tenderRequest['TenderResponse'] as $tenderResponse): ?>
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
