<div class="tenderCategories form">
<?php echo $this->Form->create('TenderCategory');?>
	<fieldset>
		<legend><?php echo __('Edit Tender Category'); ?></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('category_name',array('size'=>60));
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

