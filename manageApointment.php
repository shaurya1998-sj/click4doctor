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
					
                    	<table class="table table-striped text-center">
						<center>
						<div class="form-group">
						
						<select class="form-control" id="sel1" name="city" required>
						<option value=""> Select Your Locality </option>
						<option>Hiran Magri</option>
						<option>Surajpole</option>
						<option>Dehli Gate</option>
						<option>Pratap Nagar</option>
						<option>Thokar Choraha</option>
						<option>Durga Nursary</option>
						<option>Shastri Circle</option>
						<option>Fateh Pura</option>
						
						</select>
						
						<select class="form-control inputlg" id="sel1" name="spe" required>
						<option value="">Select Specialization </option>
						<option>General Physician</option>
						<option>Gynecologist</option>
						<option>Dermatologist</option>
						<option>Ophthalmology</option>
						</select>
						
						<select class="form-control inputlg" id="sel1" name="rating" >
						<option value="">  Rating </option>
						<option value="1">One Star</option>
						<option value="2">Two Star</option>
						<option value="3">Three Star</option>
						<option value="4">Four Star</option>
						<option value="5">Five Star</option>
						</select>
						<button type="submit" name="search" value="search" class="btn btn-default">Search</button><br><br>
						</div>
						</center>
					
						
					
							
                            <?php
							
							if(isset($_POST['search']))
							{
								if($_POST['rating']>0)
								{
 $query = "SELECT * FROM doctor where city='".$_POST['city']."' and specialization='".$_POST['spe']."' and rating='".$_POST['rating']."'";
								}
			else{
			
$query = "SELECT * FROM doctor where city='".$_POST['city']."' and specialization='".$_POST['spe']."'";
			}
								$result = $conn->query($query);
								if ($result->num_rows > 0) {
					?>
					
					
                        	<tbody>
					<?php
									// output data of each row
									while($row = $result->fetch_assoc()) {
										?>
					

                    <!-- Demo 1 start -->
                  
               
                    <!-- Demo 1 end -->
<div class="panel panel-default">
<div class="panel-heading">
<a href="book_app.php?dr_id=<?php echo $row["dr_id"]; ?>">
<?php echo $row["first_name"]; ?> <?php echo $row["last_name"] ;?>
</a>
</div>
<div class="panel-body">
<div class="row">
  <div class="col-md-4" >
    <p><img src="photo/<?php echo $row["photo"];?>" class="img-circle" style="border:5px #f5f5f5 solid"  />
	
	<?php if($row["status"]==1) { ?>
	<img src="images/Verified.png" height="50" width="50" />
	<?php
	}
	?>
	</p>
	
  </div>
  <div class="col-md-4">
  <p style="color:red; font-size:20px;">Rating  : <?php echo $row["rating"] ;?> Stars</p>
  <p>Specialization : <?php echo $row["specialization"] ;?> <br> Experiance : <?php echo $row["experience"] ;?> <br>
Academic : <?php echo $row["academic"] ;?> </p>
 <p>About Specialist : <?php echo $row["description_detail"] ;?></p>
  </div>
  <div class="col-md-4" >
    <p>Contact Info: <?php echo $row["contact"] ;?> <br>Mail-Id : <?php echo $row["contact"] ;?> <br> Address : <?php echo $row["contact"] ;?> <br> City : <?php echo $row["city"] ;?> <br> Timing Availability : <?php echo $row["timing"] ;?> <br> Fee : <?php echo $row["fee"] ;?></p></p>
	<p>
	<center><a href="book_app.php?dr_id=<?php echo $row["dr_id"]; ?>" type="button" class="btn btn-primary btn-lg "> Book Appintment Now </a></center>
	</p>
  </div>
</div>



 

</div>
</div>								
			
								<?php 
									}
								}
								else
								{
									echo "<h2>Nothing to Find</h2>";
								}
							}
							else
							{?>
							<center><img src="images/slider1.jpg" class="img-rounded" /></center>
							<?php
							}
							?>
							</form>
                            </tbody>
                        </table>
                  
                   
				</div>
				<div class="clear"> </div>
				
					
			<!----End-content----->
		</div>
		<!---End-wrap---->
		
	</body>
</html>
