<?php include('header.php'); ?>
<marquee style="color: #eef0f1;
	height:32px;
	font-size:23px;
    background:linear-gradient(46deg, #0146df, #cd0303);">
	<p style="font-size:23px;margin:8px;">የሰራተኞች የስራ አፈጻጸም የ360 ዲግሪ የስድስት ወር የተገመገሙበት ነጥብ መሙያ አስተዳደር ገጽ</p>
</marquee>

<body id="login" style="padding:1px;">
	<div class="container">
		<form id="login_form" class="form-signin" method="post" style="width:21%;">
			<div> <img class="index_logo" src="images/logo.png"></div>
			<h3 class="form-signin-heading">

				<i class="icon-lock"></i> Please Login
			</h3>
			<div class="form-group mb-3">
          <select name="login" id="" class="custom-select custom-select-sm">
		  <option></option>
            <option value="0">Admin</option>
            <option value="1">Human Resources (HR)</option>
			<option value="2">Data Incoder</option>
          </select>
        </div>
			<input type="text" class="input-block-level" id="usernmae" name="username" placeholder="Reg..Username" required>
			<input type="password" class="input-block-level" id="password" name="password" placeholder="Reg..Password" required>
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
						url: "login_Regs.php",
						data: formData,
						success: function(html) {
							if (html == 'true') {
								$.jGrowl("እንካን ወደ ሰራተኞች ውጤት መሙያ ገጽ መጡ", {
									header: 'Access Granted'
								});
								var delay = 1000;
								setTimeout(function() {
									window.location = './registration/dashboard.php'
								}, delay);
							} else {
								$.jGrowl("እባኮትን በድጋሜ የመግቢያ ስምና የሚስጢር ቁጥሮን ያስተካክሉ", {
									header: 'መገባት አልተቻለም'
								});
							}
						}

					});
					return false;
				});
			});
		</script>
	</div> <!-- /container -->
</body>

</html>