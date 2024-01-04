	<?php include('dbcon.php'); ?>
	<?php include('navbar.php'); ?>
	<form action="delete_assigned.php" method="post">
		<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
			<a data-toggle="modal" href="#assigned_delete" id="delete" class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
			<?php include('modal_delete.php'); ?>
			<thead>
				<tr>
					<th></th>
					<th>No</th>
					<th>ገምጋሚ</th>
					<th>ተገምጋሚ</th>
					<th></th>
				</tr>
			</thead>
			<tbody>

				<?php
				$i = 1;
				$query = mysqli_query($conn, "select * from costemer c 
					LEFT JOIN employee e ON e.employee_id = c.employee_id
					LEFT JOIN customer co ON co.customer_id = c.customer_id;
	") or die(mysqli_error());
				while ($row = mysqli_fetch_array($query)) {
					$id = $row['customer_id'];
					
				?>
					<tr>
						<td width="30">
							<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
						</td>
						<td style="width:3%;background:#04335a9e;color:white;"><?php echo $i++ ?></td>
						<td style="background: #6b7068;box-shadow: 0px 8px 10px 1px rgb(109 14 14 / 53%); color: white;font-family: auto;"><?php echo $row['customer_name'];?></td>
						<td style="background: #446676;box-shadow: 0px 8px 10px 1px rgb(109 14 14 / 53%); color: white;font-family: auto;"><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name']; ?></td>
						<td width="30"><a href="edit_assigned.php<?php echo '?id=' . $id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
					</tr>
				
					<?php } ?>
			</tbody>
		</table>
	</form>