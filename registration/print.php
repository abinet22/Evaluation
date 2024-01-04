<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbarCopy.php'); ?>
<div class="span6" id="">
  <div class="row-fluid">
    <!-- block -->
    <div id="block_bg" class="block">
      <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">አጠቃላይ የተሰጦት የግምገማ ውጤት ሪፖርት</div>
        <div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
      </div>
      <div class="span12" style="width:95%">
        <table cellpadding="1" cellspacing="1" border="0" class="table" id="example">
          <thead>
            <th>የእርሶ የዳታ ፋይል መለያ ቁጥር</th>
            <th></th>
          </thead>
          <tbody>
            <tr>
              <td><img src="images/logo.png" style="width:40%;"></td>
              <td style="width: 143px;">SCV / <?php echo $row['employee_id']; ?></td>

            </tr>

          </tbody>
          <table cellpadding="1" cellspacing="1" border="1" class="table" id="example">
            <thead>
              <tr>
                <th>ሙሉ ስም</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $user_query = mysqli_query($conn, "select * from employee where employee_id='$session_id';") or die(mysqli_error());
              while ($row = mysqli_fetch_array($user_query)) {
                $id = $row['employee_id'];
              ?>
                <tr>
                  <td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?> <?php echo $row['middle_name']; ?></td>
                </tr>
            </tbody>
          </table>
          <table cellpadding="1" cellspacing="1" border="1" class="table" id="example">
            <thead>
              <tr>
                <th>የእርሶ መለያና / ሚስጢር ቁጥር</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $row['emp_ID']; ?> <?php echo $row['password']; ?></td>
              </tr>
            </tbody>
          </table>
          <table cellpadding="1" cellspacing="1" border="1" class="table" id="example">
            <thead>
              <tr>
                <th>አጠቃላይ የተሰጦት የግምገማ ውጤት</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:center;font-size:33px;padding:11px;font-family:fantasy;background:#837c7c8c;"><?php echo $row['self']; ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
       </div>
      <table>
        <tr style='height:15pt'>
          <td><p><span>Prepared by:</span></p></td>
          <td><p><span>Received by:</span></p></td>
          <td><p><span>Check by:</span></p></td>
        </tr>
        <tr>
          <td>
            <p><u><span>_________________</span></u></p>
          </td>
          <td>
            <p><u><span>_________________</span></u></p>
          </td>
          <td>
            <p><u><span>_________________</span></u></p>
          </td>
        </tr>
        <?php $query = mysqli_query($conn, "select * from users where user_id =21") or die(mysqli_error());
        $row = mysqli_fetch_array($query);
        ?>
        
        <tr>
          <td><p><span><?php echo $row['firstname'] . " " . $row['lastname'];  ?></span></p></td>
          <?php $query = mysqli_query($conn, "select * from employee where employee_id = '$session_id'") or die(mysqli_error());
          $row = mysqli_fetch_array($query);
          ?>
          <td valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt'><p><span><?php echo $row['firstname'] . " " . $row['lastname'];  ?></span></p></td>
          <td valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt'><p><span>Senior</span></p></td>
        </tr>
        <?php  ?>
      </table>
    </div>

    <!-- /block -->
  </div>


</div>