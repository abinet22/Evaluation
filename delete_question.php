<?php
include('dbcon.php');
if (isset($_POST['delete_question'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROM progrquestion_list where question_ID ='$id[$i]'");
}
header("location:question.php");
}
?>