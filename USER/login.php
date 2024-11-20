<?php 
include("config.php"); 

session_start();

if(isset($_POST['btn_submit'])) {
  // Retrieve user details from the database
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  
  // Query to check if user exists
  $q = "SELECT * FROM tbl_register WHERE Name = '$username' AND Password = '$password'";
  $r = mysqli_query($conn, $q);
  $count = mysqli_num_rows($r);
  
  if($count == 1) {
    $_SESSION['user'] = $username; // Set session variable
    
    // Handle Remember Me functionality
    if(!empty($_POST["remember"])) {
      setcookie("user_login", $username, time() + (365 * 24 * 60 * 60)); // 1 year
      setcookie("userpassword", $password, time() + (365 * 24 * 60 * 60)); // 1 year
    } else {
      // Clear cookies if "Remember Me" is unchecked
      if(isset($_COOKIE["user_login"])) setcookie("user_login", "");
      if(isset($_COOKIE["userpassword"])) setcookie("userpassword", "");
    }
    
    // Redirect to index page
    echo "<script>window.location='index.php'</script>";
  } else {
    // Display error message if login fails
    echo "<script>alert('Invalid Username or Password')</script>";
  }
}
?>

<body class="Login-body">
<section class="login">
  <div class="wrapper">
    <form action="" method="post">
      <h1><span>L</span>ogin</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" name="username" 
          value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" 
          value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox" name="remember" 
          <?php if(isset($_COOKIE["user_login"])) { echo "checked"; } ?>> Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="button" name="btn_submit">Login</button>
      <div class="register-link">
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </div>
    </form>
  </div>
</section>
</body>


