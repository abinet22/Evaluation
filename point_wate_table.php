	<?php include('dbcon.php'); ?>
	<form action="delete_point_wate.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#point_wate_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th>#</th>
					<th>ምድብ</th>
					<th>ክብደት</th>
					<th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($conn,"select * from wate_point 
	LEFT JOIN  programs ON programs.program_id = wate_point.program_id") or die(mysqli_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['wate_point_id'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
		<td><?php echo $row['ID_CODE']; ?></td> 
		<td><?php echo $row['wate']; ?></td> 
	
		<td width="30"><a href="edit_point_wate.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>