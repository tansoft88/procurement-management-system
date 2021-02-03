<div class="tenderResponseParameters view">
<h2><?php  echo __('Tender Response Parameter');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tenderResponseParameter['TenderResponseParameter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Rqrd Quotations'); ?></dt>
		<dd>
			<?php echo h($tenderResponseParameter['TenderResponseParameter']['min_rqrd_quotations']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tender Response Parameter'), array('action' => 'edit', $tenderResponseParameter['TenderResponseParameter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tender Response Parameter'), array('action' => 'delete', $tenderResponseParameter['TenderResponseParameter']['id']), null, __('Are you sure you want to delete # %s?', $tenderResponseParameter['TenderResponseParameter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tender Response Parameters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tender Response Parameter'), array('action' => 'add')); ?> </li>
	</ul>
</div>
