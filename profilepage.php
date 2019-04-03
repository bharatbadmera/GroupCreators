<?php
  session_start();
  require_once "config.php";

  function getHo($value)
  {
    // code...
    $sql11="SELECT `count` FROM `groupset` WHERE `gid`='$value'";
    // $result11=mysqli_query($connection,$sql11);
    // $row11=mysqli_fetch_row($result11);
    // echo $row11[0];
  }

  if (isset($_SESSION['login_user'])) {
    require_once "process.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
    <?php
      $log=$_SESSION['login_user'];

      $s="SELECT `areaofint`,`name`,`gid` FROM `student` WHERE `uniroll`='$log' ";

      $r=mysqli_query($connection,$s);

      $ro=mysqli_fetch_row($r);

      $area=$ro[0];
      $name=$ro[1];
      $gid=$ro[2];

      $sql1 = "SELECT `user_1`, `user_2`, `user_3`, `user_4`, `count` FROM `groupset` WHERE `gid`='$gid'";
      $result1=mysqli_query($connection,$sql1);
      $a=mysqli_fetch_row($result1);
      $user1=$a[0];
      $user2=$a[1];
      $user3=$a[2];
      $user4=$a[3];
      $count=$a[4];
      ?>
		<div class="pre-loader"></div>
	<div class="header clearfix">
		<div class="header-right">
			<div class="brand-logo">
				<a href="index.php">
					<img src="vendors/images/logo.png" alt="" class="mobile-logo">
				</a>
			</div>
			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon"><i class="fa fa-user-o"></i></span>
						<span class="user-name"><?php echo $name; ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="setting.php"><i class="fa fa-cog" aria-hidden="true"></i> Setting</a>
						<a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<?php include('include/sidebar.php'); ?>
          
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			
							
                            <div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow height-100-p">
                            <div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">My Info</h4>
						</div>
					</div>
                            <div class="alert alert-primary" role="alert">
                                <p>Group ID: <?php echo $gid; ?></p>
      <p>Area of Interest: <?php echo $area; ?></p>
							</div>
						</div>
					</div>
					
						</div>
			
        
                                      
                            
                <div class="row clearfix progress-box">
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-blue text-white">
									<i class="fa fa-briefcase"></i>
								</div>
							</div>
                                        
                <div class="project-info-right">
								<span class="no text-blue weight-500 font-24">Member 1</span>
								<p class="weight-400 font-18"><?php echo $user1; ?></p>
							</div>
						</div>
						
							
						</div>
					</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-green text-white">
									<i class="fa fa-handshake-o"></i>
								</div>
							</div>
							<div class="project-info-right">
								<span class="no text-light-green weight-500 font-24">Member 2</span>
								<p class="weight-400 font-18"><?php echo $user2; ?></p>
							</div>
						</div>
						
							
						</div>
					</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-orange text-white">
									<i class="fa fa-list-alt"></i>
								</div>
							</div>
							<div class="project-info-right">
								<span class="no text-light-orange weight-500 font-24">Member 3</span>
								<p class="weight-400 font-18"><?php echo $user3; ?></p>
							</div>
						</div>
						
							
						</div>
					</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 margin-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-purple text-white">
									<i class="fa fa-podcast"></i>
								</div>
							</div>
							<div class="project-info-right">
								<span class="no text-light-purple weight-500 font-24">Member 4</span>
								<p class="weight-400 font-18"><?php echo $user4; ?></p>
							</div>
						</div>
						
							
						</div>
					</div>
            </div>
           
            
            
               
           
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">Active Users</h4>
						</div>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">University Roll No</th>
								<th scope="col">Name</th>
								<th scope="col">Section</th>
								<th scope="col">Interest</th>
                                <th scope="col">Tag</th>
							</tr>
						</thead>
                        <tbody>
                            
    <?php
       if ($gid==null) {
         // code...
          $sql = "SELECT `uniroll`, `name`, `sec`, `areaofint`,`gid` FROM `student` WHERE `areaofint`='$area' and `uniroll`!='$log' ";

       }else{
          $sql = "SELECT `uniroll`, `name`, `sec`, `areaofint`,`gid` FROM `student` WHERE `areaofint`='$area' and `uniroll`!='$log' and `gid` is NULL";
       }

       $result=mysqli_query($connection,$sql);

      $co=true;
      echo "<hr>";
      echo "<h4><u></u></h4>";
      if ($count<4) {
        // code...
        // echo mysqli_num_rows($result);
        if (mysqli_num_rows($result)>0 ) {
          // code...
          $i=1;
          while($row=mysqli_fetch_assoc($result)  ){
            $uni=$row['uniroll'];
            $nam=$row['name'];
            $sec=$row['sec'];
            $are=$row['areaofint'];
            $gid=$row['gid'];

            $sql11="SELECT `count` FROM `groupset` WHERE `gid`='$gid'";
            $result11=mysqli_query($connection,$sql11);
            $row11=mysqli_fetch_row($result11);
            $s=$row11[0];

            if ($s<4) {
              // code...
              $sql2 = "SELECT * FROM `request` WHERE `sender`='$log' and `receiver`='$uni'";
              $result2=mysqli_query($connection,$sql2);

              $sql3 = "SELECT * FROM `request` WHERE `sender`='$uni' and `receiver`='$log'";
              $result3=mysqli_query($connection,$sql3);

              if (mysqli_num_rows($result3)>0) {
                // code...
                ?>
                       						
                        <tr>
								<th scope="row"><?php echo $i; ?></th>
								<td><?php echo $uni;?></td>
								<td><?php echo $nam;?></td>
								<td><?php echo $sec;?></td>
                                <td><?php echo $are;?></td>
                                <td>
                                           <div class="modal-footer justify-content-center">
                                               <button  type='button' class="btn btn-success" data-dismiss="modal" onclick="location.href = 'acceptRequest.php?req_user=<?php echo $row['uniroll']; ?>';">acctpt Request</button></div></td>
                                    
                                        <td>
                                             <div class="modal-footer justify-content-center">
                                            <button type='button' class="btn btn-danger" data-dismiss="modal" onclick="location.href = 'cencelRequest.php?req_user=<?php echo $row['uniroll']; ?>&flag=<?php echo 1; ?>';">cancel Request</button>
                             </div>
                            </td>                
                                    
                           
							</tr>
                            
                            <?php
                $co=false;
              }elseif (mysqli_num_rows($result2)>0) {
                // code...
                ?>
                              
							<tr>
								<th scope="row"><?php echo $i; ?></th>
								<td><?php echo $uni;?></td>
								<td><?php echo $nam;?></td>
								<td><?php echo $sec;?></td>
                                <td><?php echo $are;?></td>
                                <td>
                                <div class="modal-footer justify-content-center">
							
                            <button type='button' class="btn btn-danger" data-dismiss="modal" onclick="location.href = 'cencelRequest.php?req_user=<?php echo $row['uniroll']; ?>&flag=<?php echo 0; ?>';">cancel Request</button></div> </td>
                                
                               
                            </tr>
                            <?php
                $co=false;
              }else{
              ?>
                            
							<tr>
								<th scope="row"><?php echo $i; ?></th>
								<td><?php echo $uni;?></td>
								<td><?php echo $nam;?></td>
								<td><?php echo $sec;?></td>
                                <td><?php echo $are;?></td>
                                
							<td><div class="modal-footer justify-content-center">
                                <button type='button' class="btn btn-primary" data-dismiss="modal" onclick="location.href = 'sentRequest.php?req_user=<?php echo $row['uniroll']; ?>';">send Request</button></div></td>
							</tr>
						
					
                    
                    
            <?php
              $co=false;
              }
              $i=$i+1;
            }
        }
        if ($co) {
          // code...
          echo "0 Result";
        }
        // echo "string";
        // echo $i;
        }else{
          echo "0 Result";
        }
      }else {
        // code...
        echo "You are done";
      }
       ?>
<?php
}else {
  header('Location: index.html');
}
mysqli_close($connection);
?>
           </tbody>
					</table>         
      
				<!-- basic table  End -->
            
            
			<?php include('include/footer.php'); ?>
	</div>
    </div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	<script type="text/javascript">
		Highcharts.chart('areaspline-chart', {
			chart: {
				type: 'areaspline'
			},
			title: {
				text: ''
			},
			legend: {
				layout: 'vertical',
				align: 'left',
				verticalAlign: 'top',
				x: 70,
				y: 20,
				floating: true,
				borderWidth: 1,
				backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
			},
			xAxis: {
				categories: [
					'Monday',
					'Tuesday',
					'Wednesday',
					'Thursday',
					'Friday',
					'Saturday',
					'Sunday'
				],
				plotBands: [{
					from: 4.5,
					to: 6.5,
				}],
				gridLineDashStyle: 'longdash',
                gridLineWidth: 1,
                crosshair: true
			},
			yAxis: {
				title: {
					text: ''
				},
				gridLineDashStyle: 'longdash',
			},
			tooltip: {
				shared: true,
				valueSuffix: ' units'
			},
			credits: {
				enabled: false
			},
			plotOptions: {
				areaspline: {
					fillOpacity: 0.6
				}
			},
			series: [{
				name: 'John',
				data: [0, 5, 8, 6, 3, 10, 8],
				color: '#f5956c'
			}, {
				name: 'Jane',
				data: [0, 3, 6, 3, 7, 5, 9],
				color: '#f56767'
			}, {
				name: 'Johnny',
				data: [0, 2, 5, 3, 2, 4, 0],
				color: '#a683eb'
			}, {
				name: 'Daniel',
				data: [0, 4, 7, 3, 0, 7, 4],
				color: '#41ccba'
			}]
		});


		// Device Usage chart
		Highcharts.chart('device-usage', {
			chart: {
				type: 'pie'
			},
			title: {
				text: ''
			},
			subtitle: {
				text: ''
			},
			credits: {
				enabled: false
			},
			plotOptions: {
				series: {
					dataLabels: {
						enabled: false,
						format: '{point.name}: {point.y:.1f}%'
					}
				},
				pie: {
					innerSize: 127,
					depth: 45
				}
			},

			tooltip: {
				headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
				pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
			},
			series: [{
				name: 'Brands',
				colorByPoint: true,
				data: [{
					name: 'IE',
					y: 10,
					color: '#ecc72f'
				}, {
					name: 'Chrome',
					y: 40,
					color: '#46be8a'
				}, {
					name: 'Firefox',
					y: 30,
					color: '#f2a654'
				}, {
					name: 'Safari',
					y: 10,
					color: '#62a8ea'
				}, {
					name: 'Opera',
					y: 10,
					color: '#e14e50'
				}]
			}]
		});

		// gauge chart
		Highcharts.chart('ram', {

			chart: {
				type: 'gauge',
				plotBackgroundColor: null,
				plotBackgroundImage: null,
				plotBorderWidth: 0,
				plotShadow: false
			},
			title: {
				text: ''
			},
			credits: {
				enabled: false
			},
			pane: {
				startAngle: -150,
				endAngle: 150,
				background: [{
					borderWidth: 0,
					outerRadius: '109%'
				}, {
					borderWidth: 0,
					outerRadius: '107%'
				}, {
				}, {
					backgroundColor: '#fff',
					borderWidth: 0,
					outerRadius: '105%',
					innerRadius: '103%'
				}]
			},

			yAxis: {
				min: 0,
				max: 200,

				minorTickInterval: 'auto',
				minorTickWidth: 1,
				minorTickLength: 10,
				minorTickPosition: 'inside',
				minorTickColor: '#666',

				tickPixelInterval: 30,
				tickWidth: 2,
				tickPosition: 'inside',
				tickLength: 10,
				tickColor: '#666',
				labels: {
					step: 2,
					rotation: 'auto'
				},
				title: {
					text: 'RAM'
				},
				plotBands: [{
					from: 0,
					to: 120,
					color: '#55BF3B'
				}, {
					from: 120,
					to: 160,
					color: '#DDDF0D'
				}, {
					from: 160,
					to: 200,
					color: '#DF5353'
				}]
			},

			series: [{
				name: 'Speed',
				data: [80],
				tooltip: {
					valueSuffix: '%'
				}
			}]
		});
		Highcharts.chart('cpu', {

			chart: {
				type: 'gauge',
				plotBackgroundColor: null,
				plotBackgroundImage: null,
				plotBorderWidth: 0,
				plotShadow: false
			},
			title: {
				text: ''
			},
			credits: {
				enabled: false
			},
			pane: {
				startAngle: -150,
				endAngle: 150,
				background: [{
					borderWidth: 0,
					outerRadius: '109%'
				}, {
					borderWidth: 0,
					outerRadius: '107%'
				}, {
				}, {
					backgroundColor: '#fff',
					borderWidth: 0,
					outerRadius: '105%',
					innerRadius: '103%'
				}]
			},

			yAxis: {
				min: 0,
				max: 200,

				minorTickInterval: 'auto',
				minorTickWidth: 1,
				minorTickLength: 10,
				minorTickPosition: 'inside',
				minorTickColor: '#666',

				tickPixelInterval: 30,
				tickWidth: 2,
				tickPosition: 'inside',
				tickLength: 10,
				tickColor: '#666',
				labels: {
					step: 2,
					rotation: 'auto'
				},
				title: {
					text: 'CPU'
				},
				plotBands: [{
					from: 0,
					to: 120,
					color: '#55BF3B'
				}, {
					from: 120,
					to: 160,
					color: '#DDDF0D'
				}, {
					from: 160,
					to: 200,
					color: '#DF5353'
				}]
			},

			series: [{
				name: 'Speed',
				data: [120],
				tooltip: {
					valueSuffix: ' %'
				}
			}]
		});
	</script>
</body>
</html>
