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
							<div class="muted pull-left">Import Employee</div>
							<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
						</div>
						<div class="block-content collapse in">
							<div class="span12">
								<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
									<fieldset>
										<legend>Import SCV Employee/Excel file</legend>
										<div class="control-group">
											<div class="control-label">
												<label>CSV/Excel File:</label>
											</div>
											<div class="controls">
												<input type="file" name="file" id="file" class="input-large" style="width:100%">
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>firstname</th>
									<th>lastname</th>
									<th>middle_name</th>
									<th>gender</th>
									<th>program_id</th>
									<th>job_title_id</th>
									<th>emp_ID</th>
									<th>password</th>


								</tr>
							</thead>
							<?php
								$i = 1;
							$SQLSELECT = "SELECT * FROM employee ";
							$result_set =  mysqli_query($conn, $SQLSELECT);
							while ($row = mysqli_fetch_array($result_set)) {
							?>

								<tr>
								    <td style="width:3%;background:#04335a9e;color:white;"><?php echo $i++ ?></td>
									<td><?php echo $row['firstname']; ?></td>
									<td><?php echo $row['lastname']; ?></td>
									<td><?php echo $row['middle_name']; ?></td>
									<td><?php echo $row['gender']; ?></td>
									<td><?php echo $row['program_id']; ?></td>
									<td><?php echo $row['job_title_id']; ?></td>
									<td><?php echo $row['emp_ID']; ?></td>
									<td><?php echo $row['password']; ?></td>


								</tr>
							<?php
							}
							?>
						</table>
					</div>
					<!-- /block -->
				</div>
			</div>
		</div>
	</div>
	</div>


</body>

</html>