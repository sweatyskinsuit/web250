<?php

/* 
  Use the bicycles/staff/form_fields.php file as a guide 
  so your file mimics the same functionality.
 
*/
require_once('../private/initialize.php');

if (!isset($bird)) {
  redirect_to(url_for('/index.php'));
}
?>

<dl>
  <dt>Common Name</dt>
  <dd><input type="text" name="common_name" value="<?php echo h($bird->common_name); ?>"></dd>
</dl>

<dl>
  <dt>Habitat</dt>
  <dd><input type="text" name="habitat" value="<?php echo h($bird->habitat); ?>"></dd>
</dl>

<dl>
  <dt>Food</dt>
  <dd><input type="text" name="food" value="<?php echo h($bird->food); ?>"></dd>
</dl>
<dl>
  <dt>Conservation ID</dt>
  <dd><select name="conservation_id" value="<?php echo h($bird->conservation_id); ?>">
      <option>Pick One</option>
      <option>1-Low concern</option>
      <option>2-Moderate concern</option>
      <option>3-Extreme concern</option>
      <option>4-Extinct</option>
    </select></dd>
</dl>

<dl>
  <dt>Backyard Tips</dt>
  <dd><input type="text" name="backyard_tips" value="<?php echo h($bird->backyard_tips); ?>"></dd>
</dl>