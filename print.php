<?php include('header.php'); ?>
<?php include('session.php'); ?>

<head>


  <?php error_reporting(0) ?>
</head>

<body lang=EN-US style="background: aliceblue;">
  <div class="empty">
    <?php include('#'); ?>
    <div class="container">
      <div class="row-fluid">

      </div>
    </div>
  </div>
  <div class="span12">
  <table cellpadding="1" cellspacing="1" border="1" class="table" id="example">
								<thead>
									<th style="background:aliceblue;box-shadow:springgreen;"><img src="images/selam.jpg"style="width: 122px;background:#ffffff;box-shadow: 0px 0px 0px 0px #ffffff;"></th>
									<th style="background:#ffffff;font-size:12px;width:50%;">Organization Name<p style="font-size:12px;">Selam Technical & Vocational College</p></th>
									<th style="background:#ffffff;font-size:83%;">Document No STVC/QF/306<tb>Issued Date:24/10/2008</tb></th>
								</thead>
								
								<table cellpadding="1" cellspacing="1" border="1" class="table" id="example">
								<tbody>
									<tr>
										<td style="background:white;">Title Performance Appraisal for Trainers</td>
										<td style="background:white;">Issue No 1</td>
										<td style="background:white;">Page No 1 of 1</td>
									</tr>
									</table>
												
											</tbody>
										
											
								<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<thead>
										<tr>
											<th style="background:white;"><U>PERFORMANCE</U>  <U>APPRAISAL</U></th>
										</tr>
									</thead>
									</table>
									<?php
											
											$content_query = mysqli_query($conn, "select * from evaluation_year
											where evaluation_year_id order by evaluation_year_id desc limit 1
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
											?>
									<p1 style="font-size: 23px;color:#000204;"><?php echo $row['evaluation_year'];?> <?php echo $row['round'];?> summary Performance Evaluation Result</p1>
									<?php 
										  }?>
								<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
									<tbody>
										
									        <?php
											$i = 1;
											$total_score = 0;
											$content_query = mysqli_query($conn, "select * from employee
											LEFT JOIN programs on employee.program_id = programs.program_id
											LEFT JOIN job_title on employee.job_title_id = job_title.job_title_id
                                            where employee_id = '$session_id' 
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
											?>
										<tr>
										    <td style="font-size: 18px;background: #f9f9f4;">Trainer's Name: <u><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name'];  ?></u></td>
											<td style="background: #f9f9f4;">Occupation:- <u><?php echo $row['title'];?></u></td>											
										</tr>
										<tr>
										    <td style="background: #f9f9f4;">Academic Rank:___________</td>
											<td style="font-size: 18px;background: #f9f9f4;">Duration: -------------<u></u></td>											
										</tr>
										
										<tr>
										    <td style="background: #f9f9f4;">Department:- <u style="font-size: 18px;"><?php echo $row['program_name'];  ?></u></td>
											<?php
											
											$content_query = mysqli_query($conn, "select * from evaluation_year
											where evaluation_year_id order by evaluation_year_id desc limit 1
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
											?>
											<td style="background: #f9f9f4;">Academic Year: <u> <?php echo $row['evaluation_year'];  ?></u></td>											
										</tr>
										<?php 
										  }?>
										<?php 
										  }?>
									</tbody>
								</table>
								<p style="background: #f9f9f4;font-size: 21px;color: black;"><U>Summary of Performance Evaluation result</U></p>
								<table cellpadding="1" cellspacing="1" border="1" class="table" id="example">
								
								<?php
											$i = 1;
											$result_point = 0;
											$total_result_point = 0;
											$total_result_wate = 0;
											$content_query = mysqli_query($conn, "select * from employee
											where employee_id = '$session_id' 
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
											?>
									<tr>
										<td style="background:#ddc7c7;">S.N</td>
										<td style="background:#ddc7c7;">Evaluators</td>
										<td style="background:#ddc7c7;">Max point</td>
										<td style="background:#ddc7c7;">No of Evalu.</td>
										<td style="background:#ddc7c7;">Ave. Result</td>
										<td style="background:#ddc7c7;">Remark</td>
									</tr>
									<?php 
										  }?>

										 <?php
											$i = 1;
											$total_score = 0;
											$content_query = mysqli_query($conn, "select * from employee_result e
											where e.emplo_id = '$session_id' AND e.program_id = 19 order by e.employee_result_id desc limit 1
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
												$total_result_point +=$row['result_point'];
												$total_result_wate +=$row['stated'];
											?>
									<tr>
										<td style="background:#ddc7c7;color:#004887;"><?php echo $i++ ?></td>
										<td style="background:white;">Immediate Supervisor</td>
										<td style="background:white;"><?php echo $row['stated']; ?> </td>
										<td style="background:white;">1</td>
										<td style="background:white;"><?php echo $row['result_point']; ?> </td>
										<td style="background:white;">-</td>
									</tr>
									<?php } 
										?>
										  <?php
											$total_score = 0;
											$content_query = mysqli_query($conn, "select * from employee_result e
											where e.emplo_id = '$session_id' AND e.program_id = 20 order by e.employee_result_id desc limit 1
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
												$total_result_point +=$row['result_point'];
												$total_result_wate +=$row['stated'];
											?>
									<tr>
									    <td style="background:#ddc7c7;color:#004887;"><?php echo $i++ ?></td>
										<td style="background:white;">Subordinate</td>
										<td style="background:white;"><?php echo $row['stated']; ?> </td>
										<td style="background:white;">1</td>
										<td style="background:white;"><?php echo $row['result_point']; ?> </td>
										<td style="background:white;">-</td>
									</tr>
									<?php } 
										?>
										  <?php
											$total_score = 0;
											$content_query = mysqli_query($conn, "select * from employee_result e
											where e.emplo_id = '$session_id' AND e.program_id = 21 order by e.employee_result_id desc limit 1
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
												$total_result_point +=$row['result_point'];
												$total_result_wate +=$row['stated'];
											?>
									<tr>
									    <td style="background:#ddc7c7;color:#004887;"><?php echo $i++ ?></td>
										<td style="background:white;">Customer/trainees</td>
										<td style="background:white;"><?php echo $row['stated']; ?> </td>
										<td style="background:white;"> 1</td>
										<td style="background:white;"><?php echo $row['result_point']; ?> </td>
										<td style="background:white;">-</td>
									</tr>
									<?php } 
										?>
										  <?php
											$total_score = 0;
											$content_query = mysqli_query($conn, "select * from employee_result e
											where e.emplo_id = '$session_id' AND e.program_id = 22 order by e.employee_result_id desc limit 1
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
												$total_result_point +=$row['result_point'];
												$total_result_wate +=$row['stated'];
											?>
									<tr>
									    <td style="background:#ddc7c7;color:#004887;"><?php echo $i++ ?></td>
										<td style="background:white;">Co-worker (peer)</td>
										<td style="background:white;"><?php echo $row['stated']; ?> </td>
										<td style="background:white;"> 1</td>
										<td style="background:white;"><?php echo $row['result_point']; ?> </td>
										<td style="background:white;">-</td>
									</tr>
									<?php } 
										?>
										   <?php
											$result_point = 0;
											$content_query = mysqli_query($conn, "select * from employee_result e
											where e.emplo_id = '$session_id' AND e.program_id = 23 order by e.employee_result_id desc limit 1
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
												$total_result_point +=$row['result_point'];
												$total_result_wate +=$row['stated'];
											?>
									<tr>
									    <td style="background:#ddc7c7;color:#004887;"><?php echo $i++ ?></td>
										<td style="background:white;">Self</td>
										<td style="background:white;"><?php echo $row['stated']; ?> </td>
										<td style="background:white;">1</td>
										<td style="background:white;"><?php echo $row['result_point']; ?> </td>
										<td style="background:white;">-</td>
										
									</tr>
									<?php 
									}
										if($total_result_point > 0) {
											$percent_of_five = ($total_result_point * 5) / $total_result_wate; 
										} else {	
											$percent_of_five = 0;
										}
										?>
											
									<tr>
										<td style="background:white;"></td>
										<td style="background:white;font-family:cursive;">Total</td>
										<td style="background:white;font-size: 24px;font-family: fantasy;"><?php echo $total_result_wate; ?> %</td>
										<td style="background:white;"></td>
										<td style="background:white;font-size: 24px;font-family: fantasy;"> <?php echo number_format($total_result_point,2); ?> %</td>
										<td style="background:white;">-</td>
									</tr>
									
									<tr>
										<td style="background:white;"></td>
										<td style="background:white;font-family:cursive;">Average</td>
										<td style="background:white;"></td>
										<td style="background:white;"></td>
										<td style="background: #3ac902;color: #fefffd;font-size: x-large;"><?php echo number_format($percent_of_five,2); ?> %</td>
										<td style="background:white;">-</td>
									</tr>
									
										
								</table>
							
								
	                           
								 <table cellpadding="1" cellspacing="1" border="0" class="table" id="example">
									
									<tbody>
										
									    
										<tr>
										    <td style="font-size: 21px;background: #f9f9f4;font-family: cursive;">key:> for Average Result </td>
																						
										</tr>
										<tr>
										<td style="font-size: 16px;background: #66cf34;font-family: cursive;">97% (>4.85) - Extraordinary result</td>
										
										<td style="font-size: 16px;background: #f99c85;font-family: cursive;">(75-80) % (3.75 -4.0) -Good</td>
																				
										</tr>
										<tr>
										<td style="font-size: 16px;background: #8ded5f;font-family: cursive;">(90.1 - 96.9) % (4.51 - 4.84) - Excellent</td>
										<td style="font-size: 16px;background: #eb5a5a;font-family: cursive;">(50-74)%(2.51 -3.74)- fair (below goal)</td>
																				
										</tr>
										<tr>
										<td style="font-size: 16px;background: #aaed89;font-family: cursive;">(81 - 90) % (4.1 - 4.50) - Very good</td>
										
										<td style="font-size: 16px;background:#e13232;font-family: cursive;"> < 50 %(2.5)-unsatisfactory</td>	
																						
										</tr>
									</tbody>
									
								</table>	
								
								<?php $query = mysqli_query($conn, "select * from employee 
								where employee_id ='$session_id'") or die(mysqli_error());
							$row = mysqli_fetch_array($query);{
							?>
									
						<p style="line-height: normal;"> <u style="position: absolute;color: #000a12;">Immediate Supervisor Fedback</u> __________________________________________________________</p>
						<p1 style="color: #6a3d00;font-size: 17px;">Full Name :_______________________ signacher :______________________  Date: ___________________</p1>
						
						<p style="line-height: normal;"> <u style="position: absolute;color: #000a12;">Employee Fedback</u> __________________________________________________________</p>
						<p1 style="color: #6a3d00;font-size: 17px;">Full Name :  <u style="color: #0050e1;font-family: cursive;"><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name'];  ?>   </u>  . signacher :______________________  Date: ___________________</p1>
						<?php } ?>	
						<?php $query = mysqli_query($conn, "select * from users 
								where user_id ='15'") or die(mysqli_error());
							$row = mysqli_fetch_array($query);{
							?>
						<p style="line-height: normal;"> <u style="position: absolute;color: #000a12;">College Dean// Fedback</u> __________________________________________________________</p>
						<p1 style="color: #6a3d00;font-size: 17px;">Full Name :- <u style="color: #0050e1;font-family: cursive;"><?php echo $row['firstname'] . " " . $row['lastname'];  ?></u>  signacher :______________________  Date: ___________________</p1>
						<?php } ?>	
					</div>

						<table>

							<tr style='height:44.85pt'>
							
							
								
							</tr>
							
							
							
							<tr>
								
								<td valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt'>
									<p><span>//-------------------//</span></p>
								</td>
							</tr>
						</table>
					</div>

					<!-- /block -->
				</div>


			</div>

		</div>

	</div>
	<?php include('script.php'); ?>
</body>

</html>