<div>
    <ul>
        <?php $query = mysqli_query($conn, "select * from employee where employee_id = '$session_id'") or die(mysqli_error());
        $row = mysqli_fetch_array($query);
        ?>

    </ul>

</div>