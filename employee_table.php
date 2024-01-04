	<?php include('dbcon.php'); ?>
	<div class="block-content collapse in">
		<div class="span12">
			<form action="delete_employee.php" method="post">
				<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
					<a data-toggle="modal" href="#employee_delete" id="delete" class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
					<?php include('modal_delete.php'); ?>
					<thead>
						<tr>
							<th></th>
							<th></th>
							<th>ሙሉ ስም</th>
							<th>የሰራተኛ ምድብ</th>
							<th>የግምገማ ምደባ</th>
							<th>መለያ ኮድ</th>
							<th>ጾታ</th>
							<th></th>

						</tr>
					</thead>
					<tbody>

						<?php
						$i = 1;
						$query = mysqli_query($conn, "select * from employee
	LEFT JOIN job_title ON job_title.job_title_id = employee.job_title_id
	LEFT JOIN programs ON programs.program_id = employee.program_id
	order by firstname") or die(mysqli_error());
						while ($row = mysqli_fetch_array($query)) {
							$id = $row['employee_id'];
						?>

							<tr>
							<td style="width:3%;background:#04335a9e;color:white;"><?php echo $i++ ?></td>
								<td width="30"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
								
								<td style="background: #b9b9b9;box-shadow: -2px 6px 3px 0px rgb(0 104 193 / 53%); color: black;font-family: cursive;font-weight:700;"><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name']; ?></td>
								<td><?php echo $row['title']; ?></td>
								<td><?php echo $row['ID_CODE']; ?></td>
								<td><?php echo $row['emp_ID']; ?></td>
								<td><?php echo $row['gender']; ?></td>
								<td width="30"><a href="edit_employee.php<?php echo '?id=' . $id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>

							</tr>
						<?php } ?>

					</tbody>
				</table>
			</form>
		</div>
	</div>