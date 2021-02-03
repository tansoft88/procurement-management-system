<div class="tenderResponses form">
<?php echo $this->Form->create('TenderResponse', array('type' => 'file'));?>
	<fieldset>
		<legend><?php echo __('Add Tender Response'); ?></legend>
	<?php
	    echo "</br>";
		echo $this->Form->input('response_summary',array('align'=>'center','label'=>'Response summary','size'=>80,'rows'=>6,'style'=>'width: 450px'));
		echo "</br>";
		echo "<br><b>";
		echo $this->Form->label('Upload Quotation(* Pdf files only)');
		echo "<br>";
		echo "</b><br><br>";
		echo $this->Form->input('Browse_File', array('type' => 'file'));
		echo "<br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
