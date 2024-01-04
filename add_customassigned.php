   <div class="row-fluid">
   	<!-- block -->
   	<div class="block">
   		<div class="navbar navbar-inner block-header">
   			<div class="muted pull-left">የምደባ መርሀግብር</div>
   		</div>
   		<div class="block-content collapse in">
   			<div class="span12">
   				<form method="post">
   					<div class="control-group">ገምጋሚ
   						<div class="controls">
   							<select name="customer_id" class="" required>
							   <option></option>
   								<?php
									$query = mysqli_query($conn, "select * from customer order by customer_name");
									while ($row = mysqli_fetch_array($query)) {
									?>
   									<option value="<?php echo $row['customer_id']; ?>"><?php echo $row['customer_name']; ?></option>
   								<?php } ?>
   							</select>
   						</div>
   					</div>
   					<div class="control-group">ተገምጋሚ
   						<div class="controls">
   							<select name="employee_id" class="">
							   <option></option>
   								<?php
									$query = mysqli_query($conn, "select * from employee order by firstname");
									while ($row = mysqli_fetch_array($query)) {
									?>
   									<option value="<?php echo $row['employee_id']; ?>"><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name']; ?></option>
   								<?php } ?>
   							</select>
   						</div>
   					</div>
					  
   					<div class="control-group">
   						<div class="controls">
   							<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

   						</div>
   					</div>
   				</form>
   			</div>
   		</div>
   	</div>
   	<!-- /block -->
   </div><?php
			if (isset($_POST['save'])) {
				$employee_id = $_POST['employee_id'];
				$customer_id = $_POST['customer_id'];

				$query = mysqli_query($conn, "select * from assigned 
				where custemer = '$customer_id' and employee_id ='$employee_id' and thumbnails ='uploads/thumbnails.jpg' ") or die(mysqli_error());
				$count = mysqli_num_rows($query);

				if ($count > 0) { ?>
   		<script>
   			alert('Date Already Exist');
   		</script>
   	<?php
				} else {
					mysqli_query($conn, "insert into costemer (customer_id,employee_id,program_id,thumbnails) values('$customer_id','$employee_id','$program_id','uploads/thumbnails.jpg')") or die(mysqli_error());

		?>
   		<script>
   			window.location = "customerassigned.php";
   		</script>
   <?php
				}
			}
	?>