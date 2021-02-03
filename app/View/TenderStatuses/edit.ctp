<div class="tenderStatuses form">
<?php echo $this->Form->create('TenderStatus');?>
	<fieldset>
		<legend><?php echo __('Edit Tender Status'); ?></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('status',array('size'=>40));
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

