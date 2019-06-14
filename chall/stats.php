<?php
require_once("config.php");

# Count "enabled" users
# Bool type doesn't exist in sqlite
$mode = "1";

if (isset($_GET['mode'])) {
  $mode = $_GET['mode'];
}


$sql = 'SELECT COUNT(*) from users where enabled = ' . $mode;

$count = $db->querySingle($sql);

echo $count;
?>