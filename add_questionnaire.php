   <div class="row-fluid">
       <!-- block -->
       <div class="block">
           <div class="navbar navbar-inner block-header">
               <div class="muted pull-left">የጥያቄ ቅጽ</div>
           </div>
           <div class="block-content collapse in">
               <div class="span12">
                   <form method="post">
                       <div class="control-group">መስፈርት
                           <div class="controls">
                               <select name="jobtitle" id="criteria_id" class="custom-select custom-select-sm select2">
                                   <option value=""></option>
                                   <?php
                                    $criteria = $conn->query("SELECT * FROM programs order by program_id");
                                    while ($row = $criteria->fetch_assoc()) :
                                    ?>
                                       <option value="<?php echo $row['program_id'] ?>"><?php echo $row['ID_CODE'] ?></option>
                                   <?php endwhile; ?>
                               </select>
                           </div>ክብደት
                           <div class="controls"> 
                               <input name="weight" class="input focused" id="focusedInput" type="number" placeholder="መጠይቁ የሚይዘው ክብደት መጠን" required>
                           </div>
                           <div class="controls">ርእሰ ጉዳይ
                               <input name="Question_Title" class="input focused" id="focusedInput" type="text" placeholder="ርእሰ ጉዳይ" required>
                           </div>
                           <div class="controls">ጥያቄ
                               <textarea name="question" id="question" cols="30" rows="4" class="controls" required=""><?php echo isset($question) ? $question : '' ?></textarea>

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
   </div><?php
            if (isset($_POST['save'])) {
                $jobtitle = $_POST['jobtitle'];
                $Question_Title = $_POST['Question_Title'];
                $question = $_POST['question'];
                $weight = $_POST['weight'];
                $quition = $_POST['quition'];


                $query = mysqli_query($conn, "select * from question_list where program_id ='$jobtitle' and question = '$question' and description = '$Question_Title' and weight ='$weight' ") or die(mysqli_error());
                $count = mysqli_num_rows($query);

                if ($count > 0) { ?>
           <script>
               alert('Date Already Exist');
           </script>
       <?php
                } else {
                    mysqli_query($conn, "insert into question_list (program_id,question,description,weight) values ('$jobtitle','$question','$Question_Title','$weight') ") or die(mysqli_error());
        ?>
           <script>
               window.location = "questionnaire.php";
           </script>
   <?php
                }
            }
    ?>