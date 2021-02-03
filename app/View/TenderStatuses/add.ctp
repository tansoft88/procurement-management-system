<div class="tenderStatuses form">
<?php echo $this->Form->create('TenderStatus');?>
	<fieldset>
		<legend><?php echo __('Add New Tender Status'); ?></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('status',array('size'=>40));
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div></br>
<fieldset>
	<legend><?php echo __('Actions'); ?></legend>
	<ul>
		<li><?php echo $this->Html->link(__('List Tender Statuses'), array('action' => 'index'));?></li>
	</ul>
</fieldset>
