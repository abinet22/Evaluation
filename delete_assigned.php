<?php
include('dbcon.php');
error_reporting(0);
$id=$_GET['id'];
$query = "DELETE FROM assigned where employee_id='$id'";
$data=mysqli_query($conn,$query);
$query = "DELETE FROM acha where employee_id='$id'";
$data=mysqli_query($conn,$query);
$query = "DELETE FROM self where employee_id='$id'";
$data=mysqli_query($conn,$query);
$query = "DELETE FROM yebelay where employee_id='$id'";
$data=mysqli_query($conn,$query);
$query = "DELETE FROM yebetach where employee_id='$id'";
$data=mysqli_query($conn,$query);
$query = "DELETE FROM costemer where employee_id='$id'";
$data=mysqli_query($conn,$query);

$data=mysqli_query($conn,$query);
if($data)
{
	echo "<font color='green'>Record Delete from Database";
header("location:content.php");
}
else{
	echo "<font color='red'>Failed to delete Record from Database";
header("location:content.php");
}
?>
