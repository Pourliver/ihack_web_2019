<!DOCTYPE html>
<html lang="en">
  <?php
    include('head.php');
  ?>
<body>
  <?php

    include('nav.php');
    require_once('config.php');

    $page = $_GET['page'];

    // Requesting self will crash the server
    if (!$page || strpos($page, '..') !== false || strpos($page, 'index') !== false || strpos($page, 'etc') !== false || strpos($page, 'var') !== false) {
        $page = "home.php";
    }

    if (strpos($page, '?') !== false) {
      # Strips the parameter otherwise we can't include
      $page = substr($page, 0, strpos($page, '?'));
    }

    include($page);
  ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
