<div class="tenderRequests form">
<?php echo $this->Form->create('TenderRequest');?>
	<fieldset>
		<legend><?php echo __('Add New Tender Request'); ?></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('tender_category_id');
		echo "</br>";
		echo $this->Form->input('tender_title',array('size'=>60));
		echo "</br>";
		echo $this->Form->input('tender_specification',array('align'=>'center','label'=>'Tender specification','size'=>80,'rows'=>6,'style'=>'width: 450px'));
		echo "</br>";
		echo $this->Form->input('due_date');
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</br>
<fieldset>
	<legend><?php echo __('Actions'); ?></legend>
	<ul>
		<li><?php echo $this->Html->link(__('List Tender Requests'), array('action' => 'index'));?></li>
		
	</ul>
</fieldset>
