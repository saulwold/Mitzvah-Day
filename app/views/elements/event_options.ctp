<!--?php
  if (empty($this->data[0]) || ($this->data[0]['Event']['Event'] != $event['id'])) {
    $selected = "";
  } else { 
    $selected = " selected ";
  }
?-->
<?php $title = $event['description'] . " at " . $event['location'] . " from " . $event['time'] . " sponsored by " . $event['agency'] ?>
<option <?php echo $options; ?> title="<?php echo $title; ?>" value="<?php echo $event['id']; ?>"><?php echo $event['event_name']; ?>
</option>
