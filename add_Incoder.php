<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_registra.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">የሰራተኞች ዝርዝር</div>
                            <div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
							</div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_incoder.php" method="post">
									<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
										<a data-toggle="modal" href="#Incoder_delete" id="delete" class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
										<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>ሙሉ ስም</th>
												<th>መግቢያ ስም /User Name/</th>
												<th>መለያ ኮድ /Password/</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysqli_query($conn,"select * from registerd")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['registerd_id'];
													?>
									
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></td>
	
												<td><?php echo $row['username']; ?> </td> <td><?php echo $row['password']; ?></td>
											
												<td width="40">
												<a href="edit_incoder.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
												</td>
		
									
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