<div class="tenderResponses form">
<?php echo $this->Form->create('TenderResponse');?>
	<fieldset>
		<legend><?php echo __('Edit Tender Response'); ?></legend>
	<?php
	    echo "</br>";
		echo $this->Form->input('response_summary',array('align'=>'center','label'=>'Response summary','size'=>80,'rows'=>6,'style'=>'width: 450px'));
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

