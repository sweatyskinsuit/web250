<?php

require_once('../private/initialize.php');

/* 
  Use the bicycles/staff/delete.php file as a guide 
  so your file mimics the same functionality.
*/
if (!isset($_GET['id'])) {
  redirect_to(url_for('/index.php'));
}
$id = $_GET['id'];

if (is_post_request()) {
  $_SESSION['message'] = 'The bird was deleted successfully.';
  redirect_to(url_for('/index.php'));
} else {
}
?>

<?php $page_title = 'Delete Bird'; ?>
<?php include(SHARED_PATH . '/private/shared/public_header.php'); ?>

<div>
  <a href="<?php echo url_for('/index.php'); ?>">&laquo; Back to List</a>

  <div>
    <h1>Delete Bird</h1>
    <p>Are you sure you want to delete this bird?</p>
    <p><?php echo h('Bird name'); ?></p>

    <form action="<?php echo url_for('/delete.php?id=' . h(u($id))); ?>" method="post">
      <div>
        <input type="submit" name="commit" value="Delete Bird">
      </div>
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>