<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php echo $this->Html->charset('UTF-8')?>
<meta name="description" content="_your description goes here_" />
<meta name="keywords" content="_your,keywords,goes,here_" />
<meta name="author" content="Team" />
<?php echo $this->Html->css('cake.forms', 'stylesheet', array("media"=>"all" ));?>
<?php echo $this->Html->css('andreas02', 'stylesheet', array("media"=>"screen" ));?>
<?php echo $this->Html->css('andreas02_print', 'stylesheet', array("media"=>"print" ));?>
<title>Steward Bank Procurement System:: <?php echo $title_for_layout?></title>
</head>

<body>

<div id="toptabs">

</div>
	<div id="container">
	<div id="logo">
</div>	
					
<div id="desc">

</div>

<div class="left_links">
		
		<?php if($current_user['system_group_id']==1){?>
<h4><ul>		
		<li><?php echo $this->Html->link(__('Home'), array('controller'=>'Users','action' => 'index_reports'));  ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><?php echo $this->Html->link(__('Supplier Details'), array('controller'=>'SupplierDetails','action' => 'index')); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><?php echo $this->Html->link(__('Tender Requests'), array('controller'=>'TenderRequests','action' => 'index')); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><?php echo $this->Html->link(__('User Accounts'), array('controller'=>'users','action' => 'index')); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><?php echo $this->Html->link(__('System Roles'), array('controller'=>'system_groups','action' => 'index')); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><?php echo $this->Html->link(__('Departments'), array('controller'=>'Departments','action' => 'index'));?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><?php echo $this->Html->link(__('Change Password'), array('controller'=>'users','action' => 'admin_password')); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		</ul></h4>
		<?php }?>	
		
		<?php if($current_user['system_group_id']==2){?>
<h4><ul>		
		<li><?php echo $this->Html->link(__('Home'), array('controller'=>'Users','action' => 'index_reports'));  ?></li>
		<li><?php echo $this->Html->link(__('Supplier Details'), array('controller'=>'SupplierDetails','action' => 'index')); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><?php echo $this->Html->link(__('Tender Requests'), array('controller'=>'TenderRequests','action' => 'index')); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><?php echo $this->Html->link(__('Change Password'), array('controller'=>'users','action' => 'admin_password')); ?></li>
		</ul></h4>
		<?php }?>
		<?php if($current_user['system_group_id']==3){?>
<h4><ul>	
			<li><?php echo $this->Html->link(__('Home'), array('controller'=>'Users','action' => 'index_reports'));  ?></li>
		<li><?php echo $this->Html->link(__('Supplier Details'), array('controller'=>'SupplierDetails','action' => 'index')); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><?php echo $this->Html->link(__('Tender Requests'), array('controller'=>'TenderRequests','action' =>'index_supplier')); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><?php echo $this->Html->link(__('Tender Historys'), array('controller'=>'TenderResponses','action' => 'index')); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><?php echo $this->Html->link(__('Change Password'), array('controller'=>'users','action' => 'admin_password')); ?></li>
		</ul></h4>
		<?php }?>
			</div>
		<div id="news_title">

<?php echo $this->Html->script('jquery.min.js');?>
<?php echo $this->Html->script('jquery-ui.min.js');?>
<?php echo $this->Html->script('application.js');?>
<?php echo $this->Html->script('application1.js');?>
<?php echo $this->Html->script('application2.js');?>
	<!-- scripts_for_layout -->
	<?php echo $scripts_for_layout; ?>
	<!-- Js writeBuffer -->
	<?php
	if (class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')) echo $this->Js->writeBuffer();
	// Writes cached scripts
	?>

			</div>
		<div id="content">
			<div style = "text-align: right;">
				<?php if($logged_in) {?>
			<?php echo $current_user['username'];?>.<?php echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout'));?>
				<?php } else {
					} ?>
			</div>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>

			<?php echo $this->fetch('content'); ?>
		</div>		
</div>
</body>
<div id="footer">
Copyright &copy; <?php echo date('Y'); ?>Steward Bank Procurement System
</div>

</html>