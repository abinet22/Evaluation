   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">የጥያቄ ክብደት</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
								       
										<div class="control-group">
                                          <div class="controls">
                                            <input name="wate" class="input focused" id="focusedInput" type="text" placeholder = "የጥያቄው ክብደት" required>
                                          </div>
                                        </div>																
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div><?php
if (isset($_POST['save'])){
$wate = $_POST['wate'];

$query = mysqli_query($conn,"select * from wate_point where wate = '$wate'  ")or die(mysqli_error());
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Date Already Exist');
</script>
<?php
}else{
mysqli_query($conn,"insert into wate_point (wate) values('$wate')")or die(mysqli_error());
?>
<script>
window.location = "point_wate.php";
</script>
<?php
}
}
?>