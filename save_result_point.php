<?php
session_status();
$con = mysqli_connect("localhost", "root", "", "scvevaluation");

if (isset($_POST['login'])) {
    $qid = $_POST['qid'];
    $fiv = $_POST['fiv'];
    $for = $_POST['for'];
    $thr = $_POST['thr'];
    $two = $_POST['two'];
    $one = $_POST['one'];

    $query = "INSERT INTO result_points (quetion_id,5,4,3,2,1)values ('$qid','$fiv','$for','$thr','$two','$one')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Inserted Successfully";
        header("question.php");
    } else {
        $_SESSION['status'] = "Inserted Successfully";
        header("question.php");
    }
}
