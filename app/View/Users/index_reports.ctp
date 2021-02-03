
<?php //Systems Admin
 if($current_user['system_group_id']==1){?>
  <table><tr><td>
<fieldset>
		<legend><b><?php echo __('Manage Tenders/Suppliers'); ?></b></legend><br>
		<ul><li><?php echo $this->Html->link(__('Tender Categories'), array('controller'=>'TenderCategories','action' => 'index')); ?></li></br>
		<li><?php echo $this->Html->link(__('Departments'), array('controller'=>'Departments','action' => 'index')); ?></li></br>
		<li><?php echo $this->Html->link(__('Supplier Details'), array('controller'=>'SupplierDetails','action' => 'index')); ?></li></br>
		</ul></br>
		
</fieldset></td>
<td><fieldset>
		<legend><b><?php echo __('Manage System Parameters'); ?></b></legend></br>
		<ul>
	<li><?php echo $this->Html->link(__('Tender Response Parameters'), array('controller'=>'TenderResponseParameters','action' => 'index')); ?></li></br>
	<li><?php echo $this->Html->link(__('Tender Statuses'), array('controller'=>'Tender Statuses','action' => 'index')); ?></li></br>
		</ul></br>
			
</fieldset></td>
<td><fieldset>
		<legend><b><?php echo __('System  Reports'); ?></b></legend></br>
	<ul><li><?php echo $this->Html->link(__('Tender Reports'), array('controller'=>'TenderRequests','action' => 'request_report')); ?></li></ul></br>
	<ul><li><?php echo $this->Html->link(__('Tender Responses'), array('controller'=>'TenderResponses','action' => 'index')); ?></li></ul></br>

</fieldset></td></tr></table>

<?php }?>
<?php 
//Mechant
if($current_user['system_group_id']==2){?>
<table><tr><td><fieldset>
		<legend><b><?php echo __('System  Reports'); ?></b></legend></br>
	<ul><li><?php echo $this->Html->link(__('Tender Requests'), array('controller'=>'TenderRequests','action' => 'index')); ?></li></ul></br>
	<ul><li><?php echo $this->Html->link(__('Tender Responses'), array('controller'=>'TenderResponses','action' => 'index')); ?></li></ul></br>

</fieldset></td><td>
<fieldset>
		<legend><b><?php echo __('Manage System Parameters'); ?></b></legend></br>
		<ul>
		<li><?php echo $this->Html->link(__('Tender Response Parameters'), array('controller'=>'TenderResponseParameters','action' => 'index')); ?></li></br>
	<li><?php echo $this->Html->link(__('Tender Statuses'), array('controller'=>'Tender Statuses','action' => 'index')); ?></li></br>
		</ul></br>
			
</fieldset></td>
<td><fieldset>
		<legend><b><?php echo __('System  Reports'); ?></b></legend></br>
    <ul><li><?php echo $this->Html->link(__('Tender Reports'), array('controller'=>'TenderRequests','action' => 'request_report')); ?></li></ul></br>
	<ul><li><?php echo $this->Html->link(__('Tender Responses'), array('controller'=>'TenderResponses','action' => 'index')); ?></li></ul></br>

</fieldset></td></tr></table>

<?php }?>
<?php 
//Supplier
if($current_user['system_group_id']==3){?>
<table><tr><td><fieldset>
		<legend><b><?php echo __('Profile Portal'); ?></b></legend><br>
	<ul>	<li><?php echo $this->Html->link(__('Supplier Details'), array('controller'=>'SupplierDetails','action' => 'index')); ?></li></br>
		<li><?php echo $this->Html->link(__('Tender Categories'), array('controller'=>'TenderCategories','action' => 'index')); ?></li></br>
		</ul></br>
</fieldset></td><td>
<fieldset>
		<legend><b><?php echo __('System  Reports'); ?></b></legend></br>
	<ul><li><?php echo $this->Html->link(__('Tender Requests'), array('controller'=>'TenderRequests','action' => 'index_supplier')); ?></li></ul></br>
	<ul><li><?php echo $this->Html->link(__('Tender Responses'), array('controller'=>'TenderResponses','action' => 'index')); ?></li></ul></br>

</fieldset></td><tr></table>

<?php }?>
