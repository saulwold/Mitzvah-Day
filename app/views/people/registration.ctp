<!--?php debug ($this) ?-->
<?php foreach( $events as $event ) debug($event); ?>
<div class="registration_main">
<?php echo $form->create('Person', array('url' => array('action' => 'registration')));?>
<fieldset>
      <h1><?php __('Registration');?></h1>
      <div class="contact_column_left">
	
	<h2 class="
            <?php if (!empty($form->validationErrors['Person']['first_name']))
                echo $form->validationErrors['Person']['first_name']; ?>">
	First Name</h2>
	<input class="textfield" type="text" maxlength="32" value="<?php echo $this->data[0]['Person']['first_name']; ?>"
	  id="PersonFirstName" name="data[0][Person][first_name]" />
      </div>

      <div class="contact_column_middle">
	<h2 class="
            <?php if (!empty($form->validationErrors['Person']['last_name']))
                echo $form->validationErrors['Person']['last_name']; ?>">
	Last Name</h2>
	<input class="textfield" type="text" maxlength="32" value="<?php echo $this->data[0]['Person']['last_name']; ?>""
	  id="PersonLastName" name="data[0][Person][last_name]" />
      </div>

      <!--div class="contact_column_right"> <?php echo $this->element('tshirt', array('id'=>'0')); ?> </div-->

      <div class="divider">&nbsp;</div>

      <div class="contact_column_left">
	<h2 class="
            <?php if (!empty($form->validationErrors['Person']['phone_number']))
                echo $form->validationErrors['Person']['phone_number']; ?>">
        Phone Number</h2>
	<input class="textfield" type="text" maxlength="25" value="<?php echo $this->data[0]['Person']['phone_number']; ?>""
	  id="PersonPhoneNumber" name="data[0][Person][phone_number]" />
      </div>

      <div class="contact_column_middle">
	<h2 class="
            <?php if (!empty($form->validationErrors['Person']['email']))
                echo $form->validationErrors['Person']['email']; ?>">
        Email Address</h2>
	<input class="textfield" type="text" maxlength="48" value="<?php echo $this->data[0]['Person']['email']; ?>""
	  id="PersonEmail" name="data[0][Person][email]" />
      </div>

      <div class="divider">&nbsp;</div>

      <div class="registration_event">
	<b class="
            <?php if (!empty($form->validationErrors['Event']['Event']))
                echo $form->validationErrors['Event']['Event']; ?>">
	<font size="10">Project Selection</font></b>
        <select class="select_menu" name="data[0][Event][Event]" attributes="" id="EventEvent">
          <?php if (is_numeric($this->params['pass'][0])): ?>
	      <option class="title" disabled >Please Select Project</option>
          <?php else: ?>
	      <option class="title" disabled selected="">Please Select Project</option>
          <?php endif ?>
          <option class="title" disabled>---- Available Projects ----</option>
          <?php foreach( $events as $event ): ?>
            <?php if ($this->params['pass'][0] == $event['events']['id']): ?>
              <?php echo $this->element('event_options', array('event'=>$event['events'], 'options'=> 'class=open_event selected=""' )); ?>
          <?php else: ?>
              <?php echo $this->element('event_options', array('event'=>$event['events'], 'options'=> 'class=open_event' )); ?>
          <?php endif ?>
          <?php endforeach; ?>
          <option class="title" disabled>---- Full Projects ----</option>
          <?php foreach( $fullEvents as $event ): ?>
            <?php echo $this->element('event_options', array('event'=>$event['events'], 'options'=> 'class=closed_event disabled' )); ?>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="mid-span">&nbsp;</div>

      <h1>Additional Mitzvah Makers</h1>

      <?php for( $id = 1; $id < 4; $id++ ): ?>
	<?php if ($id > 1) echo '<div class="divider">&nbsp;</div>'; ?>
        <div class="contact_column_left">
          <h2>First Name</h2>
	  <input class="textfield" type="text" maxlength="32" value="<?php echo $this->data[$id]['Person']['first_name']; ?>"
	    id="PersonFirstName" name="data[<?php echo $id; ?>][Person][first_name]" />
        </div>
        <div class="contact_column_middle">
          <h2>Last Name</h2>
          <input class="textfield" type="text" maxlength="32" value="<?php echo $this->data[$id]['Person']['last_name']; ?>"
	    id="PersonLastName" name="data[<?php echo $id; ?>][Person][last_name]" />
        </div>

        <!--div class="contact_column_right"> <?php echo $this->element('tshirt', array('id'=>$id)); ?> </div-->
        <div class="contact_column_far_right"> <?php echo $this->element('age', array('id'=>$id)); ?> </div>
      <?php endfor; ?>

      <div class="mid-span">&nbsp;</div>

      <h2>Comments</h2>
      <textarea class="" rows="3" cols="80" <?php echo $this->data[0]['Note']['note']; ?>"
	  id="Note" name="data[0][Note][note]"><?php echo $this->data[0]['Note']['note']; ?></textarea>

      <!-- input class="" type="textarea" rows="3" cols="55" value="<?php echo $this->data[0]['Note']; ?>"
	  id="Note" name="data[0][Note]" /-->

      <div class="mid-span">&nbsp;</div>

      <input class="button_submit" type="submit" name="button" id="button" value="" />

</fieldset>
</form>
</div> <!--registration_main-->
<div class="sidebar_right">
    <h3 class="sidebar">Sponsors</h3>
    <?php echo $this->element('sponsors'); ?>
    <div class="divider">&nbsp;</div>
</div>

<div class="clearer">&nbsp;</div>
