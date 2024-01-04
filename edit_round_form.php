   <div class="row-fluid">
       <a href="job_title.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add New</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit</div>
                            </div>
							<?php
							$query = mysqli_query($conn,"select * from evaluation_year where evaluation_year_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input name="job_title_name" value="<?php echo $row['evaluation_year']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "evaluation_year" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input name="round" value="<?php echo $row['round']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "round" required>
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
                    </div><?php
if (isset($_POST['update'])){
$job_title_name = $_POST['job_title_name'];
$round = $_POST['round'];

mysqli_query($conn,"update evaluation_year set evaluation_year = '$job_title_name' and round ='$round' where evaluation_year_id = '$get_id' ")or die(mysqli_error());
?>

<script>
window.location = "job_title.php";
</script>
<?php

}
?>