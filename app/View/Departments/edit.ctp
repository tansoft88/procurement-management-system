<div class="departments form">
<?php echo $this->Form->create('Department');?>
	<fieldset>
		<legend><b><?php echo __('Edit Department'); ?></b></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('name',array('size'=>60));
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
