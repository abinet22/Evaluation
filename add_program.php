   <div class="row-fluid">
     <!-- block -->
     <div class="block">
       <div class="navbar navbar-inner block-header">
         <div class="muted pull-left">ሀላፊነት አክል /ፖዝሽን/</div>
       </div>
       <div class="block-content collapse in">
         <div class="span12">
           <form method="post">
             <div class="control-group">ምድብ

               <div class="controls">
                 <select name="progr" class="" required>
                   <option></option>
                   <?php
                    $cys_query = mysqli_query($conn, "select * from job_title order by title");
                    while ($cys_row = mysqli_fetch_array($cys_query)) {

                    ?>
                     <option value="<?php echo $cys_row['job_title_id']; ?>"><?php echo $cys_row['title']; ?></option>
                   <?php } ?>
                 </select>
               </div>
             </div>
             <div class="control-group">
               <div class="controls">
                 <input name="program_name" class="input focused" id="focusedInput" type="text" placeholder="ፖዝሽን" required>
               </div>
             </div>
             <div class="control-group">
               <div class="controls">
                 <input name="description" class="input focused" id="focusedInput" type="text" placeholder="መገለጫ" required>
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
      $progr = $_POST['progr'];
      $program_name = $_POST['program_name'];
      $description = $_POST['description'];
      $point = $_POST['point'];


      $query = mysqli_query($conn, "select * from programs where program_name = '$program_name' and ID_CODE ='$description' and job_title_id ='$progr' ") or die(mysqli_error($conn, $query));
      $count = mysqli_num_rows($query);

      if ($count > 0) { ?>
       <script>
         alert('Date Already Exist');
       </script>
     <?php
      } else {
        mysqli_query($conn, "insert into programs (program_name,ID_CODE,job_title_id,point) values('$program_name','$description','$progr','$point')") or die(mysqli_error($conn, $query));
      ?>
       <script>
         window.location = "program.php";
       </script>
   <?php
      }
    }
    ?>