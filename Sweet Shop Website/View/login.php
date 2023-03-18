<?php include_once "./Global/header.php" ?>
<?php include_once './Partial/navbar.php'; ?>
<link rel="stylesheet" href="..\Assets\CSS\login.css">
<br><br><br>
<?php
if (isset($_GET['reg'])) {
   if ($_GET['reg'] == 'success') {
      echo '<div class="alert alert-success" role="alert">
                  Account created successfully!
              </div>';
   } else if ($_GET['reg'] == 'failed') {
      
       echo '<div class="alert alert-danger" role="alert">
                  Account creation failed!
              </div>';
   }
}

if (isset($_GET['login'])) {
   if ($_GET['login'] == 'failed') {
      echo '<div class="alert alert-danger" role="alert">
                  Login failed!
              </div>';
   }
}

if (isset($_GET['logout'])) {
   if ($_GET['logout'] == 'success') {
      echo '<div class="alert alert-success" role="alert">
                  Logout success!
              </div>';
   }
}

if (isset($_GET['data'])) {
   $data = json_decode($_GET['data']);
}
if (isset($_SESSION['user'])) {
    echo '<script>window.location.href = "../View/sweetshop.php";</script>';
}
?>
<div class="wrapper">
   <div class="login-box">
      <div class="login-header">
         <h2><i class="fas fa-user"></i> Login</h2>
      </div>
      <div class="login-body">
         <?php
         if (isset($_GET['errors'])) {
            $errors = json_decode($_GET['errors']);
            foreach ($errors as $error) {
               echo '<div class="container alert alert-danger" role="alert">
                           ' . $error . '
                       </div>';
            }
         }
         ?>
         <form novalidate action="../Controller/LoginController.php" method="post">
            <div class="form-group">
               <label for="username"><i class="fas fa-envelope"></i> Email</label>
               <input type="text" name="email" class="form-control" id="username" placeholder="Enter Email" required
                  value="<?php if (isset($data)) {
                              echo $data->email;
                           } ?>"
               >
            </div>
            <div class="form-group">
               <label for="password"><i class="fas fa-lock"></i> Password</label>
               <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required
                  value="<?php if (isset($data)) {
                              echo $data->password;
                           } ?>"
               >
            </div>
            <button type="submit" name="submit" value="login" class="btn btn-primary btn-block">Login</button>
            <br>
            <div class="signup-link">
               Not a member? <a href="../View/reg.php">Signup now</a>
            </div>
         </form>
      </div>
   </div>
</div>
<?php include_once "./Global/footer.php" ?>