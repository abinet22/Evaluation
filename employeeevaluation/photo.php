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
					$school_year_query = mysqli_query($conn, "select * from evaluation_year 
					order by evaluation_year DESC") or die(mysqli_error());
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
							<div id="" class="muted pull-right">እንዲገመግሙ ከታች የተሰየሞልትን ሰራተኞችን በአግባቡ ያለአድሎ ይገምግሙ
							</div>
						</div>
						<form method="post">
						<div class="block-content collapse in">
							<!-- /yebelay -->
		
							<?php 
							$query = mysqli_query($conn, "SELECT  *FROM yebelay
							LEFT JOIN employee ON yebelay.emplo_id=employee.employee_id
							LEFT JOIN programs ON yebelay.program_id=programs.program_id
							LEFT JOIN job_title ON employee.job_title_id=job_title.job_title_id
							LEFT JOIN wate_point ON yebelay.program_id=wate_point.program_id
							where yebelay.emplo_id != 0 and yebelay.employee_id='$session_id';") or die(mysqli_error());
							$count = mysqli_num_rows($query);
							?>
							<ul>
								<?php
								$result_point = 0;
								if ($count != '0') {
									
									while ($row = mysqli_fetch_array($query)) {
										$id = $row['employee_id']; ?>
									<li style="float: left;margin: 8px;padding: 7px;position: sticky;box-shadow: 1px 9px 6px 0px rgb(0 3 6);padding-top:60;width: 128px;list-style:none outside none; id="del<?php echo $id; ?>">
									<a href="my_classmates.php<?php echo '?id=' . $id; ?>&qid=19&wid=35">
											<img src="<?php echo $row['location'] ?>" class="img-polaroid">
											
												<div>
													<span>
													<p style="background: #00bf22;box-shadow: 0px 8px 10px 1px rgb(53 53 53 / 53%); color: white;font-family: cursive;">
															<?php echo $row['firstname'] . " " . $row['lastname']; ?></p>
													</span>
												</div>
											</a>
											<p class="class">ከበላይ የስራ ሃላፊ</p>
											<p class="subject"><?php echo $row['title']; ?></p>
										 </li>
									
									
									<?php }
								} else { ?>
									<div class="alert alert-info"><i class="icon-info-sign"></i> የበላይ የስራ ሃላፊዎን እንዲገመግሙ አልተደረገም ...</div>
								<?php } ?>
							</ul>


							<!-- /acha -->
							<?php $query = mysqli_query($conn, "SELECT  *FROM acha
		                                 	LEFT JOIN employee ON acha.emplo_id=employee.employee_id
			                                 LEFT JOIN programs ON acha.program_id=programs.program_id
			                                  LEFT JOIN job_title ON employee.job_title_id=job_title.job_title_id
                                               LEFT JOIN wate_point ON acha.program_id=wate_point.program_id
								                    where acha.emplo_id != 0 and acha.employee_id='$session_id';") or die(mysqli_error());
							$count = mysqli_num_rows($query); ?>
							<ul>
								<?php
								$result_point = 0;
								if ($count != '0') {
									while ($row = mysqli_fetch_array($query)) {
										$id = $row['employee_id']; ?>
										<li style="float: left;margin: 8px;padding: 7px;position: sticky;box-shadow: 1px 9px 6px 0px rgb(0 3 6);padding-top:60;width: 128px;list-style:none outside none;">
										    <a href="my_classmates.php<?php echo '?id=' . $id; ?>&qid=22&wid=20">
										      <img src="<?php echo $row['location'] ?>" class="img-polaroid">
											
												<div>
													<span>
														<p style="background: #00bf22;box-shadow: 0px 8px 10px 1px rgb(53 53 53 / 53%); color: white;font-family: cursive;">
                                                   <?php echo $row['firstname'] . " " . $row['lastname']; ?></p>
													</span>
												</div>
											</a>
											<p class="class"> የስራ አቻ አጋር</p>
											<p class="subject"><?php echo $row['title']; ?></p>
										</li>
										
									<?php }
								} else { ?>
									<div class="alert alert-info"><i class="icon-info-sign"></i> የስራ አቻ አጋሮን እንዲገመግሙ አልተደረገም ...</div>
								<?php } ?>
								
							</ul>


							<!-- /yebetach -->
							<?php $query = mysqli_query($conn, "SELECT  *FROM yebetach
			                               LEFT JOIN employee ON yebetach.emplo_id=employee.employee_id
			                               LEFT JOIN programs ON yebetach.program_id=programs.program_id
			                               LEFT JOIN job_title ON employee.job_title_id=job_title.job_title_id
                                           LEFT JOIN wate_point ON yebetach.program_id=wate_point.program_id
								 where yebetach.emplo_id != 0 and yebetach.employee_id='$session_id';") or die(mysqli_error());
							$count = mysqli_num_rows($query);
							?>
							<ul>
								<?php
								$result_point = 0;
								if ($count != '0') {
									while ($row = mysqli_fetch_array($query)) {
										$id = $row['employee_id'];?>
										<li style="float: left;margin: 8px;padding: 7px;position: sticky;box-shadow: 1px 9px 6px 0px rgb(0 3 6);padding-top:60;width: 128px;list-style:none outside none;">
										<a href="my_classmates.php<?php echo '?id=' . $id; ?>&qid=20&wid=20">
										<img src="<?php echo $row['location'] ?>" class="img-polaroid">
											
												<div>
													<span>
													<p style="background: #00bf22; box-shadow: 0px 8px 10px 1px rgb(53 53 53 / 53%); color: white;font-family: cursive;">
															<?php echo $row['firstname'] . " " . $row['lastname']; ?></p>
													</span>
												</div>
											</a>
											<p class="class">በስሮ ያለን</p>
											<p class="subject"><?php echo $row['title']; ?></p>
										</li>
										
									<?php }
								} else { ?>
									<div class="alert alert-info"><i class="icon-info-sign"></i> በስሮ ያለን የስራ/የበታች አካል እንዲገመግሙ አልተደረገም ...</div>
								<?php } ?>
								
							</ul>
							
								<!-- /self -->
							<?php $query = mysqli_query($conn, "SELECT  *FROM self
			                                LEFT JOIN employee ON self.emplo_id=employee.employee_id
			                                LEFT JOIN programs ON self.program_id=programs.program_id
			                                LEFT JOIN job_title ON employee.job_title_id=job_title.job_title_id
                                            LEFT JOIN wate_point ON self.program_id=wate_point.program_id
								 where self.emplo_id != 0 and self.employee_id='$session_id';") or die(mysqli_error());
							$count = mysqli_num_rows($query);
							?>
							<ul>
								<?php
								$result_point = 0;
								if ($count != '0') {
									while ($row = mysqli_fetch_array($query)) {
										$id = $row['employee_id'];?>
										<li style="float: left;margin: 8px;padding: 7px;position: sticky;box-shadow: 1px 9px 6px 0px rgb(0 3 6);padding-top:60;width: 128px;list-style:none outside none;">
										<a href="my_classmates.php<?php echo '?id=' . $id; ?>&qid=23&wid=10">
										<img src="<?php echo $row['location'] ?>" class="img-polaroid">
											
												<div>
													<span>
													<p style="background: #00bf22; box-shadow: 0px 8px 10px 1px rgb(53 53 53 / 53%); color: white;font-family: cursive;">
															<?php echo $row['firstname'] . " " . $row['lastname']; ?></p>
													</span>
												</div>
											</a>
											<p class="class">ራስን በራስ</p>
											<p class="subject"><?php echo $row['title']; ?></p>
										</li>
										
									<?php }
								} else { ?>
									<div class="alert alert-info"><i class="icon-info-sign"></i> ራስን በራስ  እንዲገመግሙ አልተደረገም ...</div>
								<?php } ?>
								
							</ul>
							
						  </div>
					
						</form>
						<span class="badge badge-info"><?php echo $count; ?></span>
					</div>
				
				</div>
							
								
				<?php include('footer.php'); ?>
			</div>
			<?php include('script.php'); ?>
</body>

</html>