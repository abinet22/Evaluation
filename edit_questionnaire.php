<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('questionnaire_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_questionnaire_form.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">የጥያቄዎች ዝርዝር</div>
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
					                                <th>መጠይቆች</th>
					                                <th>ርእሰ ጉዳይ</th>
					                                <th>የሰራተኛ ምድብ</th>
					                                <th>የግምገማ ምደባ</th>
					                                <th></th>
										   </tr>
										</thead>
										<tbody>
											
                                         <?php
	                                   $query = mysqli_query($conn,"select * from question_list
	                                   LEFT JOIN job_title ON job_title.job_title_id = question_list.job_title_id
	                                   LEFT JOIN programs ON programs.program_id = question_list.program_id") or die(mysqli_error());
	                                   while ($row = mysqli_fetch_array($query)) {
		                               $id = $row['question_ID'];
		                                ?>

										<tr>
										<td width="30">
										<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
         
                                        <td><?php echo $row['question']; ?></td> 
		                                <td><?php echo $row['description']; ?></td> 
		                                <td><?php echo $row['program_name']; ?></td> 
		                                <td><?php echo $row['title']; ?></td>
									    <td width="30"><a href="edit_questionnaire.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
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