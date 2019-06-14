<?php 
if (!$_SESSION['loggedin'] || !$_SESSION['admin']) {
  include('forbidden.php');
  die();
} 

if (isset($_GET['url'])) {
  $url = $_GET['url'];
  
  # This isn't an image anyway :)
  if (strpos($url, 'ihack.db') !== false) {
    die();
  }

  $image = fopen($url, 'rb');
  header("Content-Type: image/png");
  
  fpassthru($image);
}

?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5">Admin panel</h1>
      <p class="lead">You can send requests to your LAN machines from here. You can only request images.</p>
      <p class="lead"><?php include '../adminSecret.php'?></p>

      <form method="GET" action="">
        <input hidden name="page" value="admin.php">
        <input name="url">
        <input type="submit" value="Send">
      </form>
    </div>
  </div>
</div>