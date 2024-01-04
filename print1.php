<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbarCopy.php'); ?>

<head>
  <style>
    /* Style Definitions */
    p.msoNormal,
    li.msoNormal,
    div.msoNormal {
      margin-top: 0in;
      margin-right: 0in;
      margin-bottom: 8.0pt;
      margin-left: 0in;
      line-height: 107%;
      font-size: 11.0pt;
      font-family: "Calibri", "sans-serif";
    }

    -->
  </style>

  <?php error_reporting(0) ?>
</head>

<body lang=EN-US>
  <div class="empty">
    <?php include('#'); ?>
    <div class="container">
      <div class="row-fluid">

      </div>
    </div>
  </div>
  </div>
 
  <div class="container">
    <div class="row-fluid">
      <div class="block">
        <div class="row-fluid">
          <div class=WordSection1>
            <p class=msoNormal align=center style='margin-bottom:0in;
            "><b><span style=' font-size:14.0pt;>
              <img src="images/logo.png" style="width:15%;height:10%;"></span></b>
            </p>
            <p class=msoNormal align=center style='margin-bottom:0in;'><b><span style=' font-size:12.0pt; font-family:"Times New Roman","serif"'>SELAM CHILDREN'S VILLAGE</span></b></p>
            <p class=msoNormal align=center style='margin-bottom:0in;'><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>SELAM TECHNICAL AND VOCATIONAL COLLEGE</span></b></p>
            <p class=msoNormal align=center style='margin-bottom:0in;'><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>PERFORMANCE MANAGEMENT SYSTEM</span></b></p>

            <div class="container">
              <div class="container-fluid">
                <div class="row-fluid">
                  <div class="pull-left">
                    <p class=msoNormal style='margin-bottom:0in;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>የሰራተኞች የግምገማ ውጤት ዝርዝር መረጃ<o:p></o:p></span></p>
                    <p class=msoNormal style='margin-bottom:0in;line-height:normal'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'>ቀን: <?php
                                                                                                                                                              $date = new DateTime();
                                                                                                                                                              echo $date->format('l, F jS, Y');
                                                                                                                                                              ?><o:p></o:p></span></p>

                    <div class="pull-right">
                      <div class="empty">


                        <p class=msoNormal style='margin-bottom:0in; margin-top:-30px; line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
                        <a id="print" onclick="window.print()" class="btn btn-success"><i class="icon-print"></i></a>
                            <a id="return" data-placement="top" class="btn btn-success" title="Click to Return" href="resultreport.php"><i class="icon-arrow-left"></i></a></p>

                      </div>
                    </div>
                    <p>
                      <span>
                      </span>
                    </p>
                    <table>
                      <tr style=' height:23.25pt'>
                      <td width=198 style='border:solid windowtext 1.0pt;background:#BFBFBF;>
                          <p class=msoNormal style=' line-height: normal'>
                          <b><span style='font-family:"Times New Roman","serif"'>ተ/ቁ</span></b></p>
                        </td>
                        <td width=198 style='border:solid windowtext 1.0pt;background:#BFBFBF;>
                          <p class=msoNormal style=' line-height: normal'>
                          <b><span style='font-family:"Times New Roman","serif"'>ሙሉ ስም</span></b></p>
                        </td>
                        <td width=108 style='border:solid windowtext 1.0pt;background:#BFBFBF;>
                          <p class=msoNormal style=' line-height: normal'>
                          <b><span style='font-family:"Times New Roman","serif"'> ጾታ</span></b></p>
                        </td>
                        <td width=188 style='border:solid windowtext 1.0pt;background:#BFBFBF;>
                          <p class=msoNormal style=' line-height: normal'>
                          <b><span style='font-family:"Times New Roman","serif"'>ከበላይ አካል ከ100%</span></b></p>
                        </td>
                        <td width=128 style='border:solid windowtext 1.0pt;background:#BFBFBF;>
                          <p class=msoNormal style=' line-height: normal'>
                          <b><span style='font-family:"Times New Roman","serif"'>አቻ ከ100%</span></b></p>
                        </td>
                        <td width=128 style='border:solid windowtext 1.0pt;background:#BFBFBF;>
                          <p class=msoNormal style=' line-height: normal'>
                          <b><span style='font-family:"Times New Roman","serif"'>የበታች ከ100%</span></b></p>
                        </td>
                        <td width=188 style='border:solid windowtext 1.0pt;background:#BFBFBF;>
                          <p class=msoNormal style=' line-height: normal'>
                          <b><span style='font-family:"Times New Roman","serif"'>ደንበኛ ከ100%</span></b></p>
                        </td>
                        <td width=188 style='border:solid windowtext 1.0pt;background:#BFBFBF;>
                          <p class=msoNormal style=' line-height: normal'>
                          <b><span style='font-family:"Times New Roman","serif"'>ራስን በራስ ከ100%</span></b></p>
                        </td>
                        <td width=128 style='border:solid windowtext 1.0pt;background:#BFBFBF;>
                          <p class=msoNormal style=' line-height: normal'>
                          <b><span style='font-family:"Times New Roman","serif"'>ጠቅላላ 100%</span></b></p>
                        </td>


                        <!-- mysqli FETCH ARRAY-->
                        <?php
                        $i = 1;
                        $student_query = mysqli_query($conn, "WITH recursive emp as(
                          SELECT 
                            e.employee_id, e.firstname, e.lastname, e.middle_name, e.gender
                          FROM employee e)
                          select 
                          *,
                          (select result_point from employee_result ery where emp.employee_id = ery.employee_id AND ery.program_id = 20 order by ery.employee_result_id desc limit 1) as yebelay,
                          (select result_point from employee_result ery where emp.employee_id = ery.employee_id AND ery.program_id = 22 order by ery.employee_result_id desc limit 1) as acha,
                          (select result_point from employee_result ery where emp.employee_id = ery.employee_id AND ery.program_id = 19 order by ery.employee_result_id desc limit 1) as yebelayakal,
                          (select result_point from employee_result ery where emp.employee_id = ery.employee_id AND ery.program_id = 21 order by ery.employee_result_id desc limit 1) as custemer,
                          (select result_point from employee_result ery where emp.employee_id = ery.employee_id AND ery.program_id = 23 order by ery.employee_result_id desc limit 1) as self
                          from emp;
                         ") or die(mysqli_error());
                        while ($row = mysqli_fetch_array($student_query)) {
                          $RegNo = $row['employee_id'];
                          $total_score = 0;
												($row['yebelayakal']) ? $total_score += $row['yebelayakal'] : $total_score + 0;
												($row['acha']) ? $total_score += $row['acha'] : $total_score + 0;
												($row['yebelay']) ? $total_score += $row['yebelay'] : $total_score + 0;
												($row['custemer']) ? $total_score += $row['custemer'] : $total_score + 0;
												($row['self']) ? $total_score += $row['self'] : $total_score + 0; 
                        ?>
                      <tr>
                       <td style='border:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'><?php echo $i++ ?></td>
                        <td style='border:solid windowtext 1.0pt;'>
                          <p><span style='font-family:"Times New Roman",'><?php echo $row['firstname'] . " " . $row['lastname'] . " " . $row['middle_name']; ?><o:p></o:p></span></p>
                        </td>
                        <td style="border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;text-align: center;">
                          <p><span style='font-family:"Times New Roman",'><?php echo $row['gender']; ?></span></p>
                        </td>
                        <td style="border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;text-align: center;">
                          <p class="msoNormal" style="line-height:normal"><span style="font-family:" Times New Roman",'><?php echo (!empty($row['yebelayakal'])) ? $row['yebelayakal'] : 'የለም !!'; ?></span></p>
                        </td>
                        <td style="border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;text-align: center;">
                          <p><span style='font-family:"Times New Roman",'><?php echo (!empty($row['acha'])) ? $row['acha'] : 'የለም !!'; ?></span></p>
                        </td>
                        <td style="border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;text-align: center;">
                          <p><span style='font-family:"Times New Roman",'><?php echo (!empty($row['yebelay'])) ? $row['yebelay'] : 'የለም !!'; ?></span></p>
                        </td>
                        <td style="border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;text-align: center;">
                          <p><span style='font-family:"Times New Roman",'><?php echo (!empty($row['custemer'])) ? $row['custemer'] : 'የለም !!'; ?></span></p>
                        </td>
                        <td style="border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;text-align: center;">
                          <p><span style='font-family:"Times New Roman",'><?php echo (!empty($row['self'])) ? $row['self'] : 'የለም !!'; ?></span></p>
                        </td>
                        <td style="border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;text-align: center;">
                          <p><span style='font-family:"Times New Roman",'><?php echo $total_score; ?></span></p>
                        </td>
                        </td>
                      <?php } ?><!--mysqli FETCH ARRAY-->
                      </tr>
                      <tr>
                        <td width=1127 colspan=6 style='width:845.5pt;border:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
                          <p class=msoNormal align=center style='margin-bottom:0in;text-align:center'><span style='font-family:"Times New Roman","serif"'>*** selamcollege.etc***</span></p>
                        </td>
                      </tr>
                    </table>

                    <p class=msoNormal style='margin-bottom:0in;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
                        <o:p>&nbsp;</o:p>
                      </span></p>

                    <p class=msoNormal style='margin-bottom:0in;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
                        <o:p>&nbsp;</o:p>
                      </span></p>

                    <table class=msoTableGrid border=0 cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none;'>
                      <tr style='height:44.85pt'>
                        <td width=376 valign=top style='width:281.8pt;height:17.85pt'>
                          <p class=msoNormal align=center style='margin-bottom:0in;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>Prepared by:<o:p></o:p></span></p>
                        </td>
                        <td width=376 valign=top style='width:281.85pt;height:17.85pt'>
                          <p class=msoNormal align=center style='margin-bottom:0in;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>Received by:<o:p></o:p></span></p>
                        </td>
                        <td width=376 valign=top style='width:281.85pt;height:17.85pt'>
                          <p class=msoNormal align=center style='margin-bottom:0in;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>Check by:<o:p></o:p></span></p>
                        </td>
                      </tr>

                      <?php $query = mysqli_query($conn, "select * from users where user_id = '$session_id'") or die(mysqli_error());
                      $row = mysqli_fetch_array($query);
                      ?>
                      <tr>
                        <td height:17.85pt'>
                          <p class=msoNormal align=center style='margin-bottom:0in;text-align:center;line-height:normal'><b><u><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'><?php echo $row['firstname'] . " " . $row['lastname'];  ?><o:p></o:p></span></u></b></p>
                        </td>
                        <td height:17.85pt'>
                          <p class=msoNormal align=center style='margin-bottom:0in;text-align:center;line-height:normal'><b><u><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>_____________________<o:p></o:p></span></u></b></p>
                        </td>
                        <td height:17.85pt'>
                          <p class=msoNormal align=center style='margin-bottom:0in;text-align:center;line-height:normal'><b><u><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>_______________________<o:p></o:p></span></u></b></p>
                        </td>
                      </tr>
                      <tr>
                        <td <p class=msoNormal align=center style='margin-bottom:0in;text-align:center;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>Administrator<o:p></o:p></span></p>
                        </td>
                        <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt'>
                          <p class=msoNormal align=center style='margin-bottom:0in;text-align:center;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>Associate<o:p></o:p></span></p>
                        </td>
                        <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt'>
                          <p class=msoNormal align=center style='margin-bottom:0in;text-align:center;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>Senior<o:p></o:p></span></p>
                        </td>
                      </tr>
                    </table>

                    <p class=msoNormal style='margin-bottom:0in;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
                        <o:p>&nbsp;</o:p>
                      </span></p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  <?php include('script.php'); ?>
</body>

</html>