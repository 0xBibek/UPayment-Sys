<nav class="navbar is-white" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item">
      <b>UPayment Sys</b>
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="<?php echo $url; ?>">
        Home
      </a>

      <a class="navbar-item">
        Reports
      </a>
      <a class="navbar-item" href="searchCustomer.php">
        Search
      </a>

    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a href="settings.php" class="button is-danger">
            Settings
          </a>
          <a href="logout.php" class="button is-light">
            Logout (<?php echo $login_session; ?>)
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
