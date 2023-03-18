<link rel="stylesheet" href="..\Assets\CSS\nav.css">
<nav class="navbar navbar-expand-lg navbar-light navbar-lightblue">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">Mishti Bilash</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="./about.php">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="./contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="./about.php">About Us</a>
        </li>
        <?php if(isset($_SESSION['user'])){ ?>
        <li class="nav-item">
            <a class="nav-link text-white" href="./sweetshop.php">Sweet Shop</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="./addtocart.php">Cart</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="./profile.php">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="./logout.php">Logout</a>
        </li>
        <?php if(isset($_SESSION['ADMIN'])){ ?>
        <li class="nav-item">
            <a class="nav-link text-white" href="./empreg.php">Add Employee</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="./addtocart.php">Cart</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="./profile.php">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="./logout.php">Logout</a>
        </li>
        <?php }}
        else {
         ?>
        <li class="nav-item">
            <a class="nav-link text-white" href="./login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="./reg.php">Create Account</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>