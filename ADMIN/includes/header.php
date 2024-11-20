<?php
error_reporting(0);
session_start(); 
include("config.php");
?>


<!DOCTYPE html>
<html>
<head>
    <title>Tour And Travels</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

</head>
<body>
    <nav>
        <img src="./files/logo.png" class="logo" alt="Logo" title="Tour And Travels">

        <ul class="navbar">
            <li><a href="home.php">Home</a></li>
            <li><a href="c_Action.php">Manage Contact</a></li>
            <li><a href="Book_Action.php">Manage Booking </a></li>
            <li><a href="User_Action.php">Manage UserDetails </a></li>
            <!-- Logout,Login/Register -->
            <?php if (isset($_SESSION['user'])) { ?>
                <li><a href="logout.php"><span class="icon-lock"></span> Logout</a></li>
            <?php } else { ?>
            
                <li><a href="login.php"><span class="icon-lock"></span> Login</a></li>
            <?php } ?>
            
        </ul>
    </nav>
</body>

