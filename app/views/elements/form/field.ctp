<?php if (!isset($type)) $type = "default"; ?>

<div class="simple_field">
  <div class="field_name"><?= $fieldName ?></div>

  <?php switch ($type) :
      case 'textbox' : ?>
      <div class="field">
        <textarea name="<?= $cakeName ?>"><?= $value ?></textarea>
      </div>
    <?php break; ?>
    <?php case 'value_toggle': ?>
      <div class="field">

      </div>
    <?php break; ?>
    <?php default : ?>
      <div class="field">
        <input class="text<?= isset($extraClass) ? " " . $extraClass : "" ?>" type="text" value="<?= $value?>" name="<?= $cakeName ?>"/>
      </div>
  <?php endswitch; ?>
</div>