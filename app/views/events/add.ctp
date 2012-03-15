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
       'fieldName'=>'Event Name',
       'value'=> "",
       'cakeName'=>"data[Event][event_name]"
    ));

    echo $this->element('form/field', array(
       'fieldName'=>"Ordinal",
       'value'=> "0",
       'cakeName'=>"data[Event][ordinal]"
    ));

    echo $this->element('form/field', array(
       'fieldName'=>"Description",
       'value'=>"",
       'cakeName'=>"data[Event][description]",
       'type'=>'textbox'
    ));

    echo $this->element('form/field', array(
       'fieldName'=>"Restrictions",
       'value'=> "",
       'cakeName'=>"data[Event][restrictions]",
       'type'=>'textbox'
    ));

     echo $this->element('form/field', array(
       'fieldName'=>"Event Location",
       'value'=> "",
       'cakeName'=>"data[Event][location]"
    ));

    echo $this->element('form/field', array(
       'fieldName'=>"Sponsoring Agency",
       'value'=> "",
       'cakeName'=>"data[Event][agency]"
    ));

    echo $this->element('form/field', array(
       'fieldName'=>"Time",
       'value'=> "",
       'cakeName'=>"data[Event][time]"
    ));

    echo $this->element('form/field', array(
       'fieldName'=>'Max People <span class="note">(-1 for closed)</span>',
       'value'=> "",
       'cakeName'=>"data[Event][max_people]",
       'extraClass'=>"max_people"
    ));
  ?>

  <div class="simple_field">
    <div class="title">Mitzvah Makers (<span class="people_count">0</span>)<span class="mm_buttons"><span class="mm_all mm_button">all</span>|<span class="mm_reg mm_button">registered</span></span></div>
    <div class="mm_data data_block" style="display: none">

    </div>
    <div class="mm_checkboxes data_block" style="display: none">
      <?php foreach ($people as $person) : ?>

	      <div class="check">
	        <span class="check"><input class="mm_check" name="data[Person][Person][]" value="<?= $person['Person']['id'] ?>" type="checkbox"/>
	        <span class="name"><?= $person['Person']['first_name'] ?> <?= $person['Person']['last_name'] ?></span>
	      </div>
      <?php endforeach; ?>
    </div>
  </div>

</fieldset>
<?php echo $form->end('Submit');?>
</div>

