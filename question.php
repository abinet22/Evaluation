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
		<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
												<div class="clear-fix mt-2"></div>

												<table class="table table-condensed">

													<tbody class="tr-sortable">
														<?php
														$questions = $conn->query("SELECT * FROM question_list");
														while ($row = $questions->fetch_assoc()) :
															$q_arr[$row['criteria_id']] = $row;
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
																<td style="background:#e90404;color:white;width:45px;
																 width="20%"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
																<td class="p-1" width="40%">
																	<?php echo $row['question'] ?>
																	<input type="hidden" name="qid[]" value="<?php echo $row['question_ID'] ?>">
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
												<button name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-"></i> Result</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<script>
							function validate() {
								var valid = false;
								var x = document.myform.fiv;

								for (var i = 0; i < x.length; i++) {
									if (x[i].checked) {
										valid = true;
										break;
									}
								}
								if (valid) {
									alert("Validation Successful");
								} else {
									alert("Please Select a mode of payment");
									return false;
								}
							}
						</script>
						<?php
						if (isset($_POST['login'])) {
							$fiv = $_POST['fiv'];
							$total = 0;

							foreach ($fiv as $key => $value) {
								$total += $value;
							}
							$percent = "35*";
							echo "<h2>";
							print($total);
							echo "</h2>";
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