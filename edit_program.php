<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_program_form.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">የምደባ ዝርዝር</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_class.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
										<a data-toggle="modal" href="#class_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
													<?php include('modal_delete.php'); ?>
									<thead>
										  <tr>
										  <th></th>
					<th>የሀላፊነት አይነት</th>
					<th>መለያ</th>
					<th></th>
										   </tr>
										</thead>
										<tbody>
										<?php
										$class_query = mysqli_query($conn,"select * from job_title j
										LEFT JOIN programs p ON p.job_title_id = j.job_title_id
										JOIN job_title ON j.job_title_id = p.job_title_id;
										")or die(mysqli_error());
										while($class_row = mysqli_fetch_array($class_query)){
										$id = $class_row['program_id'];
										?>
												
										<tr>
											<td width="30"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
											<td><?php echo $class_row['program_name']; ?></td>
											<td><?php echo $row['ID_CODE']; ?></td>	
											<td width="40"><a href="edit_program.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i> </a></td>
                                     
                               
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