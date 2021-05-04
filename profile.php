<?php session_start();
include 'config.php';
include 'opendb.php';


if(isset($_SESSION['pId']) && !empty($_SESSION['pId'])) {
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
							<p><?php
							
						if(isset($_SESSION["PAT"]))
						{
							echo "<h3>Patient Logged in : ".$_SESSION["PAT"]."</h3>" ;
							} 
							?></p>
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
								
                                <?php 
									if($_SESSION["type"] == 'patient') {
										echo '<li><a href="manageApointment.php">Appointment</a></li>';
									}
								?>
								<li><a href="status.php">Status Appointment</a></li>
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
				$query = "";
				if($_SESSION['type'] == 'patient') {
					$query = "select * from patient where p_id=". $_SESSION['pId'];
				
					$result = $conn->query($query);
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							
			?>
            
          
            
			<div class="content">
				<div class="content-top-grids">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" >
                      <div class="panel panel-info">
                        <div class="panel-heading">
                          <h3 class="panel-title"><?php echo $row["patient_name"]; ?>
                          		<div class="pull-right">
                                   
									<a href="editProfile.php">Edit Profile</a>
								  
                                  </div>
                          </h3>
                          
                        </div>
                        <div class="panel-body">
                         
                            <div class=" col-md-9 col-lg-9 "> 
                              <table class="table table-user-information">
                                <tbody>
                                  <tr>
                                    <td>Email:</td>
                                    <td><?php echo $row["email"]; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Date Of Birth:</td>
                                    <td><?php echo $row["dob"]; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Contact:</td>
                                    <td><?php echo $row["contact"]; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Address</td>
                                    <td><?php echo $row["address"]; ?></td>
                                  </tr>
                                  <tr>
                                    <td>City</td>
                                    <td><?php echo $row["city"]; ?></td>
                                  </tr>
                                 
                                </tbody>
                              </table>
                              
                              
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
			} 
			else if($_SESSION['type'] == "doctor") {
				
				$query = "select * from doctor where dr_id=". $_SESSION['dId'];	
				$result = $conn->query($query);
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
			?>
			<div class="content">
				<div class="content-top-grids">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" >
                      <div class="panel panel-info">
                        <div class="panel-heading">
                          <h3 class="panel-title"><?php echo $row["first_name"]." ".$row["last_name"]; ?></h3>
                        </div>
                        <div class="panel-body">
                          <div class="row">
                            <?php
							  if($row["profileimg"] != null) {
							?>
								<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo $row["profileimg"]; ?>" class="img-circle img-responsive"> </div>
							<?php
							  } else {
							?>
								<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/profile.jpg" class="img-circle img-responsive"> </div>
							<?php
							  }
							?>
                            <div class=" col-md-9 col-lg-9 "> 
                              <table class="table table-user-information">
                                <tbody>
                                  <tr>
                                    <td>Email:</td>
                                    <td><?php echo $row["email"]; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Contact:</td>
                                    <td><?php echo $row["contact"]; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Address</td>
                                    <td><?php echo $row["address"]; ?></td>
                                  </tr>
                                  <tr>
                                    <td>City</td>
                                    <td><?php echo $row["city"]; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Specialization</td>
                                    <td><?php echo $row["specialization"]; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Experience</td>
                                    <td><?php echo $row["experience"]; ?></td>
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
				</div>
				<div class="clear"> </div>
				
					
			<!----End-content----->
		</div>
        
        <?php
					}
				}
			} 
		?>
		<!---End-wrap---->
		
	</body>
</html>
<?php

}

?>

