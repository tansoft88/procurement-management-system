<fieldset>
	<legend><?php echo __('Tender Responses');?></legend>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Tender request code</th>
			<th>Supplier</th>
			<th>Response summary</th>
			<th>File attachment</th>
			<th>Created</th>
			<th>Created by</th>
			<th>Modified</th>
			<th>Approved</th>
			<th>Approved by</th>
	</tr>
	<?php
	foreach ($tenderResponses as $tenderResponse): ?>
	<tr>
		<td><?php echo h($tenderResponse['TenderResponse']['id']); ?>&nbsp;</td>
		<td>
			<?php echo h($tenderResponse['TenderRequest']['tender_code']); ?>
		</td>
		<td>
			<?php echo h($tenderResponse['SupplierDetail']['organization_name']); ?>
		</td>
		<td><?php echo h($tenderResponse['TenderResponse']['response_summary']); ?>&nbsp;</td>
		<td><?php echo h($tenderResponse['TenderResponse']['file_attachment']); ?>&nbsp;</td>
		<td><?php echo h($tenderResponse['TenderResponse']['created']); ?>&nbsp;</td>
		<td><?php echo h($tenderResponse['TenderResponse']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($tenderResponse['TenderResponse']['modified']); ?>&nbsp;</td>
		<td><?php if(($tenderResponse['TenderResponse']['approved'])==0){ echo "Pending"; }
		elseif(($tenderResponse['TenderResponse']['approved'])==1){echo "Approved"; } 
		elseif(($tenderResponse['TenderResponse']['approved'])==2){echo "Unsuccessful"; }?>&nbsp;</td>
		<td><?php echo h($tenderResponse['TenderResponse']['approved_by']); ?>&nbsp;</td>
		<?php if($system_group_id == 1){ ?>
		<?php } ?>
	</tr>
<?php endforeach; ?>
	</table>