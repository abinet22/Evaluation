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
                                <div class="muted pull-left">ለግምገማው የገቡ ሰራተኞች ዝርዝር ሁኔታ</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
								
										<thead>
										  <tr>
										       <th>ሙሉ ስም</th>
											   <th>የደንበኛ ስም</th>
												<th>የገቡበት ቀንና ሰዓት</th>
												<th>ከግምገማው የወጡበት ቀንና ሰዓት</th>
												
												
											
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysqli_query($conn,"select * from user_log u
													LEFT JOIN employee on u.employee_id=employee.employee_id
													LEFT JOIN customer on customer.customer_id
														WHERE u.user_log_id;")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
														$id = $row['user_log_id'];
													?>
									
												<tr>
												<td><?php echo $row['firstname'].' '.$row['lastname'].' '.$row['middle_name']; ?></td>
												<td><?php echo $row['customer_name']; ?></td>
												<td><?php echo $row['login_date']; ?></td>
												<td><?php echo $row['logout_date']; ?></td>
												
												

												</tr>
												<?php } ?>
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
						<div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">ወደ ግምገማው ሲስተም የገቡ የሰራተኞች መቆጣጠሪያ ከዳታ ቤዙ ለማስወገድ</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
								
										<thead>
										  <tr>
										       <th>ዳታው</th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysqli_query($conn,"DELETE FROM `user_log` 
														WHERE user_log_id;")or die(mysqli_error());
													?>
												<tr>
												<td> <a href="delete_history.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-done"></i>ሁሉም ይጥፋ</a></td>
												</tr>
												<?php ?>
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                    </div>
  <!-- /block -->
                       

                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>