   <div class="row-fluid">
       <!-- block -->
       <div class="block">
           <div class="navbar navbar-inner block-header">
               <div class="muted pull-left">የግምገማ አመተምህረት</div>
           </div>
           <div class="block-content collapse in">
               <div class="span12">
                   <form method="post">
                       <div class="control-group">
                           <div class="controls">
                               <input name="year" class="input focused" id="focusedInput" type="text" placeholder="አመተምህረት" required>
                           </div>
                       </div>
                       <div class="control-group">
                           <div class="controls">
                               <input name="round" class="input focused" id="focusedInput" type="text" placeholder="የግምገማ ዙር" required>
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
        $year = $_POST['year'];
        $round = $_POST['round'];

        $query = mysqli_query($conn, "select * from evaluation_year where evaluation_year = '$year' and round ='$round' ") or die(mysqli_error());
        $count = mysqli_num_rows($query);

        if ($count > 0) { ?>
           <script>
               alert('Date Already Exist');
           </script>
       <?php
        } else {
            mysqli_query($conn, "insert into evaluation_year (evaluation_year,round) values('$year','$round')") or die(mysqli_error());
        ?>
           <script>
               window.location = "job_title.php";
           </script>
   <?php
        }
    }
    ?>