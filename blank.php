<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
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
					<form>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Current Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">New Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="Search Here" type="search">
							</div>
						</div>
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Re-type Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="Search Here" type="search">
							</div>
						</div>
                </form>
            </div>
            
            
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>