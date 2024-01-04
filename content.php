<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="add_content.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Message</a>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Message</div>
                            <div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
							</div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_content.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#content_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>									
									<thead>
										        <tr>

											     <th></th>
												 <th>Title</th>
												 <th>Message</th>
                                   
												</tr>
												
										</thead>
										<tbody>
											
             		                                   <?php
					                                      $content_query = mysqli_query($conn,"select * from content")or die(mysqli_error());
					                                      while($row = mysqli_fetch_array($content_query)){
					                                      $id = $row['content_id'];
				                                      	?>
                              
										<tr>
										<td width="30">
										<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
                                         <td><?php echo $row['title']; ?></td>
										 <td><?php echo $row['content']; ?></td>
                                         <td width="30"><a href="edit_content.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a></td>
                                     
                               
                                             </tr>
                                                 <?php } ?>
						   
                              
										</tbody>
									</table>
									</form>
                                  </div>
                              </div>
                              </div>
                        <!-- /block -->
						
						<div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">የግምገማ ምደባ ለማቋረጥ</div>
                            <div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
							</div>
						<div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_assigned.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">						
									<thead>
										        <tr>
													<th>ተ/ቁ</th>
												 <th>ሙሉ ስም</th>
												 <th>ምድብ</th>
												 <th>ጾታ</th>
												 <th>ግምገማ ለማቋረጥ</th>
												</tr>
												
										</thead>
										<tbody>
											
             		                                   <?php
													   $i = 1;
					                                      $content_query = mysqli_query($conn,"select * from assigned a
														  LEFT JOIN employee e on a.employee_id =e.employee_id
														  LEFT JOIN job_title on e.job_title_id =job_title.job_title_id;
														  ")or die(mysqli_error());
					                                      while($row = mysqli_fetch_array($content_query)){
					                                      $id = $row['employee_id'];
				                                      	?>
                              
										<tr>
										<td style="width:3%;background:#04335a9e;color:white;"><?php echo $i++ ?></td>
                                         <td><?php echo $row['firstname'] . " " . $row['lastname']. " " . $row['middle_name']; ?></td>
										 <td><?php echo $row['title']; ?></td>
										 <td><?php echo $row['gender']; ?></td>
                                         <td>
										 <a href="delete_assigned.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-done"></i>ይቋረጥ</a>
										</td>
                                             </tr>
                                                 <?php } ?>
						   
                              
										</tbody>
									</table>
									</form>
                                  </div>
                              </div>
                              </div>
							  </div>
                    </div>
					</div>
					</div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>