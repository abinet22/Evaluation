   <div class="row-fluid">
       <a href="customerassigned.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Customer</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Customer</div>
                            </div>
							<?php
							$query = mysqli_query($conn,"select * from customer where customer_id")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
								        <div class="control-group">Program
                                          <div class="controls">
                                            <select  name="progr" class="" required>
                                             	<option></option>
											<?php
											$cys_query = mysqli_query($conn,"select * from programs order by program_name");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['program_id']; ?>"><?php echo $cys_row['program_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input name="customer_name" value="<?php echo $row['customer_name']; ?>"  class="input focused" id="focusedInput" type="text" placeholder = "የተገልጋይ ሙሉ ስም" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input name="usernmae" value="<?php echo $row['usernmae']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "የተገልጋይ መለያ" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input name="password" value="<?php echo $row['password']; ?>" class="input focused" id="focusedInput" type="password" placeholder = "የሚስጢር ቁጥር" required>
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
                       $customer_name = $_POST['customer_name'];
                       $program_name = $_POST['program_name'];
                       $usernmae = $_POST['usernmae'];
                       $password = $_POST['password'];
                   
mysqli_query($conn,"update customer set 
customer_name = '$customer_name', program_id = '$progr',usernmae = '$usernmae',password ='$password' 
where customer_id = '$get_id' ")or die(mysqli_error());
?>

<script>
window.location = "custemer.php";
</script>
<?php

}
?>