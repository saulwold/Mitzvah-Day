<div class="people form">
<?php echo $form->create('Person');?>
	<fieldset>
 		<legend><?php __('Edit Person');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('first_name');
		echo $form->input('last_name');
		echo $form->input('phone_number');
		echo $form->input('tshirt');
		echo $form->input('password');
		echo $form->input('last_donation');
		echo $form->input('Event');
		echo $form->input('Group');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Person.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Person.id'))); ?></li>
		<li><?php echo $html->link(__('List People', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Donations', true), array('controller' => 'donations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Donation', true), array('controller' => 'donations', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
