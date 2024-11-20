<?php include("config.php"); ?>


<?php
session_start();
if(isset($_POST['btn_submit']))
{

  $q = "select * from admin_login where username = '".$_POST['username']."' and password = '".$_POST['password']."' ";
  $r = mysqli_query($con,$q);
  $count = mysqli_num_rows($r);
  if($count==1)
    {
      $_SESSION['user'] = $_POST['username'];
     
if(!empty($_POST["remember"])) {

        setcookie ("user_login",$_POST["user_name"],time()+ (365 * 24 * 60 * 60));

        setcookie ("userpassword",$_POST["password"],time()+ (365 * 24 * 60 * 60));}
else {

        if(isset($_COOKIE["user_login"])) {
          setcookie ("user_login","");
        }
        if(isset($_COOKIE["userpassword"])) {
          setcookie ("userpassword","");
        }
      } 
      echo "<script>window.location='home.php'</script>";
    }
    else{
      echo "<script>alert('Invalid Username or Password')</script>";
    }



}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>ADMIN LOGIN</title>

    <link rel="stylesheet" href="css/style.css">
  </head>

<body class="Login-body">
<section class="login">
  <div class="wrapper">
    <form action="" method="post">
      <h1><span>Admin</span>Login</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" name="username" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>"required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password"  value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox" name="remember"  <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?>>Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn" name="btn_submit">Login</button>
    </form>
  </div>
  </section>
</body>
</html>