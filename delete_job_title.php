<?php
include('dbcon.php');
if (isset($_POST['delete_job_title'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROM job_title where job_title_id='$i'");
}
header("location: job_title.php");
}
?>