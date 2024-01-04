   <div class="row-fluid">
       <a href="program.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> አዲስ ምደባ</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">አዲስ ምደባ</div>
                            </div>
							<?php
							$query = mysqli_query($conn,"select * from programs where program_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
                  <div class="control-group">ምድብ

                         <div class="controls">
                              <select name="progr" class="" required>
                                   <option></option>
                                        <?php
                                             $cys_query = mysqli_query($conn, "select * from job_title order by title");
                                              while ($cys_row = mysqli_fetch_array($cys_query)) {

                                                   ?>
                                           <option value="<?php echo $cys_row['job_title_id']; ?>"><?php echo $cys_row['title']; ?></option>
                                       <?php } ?>
                               </select>
                           </div>
                 </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input name="program_name" value="<?php echo $row['program_name']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "ፖዝሽን" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input name="description" value="<?php echo $row['ID_CODE']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "መገለጫ" required>
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
  $progr = $_POST['progr'];
$program_name = $_POST['program_name'];
$description = $_POST['description'];

mysqli_query($conn,"update programs set program_name = '$program_name' and ID_CODE = '$description'  and 	job_title_id='$progr'
where program_id = '$get_id' ")or die(mysqli_error());
?>

<script>
window.location = "program.php";
</script>
<?php

}
?>