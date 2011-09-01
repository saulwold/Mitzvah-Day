<div class="people index">
<h2><?php __('People');?></h2>
<p>
<?php
debug($peps);
debug($notepeps);
?></p>
<table cellpadding="0" cellspacing="0">
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
			<?php echo $person['Person']['tshirt']; ?>
		</td>
		<td>
			<?php echo $person['Person']['tshirt']; ?>
		</td>
		<!--td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $person['Person']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $person['Person']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $person['Person']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $person['Person']['id'])); ?>
		</td-->
	</tr>
<?php endforeach; ?>
</table>
</div>

<br>
<div class="divider">&nbsp;</div>
<br>
