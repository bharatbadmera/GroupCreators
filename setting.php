<?php
  session_start();
  // require_once "config.php";

  if (isset($_SESSION['login_user'])) {
    // code...
    ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
	<!--header-->
	<body>

	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			
            <!--form basics-->
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Change Password</h4>
							<p class="mb-30 font-14"></p>
						</div>
					</div>
					<form action="settingdone.php" method="post">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Current Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="password" name="current_password" id="current_password" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">New Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="password" name="password" id="confirm_password" required>
							</div>
						</div>
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Re-type Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="password" name="confirm_password" id="password" required>
							</div>
						</div>
                        <div class="modal-footer justify-content-center">
								<button type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">Done</button>
							</div>
                </form>
            </div>
 
        <script type="text/javascript">
          var password = document.getElementById("password");
          var confirm_password = document.getElementById("confirm_password");

          function validatePassword(){
            if(password.value != confirm_password.value) {
              confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
              confirm_password.setCustomValidity('');
            }
          }

          password.onchange = validatePassword;
          confirm_password.onchange = validatePassword;
        </script>

    <?php
  }else{
    header("Location: index.php");
  }
  // mysqli_close($connection);
?>
        
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>    
