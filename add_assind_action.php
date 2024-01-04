<?php
include('dbcon.php');
$employee_id = $_POST['employee_id'];
$session_id = $_POST['session_id'];
$acha = $_POST['acha'];
$yebelayakal = $_POST['yebelayakal'];
$custemer = $_POST['custemer'];
$self = $_POST['self'];

$query = mysqli_query($conn,"select * from teacher_class where yebelay = '$session_id' and acha = '$acha' and 	employee_id = '$employee_id' and school_year = '$yebelayakal' ")or die(mysqli_error());
$count = mysqli_num_rows($query);
if ($count > 0){ 
echo "true";
}else{

mysqli_query($conn,"insert into teacher_class (teacher_id,yebelay,acha,thumbnails,school_year) values('$employee_id','$session_id','$acha','admin/uploads/thumbnails.jpg','$yebelayakal')")or die(mysqli_error());

$teacher_class = mysqli_query($conn,"select * from teacher_class order by teacher_class_id DESC")or die(mysqli_error());
$teacher_row = mysqli_fetch_array($teacher_class);
$teacher_id = $teacher_row['teacher_class_id'];


$insert_query = mysqli_query($conn,"select * from student where class_id = '$acha'")or die(mysqli_error());
while($row = mysqli_fetch_array($insert_query)){
$id = $row['student_id'];
mysqli_query($conn,"insert into teacher_class_student (teacher_id,student_id,teacher_class_id) value('$employee_id','$id','$teacher_id')")or die(mysqli_error());
echo "yes";
}
}
