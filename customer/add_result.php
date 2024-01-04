   <div class="row-fluid">
     <!-- block -->
     <div class="block">
       <div class="navbar navbar-inner block-header">
         <div class="muted pull-left">የሰራተኞች የግምገማ ውጤት መሙያ</div>
       </div>
       <div class="block-content collapse in" style="display: inline-block;">
         <div class="span12">
           <form id="add_employee" method="post">
             <div class="control-group">የተገምጋሚ ሰራተኛ

               <div class="controls">
                 <select name="jobtitle" class="" required>
                   <option></option>
                   <?php
                    $cys_query = mysqli_query($conn, "select * from employee");
                    while ($cys_row = mysqli_fetch_array($cys_query)) {

                    ?>
                     <option value="<?php echo $cys_row['employee_id']; ?>"><?php echo $cys_row['emp_ID']; ?></option>
                   <?php } ?>
                 </select>
               </div>
             </div>
             <div class="control-group">
               <div class="controls">
                 <input name="bos" class="input focused" id="focusedInput" type="number" placeholder="ከበላይ አካል" required>
               </div>
             </div>

             <div class="control-group">
               <div class="controls">
                 <input name="pir" class="input focused" id="focusedInput" type="number" placeholder="አቻ" required>
               </div>
             </div>
             <div class="control-group">
               <div class="controls">
                 <input name="ander" class="input focused" id="focusedInput" type="number" placeholder="ከበታች" required>
               </div>
             </div>
             <div class="control-group">
               <div class="controls">
                 <input name="custemer" class="input focused" id="focusedInput" type="number" placeholder="ደንበኛ" required>
               </div>
             </div>
             <div class="control-group">
               <div class="controls">
                 <input name="self" class="input focused" id="focusedInput" type="number" placeholder="ራስን በራስ" required>
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
	  $bos = $_POST['bos'];
      $pir = $_POST['pir'];
      $ander = $_POST['ander'];
      $custemer = $_POST['custemer'];
      $self = $_POST['self'];


        mysqli_query($conn, "insert into result_points (employee_id,bos,pir,onder,cust,self) values('$jobtitle','$bos','$pir','$ander','$custemer','$self')") or die(mysqli_error());
      ?>
       <script>
         window.location = "result.php";
       </script>
   <?php
      }
    ?>