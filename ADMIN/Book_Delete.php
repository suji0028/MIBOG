<?php
include("config.php");
$no=$_GET['no'];
$query="delete from tbl_booking where no='$no'";
$data=mysqli_query($con,$query);

if($data)
{
    echo "<script>alert('delete successfully...');</script>";
    "<script>window.location.href='Book_Action.php'<script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/tour_and_travels/admin/Book_Action.php">

<?php
}
else
{
    echo "<script>alert('Failed to delete...');</script>";
}
?>