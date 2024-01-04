<?php
include('dbcon.php');
error_reporting(0);
$id=$_GET['id'];
$query = "DELETE FROM employee where employee_id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<font color='green'>Record Delete from Database";
header("location:Employes.php");
}
else{
	echo "<font color='red'>Failed to delete Record from Database";
header("location:Employes.php");
}
?>
