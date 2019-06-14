<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="?page=home.php">LAN Manager</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="?page=home.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=admin.php">Admin</a>
        </li>
        <li class="nav-item">
          <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
            <a class="nav-link" href="?page=logout.php">Logout</a>
          <?php else: ?>
            <a class="nav-link" href="?page=login.php">Login</a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</nav>