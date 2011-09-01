<!--?php debug($events); ?-->

<!--?php foreach($events as $event): ?>
<-?php    echo $event['Event']['event_name']; ?>
<-?php debug($event); ?>
<-?php    foreach($event['Person'] as $person): ?>
<-?php      echo $person['last_name'] . ', ' . $person['first_name']; ?>
<-?php debug($person); ?>
<-br>
<-?php    endforeach; ?>
<-?php  endforeach; ?-->

<table cellpadding="0" cellspacing="0">
<tr class="altrow">
	<th>Project</th>
	<th>Last Name</th>
	<th>First Name</th>
	<th>Email Address</th>
	<th>Phone Number</th>
	<!--th>Size</th-->
	<th>Note</th>
        <th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($events as $event):
  foreach ($event['Person'] as $person):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $event['Event']['event_name']; ?>
		</td>
		<td>
			<?php echo $person['last_name']; ?>
		</td>
		<td>
			<?php echo $person['first_name']; ?>
		</td>
		<td>
			<?php echo $person['email']; ?>
		</td>
		<td>
			<?php echo $person['phone_number']; ?>
		</td>
		<td>
			<!--?php 
switch ($i) {
    case 0:
        echo "None"; break;
    case 1:
        echo "X-Small"; break;
    case 2:
        echo "Small"; break;
    case 3:
        echo "Medium"; break;
    case 4:
        echo "Large"; break;
    case 5:
        echo "X-Large"; break;
    case 6:
        echo "XX-Large"; break;
    case 7:
        echo "XXX-Large"; break;
    default:
        echo "None"; break;
}
?-->
		</td>
		<td>
			<?php if (!empty($person['Note'][0]['note'])) { echo $person['Note'][0]['note']; } ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Delete', true), array('action' => 'deletePerson', $person['PeopleEvent']['person_id'], $event['Event']['id']), null, sprintf(__('Are you sure you want to delete %s %s from %s?', true), $person['first_name'],$person['last_name'], $event['Event']['event_name'])); ?>
		</td>
	</tr>
  <?php endforeach; ?>
<?php endforeach; ?>
</table>
