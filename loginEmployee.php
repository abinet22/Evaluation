<?php
include('dbcon.php');
session_start();
$empuser = $_POST['empuser'];
$emppass = $_POST['emppass'];
// SELECT * FROM employee e INNER JOIN wate_point wp ON wp.program_id = e.program_id;
$query = mysqli_query($conn, "SELECT * FROM employee e 
INNER JOIN wate_point wp ON wp.program_id = e.program_id 
WHERE e.emp_ID='$empuser' AND e.password='$emppass'") or die(mysqli_error());
$count = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);


if ($count > 0) {

	$_SESSION['id'] = $row['employee_id'];
	$_SESSION['p_id'] = $row['program_id'];
	$_SESSION['full_name'] = ucwords($row['firstname'].' '.$row['lastname']);
	$_SESSION['photo'] = $row['location'];
	$_SESSION['wate'] = $row['wate'];

	echo 'true';

	mysqli_query($conn, "insert into user_log (empuser,login_date,employee_id)values('$empuser',NOW()," . $row['employee_id'] . ")") or die(mysqli_error());
} else {
	echo 'false';
}
