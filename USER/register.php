<?php 
include("config.php"); 


if(isset($_POST['btn_register'])) {
    // Sanitize user inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Validate input
    if(empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "<script>alert('Please fill in all fields');</script>";
    } elseif($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match');</script>";
    } else {
        // Check if the email is already registered
        $check_query = "SELECT * FROM tbl_register WHERE Email = '$email'";
        $check_result = mysqli_query($conn, $check_query);
        if(mysqli_num_rows($check_result) > 0) {
            echo "<script>alert('Email is already registered');</script>";
        } else {
            // Insert the new user into the database
            $query = "INSERT INTO tbl_register (Name, Email, Password) VALUES ('$name', '$email', '$password')";
            if(mysqli_query($conn, $query)) {
                echo "<script>alert('Registration successful!');</script>";
                echo "<script>window.location='login.php'</script>";
            } else {
                echo "<script>alert('Error: Could not register');</script>";
            }
        }
    }
}
?>

<body class="Register-body">
<section class="register">
  <div class="wrapper">
    <form action="" method="post">
      <h1><span>R</span>egister</h1>
      <div class="input-box">
        <input type="text" placeholder="Full Name" name="name" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="email" placeholder="Email Address" name="email" required>
        <i class='bx bxs-envelope'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm Password" name="confirm_password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <button type="submit" class="btn" name="btn_register">Register</button>
      <div class="login-link">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </form>
  </div>
</section>
</body>


