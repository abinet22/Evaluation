   <div class="row-fluid">
       <a href="job_title.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Job Title</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Job Title</div>
                            </div>
							<?php
							$query = mysqli_query($conn,"select * from job_title where job_title_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input name="job_title_name" value="<?php echo $row['title']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "job_title_name" required>
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

mysqli_query($conn,"update job_title set job_title_name = '$job_title_name' where job_title_id = '$get_id' ")or die(mysqli_error());
?>

<script>
window.location = "job_title.php";
</script>
<?php

}
?>