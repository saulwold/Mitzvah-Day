<div class="sidebar_left">
  <h3 class="sidebar">Projects</h3>
  <?php foreach( $events as $event ): ?>
    <?php echo $this->element('sidebar_events', array('event'=>$event['events'])); ?>
  <?php endforeach; ?>
  <br>
    <div class="divider">&nbsp;</div>
  <br>
  <h3 class="sidebar">Full Projects</h3>
  <?php foreach( $fullEvents as $event ): ?>
    <?php echo $this->element('sidebar_events', array('event'=>$event['events'])); ?>
  <?php endforeach; ?>
  <div class="clearer">&nbsp;</div>
</div>
<div class="content_main">

    <h1>Thank you for registering for <?php echo $person['Event'][0]['event_name']; ?></h1>
    <h2><?php echo $person['Event'][0]['time']; ?> at 
	<?php echo $person['Event'][0]['location']; ?></h2>
    <p><?php echo $person['Event'][0]['description']; ?></p>
    <p>This event is sponsored by <?php echo $person['Event'][0]['agency']; ?></p>
    <br>

    <div class="divider">&nbsp;</div>

    <br>
    <p>You will receive an email soon with confirmation and details</p>
    <br>

    <div class="divider">&nbsp;</div>
    <br>

    <h1>Mitzvah Day Kick-Off Breakfast</h1>
    <h2>May 20th, 2012 8:45 a.m. at Temple Beth Israel</h2>
    <br>
    <p>Come enjoy our bountiful bagel breakfast (sponsored by Toby's, Genesis, and Bagel Sphere) at
    8:45 in the Temple Beth Israel Social Hall (1175 E. 29<sup>th</sup> Ave., Eugene).&nbsp; After
    breakfast you'll meet with your project leader and get started!</p>
    <br>

    <div class="divider">&nbsp;</div>
    <br>

    <h1><?php echo $html->link("Return to Mitzvah Day Main Page", '/'); ?><h1>

    <br>
    <div class="divider">&nbsp;</div>

</div>

<div class="sidebar_right">
    <h3 class="sidebar">Sponsors</h3>
    <?php echo $this->element('sponsors'); ?>
    <div class="divider">&nbsp;</div>
</div>

<div class="clearer">&nbsp;</div>
