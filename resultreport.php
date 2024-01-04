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
							<div class="muted pull-left">የሰራተኞች የግምገማ ውጤት ዝርዝር</div>
							<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
						</div>
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="empty">
									<div class="pull-right">
										<a href="print1.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a>
										<script type="text/javascript">
											$(document).ready(function() {
												$('#print').tooltip('show');
												$('#print').tooltip('hide');
											});
										</script>
									</div>
								</div>
							</div>
						</div>
						<div class="block-content collapse in">
							<div class="span12">
								<form action="delete_employee.php" method="post">
									<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
										<thead>
											<tr>

												<th></th>
												<th>#NO</th>
												<th>የተገምጋሚ ሙሉ ስም</th>
												<th>ጾታ</th>
												<th>ከበላይ</th>
												<th>አቻ</th>
												<th>ከበታች</th>
												<th>ከደንበኛ</th>
												<th>ራስን</th>
												<td>100 %</td>
											</tr>

										</thead>
										<tbody>
										
										<?php
											$i = 1;
											$content_query = mysqli_query($conn, "WITH recursive emp as(
												SELECT 
													e.employee_id, e.firstname, e.lastname, e.middle_name, e.gender
												FROM employee e)
												select 
												*,
												(select result_point from employee_result ery where emp.employee_id = ery.employee_id AND ery.program_id = 20 order by ery.employee_result_id desc limit 1) as yebelay,
												(select result_point from employee_result ery where emp.employee_id = ery.employee_id AND ery.program_id = 22 order by ery.employee_result_id desc limit 1) as acha,
												(select result_point from employee_result ery where emp.employee_id = ery.employee_id AND ery.program_id = 19 order by ery.employee_result_id desc limit 1) as yebelayakal,
												(select result_point from employee_result ery where emp.employee_id = ery.emplo_id AND ery.program_id = 21 order by ery.employee_result_id desc limit 1) as custemer,
												(select result_point from employee_result ery where emp.employee_id = ery.employee_id AND ery.program_id = 23 order by ery.employee_result_id desc limit 1) as self
												from emp;
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
												$total_score = 0;
												($row['yebelayakal']) ? $total_score += $row['yebelayakal'] : $total_score + 0;
												($row['acha']) ? $total_score += $row['acha'] : $total_score + 0;
												($row['yebelay']) ? $total_score += $row['yebelay'] : $total_score + 0;
												($row['custemer']) ? $total_score += $row['custemer'] : $total_score + 0;
												($row['self']) ? $total_score += $row['self'] : $total_score + 0; 
												// print_r($row);die;
											?>
												<tr>
													<td width="30"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
													<td style="width:3%;background:#04335a9e;color:white;"><?php echo $i++ ?></td>
													<td><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name']; ?></td>
													<td><?php echo $row['gender']; ?></td>
													<td style="background:#b957039e;color:white;"><?php echo (!empty($row['yebelayakal'])) ? $row['yebelayakal'] : 'የለም !!'; ?></td>
													<td style="background:#b957039e;color:white;"><?php echo (!empty($row['acha'])) ? $row['acha'] : 'የለም !!'; ?></td>
													<td style="background:#b957039e;color:white;"><?php echo (!empty($row['yebelay'])) ? $row['yebelay'] : 'የለም !!'; ?></td>
													<td style="background:#b957039e;color:white;"><?php echo (!empty($row['custemer'])) ? $row['custemer'] : 'የለም !!'; ?></td>
													<td style="background:#b957039e;color:white;"><?php echo (!empty($row['self'])) ? $row['self'] : 'የለም !!'; ?></td>
													<td style="background:#23581f9e;color:#001e8d;font-size:x-large;"><?php echo $total_score; ?></td>
													
												</tr>
										<?php } ?>


										</tbody>
									</table>
								</form>
							</div>
						</div>
					</div>
					<!-- /block -->
				</div>


			</div>
		</div>
		<?php include('footer.php'); ?>
	</div>
	<?php include('script.php'); ?>
</body>

</html>