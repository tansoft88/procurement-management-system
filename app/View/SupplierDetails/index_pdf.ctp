<fieldset>
	<legend><?php echo __('Supplier Details');?></legend></br>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Email</th>
			<th>Organization name</th>
			<th>Address</th>
			<th>City</th>
			<th>Contact number</th>
			<th>Tender category</th>
			<th>Tax clearance number</th>
			<th>Praz number</th>
	</tr>
	<?php
	foreach ($supplierDetails as $supplierDetail): ?>
	<tr>
		<td><?php echo h($supplierDetail['SupplierDetail']['id']); ?>&nbsp;</td>
		<td><?php echo h($supplierDetail['SupplierDetail']['email_address']); ?>&nbsp;</td>
		<td><?php echo h($supplierDetail['SupplierDetail']['organization_name']); ?>&nbsp;</td>
		<td><?php echo h($supplierDetail['SupplierDetail']['org_address']); ?>&nbsp;</td>
		<td><?php echo h($supplierDetail['SupplierDetail']['city']); ?>&nbsp;</td>
		<td><?php echo h($supplierDetail['SupplierDetail']['contact_number']); ?>&nbsp;</td>
		<td>
			<?php echo h($supplierDetail['TenderCategory']['category_name']); ?>
		</td>
		<td><?php echo h($supplierDetail['SupplierDetail']['tax_clearance_number']); ?>&nbsp;</td>
		<td><?php echo h($supplierDetail['SupplierDetail']['praz_number']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>