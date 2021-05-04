<?php session_start();
include '../config.php';
include '../opendb.php';

if(!isset($_SESSION["userName"]))
{
	echo '<script>window.location="index.php"</script>';
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Click4Health</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../css/responsiveslides.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.css">
		<script src="js/jquery-3.1.1.js"></script>
		<script src="js/responsiveslides.min.js"></script>
        <script src="js/bootstrap.js"></script>
		  
	</head>
	<body>
    
		<!---start-wrap---->
		
			<!---start-header---->
			<div class="header">
					<div class="top-header">
						<div class="wrap">
						<div class="top-header-left">
							<p>Administration Control Panel</p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
					<div class="main-header">
						<div class="wrap">
							<div class="logo">
								<a href="index.php"><img src="../images/logo.png" title="logo" /></a>
							</div>
							<div class="social-links">
								<ul>
									<li><a href="#"><img src="../images/facebook.png" title="facebook" /></a></li>
									<li><a href="#"><img src="../images/twitter.png" title="twitter" /></a></li>
									<li><a href="#"><img src="../images/feed.png" title="Rss" /></a></li>
									<div class="clear"> </div>
								</ul>
							</div>
							<div class="clear"> </div>
						</div>
					</div>
					<div class="clear"> </div>

					<div class="top-nav">
						<div class="wrap">
							
							<ul>
								<li><a href="profile.php">Home</a></li>
								<li><a href="manage.php">Manage</a></li>
								<li class="active"><a href="view_pat.php">Patient</a></li>
								<li><a href="view_doc.php">Doctors</a></li>
								<li ><a href="changepass.php">Change Password</a></li>
                                <li class="pull-right"><a href="logout.php">Logout</a></li>
								
                                
								<div class="clear"> </div>
							</ul>
						</div>
					</div>
			</div>
			
            
          
            
			<div class="content">
				<div class="content-top-grids">
					
                      <div class="panel panel-info">
                        <div class="panel-heading">
                          <h3 class="panel-title">Patient List
                          		<div class="pull-right">
                                    <i class="glyphicon glyphicon-edit" onClick="editProfile()"></i>
                                </div>
                          </h3>
                          
                        </div>
                        <div class="panel-body">
                          <div class="row">
                          <?php
						  $query = "select * from patient";
						  $result = $conn->query($query);
						 
						 ?>
						 <table class="table">
						
							<tr><th>S.No</th><th>Patient Name</th><th>Contact</th><th>Email</th><th>Address</th><th>City</th><td>Remove</td></tr>
							<?php $sno=1;
							while( $row=$result->fetch_assoc()) { ?>
							
							<tr>
							<td><?php echo $sno; ?></td>
							<td><?php echo $row["patient_name"]; ?></td>
							<td><?php echo $row["contact"]; ?></td>
							<td><?php echo $row["email"]; ?></td>
							<td><?php echo $row["address"]; ?></td>
							<td><?php echo $row["city"]; ?></td>
							<td><a href="">Remove</a></td>
							</tr>
							<?php $sno++; } ?>
						 </table>

                        </div>
                             
                        
                      </div>
                    </div>
				
                </div>
				<div class="clear"> </div>
				
					
			<!----End-content----->
		</div>
        
        
		
				
				
				</div>
				<div class="clear"> </div>
				
					
			<!----End-content----->
		</div>
        
      
		<!---End-wrap---->
		
	</body>
</html>
 


