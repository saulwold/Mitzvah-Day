<div class="people index">
<h2><?php __('People');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('first_name');?></th>
	<th><?php echo $paginator->sort('last_name');?></th>
	<th><?php echo $paginator->sort('phone_number');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($people as $person):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $person['Person']['id']; ?>
		</td>
		<td>
			<?php echo $person['Person']['first_name']; ?>
		</td>
		<td>
			<?php echo $person['Person']['last_name']; ?>
		</td>
		<td>
			<?php echo $person['Person']['phone_number']; ?>
		</td>
		<td>
			<?php echo $person['Person']['email']; ?>
		</td>		
		<td>
			<?php echo $person['Person']['created']; ?>
		</td>	
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $person['Person']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $person['Person']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $person['Person']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $person['Person']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Person', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Donations', true), array('controller' => 'donations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Donation', true), array('controller' => 'donations', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
