<?php 
if(!empty($tenderRequests)){  ?>
<ul><li><?php echo $this->Html->link(__('<<Back'), array('action' => 'request_report')); ?></li></ul></br>
	<h3>Tender Category:  <?php echo $category_name; ?></h3></b></br>
<h3>Date:  <?php echo date('Y-m-d'); ?></h3></b></br>
<fieldset>
	<legend><?php echo __('Tender Request Reports');?></legend></br>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Tender category</th>
			<th>Tender code</th>
			<th>Tender title</th>
			<th>Tender specification</th>
			<th>Due date</th>
			<th>Tender status</th>
			<th>Created</th>
			<th>Created by</th>
			<th>Department</th>
			<th>Tender closed</th>
			<th>Closed by</th>
	</tr>
	<?php
	foreach ($tenderRequests as $tenderRequest): ?>
	<tr>
		<td><?php echo h($tenderRequest['TenderRequest']['id']); ?>&nbsp;</td>
		<td>
			<?php echo h($tenderRequest['TenderCategory']['category_name']); ?>
		</td><td><?php
		echo h($tenderRequest['TenderRequest']['tender_code']);
		?></td>
		<td><?php echo h($tenderRequest['TenderRequest']['tender_title']); ?>&nbsp;</td>
		<td><?php echo h($tenderRequest['TenderRequest']['tender_specification']); ?>&nbsp;</td>
		<td><?php 
		echo h($tenderRequest['TenderRequest']['due_date']); ?>&nbsp;</td>
		<td>
			<?php echo h($tenderRequest['TenderStatus']['status']); ?>
		</td>
		<td><?php echo h($tenderRequest['TenderRequest']['created']); ?>&nbsp;</td>
		<td><?php echo h($tenderRequest['TenderRequest']['created_by']); ?>&nbsp;</td>
		<td>
			<?php echo h($tenderRequest['Department']['name']); ?>
		</td>
		<td><?php if(($tenderRequest['TenderRequest']['tender_closed'])==0) { echo "Open"; }
			else { echo "Closed"; } ?>&nbsp;</td>
			<td><?php echo h($tenderRequest['TenderRequest']['closed_by']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
	<?php
	echo $this->Form->create('TenderRequest',array('action'=>'request_report_pdf'));
		echo $this->Form->input('tender_category_id',array('type'=>'hidden','value'=>$tender_category_id));
			echo $this->Form->end('/img/download_pdf.png',array('alt'=>'Download PDF'));
		?>
</fieldset></br>
<?php }else {
	echo $this->Form->create('TenderRequest'); ?>
	
<fieldset>
	<legend><b>Tender Request Report</legend></b></br>
	<?php
	echo "<table>";
		echo "<tr><td>" . $this->Form->label('Tender Category :<font color=red>*</font> ');
		echo "</td><td>";
		echo $this->Form->select("TenderRequest.tender_category_id",$tenderCategories);
		echo "</td></tr>";
		echo "</table>";
		echo "<br>";
		echo $this->Form->end(__('Submit'));
		?>
	</br>
	</fieldset>
<?php } ?>
