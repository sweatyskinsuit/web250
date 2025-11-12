<?php

require_once('../private/initialize.php');

/* 
  Use the bicycles/staff/edit.php file as a guide 
  so your file mimics the same functionality.
  Be sure to include the display_errors() function.
*/
if (!isset($_GET['id'])) {
  redirect_to(url_for('/index.php'));
}
$id = $_GET['id'];
$bird = Bird::find_by_id($id);
if ($bird == false) {
  redirect_to(url_for('/index.php'));
}

if (is_post_request()) {

  $args = [];
  $args['id'] = $_POST['id'] ?? NULL;
  $args['common_name'] = $_POST['common_name'] ?? NULL;
  $args['habitat'] = $_POST['habitat'] ?? NULL;
  $args['food'] = $_POST['food'] ?? NULL;
  $args['conservation_id'] = $_POST['conservation_id'] ?? NULL;
  $args['backyard_tips'] = $_POST['backyard_tips'] ?? NULL;

  $bird->merge_attributes($args);
  $result = $bird->save();

  if ($result === true) {
    $session->message('The bird was updated successfully.');
    redirect_to(url_for('/show.php?id=' . $id));
  } else {
  }
} else {
}

?>

<?php $page_title = 'Edit Bird'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">
  <a href="<?php echo url_for('/index.php'); ?>">&laquo; Back to List</a>

  <div class="bird edit">
    <h1>Edit Bird</h1>

    <?php echo display_errors($bird->errors); ?>

    <form action="<?php echo url_for('/edit.php?id=' . h(u($id))); ?>" method="post">
      <?php include('form_fields.php'); ?>
      <div id="operations">
        <input type="submit" value="Update Bird">
      </div>
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>