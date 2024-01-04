   <div class="row-fluid">
       <a href="customerassigned.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Customer</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Customer</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
                            <div class="control-group">ገምጋሚ
   						<div class="controls">
   							<select name="customer_id" class="" required>
							   <option></option>
   								<?php
									$query = mysqli_query($conn, "select * from customer order by customer_name");
									while ($row = mysqli_fetch_array($query)) {
									?>
   									<option value="<?php echo $row['customer_id']; ?>"><?php echo $row['customer_name']; ?></option>
   								<?php } ?>
   							</select>
   						</div>
   					</div>
             <div class="control-group">ተገምጋሚ
   						<div class="controls">
   							<select name="employee_id" class="">
							   <option></option>
   								<?php
									$query = mysqli_query($conn, "select * from employee order by firstname");
									while ($row = mysqli_fetch_array($query)) {
									?>
   									<option value="<?php echo $row['employee_id']; ?>"><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name']; ?></option>
   								<?php } ?>
   							</select>
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
$customer_id = $_POST['customer_id'];
$employee_id = $_POST['employee_id'];

mysqli_query($conn,"update costemer set employee_id = '$employee_id' and customer_id = '$customer_id'
where costemer_id = '$get_id' ")or die(mysqli_error());
?>

<script>
window.location = "edit_assigned.php";
</script>
<?php

}
?>