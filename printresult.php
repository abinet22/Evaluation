<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>
	<?php include('navbar.php'); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('sidebar.php'); ?>
			<div class="span6" id="content">
				<div class="row-fluid">

					<!-- block -->
					<div id="block_bg" class="block">
						<div class="navbar navbar-inner block-header">
							<div class="muted pull-left">የሰራተኞች የግምገማ ውጤት ዝርዝር</div>
							<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
						</div>
						
						<div class="block-content collapse in">
							<div class="span12">
								<form action="delete_employee.php" method="post">
									<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
										<thead>
											<tr>

												<th></th>
												<th>#NO</th>
												<th style="text-align:center;">ስም</th>
												<th>የወላጅ ስም</th>
												<th>የሀያት</th>
												<th>ጾታ</th>
												<td></td>
											</tr>

										</thead>
										<tbody>
										
										<?php
											$i = 1;
											$content_query = mysqli_query($conn, "SELECT * FROM employee 
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
												$id = $row['employee_id']; 
											?>
												<tr>
													<td width="30"></td>
													<td style="width:3%;background:#04335a9e;color:white;"><?php echo $i++ ?></td>
													<td style="text-align:center;"><?php echo $row['firstname']; ?></td>
													<td><?php echo $row['lastname']; ?></td>
													<td><?php echo $row['middle_name']; ?></td>
													<td><?php echo $row['gender']; ?></td>
													
													<td><a href="riport.php<?php echo '?id=' . $id; ?>" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> </a></td>
													
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