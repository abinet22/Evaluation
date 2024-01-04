<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('exam_sidebar.php'); ?>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">ጥያቄ ዝርዝር</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
									<?php include('exam_table.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
        </div>
    </body>

</html>