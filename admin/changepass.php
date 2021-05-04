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
    <form class="form-horizontal"  name="registration"  method="post">
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
								<li><a href="view_pat.php">Patient</a></li>
								<li><a href="view_doc.php">Doctors</a></li>
								<li class="active"><a href="changepass.php">Change Password</a></li>
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
                          <h3 class="panel-title">
							Change Password
                          		<div class="pull-right">
                                    <input type="submit" name="save" value="Change Password" />
                                </div>
                          </h3>
                          
                        </div>
                        <div class="panel-body">
                          <div class="row">
						  <?php 
						  $query = "select * from admin";
						  $result = $conn->query($query);
						  $row=$result->fetch_assoc();
						  
						  if(isset($_POST['save']))
							{
							
								
							 $query = "update admin set uname='".$_POST['firstName']."', 
											password='".$_POST['password']."'";
								
								
								$execute = mysqli_query ($conn, $query);
									if($execute) {
								
								echo '<script>window.location="changepass.php"</script>';
								
									}
									
									}
						  
						  ?>
						  
                         <form class="form-horizontal"  name="registration"  method="post">
									  <div class="form-group">
										<label for="firstName" class="col-sm-2 control-label">User Name</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="firstName" value="<?php echo $row["uname"] ?>" placeholder="User Name" required>
										</div>
									  </div>
									  <div class="form-group">
										<label for="firstName" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
										  <input type="password" class="form-control" name="password" value="<?php echo $row["password"] ?>" placeholder="Password" required>
										</div>
									  </div>
						</form>

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
 


