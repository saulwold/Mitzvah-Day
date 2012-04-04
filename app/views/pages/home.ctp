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
    <h1>4<sup>th</sup> Annual Mitzvah Day 2012</h1>
    <h2>Sunday, May 20th, 2012</h2>
    <br>
<!--font size="3" face="Gill Sans MT"-->
<p>Join the entire Jewish community 
to help others this Spring.&nbsp; Mitzvah Day is a wonderful opportunity 
for individuals and families to get involved and make a difference in 
our community.&nbsp; By participating in a Mitzvah Day project you will 
be sharing in Tikkun Olam (repairing the world).&nbsp;&nbsp; Volunteer 
just a little of your time and help support various projects around 
our community.&nbsp; This Jewish Federation of Lane County effort is 
a partnership between the Jewish Community Relations Council, TBI Sisterhood, 
Temple Beth Israel, Ahavas Torah, Ad Olam, and UO Hillel.&nbsp; 
The TBI Talmud Torah/Shalhevet students will also be participating with 
in-class projects.&nbsp;<br>&nbsp;<br></p>

<?php echo $html->image('md nona.jpg', array('width' => '450', 'height'=>'340')); ?>

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

    <?php echo $this->element('registration'); ?>
    
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
