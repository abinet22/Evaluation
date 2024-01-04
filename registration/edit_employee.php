<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_employee_form.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">የሰራተኛ ዝርዝር መረጃ</div>
                            </div>
                            <div class="block-content collapse in">
									<div class="span12">
									<form action="delete_employee.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#employee_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												    <th></th>
												
													<th>ሙሉ ስም</th>
													<th>ምድብ</th>
													<th>የሰራተኛ ምድብ</th>
										   </tr>
										</thead>
										<tbody>
											
                                         <?php
                                    $query = mysqli_query($conn,"select * from employee 
									LEFT JOIN programs ON programs.program_id = employee.program_id
									LEFT JOIN job_title ON job_title.job_title_id = employee.job_title_id") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        $id = $row['employee_id'];
                                        ?>

										<tr>
										<td width="30">
										<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
         
                                        <td><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name']; ?></td> 
										<td width="100"><?php echo $row['program_name']; ?></td>
                                        <td width="100"><?php echo $row['title']; ?></td>										
										<td width="30"><a href="edit_employee.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
									 
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