<!--?php debug($events); ?>
<-?php foreach($events as $event): ?>
<-?php    echo $event['Event']['event_name']; ?>
<-?php debug($event); ?>
<-?php    foreach($event['Person'] as $person): ?>
<-?php      echo $person['last_name'] . ', ' . $person['first_name']; ?>
<-?php debug($person); ?>
<-br>
<-?php    endforeach; ?>
<-?php  endforeach; ?-->


<div class="sidebar_left">
  <h3 class="sidebar">Projects</h3>
  <?php foreach( $events as $event ): ?>
    <?php echo $this->element('sidebar_events', array('event'=>$event['events'])); ?>
    <div class="divider">&nbsp;</div>
  <?php endforeach; ?>
  <br>
  <h3 class="sidebar">Full Projects</h3>
  <?php foreach( $fullEvents as $event ): ?>
    <?php echo $this->element('sidebar_events', array('event'=>$event['events'])); ?>
    <div class="divider">&nbsp;</div>
  <?php endforeach; ?>
  <div class="clearer">&nbsp;</div>
</div>

<div class="content_main">
    <?php echo $this->element('main_event', array('project'=>$project['Event'])); ?>

    <div class="divider">&nbsp;</div>

    <h1>Mitzvah Day Kick-Off Breakfast</h1>
    <h2>May 20th, 2012 8:45 a.m. at Temple Beth Israel</h2>
    <br>
    <p>Come enjoy our bountiful 
    bagel breakfast (sponsored by Toby’s, Genesis, and Bagel Sphere) at 
    8:45 in the Temple Beth Israel Social Hall (1175 E. 29<sup>th</sup> 
    Ave., Eugene).&nbsp; After breakfast you’ll meet with your project 
    leader and get started!</p>

    <div class="divider">&nbsp;</div>

    <!--h2>Mitzvah Day Projects include (click project title for details):</h2-->

    <p>Note: Registration for Mitzvah Day has been so successful (thank you!) that the original project offerings are all full.</p>

    <!--div class="divider">&nbsp;</div-->

    <!--h1>Registration will Open Soon!</h1-->
    <!--h1>Register Today!</h1>
    <h2>PLEASE HELP BY MEETING OUR MAY 8<sup>th</sup> REGISTRATION DEADLINE</h2>
    <a class="button" href="/people/registration">
        <?php echo $html->image('button_registerhere.png', array('class'=>'button', 'alt'=>'Register Here!', 'width'=>'135', 'height'=>'25')); ?>
    </a-->

    <div class="divider">&nbsp;</div>

    <h1>Other Ways to Help!</h1>
    <h2>Donate to the Mitzvah Day Barrels</h2>
    <br>
    <p>Bring to the Mitzvah Day barrels (located at 1175 E. 29<sup>th</sup> Ave., Eugene):
       Snacks for Head Start children (small portion, healthy, non-perishables
       to be sent home with children), toiletries for WomensSpace, or make a
       financial contribution.  For more information please visit www.mitzvah-day.org. 
    <p><br>

    <div class="divider">&nbsp;</div>

    <!--
    <?php # foreach( $events as $event ): ?>
      <?php # echo $html->image('badge_new.png', array('class'=>'badge', 'alt'=>'New', 'width'=>'37', 'height'=>'41')); ?>
      <?php # echo $this->element('new_events', array('event'=>$event['events'])); ?>
    <?php # endforeach; ?>
    -->

    <!-- div class="divider">&nbsp;</div -->
</div>

<div class="sidebar_right">
    <h3 class="sidebar">Sponsors</h3>
    <?php echo $this->element('sponsors'); ?>
    <div class="divider">&nbsp;</div>
</div>

<div class="clearer">&nbsp;</div>
