<h2><?php echo $event['event_name']; ?></h2>
<?php $body = $event['time'] . ",&nbsp&nbsp&nbsp&nbsp&nbsp Location: " . $event['location'] . "<br>" . $event['description']; ?>
<p class="moreinfo"><?php echo $body; ?></p>
<!--p><a class="moreinfo">More Info</a></p-->
