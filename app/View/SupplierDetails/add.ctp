<div class="supplierDetails form">
<?php echo $this->Form->create('SupplierDetail');?>
	<fieldset>
		<legend><?php echo __('Add New Supplier Details'); ?></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('email_address',array('size'=>60));
		echo "</br>";
		echo $this->Form->input('organization_name',array('size'=>56));
		echo "</br>";
		echo $this->Form->input('org_address',array('align'=>'center','label'=>'Address','size'=>80,'rows'=>6,'style'=>'width: 450px'));
		echo "</br>";
		echo $this->Form->input('city',array('size'=>60));
		echo "</br>";
		echo $this->Form->input('contact_number',array('min'=>0));
		echo "</br>";
		echo $this->Form->input('tender_category_id');
		echo "</br>";
		echo $this->Form->input('tax_clearance_number',array('size'=>56));
		echo "</br>";
		echo $this->Form->input('praz_number',array('size'=>65));
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div></br>
<fieldset>
	<legend><?php echo __('Actions'); ?></legend>
	<ul>
		<li><?php echo $this->Html->link(__('List Supplier Details'), array('action' => 'index'));?></li>
	</ul>
</fieldset>
