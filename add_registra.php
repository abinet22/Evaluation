   <div class="row-fluid">
     <!-- block -->
     <div class="block">
       <div class="navbar navbar-inner block-header">
         <div class="muted pull-left">አዲስ ሰራተኛ መዝግብ</div>
       </div>
       <div class="block-content collapse in">
         <div class="span12">
           <form method="post">
             <div class="control-group">
               <div class="controls">
                 <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder="የመዝጋቢ ስም" required>
               </div>
             </div>

             <div class="control-group">
               <div class="controls">
                 <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder="የመዝጋቢ የወላጅ ስም" required>
               </div>
             </div>

             <div class="control-group">
               <div class="controls">
                 <input class="input focused" name="username" id="focusedInput" type="text" placeholder="የመግቢያ ስም" required>
               </div>
             </div>

             <div class="control-group">
               <div class="controls">
                 <input class="input focused" name="password" id="focusedInput" type="text" placeholder="መለያ ኮድ" required>
               </div>
             </div>

             <div class="control-group">
               <div class="controls"><button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>
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
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $username = $_POST['username'];
      $password = $_POST['password'];


      $query = mysqli_query($conn, "select * from registerd where username = '$username' and password = '$password' and firstname = '$firstname' and lastname = '$lastname' ") or die(mysqli_error());
      $count = mysqli_num_rows($query);

      if ($count > 0) { ?>
       <script>
         alert('Data Already Exist');
       </script>
     <?php
      } else {
        mysqli_query($conn, "insert into registerd (username,password,firstname,lastname,location) values('$username','$password','$firstname','$lastname','uploads/cc.png')") or die(mysqli_error());

      ?>
       <script>
         window.location = "add_Incoder.php";
       </script>
   <?php
      }
    }
    ?>