<div class="tenderCategories form">
<?php echo $this->Form->create('TenderCategory');?>
	<fieldset>
		<legend><?php echo __('Add Tender Category'); ?></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('category_name',array('size'=>60));
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</br>
<div class="actions">
	<legend><?php echo __('Actions'); ?></legend>
	<ul>
		<li><?php echo $this->Html->link(__('List Tender Categories'), array('action' => 'index'));?></li>
	</ul>
</div>
