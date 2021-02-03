<div class="systemGroups form">
<?php echo $this->Form->create('SystemGroup');?>
	<fieldset>
		<legend><b><?php echo __('Edit System Group'); ?></b></legend>
		<br>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('account_type_name');
		//echo $this->Form->input('internal_account',array('label'=>'Active?'));
		//echo $this->Form->input('created_by');
		//echo $this->Form->input('modified_by');
		//echo $this->Form->input('create_ip');
		//echo $this->Form->input('modify_ip');
	?>
	</fieldset></br>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<fieldset>
	<legend><b><?php echo __('Actions'); ?></b></legend>
	<ul>
		<li><?php echo $this->Html->link(__('List System Groups'), array('action' => 'index'));?></li>
	</ul>
</fieldset>
