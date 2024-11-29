<?php

$con = mysqli_connect("localhost", "root", "", "merged_database");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
