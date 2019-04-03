<?php
  session_start();
  if (isset($_SESSION['login_user']) && ($_SESSION['first']==1)) {
?>
<!DOCTYPE html>
<html>
<head>

<?php include('include/head.php'); ?>
<style>
          ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }
          li {
      float: left;
    }
          li a {
      display: inline-block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
          li a:hover {
      background-color: #111;
    }
          .active {
      background-color: red;
    }
        </style>	
</head>
<body>
<header>
          <ul>
            <li><a href="logout.php" class="active">Logout</a></li>
          </ul>
        </header>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Welcome! <?php echo $_SESSION['login_user']; ?></h4>
						</div>
					</div>
					<form action="firstReg.php" method="post">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="name" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Area of Interest</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="area" required>
									<option value="type1">type1</option>
                                <option value="type2">type2</option>
                                <option value="type3">type3</option>
                                <option value="type4">type4</option>
                                <option value="type5">type5</option>
								</select>
							</div>
						</div>
                        <div class="form-group row" >
							<label class="col-sm-12 col-md-2 col-form-label">Section</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="section" required>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="F">F</option>
                                    <option value="G">G</option>
                                    <option value="H">H</option>
                                    <option value="I">I</option>
                                    <option value="J">J</option>
                                </select>
							</div>
						</div>
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">New Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="password" name="password" id="confirm_password">
							</div>
						</div>
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Re-type Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="password" name="confirm_password" id="password">
							</div>
						</div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" name="" value="submit" class="btn btn-primary" data-dismiss="modal">Submit</button>
                        </div>
						
                    </form>
	
				<!-- Input Validation End -->
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
  }else {
    // code...
    header('Location: index.html');
  }
 ?>

    
    
    
            </div>
                        
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>
