   <div class="row-fluid">
   <a href="add_Incoder.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Incoder</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Incoder</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysqli_query($conn,"select * from registerd where registerd_id = '$get_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								?>
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['firstname']; ?>" name="firstname" id="focusedInput" type="text" placeholder = "ስም" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['lastname']; ?>"  name="lastname" id="focusedInput" type="text" placeholder = "የወላጅ ስም" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['username']; ?>"  name="username" id="focusedInput" type="text" placeholder = "የመግቢያ ስም" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['password']; ?>"  name="password" id="focusedInput" type="password" placeholder = "መለያ ኮድ" required>
                                          </div>
                                        </div>
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
			<?php		
if (isset($_POST['update'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($conn,"update registerd set username = '$username', password = '$password'  , firstname = '$firstname' , lastname = '$lastname' where registerd_id = '$get_id' ")or die(mysqli_error());
?>
<script>
  window.location = "add_Incoder.php"; 
</script>
<?php
}
?>