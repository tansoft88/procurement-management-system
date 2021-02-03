<div class="tenderResponses view">
<h2><?php  echo __('Tender Response');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tenderResponse['TenderResponse']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tender Request'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tenderResponse['TenderRequest']['id'], array('controller' => 'tender_requests', 'action' => 'view', $tenderResponse['TenderRequest']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Detail'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tenderResponse['SupplierDetail']['id'], array('controller' => 'supplier_details', 'action' => 'view', $tenderResponse['SupplierDetail']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Response Summary'); ?></dt>
		<dd>
			<?php echo h($tenderResponse['TenderResponse']['response_summary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Attachment'); ?></dt>
		<dd>
			<?php echo h($tenderResponse['TenderResponse']['file_attachment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tenderResponse['TenderResponse']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($tenderResponse['TenderResponse']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tenderResponse['TenderResponse']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved'); ?></dt>
		<dd>
			<?php echo h($tenderResponse['TenderResponse']['approved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved By'); ?></dt>
		<dd>
			<?php echo h($tenderResponse['TenderResponse']['approved_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tender Response'), array('action' => 'edit', $tenderResponse['TenderResponse']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tender Response'), array('action' => 'delete', $tenderResponse['TenderResponse']['id']), null, __('Are you sure you want to delete # %s?', $tenderResponse['TenderResponse']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tender Responses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tender Response'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tender Requests'), array('controller' => 'tender_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tender Request'), array('controller' => 'tender_requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier Details'), array('controller' => 'supplier_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier Detail'), array('controller' => 'supplier_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
