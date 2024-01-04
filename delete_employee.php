<?php
include('dbcon.php');
if (isset($_POST['delete_employee'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	 mysqli_query($conn,"DELETE FROM employee where employee_id='$id[$i]'");
}
header("location: employee.php");
}
?>