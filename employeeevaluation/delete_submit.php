

<?php
    include('dbcon.php');
    include('session.php');
    mysqli_query($conn, "update self set emplo_id 
    where employee_id = '$session_id'") or die(mysqli_error());
    ?>