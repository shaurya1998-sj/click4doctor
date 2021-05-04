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
    <form method="post" class="form-inline">
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
								
                                <li class="active"><a href="manageApointment.php">Search</a></li>
								<li><a href="status.php">Status Appointment</a></li>
							
                                <li class="pull-right"><a href="logout.php">Logout</a></li>
                                <li class="pull-right"><a href="profile.php">Profile</a></li>
								<div class="clear"> </div>
							</ul>
						</div>
					</div>
			</div>
			<!---End-header---->
			<!---start-images-slider---->
			
			<div class="container" style="min-height:500px; padding-left:20px;">
				<div class="content-top-grids" >
					
    

                    <!-- Demo 1 start -->
                  
               
                    <!-- Demo 1 end -->
<div class="panel panel-default">
<div class="panel-heading">
	Confirmation Detail 
</div>
<div class="panel-body">
<div class="row">
  <div class="col-md-12" >
                   	<table class="table table-striped">
					<th>Dr. Name</th>
					<th>Address</th>
					<th>Contact</th>
					
						<th>Booking Date</th>
						<th>Booked Date On</th>
						<th>Status</th>
         <?php 
			
//$query = "SELECT * FROM appointment where pat_id='".$_SESSION['pId']."'";

 $query= "SELECT * FROM doctor INNER JOIN appointment ON doctor.dr_id=appointment.doc_id where pat_id='".$_SESSION['pId']."'";
								$result = $conn->query($query);
								if ($result->num_rows > 0) {
					?>
					
					
                        	<tbody>
					<?php
					
					
									// output data of each row
									while($row = $result->fetch_assoc()) {
									
									
										
						
?>
			
	<tr>
		<td>
			<?php echo $row['first_name']; ?>
		</td>
		<td>
			<?php echo $row['address']; ?>
		</td>
		<td>
			<?php echo $row['contact']; ?>
		</td>
		<td>
			<?php echo $row['book_date']; ?>
		</td>
		<td>
			<?php echo $row['ondate']; ?>
		</td>
		<td>
		<?php
		if($row['status']==1)
		{
			 echo "Confirmed";
		}
		else
		{
			 echo "Pending";
		}
		?>
		</td>
	</tr>
	
  </div>
  
</div>



 

</div>
</div>								
			
						<?php 
									}
								}
									?>
							</form>
                            </tbody>
                       
                  
                   
				</div>
				<div class="clear"> </div>
				
					
			<!----End-content----->
		</div>
		<!---End-wrap---->
		
	</body>
</html>
