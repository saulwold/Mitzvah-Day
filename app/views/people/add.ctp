<div class="people form">
<?php debug ($form) ?>
<?php echo $form->create('Person');?>
	<fieldset>
 		<legend><?php __('Add Person');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List People', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Donations', true), array('controller' => 'donations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Donation', true), array('controller' => 'donations', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
