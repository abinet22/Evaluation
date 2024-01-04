<?php
include('dbcon.php');
session_start();
$usernmae = $_POST['usernmae'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM  customer c
LEFT JOIN employee e on e.program_id = c.program_id 
INNER JOIN wate_point wp ON wp.program_id = e.program_id 
WHERE c.usernmae ='$usernmae' AND c.password = '$password'") or die(mysqli_error());
$count = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);


if ($count > 0) {

	$_SESSION['id'] = $row['customer_id'];
	$_SESSION['emp_id'] = $row['employee_id'];
	$_SESSION['p_id'] = $row['program_id'];
	$_SESSION['full_name'] = ucwords($row['firstname'].' '.$row['lastname']);
	$_SESSION['photo'] = $row['location'];
	$_SESSION['wate'] = $row['wate'];

	echo 'true';

	mysqli_query($conn, "insert into user_log (username,login_date,customer_id)values('$usernmae',NOW()," . $row['customer_id'] . ")") or die(mysqli_error());
} else {
	echo 'false';
}
