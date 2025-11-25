<?php require_once(dirname(__FILE__) . '/../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<ul>
  <?php if (!$session->is_logged_in()) { ?>
    <li><a href="<?php echo url_for('/login.php'); ?>">Log In</a></li>
    <li><a href="<?php echo url_for('signup.php'); ?>">Sign Up</a></li>
  <?php } ?>
</ul>


<ul>
  <li><a href="<?php echo url_for('/birds/birds.php'); ?>">View Birds</a></li>
  <li><a href="<?php echo url_for('/birds/about.php'); ?>">About Us</a></li>
  <?php if ($session->is_admin_logged_in()) { ?>
    <li><a href="<?php echo url_for('/members/index.php'); ?>">Members</a></li>
  <?php } ?>
</ul>


<?php include(SHARED_PATH . '/public_footer.php'); ?>