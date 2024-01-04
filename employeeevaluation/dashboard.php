<?php include('header.php'); ?>
<?php include('session.php'); ?>

<body>

    <div class="container-fluid">
        <?php include('navbar.php') ?>
        <div class="row-fluid">

            <?php include('sidebar.php'); ?>
            <!--/span-->
            <div class="span9" id="content">
                <div class="row-fluid"></div>

                <div class="row-fluid">
                    <!-- block -->
                    <div id="block_bg" class="block">
                        <div>

                            <body onload="startTime()">


                                <div id="clockdate">
                                    <div class="clockdate-wrapper">
                                        <div id="clock"></div>
                                        <div id="date"><?php echo date('l, F j, Y'); ?></div>
                                    </div>
                                </div>
                        </div>
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>የተመዘገበ መረጃዎች ማጠቃለያ</div>

                        </div>
                        <div class="block-content collapse in">
                            <?php

                            $dataPoints = array(
                                array("label" => "ተገምጋሚ", "y" => 60.0),
                                array("label" => "ገምጋሚ", "y" => 6.5),
                                array("label" => "ከፍተኛ ውጤት", "y" => 4.6),
                                array("label" => "ዝቅተኛ ውጤት", "y" => 2.4),
                                array("label" => "መካከለኛ ውጤት", "y" => 1.9),
                                array("label" => "የተመለሰ ከ100%", "y" => 1.8),
                                array("label" => "ያልተመለሰ ከ100%", "y" => 1.5),
                                array("label" => "ሰአቱ ያበቃበት", "y" => 1.5),
                                array("label" => "ያቄረጠ", "y" => 1.3),
                                array("label" => "ከፍተኛው", "y" => 0.9),
                                array("label" => "ዝቅተኛው", "y" => 0.8)
                            );

                            ?>
                            <!DOCTYPE HTML>
                            <html>

                            <head>
                                <script>
                                    window.onload = function() {

                                        var chart = new CanvasJS.Chart("chartContainer", {
                                            animationEnabled: true,
                                            theme: "light2",
                                            title: {
                                                text: "የግምገማ ሪፖርት የ-2016"
                                            },
                                            axisY: {
                                                suffix: "%",
                                                scaleBreaks: {
                                                    autoCalculate: true
                                                }
                                            },
                                            data: [{
                                                type: "column",
                                                yValueFormatString: "#,##0\"%\"",
                                                indexLabel: "{y}",
                                                indexLabelPlacement: "inside",
                                                indexLabelFontColor: "white",
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