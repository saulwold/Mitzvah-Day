<?php if (!isset($type)) $type = "default"; ?>

<div class="simpleField">
  <div class="fieldname"><?= $fieldName ?></div>

  <?php switch ($type) : 
      case 'textbox' : ?>          
      <div class="field">
        <textarea name="<?= $cakeName ?>"><?= $value ?></textarea>
      </div>    
    <?php break; ?>
    <?php case 'value_toggle': ?>
      
    <?php break; ?>
    <?php default : ?>  
      <div class="field">
        <input type="text" value="<?= $value?>" name="<?= $cakeName ?>"/>
      </div>    
  <?php endswitch; ?>
</div>      