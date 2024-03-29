<?php include('header.php'); ?>
<?php include('session.php'); ?>

<body>
	<?php include('navbar.php'); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('sidebar.php'); ?>
			<div class="span9" id="content">
				<div class="row-fluid">
					<!-- block -->
					<div id="block_bg" class="block">
						<div class="navbar navbar-inner block-header">
							<div class="muted pull-left">የሰላም ቴክኒክና ሙያ ማሰልጠኛ ኮሌጅ የሰራተኞች የስድስት ወር የስራ አፈጻጸም መመዘኛ</div>
							<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
						</div>
						<?php
						include 'dbcon.php';
						if (isset($_GET['id'])) {
							$qry = $conn->query("SELECT * FROM content where content_id = " . $_GET['id'])->fetch_array();
							foreach ($qry as $k => $v) {
								$$k = $v;
							}
						}
						function ordinal_suffix($num)
						{
							$num = $num % 100; // protect against large numbers
							if ($num < 11 || $num > 13) {
								switch ($num % 10) {
									case 1:
										return $num . 'st';
									case 2:
										return $num . 'nd';
									case 3:
										return $num . 'rd';
								}
							}
							return $num . 'th';
						}
						?>


						<?php
						if (isset($_SESSION['status'])) {
							echo "<h4>" . $_SESSION['status'] . "</h4>";
							unset($_SESSION['status']);
						}
						?>
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
														$questions = $conn->query("SELECT * FROM question_list
														LEFT JOIN programs ON question_list.program_id = programs.program_id
														JOIN employee ON employee.program_id = question_list.program_id 
														where employee_id ='$session_id'
														");
														while ($row = $questions->fetch_assoc()) :
															$q_arr[$row['question']] = $row;
														?>
															<thead>
																<tr class="bg-gradient-secondary">
																	<td></td>
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
																<td></td>
																<td class="text-center" style="width:3%;background:#04335a9e;color:white;"><?php echo $i++ ?></td>
																<td class="p-1" width="40%">
																	<?php echo $row['question'] ?>
																	<input type="hidden" name="qid[]" value="<?php echo $row['question_ID']?> ">
																	
																</td>
																<!-- ክብደት	ያገኘው ነጥብ -->
																<?php for ($c = 5; $c >= 1; $c--) : ?>
																	<td class="text-center">
																		<div class="icheck-success d-inline">
																			<input type="radio" value="<?php echo $c * $row['weight'] ?>" name="fiv[<?php echo $row['question_ID'] ?>]">
																		</div>
																	</td>

																<?php endfor; ?>
																<td colspan="1" class=" p-1" style="background:#05c588;font-size:27px;padding:20px;">
																	<b><?php echo $row['weight'] ?></b>
																</td>
																<td colspan="2" class=" p-1" style="background:#039715;width:50px;"><b><?php echo  $c * $row['weight']  ?></b></td>
															</tr>
														<?php endwhile; ?>
													</tbody>
												</table>
												<button name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-"></i> Send Result</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>

						<?php
						if (isset($_POST['login'])) {
							$employee_id = $_POST['employee_id'];
							$fiv = $_POST[''];
							$query = mysqli_query($conn, "select * from employee_result where employee_id ='$session_id' and point = '' ") or die(mysqli_error());
							$count = mysqli_num_rows($query);

							if ($count > 0) { ?>
								<script>
									alert('ግምገማውን አጠናቀዋል በድጋሜ መመዘን አልተፈቀደም !!!');
								</script>
							<?php
							} else {
								mysqli_query($conn, "insert into employee_result (employee_id,point) values('$session_id','')") or die(mysqli_error());
							?>
								<script>
									window.location = "question.php";
								</script>
						<?php
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>

		<?php include('footer.php'); ?>
	</div>
	<?php include('script.php'); ?>
</body>

</html>