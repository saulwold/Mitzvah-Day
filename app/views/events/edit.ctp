<div class="events form">
<?php echo $form->create('Event');?>
	<fieldset> 	
  
	<?php
	 	echo $this->element('form/field', array(
	 		'fieldName'=>'Event Name <span class="note">(id:' .  $this->data['Event']['id']. ')</span>',
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
	 		'fieldName'=>'Max People <span class="note">(-1 for closed)</span>',
	 		'value'=>$this->data['Event']['max_people'],
	 		'cakeName'=>"data[Event][max_people]"
		));
	?>

	<div class="simple_field">
		<div class="title">Mitzvah Makers</div>
		<div class="checkboxes">		
	    <?php $index = 0; ?>
			<?php foreach ($people as $person) : ?>

			<?php
			$isChecked = false;
				$index++;
				foreach ($this->data['Person']  as $selectedPerson) {
					if ($selectedPerson['id'] == $person['Person']['id'])
						$isChecked = true;
				}
			?>

			<div class="check">
				<span class="check"><input name="data[Person][Person][]" value="<?= $person['Person']['id'] ?>" type="checkbox" <?= $isChecked ? 'checked="checked"' : "" ?> />
				<span class="name"><?= $person['Person']['first_name'] ?> <?= $person['Person']['last_name'] ?></span>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	
</fieldset>	
<?php echo $form->end('Submit');?>
</div>
<?php
	/**
	 Groups have been removed since we're not apparently using them yet,
	 */
?>
