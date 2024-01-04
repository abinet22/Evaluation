					<?php
					$school_year_query = mysqli_query($conn, "select * from evaluation_year order by evaluation_year DESC") or die(mysqli_error());
					$school_year_query_row = mysqli_fetch_array($school_year_query);
					$school_year = $school_year_query_row['evaluation_year'];
					?>
				
					<?php $query_yes = mysqli_query($conn, "select * from employee
					where employee_id = '$session_id' 
					") or die(mysqli_error());
					$count_no = mysqli_num_rows($query_yes);
					?>
					<?php $query = mysqli_query($conn, "select * from employee
					where employee_id = '$session_id' 
					") or die(mysqli_error());
					$count = mysqli_num_rows($query);
					?>
					
					<?php $not_read = $count -  $count_no; ?>