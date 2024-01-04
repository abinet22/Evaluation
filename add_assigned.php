   <div class="row-fluid">
   	<!-- block -->
   	<div class="block">
   		<div class="navbar navbar-inner block-header">
   			<div class="muted pull-left">የምደባ መርሀግብር</div>
   		</div>
   		<div class="block-content collapse in">
   			<div class="span12">
   				<form method="post">
   					<div  class="control-group">.... ገምጋሚ ....
   						<div class="controls">
   							<select name="employee_id"  required style="background-color:#b7bed1;color:#000f1c;box-shadow: 0px 4px 6px 0px rgb(0 0 0 / 53%);">
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
   					<div class="control-group">(1) /የበላይ ሀላፊ/
   						<div class="controls">
						   <select name="yebelay" class="" style="width: 92%;background-color: transparent;box-shadow: 0px 4px 6px 0px rgb(0 0 0 / 53%);">
							   <option></option>
   								<?php
									$query = mysqli_query($conn, "select * from employee order by firstname");
									while ($row = mysqli_fetch_array($query)) {
									?>
   									<option value="<?php echo $row['employee_id']; ?>"><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name']; ?></option>
   								<?php } ?>
								   </select>
								   <select name="boss" class="" style="width:0%;visibility:hidden;">
								   <?php
									$query = mysqli_query($conn, "select * from programs where program_id = 19");
									while ($row = mysqli_fetch_array($query)) {
									?>
   									<option value="<?php echo $row['program_id']; ?>"><?php echo $row['program_name']; ?></option>
   								<?php } ?>
   							</select>
   						</div>
						   <div class="control-group">
             </div>
   					</div>
   					<div class="control-group">(2) /አቻ ሰራተኛ/
   						<div class="controls">
   							<select name="acha" class="" style="width: 92%;background-color: transparent;box-shadow: 0px 4px 6px 0px rgb(0 0 0 / 53%);">
							   <option></option>
   								<?php
									$query = mysqli_query($conn, "select * from employee order by firstname");
									while ($row = mysqli_fetch_array($query)) {
									?>
   									<option value="<?php echo $row['employee_id']; ?>"><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name']; ?></option>
   								<?php } ?>
   							</select>
							   <select name="peer" class="" style="width:0%;visibility:hidden;">
								   <?php
										$query = mysqli_query($conn, "select * from programs where program_id = 22");
										while ($row = mysqli_fetch_array($query)) {
										?>
										   <option value="<?php echo $row['program_id']; ?>"><?php echo $row['program_name']; ?></option>
   								<?php } ?>
   							</select>
   						</div>
   					</div>
   					<div class="control-group">(3) /የበታች ሰራተኛ/
   						<div class="controls">
   							<select name="yebelayakal" class="" style="width: 92%;background-color: transparent;box-shadow: 0px 4px 6px 0px rgb(0 0 0 / 53%);">
							   <option></option>
   								<?php
									$query = mysqli_query($conn, "select * from employee order by firstname");
									while ($row = mysqli_fetch_array($query)) {
									?>
   									<option value="<?php echo $row['employee_id']; ?>"><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name']; ?></option>
   								<?php } ?>
   							</select>
							   <select name="lower" class="" style="width:0%;visibility:hidden;">
								   <?php
										$query = mysqli_query($conn, "select * from programs where program_id = 20");
										while ($row = mysqli_fetch_array($query)) {
										?>
										   <option value="<?php echo $row['program_id']; ?>"><?php echo $row['program_name']; ?></option>
   								<?php } ?>
   							</select>
   						</div>
   					</div>
   					<div class="control-group">(4) /ራስን በራስ/
   						<div class="controls">
   							<select name="self" class="" style="width: 92%;background:#b8c2df;box-shadow: 0px 4px 6px 0px rgb(0 0 0 / 53%);font-family: sans-serif;">
							   <option></option>
   								<?php
									$query = mysqli_query($conn, "select * from employee 
									order by firstname");
									while ($row = mysqli_fetch_array($query)) {
									?>
   									<option value="<?php echo $row['employee_id']; ?>"><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name']; ?></option>
   								<?php } ?>
   							</select>
							   <select name="selff" class="" style="width:0%;visibility:hidden;">
								   <?php
										$query = mysqli_query($conn, "select * from programs where program_id = 23");
										while ($row = mysqli_fetch_array($query)) {
										?>
										   <option value="<?php echo $row['program_id']; ?>"><?php echo $row['program_name']; ?></option>
   								<?php } ?>
   							</select>
   						</div>
   					</div>
					   
   						<div class="controls" style="visibility:hidden;height:2px;">
   							<select name="year" class="" style="width: 50%;background-color:transparent;border:outset;">
							  
   								<?php
									$query = mysqli_query($conn, "select * from evaluation_year 
									order by evaluation_year desc");
									while ($row = mysqli_fetch_array($query)) {
									?>
   									<option value="<?php echo $row['evaluation_year']; ?>"><?php echo $row['evaluation_year']; ?></option>
   								<?php } ?>
   							</select>
							   <select name="round" class="" style="width:45%;background-color:transparent;border:outset;">
								   <?php
										$query = mysqli_query($conn, "select * from evaluation_year order by round desc");
										while ($row = mysqli_fetch_array($query)) {
										?>
										   <option value="<?php echo $row['round']; ?>"><?php echo $row['round']; ?></option>
   								<?php } ?>
   							</select>
   						
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
				$yebelay = $_POST['yebelay'];
				$acha = $_POST['acha'];
				$yebelayakal = $_POST['yebelayakal'];
				$self = $_POST['self'];
				$boss = $_POST['boss'];
				$peer = $_POST['peer'];
				$lower = $_POST['lower'];
				$selff = $_POST['selff'];
				$year = $_POST['year'];
				$round = $_POST['round'];


				$query = mysqli_query($conn, "select * from assigned where 	yebelay = '$yebelay' and acha = '$acha' and yebelayakal = '$yebelayakal' and self = '$self' and employee_id ='$employee_id' and emplo_id ='$employee_id' and thumbnails ='uploads/thumbnails.jpg'") or die(mysqli_error());
				$count = mysqli_num_rows($query);

				if ($count > 0) { ?>
   		<script>
   			success: function(html){
						if(html=="true")
						{
						$.jGrowl("Assind Already Exist", { header: 'Add Assind Failed' });
						}else{
							$.jGrowl("Assind Successfully  Added", { header: 'Assind Added' });
							var delay = 500;
							setTimeout(function(){ window.location = 'assigned.php'  }, delay);  
						}
						}
   		</script>
   	<?php
				} else {
					mysqli_query($conn, "insert into assigned (yebelay,acha,yebelayakal,custemer,self,employee_id,emplo_id,thumbnails) values('$yebelay','$acha','$yebelayakal','$custemer','$self','$employee_id','$employee_id','uploads/thumbnails.jpg')") or die(mysqli_error());
					mysqli_query($conn, "insert into yebelay (employee_id,emplo_id,thumbnails,program_id,evaluation_year,round) values('$employee_id','$yebelay','uploads/thumbnails.jpg','$boss','$year','$round')") or die(mysqli_error());
					mysqli_query($conn, "insert into acha (employee_id,emplo_id,thumbnails,program_id,assigned_id,evaluation_year,round) values('$employee_id','$acha','uploads/thumbnails.jpg','$peer','$employee_id','$year','$round')") or die(mysqli_error());
					mysqli_query($conn, "insert into yebetach (employee_id,emplo_id,thumbnails,program_id,evaluation_year,round) values('$employee_id','$yebelayakal','uploads/thumbnails.jpg','$lower','$year','$round')") or die(mysqli_error());
					mysqli_query($conn, "insert into self (employee_id,emplo_id,thumbnails,program_id,evaluation_year,round) values('$employee_id','$self','uploads/thumbnails.jpg','$selff','$year','$round')") or die(mysqli_error());

		?>
   		<script>
   			window.location = "assigned.php";
   		</script>
   <?php
				}
			}
	?>