<?php
include("config.php");
$no=$_GET['no'];
$query="delete from tbl_register where no='$no'";
$data=mysqli_query($con,$query);

if($data)
{
    echo "<script>alert('delete successfully...');</script>";
    "<script>window.location.href='User_Action.php'<script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/MIBOG/ADMIN/User_Action.php">

<?php
}
else
{
    echo "<script>alert('Failed to delete...');</script>";
}
?>