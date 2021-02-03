<div class="tenderResponseParameters form">
<?php echo $this->Form->create('TenderResponseParameter');?>
	<fieldset>
		<legend><?php echo __('Edit Tender Response Parameter'); ?></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('min_rqrd_quotations',array('label'=>'Minimum Required Quotations'));
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

