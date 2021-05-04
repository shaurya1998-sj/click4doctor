<?php session_start();?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Click4Health</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/responsiveslides.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="js/responsiveslides.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 1
                $("#slider1").responsiveSlides({
                    maxwidth: 2500,
                    speed: 600
                });
            });
        </script>
    </head>
    <body>
        <!---start-wrap---->

        <!---start-header---->
        <div class="header">
            <div class="top-header">
                <div class="wrap">
                    <div class="top-header-left">
                        <p>
						+800-020-12345
						</p>
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
           
        </div>
        <!---End-header---->
        <!---start-images-slider---->
        <div class="image-slider">
            <!-- Slideshow 1 -->
            <ul class="rslides rslides1" id="slider1" style="max-width: 2500px;">
                <li id="rslides1_s0" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; -webkit-transition: opacity 600ms ease-in-out; transition: opacity 600ms ease-in-out;">
                    <img src="images/slider3.png" alt="">
                    <div class="slider-info">
                        <p>Medica Find best Hospital </p>
                        <span>Register Here to Find Best Specialist all Over World </span>
                        <a href="signup.php">Sign-Up</a>
                    </div>
                </li>
                <li id="rslides1_s1" class="" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; -webkit-transition: opacity 600ms ease-in-out; transition: opacity 600ms ease-in-out;"><img src="images/slider2.png" alt="">
                    <div class="slider-info">
                        <p>Medica Find best Specialist</p>
                       <span>Register Here to Find Best Specialist all Over World </span>
                        <a href="signup.php">Sign-Up</a>
                    </div>
                </li>
                <li id="rslides1_s2" class="rslides1_on" style="float: left; position: relative; opacity: 1; z-index: 2; display: list-item; -webkit-transition: opacity 600ms ease-in-out; transition: opacity 600ms ease-in-out;"><img src="images/slider2.png" alt="">
                    <div class="slider-info">
                        <p>Medica Find  best Health Care </p>
                       <span>Register Here to Find Best Specialist all Over World </span>
                        <a href="signup.php">Sign-Up</a>
                    </div>
                </li>
            </ul>
            <!-- Slideshow 2 -->
        </div>
        <!---End-images-slider---->
        <!----start-content----->
        <div class="content">
            <div class="content-top-grids">
                <div class="wrap">
                    <div class="content-top-grid">
                        <div class="content-top-grid-header">
                            <div class="content-top-grid-pic">
                                <a href="#"><img src="images/timer.png" title="image-name" /></a>
                            </div>
                            <div class="content-top-grid-title">
                                <h3>24x7 Servives</h3>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        <a class="grid-button" href="#">Read More</a>
                        <div class="clear"> </div>
                    </div>
                    <div class="content-top-grid">
                        <div class="content-top-grid-header">
                            <div class="content-top-grid-pic">
                                <a href="#"><img src="images/tool.png" title="image-name" /></a>
                            </div>
                            <div class="content-top-grid-title">
                                <h3>CARE ADVICES</h3>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        <a class="grid-button" href="#">Read More</a>
                        <div class="clear"> </div>
                    </div>
                    <div class="content-top-grid">
                        <div class="content-top-grid-header">
                            <div class="content-top-grid-pic">
                                <a href="#"><img src="images/inject.png" title="image-name" /></a>
                            </div>
                            <div class="content-top-grid-title">
                                <h3>EMERGENCY</h3>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        <a class="grid-button" href="#">Read More</a>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
            
            <!----End-content----->
        </div>
        <!---End-wrap---->
       
        <!---End-footer---->
    </body>
</html>

