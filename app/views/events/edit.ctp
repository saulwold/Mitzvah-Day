<div class="events form">
<?php echo $form->create('Event');?>
	<fieldset>
 		<legend><?php __('Edit Event');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('event_name');
		echo $form->input('description');
		echo $form->input('max_people');
		echo $form->input('location');
		echo $form->input('agency');
		echo $form->input('time');
		echo $form->input('restrictions');
		echo $form->input('Group');
		echo $form->input('Person');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Event.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Event.id'))); ?></li>
		<li><?php echo $html->link(__('List Events', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
