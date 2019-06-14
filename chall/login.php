<?php
require_once("config.php");
require_once("p.php");
?>

<?php if (isset($_POST['username']) && isset($_POST['password'])): ?>
  <?php include('unimplemented.php'); ?>
<?php else: ?>
  <?php include('loginForm.php'); ?>
<?php endif; ?> 
k