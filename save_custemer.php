<?php
include('dbcon.php');
               $CUSTEMNAME = $_POST['CUSTEMNAME'];
               $CUSID = $_POST['CUSID'];

               mysqli_query($conn,"insert into customer (customer_name,customer_user)
		values ('$CUSTEMNAME','$CUSID')                                    
		") or die(mysqli_error()); ?>
<?php    ?>