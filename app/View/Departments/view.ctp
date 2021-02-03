<div class="departments view">
<h2><?php  echo __('Department');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($department['Department']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($department['Department']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Department'), array('action' => 'edit', $department['Department']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Department'), array('action' => 'delete', $department['Department']['id']), null, __('Are you sure you want to delete # %s?', $department['Department']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Programmes'), array('controller' => 'programmes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Programme'), array('controller' => 'programmes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Books');?></h3>
	<?php if (!empty($department['Book'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Author'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Isbn'); ?></th>
		<th><?php echo __('Publisher Id'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Stack Room Id'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($department['Book'] as $book): ?>
		<tr>
			<td><?php echo $book['id'];?></td>
			<td><?php echo $book['name'];?></td>
			<td><?php echo $book['author'];?></td>
			<td><?php echo $book['year'];?></td>
			<td><?php echo $book['isbn'];?></td>
			<td><?php echo $book['publisher_id'];?></td>
			<td><?php echo $book['department_id'];?></td>
			<td><?php echo $book['stack_room_id'];?></td>
			<td><?php echo $book['status_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'books', 'action' => 'view', $book['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'books', 'action' => 'edit', $book['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'books', 'action' => 'delete', $book['id']), null, __('Are you sure you want to delete # %s?', $book['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Programmes');?></h3>
	<?php if (!empty($department['Programme'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($department['Programme'] as $programme): ?>
		<tr>
			<td><?php echo $programme['id'];?></td>
			<td><?php echo $programme['name'];?></td>
			<td><?php echo $programme['department_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'programmes', 'action' => 'view', $programme['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'programmes', 'action' => 'edit', $programme['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'programmes', 'action' => 'delete', $programme['id']), null, __('Are you sure you want to delete # %s?', $programme['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Programme'), array('controller' => 'programmes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users');?></h3>
	<?php if (!empty($department['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Email Address'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Account Status'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
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
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Contact Phone1'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($department['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['email_address'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['account_status'];?></td>
			<td><?php echo $user['firstname'];?></td>
			<td><?php echo $user['lastname'];?></td>
			<td><?php echo $user['address'];?></td>
			<td><?php echo $user['department_id'];?></td>
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
			<td><?php echo $user['title'];?></td>
			<td><?php echo $user['contact_phone1'];?></td>
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
