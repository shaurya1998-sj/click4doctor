<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Medical Website Template | News :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
						<div class="right-left">
								<ul>
                        <?php
							if(!isset($_SESSION['type']) && empty($_SESSION['type']))
							{?>
							<li class="login"><a href="login.php">Login</a></li>
                            <li class="sign"><a href="signup.php">Sign up</a></li>
							<?php	
							} 
							
							if($_SESSION['type']=="doctor")
							{
							?>
							<li class="login"><a href="logout.php">Logout</a></li>
                            <li class="sign"><a href="profiledoc.php">Profile</a></li>
							
							<?php
							}							
							if($_SESSION['type']=="patient")
							{
							?>
							<li class="login"><a href="logout.php">Logout</a></li>
                            <li class="sign"><a href="profile.php">Profile</a></li>
							
							<?php
							}?>
						</ul>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
					<div class="main-header">
						<div class="wrap">
							<div class="logo">
								<a href="index.html"><img src="images/logo.png" title="logo" /></a>
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
								<li><a href="about.php">About</a></li>
								<li><a href="services.php">Services</a></li>
								<li class="active"><a href="news.php">News</a></li>
								<li><a href="contact.php">Contact</a></li>
								<div class="clear"> </div>
							</ul>
						</div>
					</div>
			</div>
			<!---End-header---->
			<!----start-content----->
			<div class="content">
				<div class="wrap">
					<div class="services">
						<div class="service-content">
							<h3>Latest News</h3>
							<ul>
								<li><span>1.</span></li>
								<li><p><a href="#">MANUFACTURING &amp; INDUSTRIAL</a>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p></li>
								<div class="clear"> </div>
							</ul>
							<ul>
								<li><span>2.</span></li>
								<li><p><a href="#">FINANCIAL INSTITUTION</a>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p></li>
								<div class="clear"> </div>
							</ul>
							<ul>
								<li><span>3.</span></li>
								<li><p><a href="#">OFFICE BUILDING</a>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p></li>
								<div class="clear"> </div>
							</ul>
							<ul>
								<li><span>4.</span></li>
								<li><p><a href="#">RESIDENTIAL COMMUNITIES</a>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p></li>
								<div class="clear"> </div>
							</ul>
							<ul>
								<li><span>5.</span></li>
								<li><p><a href="#">RETAIL INDUSTRY</a>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p></li>
								<div class="clear"> </div>
							</ul>
							<ul>
								<li><span>6.</span></li>
								<li><p><a href="#">GOVERNMENT FACILITIES</a>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p></li>
								<div class="clear"> </div>
							</ul>
							<ul>
								<li><span>7.</span></li>
								<li><p><a href="#">COLLEGES &amp; UNIVERSITIES</a>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p></li>
								<div class="clear"> </div>
							</ul>
							<ul>
								<li><span>8.</span></li>
								<li><p><a href="#">DISTRIBUTION FACILITIES</a>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p></li>
								<div class="clear"> </div>
							</ul>
							<ul>
								<li><span>9.</span></li>
								<li><p><a href="#">HEALTHCARE FACILITIES</a>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p></li>
								<div class="clear"> </div>
							</ul>
						</div>
						<div class="services-sidebar">
							<h3>WE PROVIDE</h3>
							 <ul>
							  	<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							  	<li><a href="#">Conse ctetur adipisicing</a></li>
							  	<li><a href="#">Elit sed do eiusmod tempor</a></li>
							  	<li><a href="#">Incididunt ut labore</a></li>
							  	<li><a href="#">Et dolore magna aliqua</a></li>
							  	<li><a href="#">Ut enim ad minim veniam</a></li>
							  	<li><a href="#">Quis nostrud exercitation</a></li>
							  	<li><a href="#">Ullamco laboris nisi</a></li>
							  	<li><a href="#">Ut aliquip ex ea commodo</a></li>
							  	<li><a href="#">Ut enim ad minim veniam</a></li>
					 		 </ul>
					 		 <h3>ARCHIVES</h3>
					 		 <ul>
					 		 	<li><a href="#">JAN, 2013</a></li>
					 		 	<li><a href="#">FEB, 2013</a></li>
					 		 	<li><a href="#">MAR, 2013</a></li>
					 		 	<li><a href="#">APRIL, 2013</a></li>
					 		 </ul>
						</div>
						<div class="clear"> </div>
					</div>
				<div class="clear"> </div>
				</div>
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
					<p>Design by <a href="http://w3layouts.com/">W3layouts</a></p>
				</div>
				<!---End-copy-right----->
			</div>
		</div>
		<!---End-footer---->
	</body>
</html>

