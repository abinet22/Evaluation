<?php
include('dbcon.php');
error_reporting(0);
$id=$_GET['id'];
$query = "DELETE FROM user_log where user_log_id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<font color='green'>Record Delete from Database";
header("location:user_log.php");
}
else{
	echo "<font color='red'>Failed to delete Record from Database";
header("location:user_log.php");
}
?>
