<div class="events form">
<?php echo $form->create('Event');?>
	<fieldset> 	
  
 	<div class="simpleField">Event Id: <?= $this->data['Event']['id']?></div>

<?php
 	echo $this->element('form/field', array(
 		'fieldName'=>"Event Name",
 		'value'=>$this->data['Event']['event_name'],
 		'cakeName'=>"data[Event][event_name]"
	));

	echo $this->element('form/field', array(
 		'fieldName'=>"Description",
 		'value'=>$this->data['Event']['description'],
 		'cakeName'=>"data[Event][description]",
 		'type'=>'textbox'
	));

	echo $this->element('form/field', array(
 		'fieldName'=>"Restrictions",
 		'value'=>$this->data['Event']['restrictions'],
 		'cakeName'=>"data[Event][restrictions]",
 		'type'=>'textbox'
	));

 	echo $this->element('form/field', array(
 		'fieldName'=>"Event Location",
 		'value'=>$this->data['Event']['location'],
 		'cakeName'=>"data[Event][location]"
	));

	echo $this->element('form/field', array(
 		'fieldName'=>"Sponsoring Agency",
 		'value'=>$this->data['Event']['agency'],
 		'cakeName'=>"data[Event][agency]"
	));

	echo $this->element('form/field', array(
 		'fieldName'=>"Time",
 		'value'=>$this->data['Event']['time'],
 		'cakeName'=>"data[Event][time]"
	));

	echo $this->element('form/field', array(
 		'fieldName'=>"Time",
 		'value'=>$this->data['Event']['time'],
 		'cakeName'=>"data[Event][time]",
 		'type'=>'value_toggle'
	));

?>
<hr/>
	<?php						
		echo $form->input('max_people');
		echo $form->input('location');
		echo $form->input('agency');
		echo $form->input('time');
		echo $form->input('restrictions');
		echo $form->input('Group');
		echo $form->input('Person');
	?>
	</fieldset>	
<?php echo $form->end('Submit');?>
</div>
<div>
	<?php debug($this->data) ?>
</div>
