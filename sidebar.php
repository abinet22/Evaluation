<div class="span3" id="sidebar" style="position:sticky;top:41px;">
    <img id="avatar" class="img-polaroid" src="<?php echo $row['adminthumbnails']; ?>">
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li> <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp; ዳሽቦርድ</a> </li>

        <li>
            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs5"><i class="icon-user"></i>&nbsp; አስተዳደር
                <div class="muted pull-right"><i class="icon-double-angle-down" style="background:#b70000;color:#ffef0e;"></i></div>
            </a>
            <ul id="bs5" class="collapse">
                <li>
                    <a href="add_Incoder.php"><i class="icon-hand-right"></i> መዝጋቢ ሰራተኛ 
                    </a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs6"><i class="icon-desktop"></i>&nbsp; አዲስ ምዝገባ
                <div class="muted pull-right"><i class="icon-double-angle-down" style="background:#b70000;color:#ffef0e;"></i></div>
            </a>
            <ul id="bs6" class="collapse">
                <li class="">
                    <a href="Employes.php"><i class="icon-hand-right"></i> አዲስ ሰራተኛ</a>
                </li>

                <li>
                    <a href="custemer.php"><i class="icon-hand-right"></i> አዲስ ደንበኛ
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs7"><i class="icon-bar-chart"></i>&nbsp; ጥያቄዎች
                <div class="muted pull-right"><i class="icon-double-angle-down" style="background:#b70000;color:#ffef0e;"></i></div>
            </a>
            <ul id="bs7" class="collapse">
                <li class="">
                    <a href="questionnaire.php"><i class="icon-hand-right"></i></i>&nbsp; አዲስ መጠይቅ</a>
                </li>
                <li>
                    <a href="point_wate.php"><i class="icon-hand-right"></i></i></i>&nbsp; የመጠይቅ ክብደት</a>
                </li>
                <li>
                    <a href="question.php"><i class="icon-hand-right"></i></i>&nbsp; መጠይቆች</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs8"><i class="icon-sitemap"></i>&nbsp; የግምገማ ምደባ
                <div class="muted pull-right"><i class="icon-double-angle-down" style="background:#b70000;color:#ffef0e;"></i></div>
            </a>
            <ul id="bs8" class="collapse">
                <li class="">
                <a href="assigned.php"><i class="icon-hand-right"></i> </i>&nbsp;የሰራተኛ ምደባ</a>
                </li>
                <a href="customerassigned.php"><i class="icon-hand-right"></i> </i>&nbsp;የደንበኛ ምደባ</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="job_title.php"><i class="icon-chevron-right"></i><i class="icon-pencil"></i> </i>&nbsp; የስራ ዘርፍ</a>
        </li>
        <li>
            <a href="department.php"><i class="icon-chevron-right"></i><i class="icon-building"></i> </i>&nbsp; የስልጠና ክፍል</a>
        </li>
        <li>
            <a href="program.php"><i class="icon-chevron-right"></i><i class="icon-legal"></i></i>&nbsp; ሀላፊነት</a>
        </li>
        <li>
            <a href="content.php"><i class="icon-chevron-right"></i><i class="icon-bullhorn"></i> </i>&nbsp; ግምገማ ማቋረጥና መልእክት</a>
        </li>
        <li>
            <a href="user_log.php"><i class="icon-chevron-right"></i><i class="icon-bullhorn"></i> </i>&nbsp; ወደ ግምገማው የገቡ</a>
        </li>
        <li>
            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs9"><i class="icon-hdd"></i>&nbsp; የግምገማ ውጤት ሪፖርት
                <div class="muted pull-right"><i class="icon-double-angle-down" style="background:#b70000;color:#ffef0e;"></i></div>
            </a>
            <ul id="bs9" class="collapse">
                <li class="">
                <a href="resultreport.php"><i class="icon-hand-right"></i> </i>&nbsp;የሁሉንም ውጤት በአንድ ገጽ</a>
                </li>
                <a href="printresult.php"><i class="icon-hand-right"></i> </i>&nbsp;ለየብቻ በገጽ</a>
                </li>
            </ul>
        </li>
      
    </ul>
</div>