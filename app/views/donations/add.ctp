<div class="donations form">
<?php echo $form->create('Donation');?>
	<fieldset>
 		<legend><?php __('Add Donation');?></legend>
	<?php
		echo $form->input('donation_name');
		echo $form->input('amount');
		echo $form->input('reason');
		echo $form->input('items');
		echo $form->input('person_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Donations', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List People', true), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
