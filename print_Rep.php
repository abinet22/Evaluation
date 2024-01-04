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


  <div class="span12" style="width:95%">
							<table cellpadding="1" cellspacing="1" border="1" class="table" id="example">
								<thead>
									<th style="background:aliceblue;box-shadow:springgreen;"><img src="images/selam.jpg"style="width: 122px;background:#ffffff;"></th>
									<th style="background:#ffffff;font-size:12px;width:50%;">Organization Name<p style="font-size:12px;">Selam Technical & Vocational College</p></th>
									<th style="background:#ffffff;font-size:83%;">Document No STVC/QF/306<tb>Issued Date:24/10/2008</tb></th>
								</thead>
								
								<table cellpadding="1" cellspacing="1" border="1" class="table" id="example">
								<tbody>
									<tr>
										<td style="background:white;">Title Performance Appraisal for Trainers</td>
										<td style="background:white;">Issue No 1</td>
										<td style="background:white;">Page No 1 of 47</td>
									</tr>
									</table>
												
											</tbody>
										
											
								<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<thead>
										<tr>
											<th style="background:white;">PERFORMANCE APPRAISAL</th>
										</tr>
									</thead>
									</table>
									<p1 style="font-size: x-large;color:#000204;background:aliceblue;">2023-1st Semester summary Performance Evaluation Result</p1>
								
								<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
									<tbody>
										
									        <?php
											$i = 1;
											$result_point = 0;
											$content_query = mysqli_query($conn, "select * from employee
											LEFT JOIN programs on employee.program_id = programs.program_id
											
                                            where employee_id = '$session_id' 
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
											?>
										<tr>
										    <td style="font-size: 18px;background: #f9f9f4;">Trainer's Name: <u><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name'];  ?></u></td>
											<td style="background: #f9f9f4;">Occupation: _______________</td>											
										</tr>
										<tr>
										    <td style="background: #f9f9f4;">Academic Rank:___________</td>
											<td style="font-size: 18px;background: #f9f9f4;">Duration: <u></u></td>											
										</tr>
										<tr>
										    <td style="background: #f9f9f4;">Department: <u style="font-size: 18px;"><?php echo $row['program_name'];  ?></u></td>
											<td style="background: #f9f9f4;">Academic Year: <u>2023</u></td>											
										</tr>
										
											
										
										<?php 
										  }?>
									</tbody>
								</table>
								<p style="background: #f9f9f4;font-size: 21px;color: black;">Summary of Performance Evaluation result</p>
								<table cellpadding="1" cellspacing="1" border="1" class="table" id="example">
								<?php
											$i = 1;
											$result_point = 0;
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
											?>
									<tr>
										<td style="background:#ddc7c7;color:#004887;"><?php echo $i++ ?></td>
										<td style="background:white;">Immediate Supervisor</td>
										<td style="background:white;"><?php echo $row['stated']; ?> </td>
										<td style="background:white;"></td>
										<td style="background:white;"><?php echo $row['result_point']; ?> </td>
										<td style="background:white;">-</td>
									</tr>
									<?php 
										  }?>
										  <?php
											$result_point = 0;
											$content_query = mysqli_query($conn, "select * from employee_result e
											where e.emplo_id = '$session_id' AND e.program_id = 20 order by e.employee_result_id desc limit 1
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
											?>
									<tr>
									    <td style="background:#ddc7c7;color:#004887;"><?php echo $i++ ?></td>
										<td style="background:white;">Subordinate</td>
										<td style="background:white;"><?php echo $row['stated']; ?> </td>
										<td style="background:white;"></td>
										<td style="background:white;"><?php echo $row['result_point']; ?> </td>
										<td style="background:white;">-</td>
									</tr>
									<?php 
										  }?>
										  <?php
											$result_point = 0;
											$content_query = mysqli_query($conn, "select * from employee_result e
											where e.emplo_id = '$session_id' AND e.program_id = 21 order by e.employee_result_id desc limit 1
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
											?>
									<tr>
									    <td style="background:#ddc7c7;color:#004887;"><?php echo $i++ ?></td>
										<td style="background:white;">Customer/trainees</td>
										<td style="background:white;"><?php echo $row['stated']; ?> </td>
										<td style="background:white;"> </td>
										<td style="background:white;"><?php echo $row['result_point']; ?> </td>
										<td style="background:white;">-</td>
									</tr>
									<?php 
										  }?>
										  <?php
											$result_point = 0;
											$content_query = mysqli_query($conn, "select * from employee_result e
											where e.emplo_id = '$session_id' AND e.program_id = 22 order by e.employee_result_id desc limit 1
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
											?>
									<tr>
									    <td style="background:#ddc7c7;color:#004887;"><?php echo $i++ ?></td>
										<td style="background:white;">Co-worker (peer)</td>
										<td style="background:white;"><?php echo $row['stated']; ?> </td>
										<td style="background:white;"> </td>
										<td style="background:white;"><?php echo $row['result_point']; ?> </td>
										<td style="background:white;">-</td>
									</tr>
									<?php 
										  }?>
										   <?php
											$result_point = 0;
											$content_query = mysqli_query($conn, "select * from employee_result e
											where e.emplo_id = '$session_id' AND e.program_id = 23 order by e.employee_result_id desc limit 1
											") or die(mysqli_error());
											while ($row = mysqli_fetch_array($content_query)) {
											?>
									<tr>
									    <td style="background:#ddc7c7;color:#004887;"><?php echo $i++ ?></td>
										<td style="background:white;">Self</td>
										<td style="background:white;"><?php echo $row['stated']; ?> </td>
										<td style="background:white;"></td>
										<td style="background:white;"><?php echo $row['result_point']; ?> </td>
										<td style="background:white;">-</td>
										<?php
										             $result_point += $row['result_point'];
													 $result_point;?>
									</tr>
									
									<tr>
										<td style="background:white;"></td>
										<td style="background:white;font-family:cursive;">Total</td>
										<td style="background:white;"><?php echo $result_point; ?></td>
										<td style="background:white;"> </td>
										<td style="background:white;"> </td>
										<td style="background:white;">-</td>
									</tr>
									
									<tr>
										<td style="background:white;"></td>
										<td style="background:white;font-family:cursive;">Average</td>
										<td style="background:white;"></td>
										<td style="background:white;"></td>
										<td style="background:white;"></td>
										<td style="background:white;">-</td>
									</tr>
									<?php 
										  }?>
								</table>
								
								
	                           
								 <table cellpadding="1" cellspacing="1" border="0" class="table" id="example">
									
									<tbody>
										
									    
										<tr>
										    <td style="font-size: 16px;background: #f9f9f4;">key:> for Average Result </td>
											<td style="font-size: 16px;background: #f9f9f4;">(75-80) % (3.75 -4.0) -Good</td>											
										</tr>
										<tr>
										    <td style="font-size: 16px;background: #f9f9f4;">97% (>4.85) - Extraordinary result</td>
											<td style="font-size: 16px;background: #f9f9f4;">(50-74)%(2.51 -3.74)- fair (below goal)</td>											
										</tr>
										<tr>
										    <td style="font-size: 16px;background: #f9f9f4;">(90.1 - 96.9) % (4.51 - 4.84) - Excellent</td>
											<td style="font-size: 16px;background: #f9f9f4;"> < 50 %(2.5)-unsatisfactory</td>											
										</tr>
										<tr>
										    <td style="font-size: 16px;background: #f9f9f4;">(81 - 90) % (4.1 - 4.50) - Very good</td>
																						
										</tr>
									</tbody>
									
								</table>	
								
								<?php $query = mysqli_query($conn, "select * from employee 
								where employee_id ='$session_id'") or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
									
						                <p style="line-height: normal;"> <u style="position: absolute;color: #000a12;">Immediate Supervisor Fedback</u> __________________________________________________________</p>
					                 	<p1 style="color: #6a3d00;font-size: 17px;">Full Name :_______________________ signacher :______________________  Date: ___________________</p1>
					
					               	<p style="line-height: normal;"> <u style="position: absolute;color: #000a12;">Employee Fedback</u> __________________________________________________________</p>
					                     	<p1 style="color: #6a3d00;font-size: 17px;">Full Name :  <u style="color: #0050e1;font-family: cursive;"><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name'];  ?>   </u>  . signacher :______________________  Date: ___________________</p1>
								
					                  	<p style="line-height: normal;"> <u style="position: absolute;color: #000a12;">College Dean// Fedback</u> __________________________________________________________</p>
						               <p1 style="color: #6a3d00;font-size: 17px;">Full Name :_______________________ signacher :______________________  Date: ___________________</p1>
						                   <?php  ?>	
					       </div>
					      </div>
                </div>


</div>

</div>

</div>
<?php include('script.php'); ?>
</body>

</html>