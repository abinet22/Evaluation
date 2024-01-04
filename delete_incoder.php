<?php
include('dbcon.php');
if (isset($_POST['delete_incod'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROM registerd where registerd_id='$id[$i]'");
}
header("location: add_Incoder.php");
}
?>