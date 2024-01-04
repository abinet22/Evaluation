<?php
include('dbcon.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$password = hash('sha256', $password);

$query = mysqli_query($conn, "SELECT * FROM users u
LEFT JOIN employee e on e.employee_id
LEFT JOIN programs p on p.program_id 
LEFT JOIN wate_point w ON w.wate_point_id 
WHERE u.username='$username' AND u.password='$password'") or die(mysqli_error());
$count = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);


if ($count > 0) {

	$_SESSION['id'] = $row['user_id'];
	$_SESSION['emp_id'] = $row['employee_id'];
	$_SESSION['p_id'] = $row['program_id'];
	$_SESSION['full_name'] = ucwords($row['firstname'].' '.$row['lastname']);
	$_SESSION['photo'] = $row['location'];
	$_SESSION['wate'] = $row['wate'];

	echo 'true';


} else {
	echo 'false';
}
