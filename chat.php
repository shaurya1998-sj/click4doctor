<?php
include 'config.php';
include 'opendb.php';

session_start();
if($_SESSION['userId'] != null) {
	
$docId = $_GET["doc"];
$_SESSION['recipient_id'] = $docId;
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
							<div class="clear"> </div>
						</div>
					</div>
					<div class="clear"> </div>
					<div class="top-nav">
						<div class="wrap">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
                                <?php 
								if($_SESSION["type"] == 'Patient') {
									echo '<li><a href="manageApointment.php">Appointment</a></li>';
								}
								?>
								<li><a href="contact.php">Contact</a></li>
                                <li class="pull-right"><a href="logout.php">Logout</a></li>
                                <li class="pull-right"><a href="profile.php">Profile</a></li>
								<div class="clear"> </div>
							</ul>
						</div>
					</div>
			</div>
			<!---End-header---->
			<!---start-images-slider---->
			
			<div class="content">
				<div class="content-top-grids">
					<div class="col-md-6 col-md-offset-3">
                    	<div class="col-md-12 chat-block" id="chat-block">
                        	<?php
								$query = "SELECT * FROM chat_master where recipient_id=".$_SESSION['recipient_id']." and sender_id=".$_SESSION['userId']."";
			
								$result = $conn->query($query);
								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
										if($_SESSION['userId'] == $row['sender_id']) {
											echo '<div class="pull-right chat-message-outgoing">'.$row["message"].'</div>';
											echo '<div class="clear"></div>';	
										} else {
											echo '<div class="pull-left chat-message-incoming">'.$row["message"].'</div>';	
											echo '<div class="clear"></div>';
										}
									}
								}
							?>
                        	
                        </div>
                        <div class="col-md-12 send-block">
                        <form method="post">
                        <div class="col-md-11 no-padding">
                        	<input type="text" name="messageToSent" id="messageToSent" maxlength="65535" class="form-control">
                            </div>
                            <div class="col-md-1 no-padding">
                            <input type="submit" name="savemessage" id="saveButton" class="btn btn-success" value="Send" style="margin-left: -25px;">
                            </div>
                        </div>
                        </form>
                    </div>
				</div>
				<div class="clear"> </div>
				
                <script type="text/javascript">
					$(function(){
						$('#saveButton').click(function(){
							var dataString = 'message=' + document.getElementById('messageToSent').value;
							
							$.ajax({
								type: "POST",
								url:'saveMessage.php',
								data: dataString,
								cache: false,
								success:function(response){ 
									$('#chat-block').load(function(e) {
                                        
                                    });
								},
								failure: function(response){}
							}); // this will alert the code generated in example.php
						});
					});
				</script>
					
			<!----End-content----->
		</div>
		<!---End-wrap---->
		<!---start-footer---->
		<div class="footer" style="margin-top:50px;">
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
	</body>
</html>

<?php
} else {
	echo '<script type="text/javascript">alert("Forbidden");window.location.href="index.php";</script>';
}
?>

