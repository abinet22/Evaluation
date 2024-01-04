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
   							<select name="employee_id" class="" required>
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
   							<select name="yebelay" class="">
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
   					<div class="control-group">(2) /አቻ ሰራተኛ/
   						<div class="controls">
   							<select name="acha" class="">
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
   					<div class="control-group">(3) /የበታች ሰራተኛ/
   						<div class="controls">
   							<select name="yebelayakal" class="">
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
   					<div class="control-group">(4) /ራስን በራስ/
   						<div class="controls">
   							<select name="self" class="">
							   <option></option>
   								<?php
									$query = mysqli_query($conn, "select * from employee 
									order by firstname");
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
   </div>
									
            <script>
			jQuery(document).ready(function($){
				$("#add_class").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "add_relation_action.php",
						data: formData,
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
					});
				});
			});
			</script>
   			</div>
   		</div>
   	</div>
   	<!-- /block -->
   </div>