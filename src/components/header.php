<?php
  $path = "$_SERVER[REQUEST_URI]";
  $regexp = "/\/([A-z]+).php/";
  preg_match($regexp, $path, $matches, PREG_OFFSET_CAPTURE);
  $path = $matches ? $matches[1] ? $matches[1][0] : "/" : "/";
?>

<header class="header">
  <nav class="navbar">
    <div class="navbar-left">
      <div class="logo">
        <img src="../assets/src/images/logo.png" alt="Logo">
      </div>
    </div>
    <div class="navbar-right">
      <ul class="menu">
        <li class="item"><a href="<?php echo $base_url; ?>" class="link <?php if($path === "/") echo "is-active"; ?>">Home</a></li>
        <li class="item">
          <span class="link has-dropdown <?php if($path === "employees") echo "is-active"; ?>">
            Manage
            <ul class="dropdown">
              <li class="item">
                <a href="<?php echo $base_url . "employees.php"; ?>" class="link <?php if($path === "employees") echo "is-active"; ?>">Employees</a>
              </li>
              <li class="item">
                <a href="<?php echo $base_url . "rooms.php"; ?>" class="link <?php if($path === "rooms") echo "is-active"; ?>">Rooms</a>
              </li>
            </ul>
          </span>
        </li>
        <li class="item"><a href="#" class="link">Contact</a></li>
        <li class="item"><a href="#" class="link">About</a></li>
      </ul>
      <div class="user">
        <div class="username">
          <?php echo "holehuy"; ?>
          <i class="las la-angle-down"></i>
          <ul class="dropdown menu">
            <li class="item">
              <a href="#" class="link">Log out</a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </nav>
</header>