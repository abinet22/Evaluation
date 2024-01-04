<?php
$con = mysqli_connect('localhost','root','','scvevaluation');
if (!$con) {
    echo "connection error";
}
if (isset($_POST['submit'])) {
    $name = $file = "";
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }


    $folderPath = "upload/";
    $image_parts = explode(";base64,", $_POST['signature']);
    $image_type_aux = explode("image/", $image_parts[0]);

    $image_type = $image_type_aux[1];

    $image_base64 = base64_decode($image_parts[1]);

    $file = $folderPath . $name . "_" . uniqid() . '.' . $image_type;

    file_put_contents($file, $image_base64);
    echo "Signature Uploaded Successfully.";

    $query = mysqli_query($conn, "select * from employee where signature_img = '$file' ") or die(mysqli_error());
    $count = mysqli_num_rows($query);

  
      mysqli_query($conn, "UPDATE into employee (signature_img) values('$file')
       where employee_id = '$session_id'
      ") or die(mysqli_error());
    

    
}
?>
