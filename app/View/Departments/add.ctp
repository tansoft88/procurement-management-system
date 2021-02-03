<div class="departments form">
<?php echo $this->Form->create('Department');?>
	<fieldset>
		<legend><b><?php echo __('Add Department'); ?></b></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('name',array('size'=>60));
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</br>
<fieldset>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Departments'), array('action' => 'index'));?></li>
	
	</ul>
</fieldset>
