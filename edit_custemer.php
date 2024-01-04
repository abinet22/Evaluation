<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_custemer_form.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">የደንበኞች ዝርዝር</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_class.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
										<a data-toggle="modal" href="#class_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
													<?php include('modal_delete.php'); ?>
									<thead>
										  <tr>
										        <th>#</th>
											     <th>#</th>
												 <th>የተገልጋይ ሙሉ ስም</th>
					                             <th>ምድብ</th>
					                             <th>የተገልጋይ መለያ ቁጥር</th>
												 <th>የሚስጢር ቁጥር</th>
										   </tr>
										</thead>
										<tbody>
										<?php
										$i = 1;
										$class_query = mysqli_query($conn,"select * from customer
										LEFT JOIN programs ON customer.program_id = programs.program_id")or die(mysqli_error());
										while($class_row = mysqli_fetch_array($class_query)){
										$id = $class_row['customer_id'];
										?>
												
										<tr>
											<td width="30">
											<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
											</td>
											<td style="width:3%;background:#04335a9e;color:white;"><?php echo $i++ ?></td>
											<td style="background: #425c8f;box-shadow: 0px 8px 7px 0px rgb(81 49 49 / 53%); color: white;font-family: cursive;"><?php echo $class_row['customer_name']; ?></td>
											<td><?php echo $row['program_id']; ?></td>
											<td><?php echo $class_row['usernmae']; ?></td>
											<td><?php echo $class_row['password']; ?></td>
											<td width="40"><a href="edit_custemer.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i> </a></td>
                                     
                               
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