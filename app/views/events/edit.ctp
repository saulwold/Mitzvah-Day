<script type="text/javascript">
	var mm_button_state = "all";

	function togglePeopleView(button) {
	  if (mm_button_state == "all" && button == "reg") {
	    var dataDiv = $('div.mm_data');

	  	dataDiv.html("");

      $('input.mm_check:checked').each(function(index) {
        var name = $(this).parent().text().trim();
        dataDiv.append('<div class="mm_name">'+name+'</div>');
      });

      $('div.mm_checkboxes').hide();
      dataDiv.show();

      mm_button_state = "reg";
	  } else if (mm_button_state == "reg" && button == "all") {

	    $('div.mm_data').hide();
	    $('div.mm_checkboxes').show();

	    mm_button_state = "all";
	  }
	}

  function toggleCheckboxes() {
    var count = $('input.mm_check:checked').length;
    var max = $('input.max_people').val();

    if (max < 0) {
      $('input.mm_check').prop('disabled', true);
    } else {
      $('input.mm_check').prop('disabled', false);
    }

    if (count >= max) {
      $('input.mm_check:not(:checked)').prop('disabled', true);
    } else {
      $('input.mm_check:not(:checked)').prop('disabled', false);
      $('span.people_count').text(count);
    }
  }

  $(document).ready(function () {
    togglePeopleView("reg");

    $('span.mm_all').click(function() {
        togglePeopleView("all");
    });

		$('span.mm_reg').click(function() {
        togglePeopleView("reg");
    });

    $('input.mm_check, input.max_people').change(function () {
      toggleCheckboxes();
    });
  });

</script>

<div class="events form">
<?php echo $form->create('Event');?>
  <fieldset>

  <?php
     echo $this->element('form/field', array(
       'fieldName'=>'Event Name <span class="note">(id:' .	$this->data['Event']['id']. ')</span>',
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
       'cakeName'=>"data[Event][max_people]",
       'extraClass'=>"max_people"
    ));
  ?>

  <div class="simple_field">
    <div class="title">Mitzvah Makers (<span class="people_count"><?= count($this->data['Person']) ?></span>)<span class="mm_buttons"><span class="mm_all mm_button">all</span>|<span class="mm_reg mm_button">registered</span></span></div>
    <div class="mm_data data_block" style="display: none">

    </div>
    <div class="mm_checkboxes data_block" style="display: none">
  		<?php $index = 0; ?>
      <?php foreach ($people as $person) : ?>

      <?php
      $isChecked = false;
        $index++;
        foreach ($this->data['Person']	as $selectedPerson) {
          if ($selectedPerson['id'] == $person['Person']['id'])
            $isChecked = true;
        }
      ?>

      <div class="check">
        <span class="check"><input class="mm_check" name="data[Person][Person][]" value="<?= $person['Person']['id'] ?>" type="checkbox" <?= $isChecked ? 'checked="checked"' : "" ?> />
        <span class="name"><?= $person['Person']['first_name'] ?> <?= $person['Person']['last_name'] ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

</fieldset>
<?php echo $form->end('Submit');?>
</div>

