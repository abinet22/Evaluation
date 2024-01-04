<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Welcome to: Selam TVET Employee |MS|</a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right" style="background:#325ea0;">
                    <?php $query = mysqli_query($conn, "select * from employee where employee_id = '$session_id'") or die(mysqli_error());
                    $row = mysqli_fetch_array($query);
                    ?>
                    <!-- <a style="font-size: 32px; color: aliceblue; line-height: normal;font-family: fantasy;"> <?php echo $row['program_id'] ?> </a> -->
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-large"></i><?php echo $row['firstname'] . " " . $row['lastname'];  ?> <i class="caret"></i></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="change_password.php"><i class="icon-circle"></i> Change Password</a></li>
                            <li><a tabindex="-1" href="#myModal_employee" data-toggle="modal"><i class="icon-picture"></i> Change ID Photo</a></li>
                            <li> <a tabindex="-1" href="profile.php"><i class="icon-user"></i> Profile</a></li>
                            <li class="divider"></li>
                            <li> <a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include('avatar_modal_employee.php'); ?>