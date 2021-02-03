<ul>
		<li><?php echo $this->Html->link(__('<<Back'), array('action' => 'index_reports')); ?></li>
			</ul>
<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><h3><?php echo __('New User Sign Up Form'); ?></h3></legend>
	<?php
		echo "<br>";
		echo $this->Form->input('username',array('size'=>40));
		echo "<br>";
		echo $this->Form->input('password',array('size'=>40));
		echo "<br>";
		echo $this->Form->input('email_address',array('size'=>60));
		echo "<br>";
		echo $this->Form->input('firstname',array('size'=>60));echo "<br>";
		echo "<br>";
		echo $this->Form->input('lastname',array('size'=>60));echo "<br>";
		echo "<br>";
		echo $this->Form->input('address',array('size'=>60));echo "<br>";
		echo "<br>";
		echo $this->Form->input('system_group_id',array('label'=>'System Group'));
		echo "<br>";
		echo $this->Form->input('department_id',array('label'=>'Department'));
		echo "<br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

