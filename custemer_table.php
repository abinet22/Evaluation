	<?php include('dbcon.php'); ?>
	<form action="delete_custemer.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#custemer_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th>#</th>
					<th>ተ.ቁጥር</th>
					<th>የተገልጋይ ሙሉ ስም</th>
					<th>ምድብ</th>
					<th>የተገልጋይ መለያ ቁጥር</th>
					<th>ሚስጢር ቁጥር</th>
					<th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php
		$i = 1;
	$query = mysqli_query($conn,"select * from customer 
	LEFT JOIN programs ON customer.program_id = programs.program_id
	") or die(mysqli_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['customer_id'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
		<td style="width:3%;background:#04335a9e;color:white;"><?php echo $i++ ?></td>
		<td style="background: #425c8f;box-shadow: 0px 8px 7px 0px rgb(81 49 49 / 53%); color: white;font-family: cursive;"><?php echo $row['customer_name']; ?></td> 
		<td><?php echo $row['program_name']; ?></td> 
		<td><?php echo $row['usernmae']; ?></td> 
		<td><?php echo $row['password']; ?></td> 
	
		<td width="30"><a href="edit_custemer.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>