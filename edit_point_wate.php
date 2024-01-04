   <div class="row-fluid">
   <a href="point_wate.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add weight point</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit weight point</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                <?php 
							$query = mysqli_query($conn,"select * from wate_point 
              where wate_point_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
								<form method="post">
										<div class="control-group">ምድብ
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['program_id']; ?>" name="program_id" id="focusedInput" type="text" placeholder = "ምድብ" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['wate']; ?>"  name="wate" id="focusedInput" type="number" placeholder = "ክብደት" required>
                                          </div>
                                        </div>
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
			<?php		
if (isset($_POST['update'])){

$program_id = $_POST['program_id'];
$wate = $_POST['wate'];

mysqli_query($conn,"update wate_point setprogram_id = '$program_id' , wate = '$wate' 
where wate_point_id = '$get_id' ")or die(mysqli_error());
?>
<script>
  window.location = "point_wate.php"; 
</script>
<?php
}
?>