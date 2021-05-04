<?php session_start();
include '../config.php';
include '../opendb.php';

if(isset($_SESSION["userName"]))
{
	echo '<script>window.location="profile.php"</script>';
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
		<script src="../js/jquery-3.1.1.js"></script>
		<script src="../js/responsiveslides.min.js"></script>
        <script src="../js/bootstrap.js"></script>
		  
	</head>
	<body>
		<!---start-wrap---->
		
			<!---start-header---->
		<div class="header">
        
            <div class="main-header">
                <div class="wrap">
                    <div class="logo">
                        <a href="../index.php"><img src="../images/logo.png" title="logo" /></a>
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
            
        </div>
        	<!---End-header---->
			<!---start-images-slider---->
			
			<div class="content">
				<div class="content-top-grids">
					<div class="col-lg-offset-3 col-lg-6">
                    	<div>
                          <!-- Nav tabs -->
                         <div class="tab-content">
                          <div class="tab-pane fade in active" id="doc" style="margin-top: 30px;">
                      			<h1 align="center">Control Panel</h1>
			<form class="form-horizontal"  name="registration" action="logindoc.php" method="post">
									 
									  <div class="form-group">
										<label for="specialization" class="col-sm-2 control-label">User Name</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="username" placeholder="User Name" required>
										</div>
									  </div>
                                      
                                      		  <div class="form-group">
										<label for="specialization" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="password" placeholder="Password" required>
										</div>
									  </div>
                                      
									  <div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
										  <button type="submit" name="submitdoclogin" class="btn btn-default btn-primary">Login</button>
										</div>
									  </div>
									</form>
									   
                                    </div>
                                    
									
                                    </div>
                         </div>
                    </div>                                                                                                 
                    
                   </div>
				</div>
				<div class="clear"> </div>
				
					
			<!----End-content----->
		</div>
		<!---End-wrap---->
		
	</body>
</html>

