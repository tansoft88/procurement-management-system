<ul>
		<li><?php echo $this->Html->link(__('<<Back'), array('action' => 'index_reports')); ?></li>
			</ul>
<br><fieldset>
	<legend><b><?php echo __('Listing User Accounts');?></b></legend></br>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>Username</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Role</th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['lastname']); ?>&nbsp;</td>
		<td>
			<?php echo h($user['SystemGroup']['account_type_name']); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Settings'), array('action' => 'edit', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</fieldset></br>
	<fieldset>
	<legend><b><?php echo __('Quick Links'); ?></b></legend>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
			</ul>
</fieldset>
