<div class="systemGroups view">
<h2><?php  echo __('System Group');?></h2>
<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Account Type</th>
			<th>Internal_account?</th>
			<th>Created</th>
			<th>Modified</th>
	</tr>
		<tr>
		<td>
			<?php echo h($systemGroup['SystemGroup']['id']); ?>
			</td>
		<td>
			<?php echo h($systemGroup['SystemGroup']['account_type_name']); ?>
			</td>
		<td>
			<?php echo h($systemGroup['SystemGroup']['internal_account']); ?>
		</td>
		<td>
			<?php echo h($systemGroup['SystemGroup']['created']); ?>
		</td>
		<td>
			<?php echo h($systemGroup['SystemGroup']['modified']); ?>
			</td>
		</td>
	<tr>
	</table>
<div class="related">
	<h3><?php echo __('Related Users');?></h3>
	<?php if (!empty($systemGroup['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Email Address'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Account Status'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('System Group Id'); ?></th>
		<th><?php echo __('Password Expiry Date'); ?></th>
		<th><?php echo __('Expiry Warning Date'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Create Ip'); ?></th>
		<th><?php echo __('Modify Ip'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($systemGroup['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['email_address'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['account_status'];?></td>
			<td><?php echo $user['firstname'];?></td>
			<td><?php echo $user['lastname'];?></td>
			<td><?php echo $user['system_group_id'];?></td>
			<td><?php echo $user['password_expiry_date'];?></td>
			<td><?php echo $user['expiry_warning_date'];?></td>
			<td><?php echo $user['created_by'];?></td>
			<td><?php echo $user['modified_by'];?></td>
			<td><?php echo $user['created'];?></td>
			<td><?php echo $user['modified'];?></td>
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['create_ip'];?></td>
			<td><?php echo $user['modify_ip'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
