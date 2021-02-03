
<?php echo $this->Form->create('SystemGroup');?>
<li><?php echo $this->Html->link(__('<< BACK'), array('controller'=>'SystemGroups','action' => 'index')); ?></li>
</br>
	<fieldset>
		<legend><b><?php echo __('Add System Group'); ?></b></legend>
	<?php
		echo $this->Form->input('account_type_name',array('size'=>60));
		echo "<br>"; 
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div></br>
<fieldset>
	<legend><b><?php echo __('Actions'); ?></b></legend>
	<ul>

		<li><?php echo $this->Html->link(__('List System Groups'), array('action' => 'index'));?></li>
	</ul>
</fieldset
