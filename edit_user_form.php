   <div class="row-fluid">
   <a href="admin_user.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add user</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit User</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysqli_query($conn,"select * from users where user_id = '$get_id'")or die(mysqli_error());
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
                                            <input class="input focused" value="<?php echo $row['username']; ?>"  name="username" id="focusedInput" type="text" placeholder = "የመግቢያ ስም/UserName/" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['password']; ?>"  name="password" id="focusedInput" type="password" placeholder = "መለያ ኮድ/password/" required>
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

mysqli_query($conn,"update users set username = '$username', password = '$password'  , firstname = '$firstname' , lastname = '$lastname' where user_id = '$get_id' ")or die(mysqli_error());
?>
<script>
  window.location = "admin_user.php"; 
</script>
<?php
}
?>