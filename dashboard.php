<?php include('header.php'); ?>
<?php include('session.php'); ?>

<body>
    <?php include('navbar.php') ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('sidebar.php'); ?>
            <!--/span-->

            <div class="span9" id="content">
                <div class="row-fluid"></div>

                <div class="row-fluid">

                    <!-- block -->
                    <div id="block_bg" class="block">

                        <div class="navbar navbar-inner block-header">

                            <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>የተመዘገበ መረጃዎች ማጠቃለያ</div>
                        </div>
                        <div>
                            <link rel="stylesheet" href="Time/style.css">
                            <script src="Time/navbarclock.js"></script>

                            <body onload="startTime()">
                                <div id="clockdate">
                                    <div class="clockdate-wrapper">
                                        <div id="clock"></div>
                                        <div id="date"><?php echo date('l, F j, Y'); ?></div>
                                    </div>
                                </div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">

                                <?php

                                $dataPoints = array(
                                    array("label" => "የሰራተኞች ጠቅላላ ብዛት", "y" => 590),
                                    array("label" => "ዝቅተኛ ውጠት ያስገኘው መጠይቅ አይነት", "y" => 261),
                                    array("label" => "ጥሩ ውጠት ያስገኘው መጠይቅ", "y" => 158),
                                    array("label" => "ዝቅተኛ ውጤት", "y" => 72),
                                    array("label" => "የተገመገሙ", "y" => 191),
                                    array("label" => "ያልተገመገመ", "y" => 573),
                                    array("label" => "ከፍተኛው ውጤት", "y" => 126)
                                );

                                ?>
                                <!DOCTYPE HTML>
                                <html>

                                <head>
                                    <script>
                                        window.onload = function() {

                                            var chart = new CanvasJS.Chart("chartContainer", {
                                                animationEnabled: true,
                                                exportEnabled: true,
                                                title: {
                                                    text: "የገምጋሚና የተገምጋሚ ጠቅላላ ሪፖርት"
                                                },
                                                subtitles: [{
                                                    text: "የሰራተኞች የግምገማ ውጤት"
                                                }],
                                                data: [{
                                                    type: "pie",
                                                    showInLegend: "true",
                                                    legendText: "{label}",
                                                    indexLabelFontSize: 16,
                                                    indexLabel: "{label} - #percent%",
                                                    yValueFormatString: "฿#,##0",
                                                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                                }]
                                            });
                                            chart.render();

                                        }
                                    </script>
                                </head>

                                <body>
                                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
                                </body>

                                </html>



                            </div>
                            <!-- /block -->

                        </div>
                    </div>




                </div>
            </div>
            <?php include('footer.php'); ?>
        </div>
        <?php include('script.php'); ?>
</body>

</html>