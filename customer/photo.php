<?php include('header.php'); ?>
<?php include('session.php'); ?>

<body>
	<?php include('navbar.php'); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('sidebar.php'); ?>
			<div class="span9" id="content">

				<!-- breadcrumb -->
				<ul class="breadcrumb">
					<?php
					$school_year_query = mysqli_query($conn, "select * from evaluation_year order by evaluation_year DESC") or die(mysqli_error());
					$school_year_query_row = mysqli_fetch_array($school_year_query);
					$school_year = $school_year_query_row['evaluation_year_id'];
					?>
					<li><a href="#"><b>My Assind Evaluater</b></a><span class="divider">/</span></li>
					<li><a href="#">Evaluation Year: <?php echo $school_year_query_row['evaluation_year']; ?></a></li>
				</ul>
				<!-- end breadcrumb -->
				<!-- self -->
				<div class="row-fluid">
					<div class="block">
						<div class="navbar navbar-inner block-header">
							<div id="" class="muted pull-right">እንዲገመግሙ ከታች የተሰየሞልትን ሰራተኞችን ይገምግሙ
							</div>
						</div>
						<div class="block-content collapse in">
							<?php $query = mysqli_query($conn, "SELECT  *FROM costemer
								LEFT JOIN employee ON costemer.employee_id=employee.employee_id
								LEFT JOIN programs ON employee.program_id=programs.program_id
								LEFT JOIN job_title ON employee.job_title_id=job_title.job_title_id
								 where costemer.customer_id='$session_id';") or die(mysqli_error());
							$count = mysqli_num_rows($query);
							?>
							<ul>
								<?php
								if ($count != '0') {
									while ($row = mysqli_fetch_array($query)) {
										$id = $row['employee_id']; ?>
										<li style="float: left;margin: 8px;padding: 7px;position: sticky;box-shadow: 1px 9px 6px 0px rgb(0 3 6);padding-top:60;width: 128px;list-style:none outside none;">
											
											<a href="my_classmates.php<?php echo '?id=' . $id; ?>&pro=21&qid=21">
											<img src="<?php echo $row['location'] ?>" class="img-polaroid">
												<div>
													<span>
													<p style="background: #00bf22;
                                                     box-shadow: 0px 8px 10px 1px rgb(53 53 53 / 53%); color: white;font-family: cursive;">
															<?php echo $row['firstname'] . " " . $row['lastname']; ?></p>
													</span>
												</div>
											</a>
											<p class="class"><?php echo $row['program_name']; ?></p>
											<p class="subject"><?php echo $row['title']; ?></p>
										</li>
									<?php }
								} else { ?>
									<div class="alert alert-info"><i class="icon-info-sign"></i>እንዲገመግሙ አልተደረገም ...</div>
								<?php } ?>
							</ul>
						</div>
					</div>

				</div>
				<?php include('footer.php'); ?>
			</div>
			<?php include('script.php'); ?>
</body>

</html>