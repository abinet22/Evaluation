<?php
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
    <script>
        window.location = "..\index.html";
    </script>
<?php
}
$session_id = $_SESSION['id'];

$user_query = mysqli_query($conn, "select * from employee where employee_id = '$session_id'") or die(mysqli_error());
$user_row = mysqli_fetch_array($user_query);
$user_username = $user_row['emp_ID'];
?>