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
								<li class="active"><a href="profile.php">Home</a></li>
								<li><a href="manage.php">Manage</a></li>
								<li ><a href="view_pat.php">Patient</a></li>
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
					
                      <h1 align="center">Control Panel Site Administration</h1>
				</div>
                </div>
				<div class="clear"> </div>
				
					
			<!----End-content----->
			</div>
        
        
			
		<!---End-wrap---->
		
	</body>
</html>
 


