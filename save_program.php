<?php
include('dbcon.php');
               $prname = $_POST['prname'];
               $title = $_POST['title'];

               mysqli_query($conn,"insert into program (program_name,description)
		values ('$prname','$title')                                    
		") or die(mysqli_error()); ?>
<?php    ?>