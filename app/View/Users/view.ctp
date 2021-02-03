<div class="users view">
<h2><?php  echo __('User');?></h2>
<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo ('Username');?></th>
			<th><?php echo ('Email Address');?></th>
			<th><?php echo ('Title');?></th>
			<th><?php echo ('Lastname');?></th>
			<th><?php echo ('Firstname');?></th>
			<th><?php echo ('Contact NUmber');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<tr>
			<td><?php echo $user['User']['username'];?></td>
			<td><?php  echo $user['User']['email_address'];?></td>
			<td><?php echo $user['User']['title']; ?></td>
			<td><?php echo h($user['User']['lastname']); ?></td>
			<td><?php echo h($user['User']['firstname']); ?></td>
			<td><?php echo h($user['User']['contact_phone1']); ?></td>
			<td class="actions"><ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li></ul></td>
	</tr>
	</table>
	<br>
		
</div>
<div class="actions">
	<h3><?php echo __('Quick Links'); ?></h3>
	<ul>
	
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List System Groups'), array('controller' => 'system_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Organizations'), array('controller' => 'client_organizations', 'action' => 'index')); ?> </li>
	</ul>
</div>
