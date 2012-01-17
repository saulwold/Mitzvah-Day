
<!-- These settings will need to come from the Database Admin Page! -->
<?php $regopen = 1; $regclosed = 0; $event_full = FALSE; ?>

<?php foreach( $fullEvents as $event ): ?>
    <?php if(isset($project) && in_array($project['event_name'], $event['events']) &&
             in_array($project['id'], $event['events'])):
	$event_full = TRUE;
	break;
    endif; ?>
<?php endforeach; ?>


<?php if ($regopen == 0 && $regclosed == 0):?>
    <h1>Registration will Open Soon!</h1>
<?php elseif ($regopen == 1 && $regclosed == 0 && isset($project) && $event_full):?>
    <h2>We are sorry, but this event is already full, please select another Mitzvah to partipate in.</h2>
<?php elseif ($regopen == 1 && $regclosed == 0):?>
    <?php if (isset($project)):?>
        <h1>Register for <?php echo $project['event_name']; ?> Today!</h1>
    <?php else:?>
        <h1>Register Today!</h1>
    <?php endif; ?>
    <h2>PLEASE HELP BY MEETING OUR MAY 8<sup>th</sup> REGISTRATION DEADLINE</h2>
    <?php if($this->params['pass'][0] == 'home'):?>
    	<a class="button" href="/people/registration">
    <?php else:?>
    	<a class="button" href="/people/registration/<?php echo $project['id']?>">
    <?php endif; ?>

        <?php echo $html->image('button_registerhere.png', array('class'=>'button', 'alt'=>'Register Here!', 'width'=>'135', 'height'=>'25')); ?>
    </a>
<?php elseif ($regopen == 0 && $regclosed == 1):?>
    <p>Note: Registration for Mitzvah Day has been so successful (thank you!) that the original project offerings are all full.</p>
<?php endif; ?>
