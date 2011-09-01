<h2>T-Shirt Size</h2>
<?php if (empty($this->data[$id])) { $tshirt = 0; } else { $tshirt = $this->data[$id]['Person']['tshirt']; } ?>
<select class="select_menu" name="data[<?php echo $id; ?>][Person][tshirt]" id="PersonTshirt">
  <option <?php if ($tshirt == 0) echo " selected "; ?> value="0">None</option>
  <option <?php if ($tshirt == 4) echo " selected "; ?> value="1">X Small</option>
  <option <?php if ($tshirt == 4) echo " selected "; ?> value="2">Small</option>
  <option <?php if ($tshirt == 5) echo " selected "; ?> value="3">Medium</option>
  <option <?php if ($tshirt == 6) echo " selected "; ?> value="4">Large</option>
  <option <?php if ($tshirt == 7) echo " selected "; ?> value="5">X Large</option>
  <option <?php if ($tshirt == 8) echo " selected "; ?> value="6">XX Large</option>
  <option <?php if ($tshirt == 9) echo " selected "; ?> value="7">XXX Large</option>
</select>
