<nav class="navbar navbar-expand-lg bg-body-tertiary nav-underline">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo $active == "home" ? 'active' : ''; ?>" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $active == "hotel" ? 'active' : ''; ?>" href="hotel.php">Hotel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $active == "ticket" ? 'active' : ''; ?>" href="ticket.php">Ticket</a>
        </li>
    </ul>
  </div>
  <div class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle btn text-bg-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Account
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="login.php">Login</a></li>
        <li><a class="dropdown-item" href="register.php">Register</a></li>
        <hr>
        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
      </ul>
    </li>
  </div>
  </div>
</nav>