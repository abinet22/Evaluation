	<?php include('dbcon.php'); ?>
	<form action="delete_program.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#program_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
		            <th></th>
					<th>የሀላፊነት አይነት</th>
					<th>ምድብ</th>
					<th>መለያ</th>
					<th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($conn,"select * from programs
	LEFT JOIN job_title ON job_title.job_title_id = programs.job_title_id") or die(mysqli_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['program_id'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
		 <td><?php echo $row['title']; ?></td> 
		<td><?php echo $row['program_name']; ?></td>
        <td><?php echo $row['ID_CODE']; ?></td>			
		<td width="30"><a href="edit_program.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>