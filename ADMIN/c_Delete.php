<?php
include("config.php");
$no=$_GET['no'];
$query="delete from tbl_contact where no='$no'";
$data=mysqli_query($con,$query);

if($data)
{
    echo "<script>alert('delete successfully...');</script>";
    "<script>window.location.href='c_Action.php'<script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/MIBOG/admin/c_Action.php">

<?php
}
else
{
    echo "<script>alert('Failed to delete...');</script>";
}
?>