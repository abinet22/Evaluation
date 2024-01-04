   <div class="row-fluid">
       <a href="students.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> አዲስ ሰራተኛ አስገባ</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">አዲስ ሰራተኛ አስገባ</div>
                            </div>
                            <div class="block-content collapse in">
							<?php
							$query = mysqli_query($conn,"select * from employee where employee_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
							
                                <div class="span12">
								<form method="post">
								         <div class="control-group">የኮሌጅ ሰራተኛ ምድብ
                                   
                                          <div class="controls">
                                            <select  name="jobtitle" class="" required>
                                             	<option></option>
											<?php
											$cys_query = mysqli_query($conn,"select * from job_title");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['job_title_id']; ?>"><?php echo $cys_row['title']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										<div class="control-group">የግምገማ ምደባ
                                   
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
                                            <input name="fn"  value="<?php echo $row['firstname']; ?>"  class="input focused" id="focusedInput" type="text" placeholder = "ስም" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln"  value="<?php echo $row['lastname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "የወላጅ ስም" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="middle"  value="<?php echo $row['middle_name']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "የአያት ስም" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="emp_ID" value="<?php echo $row['emp_ID']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "የሰራተኛ መለያ ቁጥር" required>
                                          </div>
                                        </div>
										<div class="form-group"><label for="" class="control-label">ጾታ</label>
							                        <select name="gender">
                                                      <option value=" ">--select--</option>
                                                        <option value="ወንድ">ወንድ</option>
                                                        <option value="ሴት">ሴት</option>
                                                     </select>
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
                            if (isset($_POST['update'])) {
							     $jobtitle = $_POST['jobtitle'];
								 $progr = $_POST['progr'];
                                $fn = $_POST['fn'];
                                $ln = $_POST['ln'];
								$middle = $_POST['middle'];
                                $gender = $_POST['gender'];
                                $emp_ID = $_POST['emp_ID'];								
								mysqli_query($conn,"update employee set firstname ='$fn' , lastname = '$ln' ,middle_name = '$middle' ,gender ='$gender', program_id = '$progr' ,job_title_id ='$jobtitle' ,emp_ID ='$emp_ID' where employee_id = '$get_id' ")or die(mysqli_error());

								?>
 
								<script>
								window.location = "Employes.php"; 
								</script>

                       <?php     }  ?>
	