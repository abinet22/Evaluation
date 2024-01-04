	<?php include('dbcon.php'); ?>
	<?php include('navbar.php'); ?>
	<form action="delete_assigned.php" method="post">
		<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
			<a data-toggle="modal" href="#assigned_delete" id="delete" class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
			<?php include('modal_delete.php'); ?>
			<thead>
				<tr>
					<th></th>
					<th></th>
					<th>ገምጋሚ</th>
					<th>የበላይ ሀላፊ</th>
					<th>አቻ ሰራተኛ</th>
					<th>የበታች ሰራተኛ</th>
					<th>ራስን በራስ</th>
					<th></th>
				</tr>
			</thead>
			<tbody>

				<?php
				$i = 1;
				  $query = mysqli_query($conn, "with recursive assigning as (
					SELECT 
						yebelay, acha, yebelayakal, custemer, self,employee_id 
					FROM assigned
					) 
					select 
						*, 
						(select concat(employee.firstname, ' ', employee.lastname) as full_name from employee where employee.employee_id = assigning.employee_id) as wanaw,
						(select concat(employee.firstname, ' ', employee.lastname) as full_name from employee where employee.employee_id = assigning.yebelay) as yebelay,
						(select concat(employee.firstname, ' ', employee.lastname) as full_name from employee where employee.employee_id = assigning.yebelayakal) as yebelayakal,
						(select concat(employee.firstname, ' ', employee.lastname) as full_name from employee where employee.employee_id = assigning.self) as self,
						(select concat(employee.firstname, ' ', employee.lastname) as full_name from employee where employee.employee_id = assigning.acha) as acha,
						(select concat(employee.firstname, ' ', employee.lastname) as full_name from employee where employee.employee_id = assigning.self) as custemer
					from 
						assigning;") or die(mysqli_error());
				      while ($row = mysqli_fetch_array($query)) { ?>
					<tr>
						<td width="30"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
						<td style="width:3%;background:#04335a9e;color:white;"><?php echo $i++ ?></td>
						<td style="background: #2c8309;box-shadow: 0px 8px 10px 1px rgb(109 14 14 / 53%); color: white;font-family: auto;"><?php echo $row['wanaw']; ?></p></td>	
						<td style="background: #425c8f;box-shadow: 0px 8px 7px 0px rgb(81 49 49 / 53%); color: white;font-family: cursive;"><?php echo $row['yebelay']; ?></td>
						<td style="background: #425c8f;box-shadow: 0px 8px 7px 0px rgb(81 49 49 / 53%); color: white;font-family: cursive;"><?php echo $row['acha']; ?></td>
						<td style="background: #425c8f;box-shadow: 0px 8px 7px 0px rgb(81 49 49 / 53%); color: white;font-family: cursive;"><?php echo $row['yebelayakal']; ?></td>
						<td ><?php echo $row['self']; ?></td>
						<td width="30"><a href="edit_assigned.php<?php echo '?id=' . $id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</form>