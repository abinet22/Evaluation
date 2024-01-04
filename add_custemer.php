   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">አዲስ ተገልጋይ</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
                <div class="control-group">ዲፓርትመንት
                                   
                                   <div class="controls">
                                     <select  name="department" class="" >
                                        <option>Optional</option>
               <?php
               $cys_query = mysqli_query($conn,"select * from department order by department_name");
               while($cys_row = mysqli_fetch_array($cys_query)){
               
               ?>
               <option value="<?php echo $cys_row['department_id']; ?>"><?php echo $cys_row['department_name']; ?></option>
               <?php } ?>
                                     </select>
                                   </div>
                                 </div>
								         <div class="control-group">ምድብ
                                   
                                          <div class="controls">
                                            <select  name="dep_id" class="" required>
                                             	<option></option>
											<?php
											$cys_query = mysqli_query($conn,"select * from programs order by program_id");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['program_id']; ?>"><?php echo $cys_row['program_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input name="cus_name" class="input focused" id="focusedInput" type="text" placeholder = "የተገልጋይ ሙሉ ስም" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input name="CUSID" class="input focused" id="focusedInput" type="text" placeholder = "የተገልጋይ መለያ ቁጥር" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input name="password" class="input focused" id="focusedInput" type="password" placeholder = "የሚስጢር ቁጥር" required>
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
$dep_id = $_POST['dep_id'];
$department = $_POST['department'];
$cus_name = $_POST['cus_name'];
$CUSID = $_POST['CUSID'];
$password = $_POST['password'];


$query = mysqli_query($conn,"select * from customer where customer_name = '$cus_name' and usernmae ='$CUSID' and program_id = '$dep_id' and password ='$password' and department_id='$department'")or die(mysqli_error());
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Date Already Exist');
</script>
<?php
}else{
mysqli_query($conn,"insert into customer (customer_name,usernmae,program_id,password,location,department_id) values('$cus_name','$CUSID','$dep_id','$password','uploads/NO-IMAGE-AVAILABLE.jpg','$department' )")or die(mysqli_error());
?>
<script>
window.location = "custemer.php";
</script>
<?php
}
}
?>