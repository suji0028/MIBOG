<?php

$con = mysqli_connect("localhost", "root", "", "db_tour-and-travels");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
