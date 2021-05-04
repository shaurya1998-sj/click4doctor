<?php session_start();
include 'config.php';
include 'opendb.php';



?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Click4Health</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
		<script src="js/jquery-3.1.1.js"></script>
		<script src="js/responsiveslides.min.js"></script>
        <script src="js/bootstrap.js"></script>
		  
	</head>
	<body>
    <form method="post">
		<!---start-wrap---->
		
			<!---start-header---->
			<div class="header">
					<div class="top-header">
						<div class="wrap">
						<div class="top-header-left">
							<p>+800-020-12345</p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
					<div class="main-header">
						<div class="wrap">
							<div class="logo">
								<a href="index.php"><img src="images/logo.png" title="logo" /></a>
							</div>
							<div class="social-links">
								<ul>
									<li><a href="#"><img src="images/facebook.png" title="facebook" /></a></li>
									<li><a href="#"><img src="images/twitter.png" title="twitter" /></a></li>
									<li><a href="#"><img src="images/feed.png" title="Rss" /></a></li>
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
								<li><a href="index.php">Home</a></li>
								
                                <?php 
									if($_SESSION["type"] == 'patient') {
										echo '<li><a href="manageApointment.php">Appointment</a></li>';
									}
								?>
							
                                <li class="pull-right"><a href="logout.php">Logout</a></li>
                                <li class="pull-right active"><a href="profile.php">Profile</a></li>
								<div class="clear"> </div>
							</ul>
						</div>
					</div>
			</div>
			<!---End-header---->
			<!---start-images-slider---->
			<?php
			$query = "select * from patient where p_id=". $_SESSION['pId'];
				
					$result = $conn->query($query);
				if(isset($_POST['save']))
				{
				$pat_email=$_POST["pat_email"];
				$pat_dob=$_POST["pat_dob"];
				$pat_contact=$_POST["pat_contact"];
				$pat_address=$_POST["pat_address"];
				$pat_city=$_POST["pat_city"];
					
				 $query = "update patient set email='".$pat_email."', 
								dob='".$pat_dob."', 
								contact='".$pat_contact."', 
								address='".$pat_address."',
								city='".$pat_city."' where p_id=".$_SESSION['pId'];	
					
					
					$execute = mysqli_query ($conn, $query);
						if($execute) {
					?>
							<script type="text/javascript">alert("Record Updated");</script>
							<script>window.location="profile.php"</script>
					<?php
					
						}
						
						}
				
					
					if ($result->num_rows > 0) {
						// output data of each row
						while($row=$result->fetch_assoc()) {
							
			?>
			
                      
                                <div class="content">
                                    <div class="content-top-grids">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" >
                                          <div class="panel panel-info">
                                            <div class="panel-heading">
                                              <h3 class="panel-title">Edit Profile
                                              	<div class="pull-right">
												
												<input type="submit" name="save" value="Update" />
												
                                        
                                                  </div>
                                              </h3>
                                              
                                            </div>
                                            <div class="panel-body">
                                              <div class="row">
                                          
                                                <div class=" col-md-9 col-lg-9 "> 
                                               
<table class="table table-user-information">
<tbody>
  <tr>
	<td>Email:</td>
	<td><input type="text" name="pat_email"  value="<?php echo $row["email"]; ?>"></td>
  </tr>
  <tr>
	<td>Date Of Birth:</td>
	<td><input type="date"  name="pat_dob" value="<?php echo $row["dob"]; ?>"></td>
  </tr>
  <tr>
	<td>Contact:</td>
	<td><input type="text" name="pat_contact" value="<?php echo $row["contact"]; ?>"></td>
  </tr>
  <tr>
	<td>Address</td>
	<td><input type="text" name="pat_address" value="<?php echo $row["address"]; ?>"></td>
  </tr>
  <tr>
	<td>City</td>
	<td><input type="text" name="pat_city" value="<?php echo $row["city"]; ?>"></td>
  </tr>
 
</tbody>
</table>
                                                 
                                                  
                                                </div>
                                              </div>
                                            </div>
                                                 
                                            
                                          </div>
                                        </div>
                                    
                                    </div>
                                    </div>
                                    <div class="clear"> </div>
                                    
                                        
                                <!----End-content----->
                            </div>
                                <?php	
							
					}
				}
			?>
				
		<!---End-wrap---->
		<!---start-footer---->
		<div class="footer">
			<div class="wrap">
				<div class="footer-grids">
					<div class="footer-grid">
						<h3>OUR Profile</h3>
						 <ul>
							<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							<li><a href="#">Conse ctetur adipisicing</a></li>
							<li><a href="#">Elit sed do eiusmod tempor</a></li>
							<li><a href="#">Incididunt ut labore</a></li>
							<li><a href="#">Et dolore magna aliqua</a></li>
							<li><a href="#">Ut enim ad minim veniam</a></li>
						</ul>
					</div>
					<div class="footer-grid">
						<h3>Our Services</h3>
						 <ul>
							<li><a href="#">Et dolore magna aliqua</a></li>
							<li><a href="#">Ut enim ad minim veniam</a></li>
							<li><a href="#">Quis nostrud exercitation</a></li>
							<li><a href="#">Ullamco laboris nisi</a></li>
							<li><a href="#">Ut aliquip ex ea commodo</a></li>
						</ul>
					</div>
					<div class="footer-grid">
						<h3>OUR FLEET</h3>
						 <ul>
							<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							<li><a href="#">Conse ctetur adipisicing</a></li>
							<li><a href="#">Elit sed do eiusmod tempor</a></li>
							<li><a href="#">Incididunt ut labore</a></li>
							<li><a href="#">Et dolore magna aliqua</a></li>
							<li><a href="#">Ut enim ad minim veniam</a></li>
						</ul>
					</div>
					<div class="footer-grid">
						<h3>CONTACTS</h3>
						 <p>Lorem ipsum dolor sit amet ,</p>
						 <p>Conse ctetur adip .</p>
						 <p>ut labore Usa.</p>
						 <span>(202)1234-56789</span>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
				<!---start-copy-right----->
				<div class="copy-tight">
					<p>Design by Click4Health</p>
				</div>
				<!---End-copy-right----->
			</div>
		</div>
        
        
		<!---End-footer---->
		</form>
	</body>
</html>
<?php


?>

