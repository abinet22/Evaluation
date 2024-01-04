<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>


<body>
</html>
	<?php include('navbar.php'); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('sidebar2.php'); ?>
			<div class="span9" id="content">
				<div class="row-fluid">
					<!-- block -->
					<div id="block_bg" class="block">
						<div class="navbar navbar-inner block-header">
							<div class="muted pull-left">የሰላም ቴክኒክና ሙያ ማሰልጠኛ ኮሌጅ የሰራተኞች የስድስት ወር የስራ አፈጻጸም መመዘኛ</div>
							<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
						</div>

						<div class="container-fluid " methd="post">
							<div class="row-fluid">
								<div class="col-md-8">
									<div class="card card-outline card-info">
										<div class="card-body">
											<div id="block_bg" class="block">
												<fieldset class="border border-info p-2 w-100">
													<legend class="w-auto">የደረጃ አሰጣጥ</legend>
													<p>5 = በጣም እስማማለሁ, 4 = እስማማለሁ, 3 = እርግጠኛ አይደለሁም, 2 = አልስማማም, 1 = በጣም አልስማማም</p>
												</fieldset>
											</div>
											<form method="post">
												<div class="clear-fix mt-2"></div>
												 <table class="table table-condensed">
													<tbody class="tr-sortable">
														<?php
														$i = 1;
														$qid = $_GET['qid'];
														$questions = $conn->query("SELECT * FROM question_list
														LEFT JOIN programs ON question_list.program_id =programs.program_id
														LEFT JOIN wate_point ON programs.program_id = wate_point.program_id
														where question_list.program_id =$qid 
														");
														$weight_of_question = 0;
														while ($row = $questions->fetch_assoc()) :
															$q_arr[$row['question']] = $row;
															$weight_of_question += $row['weight'];

														?>
													
															<thead>
																<tr class="bg-gradient-secondary">
																	<th colspan="2" class=" p-1"><b><?php echo $row['description'] ?></b></th>
																	<th class="text-center">5</th>
																	<th class="text-center">4</th>
																	<th class="text-center">3</th>
																	<th class="text-center">2</th>
																	<th class="text-center">1</th>
																	<th class="text-center">ክብደት</th>
																	<th class="text-center">ያገኘው ነጥብ</th>
																
																</tr>
															</thead>
															<tr class="bg-white">
																<td style="width:3%;background:#04335a9e;color:white;"><?php echo $i++ ?></td>
																<td class="p-1" width="40%">
																	<?php echo $row['question'] ?>
																	<input type="hidden" name="qid[]" value="<?php echo $row['question_ID'] ?>">
																																																
																</td>
																
																<!-- ክብደት	ያገኘው ነጥብ -->
																<?php for ($c = 5; $c >= 1; $c--) : ?>
																	<td class="text-center">
																		<div class="icheck-success d-inline">
																			<input type="radio" value="<?php echo $c* $row['weight']/5?>" name="fiv[<?php echo $row['question_ID'] ?>]"required>
																		</div>															                                
																	</td>
																<?php endfor; ?>
																<td colspan="1" class=" p-1" style="background:#05c588;font-size:27px;padding:20px;">
																	<b><?php echo $row['weight'] ?></b>
																</td>
																<td colspan="2" class=" p-1" style="background:#039715;width:50px;"><b><?php echo $row['weight']?></b></td>
															</tr>
																
														<?php endwhile; ?>
														
													</tbody>						
													<div class="controls">
				<input type="hidden" name="program_id" value="<?php echo $_SESSION['p_id'] ?>">
                 
             </div>
												</table>
												
												

<head>
  
<style>
*
body{color:#333;}
.form_box{width:40%;
	background-color:white;}
.heading{background-color:#910606;
	 color:white; 
	 width:100%;
	 line-height:30px;
	text-align:center;}
.shadow{box-shadow: 2px 8px 6px 0px rgb(0 35 78 / 43%);}
</style>
<body>
 <div class="form_box shadow" style="width:52%;;height: 143px;
">
 <div class="heading">
  ለሰራተኛው የሚያስተላልፉት መልክት ካለ ይጻፉ
 </div>
 <br/>
 <textarea name="suggestion" rows="8" cols="100" style="width: 93%;height: 47%;background: #f1f9ca;color: #056ef5;"></textarea>
 </div>
  <button name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-"></i> ውጤት አስገባ</button>
</body>

											</form>
										</div>
									</div>
								</div>
							</div>
						</div>		
						<?php
						if (isset($_POST['login'])) {
							// $program_id = $_POST['program_id'];
							$program_id = $_GET['qid'];
							$suggestion = $_POST['suggestion'];

							$fiv = $_POST['fiv'];
							$total = 0;

							foreach ($fiv as $key => $value) {
								$total += $value;
							}

							// $wate = $_SESSION['wate'];
							$wate	 = $_GET['wid'];
							$total = $total;
							$total_question = $weight_of_question;	

							$overall_result = ($total * $wate) / $total_question;


							$percent = "100*";
							$query = mysqli_query($conn, "select * from employee_result where  program_id ='$program_id' and emplo_id ='$get_id' ") or die(mysqli_error());

							$count = mysqli_num_rows($query);
							if ($count > 0) { ?>
							 <script>
							   alert('ከአንድ ጊዜ በላይ በድጋሜ መመዘን አልተፈቀደሎትም!!\You are not allowed to re-weigh more than once');
							 </script>
							
						   <?php
							} else {
							  mysqli_query($conn, "insert into employee_result (employee_id,emplo_id,result_point,Date_Time,Time,program_id,evaluate,stated) values('$get_id','$get_id','$overall_result',NOW(),NOW(),'$program_id','$session_id','$wate')") or die(mysqli_error());
							  mysqli_query($conn, "insert into feedback (employee_id,feedback) values('$get_id','$suggestion')") or die(mysqli_error());
							 
							?>
						
							
							 <script>
							   window.location = "photo.php";
							 </script>
						 <?php
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('script.php'); ?>
</body>

</html>