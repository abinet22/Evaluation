<?php $query = mysqli_query($conn, "select * from costemer c
LEFT JOIN employee e  on e.employee_id = c.employee_id
where e.employee_id = $get_id
") or die(mysqli_error());
$row = mysqli_fetch_array($query);
?>
<div class="span3" id="sidebar" style="position:static; top:7px;">
    <img id="avatar" class="img-polaroid" src="<?php echo $row['location']; ?>">
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse" style="top:212px; width:312px; position:fixed;">
        <li><a href="#" style="background: linear-gradient(181deg, #c10000a1, #02244e);
    padding: 8px 21px;
    border: 1px solid #007eff;
    font-size: 18px;
    color: white;"><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name'];
                    ?></a></li>
        <li> <a href="photo.php"><i class="icon-chevron-left"></i>&nbsp; &nbsp; ተመለስ</a> </li>
    </ul>
</div>