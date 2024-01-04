   <div class="row-fluid">
       <!-- block -->
       <div class="block">
           <div class="navbar navbar-inner block-header">
               <div class="muted pull-left">ምድብ</div>
           </div>
           <div class="block-content collapse in">
               <div class="span12">
                   <form method="post">
                       <div class="control-group">
                           <div class="controls">
                               <input name="jobtitle" class="input focused" id="focusedInput" type="text" placeholder="ምድብ" required>
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
   <?php
    if (isset($_POST['save'])) {
        $jobtitle = $_POST['jobtitle'];

        $query = mysqli_query($conn, "select * from job_title where title = '$jobtitle' ") or die(mysqli_error());
        $count = mysqli_num_rows($query);

        if ($count > 0) { ?>
           <script>
               alert('Date Already Exist');
           </script>
       <?php
        } else {
            mysqli_query($conn, "insert into job_title (title) values('$jobtitle')") or die(mysqli_error());
        ?>
           <script>
               window.location = "job_title.php";
           </script>
   <?php
        }
    }
    ?>