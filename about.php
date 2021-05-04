<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Medical Website Template | About :: W3layouts</title>
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
									<li class="active"><a href="about.php">About</a></li>
									<li><a href="services.php">Services</a></li>
									<li><a href="news.php">News</a></li>
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
				<div class="about">
					<div class="about-topgrid1">
										<h3>Who We Are</h3>
										<img src="images/slider2.jpg" title="name">
										<h4>LOREM IPM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT. PRAESENT VESTIBULUM.</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p>
									</div>
					<div class="about-histore">
									<h3>Our History</h3>
									<div class="historey-lines">
										<ul>
											<li><span>2010 &nbsp;-</span></li>
											<li><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p></li>
											<div class="clear"> </div>
										</ul>
									</div>
									<div class="historey-lines">
										<ul>
											<li><span>2010 &nbsp;-</span></li>
											<li><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p></li>
											<div class="clear"> </div>
										</ul>
									</div>
									<div class="historey-lines">
										<ul>
											<li><span>2010 &nbsp;-</span></li>
											<li><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p></li>
											<div class="clear"> </div>
										</ul>
									</div>
									<div class="historey-lines">
										<ul>
											<li><span>2010 &nbsp;-</span></li>
											<li><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p></li>
											<div class="clear"> </div>
										</ul>
									</div>
									<div class="historey-lines">
										<ul>
											<li><span>2010 &nbsp;-</span></li>
											<li><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p></li>
											<div class="clear"> </div>
										</ul>
									</div>
									<div class="clear"> </div>
								</div>
					<div class="about-services">
									<h3>our services</h3>
									<h4>LOREM IPM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT. PRAESENT VESTIBULUM.</h4>
									<p>Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Morbi nunc odio, gida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros.</p>
									<ul>
										<li><a href="#">consectetur adipisicing elit</a></li>
										<li><a href="#">sed do eiusmod tempor incididunt</a></li>
										<li><a href="#">labore et dolore magna aliqua.</a></li>
										<li><a href="#">sed do eiusmod tempor</a></li>
										<li><a href="#">abore et dolore magna</a></li>
										<li><a href="#">incididunt ut labore et dolore</a></li>
										<div class="clear"> </div>
									</ul>
								</div>
								<div class="clear"> </div>
								<div class="ourteam">
									<h3>Our Places</h3>
									<div class="section group">
										<div class="grid_1_of_4 images_1_of_4">
											 <img src="images/d1.jpg">
											 <h3>Lorem Ipsum is simply </h3>
											 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<a href="#">[...]</a></p>
										</div>
										<div class="grid_1_of_4 images_1_of_4">
											 <img src="images/d2.jpg">
											 <h3>Lorem Ipsum is simply </h3>
											 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<a href="#">[...]</a></p>
										</div>
										<div class="grid_1_of_4 images_1_of_4">
											 <img src="images/d3.jpg">
											 <h3>Lorem Ipsum is simply </h3>
											 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<a href="#">[...]</a></p>
										</div>
										<div class="grid_1_of_4 images_1_of_4">
											 <img src="images/d4.jpg">
											 <h3>Lorem Ipsum is simply </h3>
											 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<a href="#">[...]</a></p>
										</div>
									</div>
								</div>
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

