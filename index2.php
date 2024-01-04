<?php include('header.php'); ?>
<marquee style="color: #eef0f1;
	height:32px;
	font-size:23px;
    background:linear-gradient(46deg, #0146df, #cd0303);">
	<p style="font-size:23px;margin:8px;">የሰላም ቴክኒክና ሙያ ማሰልጠኛ ኮሌጅ የሰራተኞች የስራ አፈጻጸም የ360 ዲግሪ የስድስት ወር መመዘኛ ቅጽ//...Employee 360 Digre Feedback Evaluation Management System //www.selamcollege.etc</p>
</marquee>

<body id="login" style="padding:1px;">
	<div class="container">
		<form id="login_form" class="form-signin" method="post" style="width:21%;">
			<div> <img class="index_logo" src="images/logo.png"></div>
			<h3 class="form-signin-heading">

				<i class="icon-lock"></i> Please Login
			</h3>
			<input type="text" class="input-block-level" id="usernmae" name="username" placeholder="Admin Username" required>
			<input type="password" class="input-block-level" id="password" name="password" placeholder="Admin Password" required>

			<button name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-"></i> Sign in</button>
			<div class="pull-right">
				<a href="index.html" class="btn btn-info"><i class="icon-arrow-left"></i> Back</a>
			</div>
		</form>
		<script>
			jQuery(document).ready(function() {
				jQuery("#login_form").submit(function(e) {
					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "login.php",
						data: formData,
						success: function(html) {
							if (html == 'true') {
								$.jGrowl("እንካን ወደ ሰራተኞች መገምገሚያና አስተዳደር ገጽ በደህና መጡ", {
									header: 'Access Granted'
								});
								var delay = 2000;
								setTimeout(function() {
									window.location = 'dashboard.php'
								}, delay);
							} else {
								$.jGrowl("እባኮትን ትክክለኛውን መለያ ስምና የሚስጢር ቁጥር ያስገቡ", {
									header: 'መግባት አልተቻለም...!!'
								});
							}
						}

					});
					return false;
				});
			});
		</script>




	</div> <!-- /container -->
	<?php include('script.php'); ?>
</body>

</html>