<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_round_form.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">የግምገማ አመተምህረትና ዙር</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_job_title.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
										<a data-toggle="modal" href="#job_title_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
													<?php include('modal_delete.php'); ?>
									<thead>
										  <tr>
										  <th></th>
												<th>አመተምህረት</th>
												<th>ዙር</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
										<?php
											$class_query = mysqli_query($conn, "select * from evaluation_year") or die(mysqli_error());
											while ($job_title_row = mysqli_fetch_array($class_query)) {
												$id = $job_title_row['evaluation_year_id'];
											?>
												
										<tr>
										<td width="30"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
													<td><?php echo $job_title_row['evaluation_year']; ?></td>
													<td><?php echo $job_title_row['round']; ?></td>
													<td width="40"><a href="edit_round.php<?php echo '?id=' . $id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i> </a></td>
												
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
    </body>

</html>