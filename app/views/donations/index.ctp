<div class="donations index">
<h2><?php __('Donations');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('donation_name');?></th>
	<th><?php echo $paginator->sort('amount');?></th>
	<th><?php echo $paginator->sort('reason');?></th>
	<th><?php echo $paginator->sort('items');?></th>
	<th><?php echo $paginator->sort('person_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($donations as $donation):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $donation['Donation']['id']; ?>
		</td>
		<td>
			<?php echo $donation['Donation']['donation_name']; ?>
		</td>
		<td>
			<?php echo $donation['Donation']['amount']; ?>
		</td>
		<td>
			<?php echo $donation['Donation']['reason']; ?>
		</td>
		<td>
			<?php echo $donation['Donation']['items']; ?>
		</td>
		<td>
			<?php echo $html->link($donation['Person']['id'], array('controller' => 'people', 'action' => 'view', $donation['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $donation['Donation']['created']; ?>
		</td>
		<td>
			<?php echo $donation['Donation']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $donation['Donation']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $donation['Donation']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $donation['Donation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $donation['Donation']['id'])); ?>
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
		<li><?php echo $html->link(__('New Donation', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List People', true), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
