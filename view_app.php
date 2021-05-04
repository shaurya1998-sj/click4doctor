<?php session_start();
include 'config.php';
include 'opendb.php';

if(isset($_POST['saveapp']))
{
	

$update = "update appointment set ondate='".$_POST['appdate']."',status=1 where aid='".$_GET['app_id']."'";
			
$data = mysqli_query ($conn, $update)or die(mysqli_error($conn));
		
echo '<script>window.location="manageAppointmentDao.php"</script>';
}


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
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"> </div>
					<div class="top-nav">
						<div class="wrap">
							<?php include("menus.php"); ?>
						</div>
					</div>
			</div>
			<!---End-header---->
			<!---start-images-slider---->
			
			<div class="content">
				<div class="content-top-grids">
					<div class="col-lg-offset-2 col-lg-8">
                    	<table class="table table-striped text-center">
                        	
                        	<tbody>
							<form method="post">
                            <?php
							
								$query = "SELECT * FROM appointment where aid='".$_GET["app_id"]."'";
			
								$result = $conn->query($query);
								if ($result->num_rows > 0) {
									// output data of each row
									while($row=$result->fetch_assoc()) {
										?>
									<tr>
									<td align="left"><img src="images/155_162_delegate_large.png"></td>
									<td class="text-center"><h1>Massage<?php echo $row["msg"];?></h1></td>
									</tr>
							<tr><th class="text-center">Patient Name</th><td><?php echo $row["p_name"]; ?></td> </tr>
					<tr><th class="text-center">Contact No</th><td><?php echo $row["p_cno"]; ?></td> </tr>
					<tr><th class="text-center"><h4> Bokked On Date : <?php echo $row["book_date"]; ?></h4></th><td><h4>Appointment On : </h4> <input type="date" name="appdate" /></td> </tr>
					
					
					<td colspan="2" align="right"><button type="submit" name="saveapp" class="btn btn-default">Confirm</button></td> </tr>
					
									
									
									<?php }
								}
									?>
						
                            </tbody>
                        </table>
                  
                   </div>
				</div>
				<div class="clear"> </div>
				
					
			<!----End-content----->
		</div>
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
        	</form>
        
		<!---End-footer---->
	</body>
</html>
