<?php include('header.php'); ?>
<?php include('session.php'); ?>

<body>
    <?php include('navbar.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('sidebar.php'); ?>
            <div class="span6" id="content">
                <div class="row-fluid">
                    <!-- breadcrumb -->
                    <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                            <div id="" class="muted pull-left"></div>
                        </div>
                        <div class="block-content collapse in">
                            <!DOCTYPE html>
                            <html>

                            <head>
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                <style>
                                    .card {
                                        box-shadow: 0px 2px 8px 2px rgb(0 0 0);
                                        max-width: 300px;
                                        margin: auto;
                                        text-align: center;

                                    }

                                    .title {
                                        color: grey;
                                        font-size: 18px;
                                    }

                                    botton {
                                        border: none;
                                        outline: 0;
                                        display: inline-block;
                                        padding: 8px;
                                        color: white;
                                        background-color: #000;
                                        text-align: center;
                                        cursor: pointer;
                                        width: 100%;
                                        font-size: 18px;
                                        margin-left: 0px;
                                    }

                                    at {
                                        text-decoration: none;
                                        font-size: 22px;
                                        color: black;
                                    }

                                    botton:hover,
                                    at:hover {
                                        opacity: 0.7;
                                    }
                                </style>
                            </head>

                            <body>

                                <h2 style="text-align:center">User Profile Card</h2>

                                <div class="card">

                                    <img id="avatar" class="img-polaroid" src="<?php echo $row['adminthumbnails']; ?>">
                                    <h1><?php echo $row['firstname'] . " " . $row['lastname'];  ?></h1>
                                    <p class="title">CEO & Founder, Example</p>
                                    <p>Harvard University</p>
                                    <div style="margin: 24px 0;">
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <p>
                                        <botton>Contact</botton>
                                    </p>
                                </div>

                            </body>

                            </html>

                        </div>
                    </div>
                    <!-- /block -->
                </div>


            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
    <?php include('script.php'); ?>
</body>

</html>