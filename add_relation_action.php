<?php
include('dbcon.php');
                $employee_id = $_POST['employee_id'];
				$yebelay = $_POST['yebelay'];
				$acha = $_POST['acha'];
				$yebelayakal = $_POST['yebelayakal'];
				$self = $_POST['self'];
                $query = mysqli_query($conn, "select * from assigned where yebelay = '$yebelay' and acha = '$acha' and yebelayakal = '$yebelayakal' and self = '$self' and employee_id ='$employee_id' and emplo_id ='$employee_id' and thumbnails ='uploads/thumbnails.jpg' ") or die(mysqli_error());
				$count = mysqli_num_rows($query);
if ($count > 0){ 
echo "true";
}else{

    mysqli_query($conn, "insert into assigned (yebelay,acha,yebelayakal,custemer,self,employee_id,emplo_id,thumbnails) values('$yebelay','$acha','$yebelayakal','$custemer','$self','$employee_id','$employee_id','uploads/thumbnails.jpg')") or die(mysqli_error());
    mysqli_query($conn, "insert into yebelay (employee_id,emplo_id,thumbnails) values('$employee_id','$yebelay','uploads/thumbnails.jpg')") or die(mysqli_error());
    mysqli_query($conn, "insert into acha (employee_id,emplo_id,thumbnails) values('$employee_id','$acha','uploads/thumbnails.jpg')") or die(mysqli_error());
    mysqli_query($conn, "insert into yebetach (employee_id,emplo_id,thumbnails) values('$employee_id','$yebelayakal','uploads/thumbnails.jpg')") or die(mysqli_error());
    mysqli_query($conn, "insert into self (employee_id,emplo_id,thumbnails) values('$employee_id','$self','uploads/thumbnails.jpg')") or die(mysqli_error());
echo "yes";
}
}
?>