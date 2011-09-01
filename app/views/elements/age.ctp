<h2>Age</h2>
<?php if (empty($this->data[$id])) { $age = 0; } else { $age = $this->data[$id]['Person']['age']; } ?>

<select class="select_menu" name="data[<?php echo $id; ?>][Person][age]" id="PersonAge">
  <option <?php if ($age == 0) echo " selected "; ?> value="0">Adult</option>
  <option <?php if ($age == 1) echo " selected "; ?> value="1">0-6</option>
  <option <?php if ($age == 2) echo " selected "; ?> value="2">7-12</option>
  <option <?php if ($age == 3) echo " selected "; ?> value="3">13-17</option>
</select>
