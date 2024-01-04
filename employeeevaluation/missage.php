<?php include('header.php'); ?>
<?php include('session.php'); ?>

<body>
	<?php include('navbar.php'); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('sidebar.php'); ?>
			<div class="span6" id="">
				<div class="row-fluid">
					<!-- block -->
					<div id="block_bg" class="block">
						<div class="navbar navbar-inner block-header">
							<div class="muted pull-left">የገምጋሚዎች አስተያየት ለርሶ</div>
							<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
						</div>
					
						<div class="span12" style="width:95%">
							<table cellpadding="1" cellspacing="1" border="0" class="table" id="example">
								<thead>
									<th>የገምጋሚዎች አስተያየት </th>
									<th></th>
								</thead>
								<tbody>
									<tr>
										
									
									</tr>
								</tbody>
								<table cellpadding="1" cellspacing="0" border="1" class="table" id="example">
									<thead>
										<tr>
											<th>ሙሉ ስም</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$user_query = mysqli_query($conn, "select * from employee 
										where employee_id='$session_id';") or die(mysqli_error());
										while ($row = mysqli_fetch_array($user_query)) {
											$id = $row['employee_id'];
										?>
											<tr>
												<td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?> <?php echo $row['middle_name']; ?></td>
											</tr>	
									</tbody>
									<?php }?>
								</table>
								<table cellpadding="1" cellspacing="0" border="1" class="table" id="example">
									<thead>
										<tr>
											<th>አስተያየቶች </th>
										</tr>
									</thead>
									<tbody>
										<?php
									
										$user_query = mysqli_query($conn, "select * from feedback 
										where employee_id='$session_id'") or die(mysqli_error());
										

										while ($row = mysqli_fetch_array($user_query)) {

										?>
										
											<tr>
												<td style="background:#fffdfa;font-size:15px;box-shadow:1px 6px 8px rgba(0, 0, 6, 0.75);padding:revert;font-family:cursive;">    <?php echo $row['feedback']; ?>
												
											</td>
											
											<?php } ?> 
								 	
									</tbody>
									
								</table>
						</div>



						<table>

							<tr style='height:44.85pt'>
								<td>
									<p><span>Prepared by:</span></p>
								</td>
								<td>
									<p><span>Received by:</span></p>
								</td>
								<td>
									<p><span>Check by:</span></p>
								</td>
							</tr>
							<?php $query = mysqli_query($conn, "select * from employee where employee_id ='$session_id'") or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
							<tr>
								<td>
									<p><u><span>_____________________</span></u></p>
								</td>
								<td>
									<p><u><span>_____________________</span></u></p>
								</td>
								<td>
									<p><u><span>_____________________</span></u></p>
								</td>
							</tr>
							<?php $query = mysqli_query($conn, "select * from users where user_id =21") or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
							<tr>
								<td>
									<p><span><?php echo $row['firstname'] . " " . $row['lastname'];  ?></span></p>
								</td>

								<?php $query = mysqli_query($conn, "select * from employee where employee_id = '$session_id'") or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								?>
								<td valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt'>
									<p><span><?php echo $row['firstname'] . " " . $row['lastname'];  ?></span></p>
								</td>
								<td valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt'>
									<p><span>Senior</span></p>
								</td>
							</tr><?php  ?>
						</table>
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