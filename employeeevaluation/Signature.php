<!DOCTYPE html>
<html>

<head>
 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
 


 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="asset/js/jquery.signature.min.js"></script>
  

    <style>
        .kbw-signature {
            width: 400px;
            height: 200px;
        }

        #sig canvas {
            width: 100% !important;
            height: auto;
        }
    </style>

</head>

<body class="bg-light">
<div class="container-fluid">
		<div class="row-fluid">
			<div class="span6" id="">
				<div class="row-fluid">
                <div class="container p-4">
               
                        
                <form method="POST" action="upload.php" style="width:fit-content;">
             
               
                    <div class="col-md-12" style="background:#082a54;">
                      <p style="margin: 0 0 -8px;color: white;line-height: normal;background: #d52211;"> የሰራተኛው ዲጂታል ፊርማ</p>
                        <br />
                        <div id="sig"></div>
                        <br />

                        <textarea id="signature64" name="signature" style="display: none"></textarea>
                        <div class="col-12">
                            <button class="btn btn-sm btn-warning" id="clear">&#x232B;Clear Signature</button>
                            <button type="submit" name="submit" class="btn btn-success" style="float:right;">Submit</button>
                        </div>
                    </div>

                    <br />
                  
                </form>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-4">

                <!-- live_demo_page -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1190033123418031" data-ad-slot="5335471635" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </div>
    </div>
        </div>
    </div>
    <script type="text/javascript">
        var sig = $('#sig').signature({
            syncField: '#signature64',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });
    </script>

</body>

</html>