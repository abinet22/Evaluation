<div class="span3" id="sidebar" style="position:static; top:7px;">
    <img id="avatar" class="img-polaroid" src="<?php echo $row['location']; ?>">
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse" style="top:212px; width:312px; position:fixed;">
        <li> <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;ዳሽቦርድ</a> </li>
        <li>
            <a href="photo.php"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i>&nbsp; የሚገመግሙት</a>
        </li>
         <li>
            <a href="missage.php"><i class="icon-chevron-right"></i><i class="icon-desktop"></i>&nbsp;አስተያየት</a>
        </li> 
        <li>
            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs7"><i class="icon-bar-chart"></i>&nbsp; ሪፖርት
                <div class="muted pull-right"><i class="icon-double-angle-down" style="background:#b70000;color:#ffef0e;"></i></div>
            </a>
            <ul id="bs7" class="collapse">
                <li class="">
                    <a href="riport.php"><i class="icon-hand-right"></i></i>&nbsp;የግል ውጤት ሪፖርት</a>
                </li>
                <li>
                    <a href="#"><i class="icon-hand-right"></i></i></i>&nbsp; አመታዊ ሪፖርት</a>
                </li>
                <li>
                    <a href="Signatures.php"><i class="icon-hand-right"></i></i></i>&nbsp; ፊርማ</a>
                </li>
            </ul>
        </li>
    </ul>
</div>