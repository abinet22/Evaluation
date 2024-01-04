   <div class="row-fluid">
       <a href="questionnaire.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> የጥያቄ ቅጽ</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">የጥያቄ ቅጽ</div>
                            </div>
                            <div class="block-content collapse in">
							<?php
							$query = mysqli_query($conn,"select * from question_list where question_ID")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
							
                                <div class="span12">
								<form method="post">
                                            
										<div class="control-group">የኮሌጅ ሰራተኛ ምድብ
                                   
                                          <div class="controls">
                            <select name="jobtitle" id="criteria_id" class="custom-select custom-select-sm select2">
								<option value=""></option>
							 <?php 
								$criteria = $conn->query("SELECT * FROM programs order by program_name");
								while($row = $criteria->fetch_assoc()):
							 ?>
							 <option value="<?php echo $row['program_id'] ?>"><?php echo $row['ID_CODE'] ?></option>
							 <?php endwhile; ?>
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
										
										<div class="controls">ርእሰ ጉዳይ
                                            <input name="Question_Title" class="input focused" id="focusedInput" type="text" placeholder = "Question Title" required>
                                          </div>
										
										<div class="controls">ጥያቄ
							                <textarea name="question" id="question" cols="30" rows="4" class="controls" required=""><?php echo isset($question) ? $question : '' ?></textarea>
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
							     $question = $_POST['question'];
								 $Question_Title = $_POST['Question_Title'];
                                $progr = $_POST['progr'];
									
								mysqli_query($conn,"update question_list set  question = '$question' and description = '$Question_Title' and job_title_id ='$progr' ")or die(mysqli_error());

								?>
 
								<script>
								window.location = "questionnaire.php"; 
								</script>

                       <?php     }  ?>
	