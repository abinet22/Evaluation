   <div class="row-fluid">
     <!-- block -->
     <div class="block">
       <div class="navbar navbar-inner block-header">
         <div class="muted pull-left">አዲስ ሰራተኛ አስገባ</div>
       </div>
       <div class="block-content collapse in" style="display: inline-block;">
         <div class="span12">
           <form id="add_employee" method="post">
             <div class="control-group">የኮሌጅ ሰራተኛ ምድብ

               <div class="controls">
                 <select name="jobtitle" class="" required>
                   <option></option>
                   <?php
                    $cys_query = mysqli_query($conn, "select * from job_title");
                    while ($cys_row = mysqli_fetch_array($cys_query)) {

                    ?>
                     <option value="<?php echo $cys_row['job_title_id']; ?>"><?php echo $cys_row['title']; ?></option>
                   <?php } ?>
                 </select>
               </div>
             </div>
             <div class="control-group" style="visibility:hidden;height:0px;">
               <div class="controls">
                 <select name="program" class="" required>
                   <?php
                    $cys_query = mysqli_query($conn, "select * from programs order by program_id");
                    while ($cys_row = mysqli_fetch_array($cys_query)) {

                    ?>
                     <option value="<?php echo $cys_row['program_id']; ?>"><?php echo $cys_row['ID_CODE']; ?></option>
                   <?php } ?>
                 </select>
               </div>
             </div>
             <div class="control-group">
               <div class="controls">
                 <input name="prime" class="input focused" id="focusedInput" type="text" placeholder="ፍይል ቁጥር" required>
               </div>
             </div>
             <div class="control-group">
               <div class="controls">
                 <input name="fn" class="input focused" id="focusedInput" type="text" placeholder="ስም" required>
               </div>
             </div>

             <div class="control-group">
               <div class="controls">
                 <input name="ln" class="input focused" id="focusedInput" type="text" placeholder="የወላጅ ስም" required>
               </div>
             </div>
             <div class="control-group">
               <div class="controls">
                 <input name="middle" class="input focused" id="focusedInput" type="text" placeholder="የአያት ስም" required>
               </div>
             </div>
             <div class="control-group">
               <div class="controls">
                 <input name="emp_ID" class="input focused" id="focusedInput" type="text" placeholder="የሰራተኛ መለያ ቁጥር" required>
               </div>
             </div>
             <div class="control-group">
               <div class="controls">
                 <input name="password" class="input focused" id="focusedInput" type="password" placeholder="ሚስጥር ቁጥር" required>
               </div>
             </div>
             <div class="form-group"><label for="" class="control-label">ጾታ</label>
               <select name="gender">
                 <option>--select--</option>
                 <option value="ወንድ">ወንድ</option>
                 <option value="ሴት">ሴት</option>
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
   </div>

   <?php
    if (isset($_POST['save'])) {
      $jobtitle = $_POST['jobtitle'];
      $program = $_POST['program'];
      $fn = $_POST['fn'];
      $ln = $_POST['ln'];
      $middle = $_POST['middle'];
      $prime = $_POST['prime'];
      $emp_ID = $_POST['emp_ID'];
      $gender = $_POST['gender'];
      $password = $_POST['password'];

      $query = mysqli_query($conn, "select * from employee where employee_id ='$prime' and firstname = '$fn' and lastname ='$ln' and middle_name = '$middle' and gender = '$gender' and program_id = '$program' and job_title_id = '$jobtitle' and emp_ID = '$emp_ID' and password = '$password' ") or die(mysqli_error());
      $count = mysqli_num_rows($query);

      if ($count > 0) { ?>
       <script>
         alert('Date Already Exist');
       </script>
     <?php
      } else {
        mysqli_query($conn, "insert into employee (employee_id,firstname,lastname,middle_name,gender,program_id,job_title_id,emp_ID,password,location) values('$prime','$fn','$ln','$middle','$gender','$program','$jobtitle','$emp_ID','$password','uploads/NO-IMAGE-AVAILABLE.jpg')") or die(mysqli_error());
      ?>
       <script>
         window.location = "Employes.php";
       </script>
   <?php
      }
    }
    ?>