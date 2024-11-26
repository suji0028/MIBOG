<?php

$con = mysqli_connect("localhost", "root", "", "db_tour-and-travels");
$con = mysqli_connect("localhost", "root", "", "merged_database");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
