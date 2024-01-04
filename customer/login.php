<?php
include('dbcon.php');
session_start();
$usernmae = $_POST['usernmae'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM customer WHERE usernmae ='$usernmae' AND password = '$password'") or die(mysqli_error());
$count = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);


if ($count > 0) {

	$_SESSION['id'] = $row['customer_id'];

	echo 'true';

	mysqli_query($conn, "insert into user_log (usernmae,login_date,customer_id)values('$usernmae',NOW()," . $row['customer_id'] . ")") or die(mysqli_error());
} else {
	echo 'false';
}
