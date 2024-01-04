<?php include('header.php'); ?>
<?php include('session.php'); ?>

<body>
    <?php include('navbar.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('sidebar.php'); ?>
            <div class="span3" id="adduser">
                <?php include('add_employee.php'); ?>
            </div>
            <div class="span6" id="">
                <div class="row-fluid">
                    <!-- block -->
                    <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">የሰራተኞች ዝርዝር</div>
                            <div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                        </div>
                        <button onclick="window.location='importCopy.php'" name="login" class="btn btn-info" type="submit" style="background:linear-gradient(to bottom, #02ef00, #041c00) !important;">Import Employee Data</button>
                        <div class="block-content collapse in">
                            <div class="span12" id="studentTableDiv">
                                <?php include('employee_table.php'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>


            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>
    <?php include('script.php'); ?>
</body>

</html>