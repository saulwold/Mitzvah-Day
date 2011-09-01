
<h1><?php echo $project['event_name']; ?></h1>
<h2>Sunday, May 15th, 2011</h2>
<h2><?php echo $project['time']; ?></h2>
<h2><?php echo $project['location']; ?></h2>
<br>
<p><?php echo $project['description']; ?></p>
<br>
<?php if (!empty($project['agency_link'])):?>
     <h2>Visit <a href=<?php echo $project['agency_link']; ?>>
     <?php echo $project['agency']; ?></a> 
     for more information about this agency.</h2> 
<?php endif; ?>
