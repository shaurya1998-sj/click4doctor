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
    <form method="post" enctype="multipart/form-data">
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
									if($_SESSION['type'] == "doctor") {
										echo '<li><a href="manageApointment.php">Appointment</a></li>';
									}
								?>
								
                                <li class="pull-right"><a href="logout.php">Logout</a></li>
                                <li class="pull-right active"><a href="profiledoc.php">Profile</a></li>
								<div class="clear"> </div>
							</ul>
						</div>
					</div>
			</div>
			<!---End-header---->
			<!---start-images-slider---->
			<?php
			$query = "select * from doctor where dr_id=". $_SESSION['dId'];
				
					$result = $conn->query($query);
					
					//$img=$result->fetch_assoc();
					
				if(isset($_POST['save']))
				{
				$pat_email=$_POST["doc_email"];
				$pat_contact=$_POST["doc_contact"];
				$pat_address=$_POST["doc_address"];
				$pat_city=$_POST["doc_city"];
				$pat_spe=$_POST["doc_spe"];
				$pat_exp=$_POST["doc_exp"];
				
			
				
			$name=$_FILES['pic']['name'];
		 $tname=$_FILES['pic']['tmp_name'];
		 move_uploaded_file($tname,"photo/".$name);
		if($name=="")
		{
				$name=$_SESSION['picname'];
		}
		 
				 $query = "update doctor set email='".$pat_email."', 
								 contact='".$pat_contact."', 
								address='".$pat_address."',
								city='".$pat_city."',
								specialization='".$pat_spe."',
								experience='".$pat_exp."',
								academic='".$_POST['doc_aca']."',
								photo='".$name."',
								timing='".$_POST['doc_timing']."',
								fee='".$_POST['doc_fee']."',
								description_detail='".$_POST['doc_detail']."',
								type='doctor'
								where dr_id=".$_SESSION['dId'];	
					
								
					$exe = mysqli_query($conn, $query);
						if($exe) {
					?>
							<script>window.location="profiledoc.php"</script>
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
                                              <?php
                                              if($row["photo"] != null) {
												  $_SESSION['picname']=$row["photo"];
                                              ?>
                                                <div class="col-md-3 col-lg-3 " align="center"> 
	<img alt="User Pic" src="photo/<?php echo $row["photo"]; ?>" class="img-circle img-responsive"> </div>
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
	<td><input type="text" name="doc_email"  value="<?php echo $row["email"]; ?>"></td>
  </tr>

  <tr>
	<td>Contact:</td>
	<td><input type="text" name="doc_contact" value="<?php echo $row["contact"]; ?>"></td>
  </tr>
  <tr>
	<td>Address</td>
	<td><input type="text" name="doc_address" value="<?php echo $row["address"]; ?>"></td>
  </tr>
  <tr>
	<td>City</td>
	<td><input type="text" name="doc_city" value="<?php echo $row["city"]; ?>"></td>
  </tr>
   <tr>
	<td>Specialization</td>
	<td><input type="text" name="doc_spe" value="<?php echo $row["specialization"]; ?>"></td>
  </tr>
   <tr>
	<td>Experince</td>
	<td><input type="text" name="doc_exp" value="<?php echo $row["experience"]; ?>"></td>
  </tr>
   <tr>
	<td>Academic</td>
	<td><input type="text" name="doc_aca" value="<?php echo $row["academic"]; ?>"></td>
  </tr>
   <tr>
	<td>Profile Pic</td>
	<td>
	<img src="photo/<?php echo $row["photo"]; ?>" height="200" width="200"  ><br><br>
	<input type="file" name="pic" ></td>
  </tr>
   <tr>
	<td>Timing </td>
	<td><input type="text" name="doc_timing" value="<?php echo $row["timing"]; ?>"></td>
  </tr>
   <tr>
	<td>Fee</td>
	<td><input type="text" name="doc_fee" value="<?php echo $row["fee"]; ?>"></td>
  </tr>
   <tr>
	<td>Detail About </td>
	<td>
	<textarea name="doc_detail" rows="10" cols="30"><?php echo $row["description_detail"]; ?></textarea>
	</td>
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
		
		</form>
	</body>
</html>
<?php


?>

