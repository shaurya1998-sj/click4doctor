<?php session_start();
include 'config.php';
include 'opendb.php';

if(isset($_POST['saveapp']))
{
	

//$update = "update appointment set ondate='".$_POST['date_app']."',status=1 where aid='".$_POST['appid']."'";
			
//$data = mysqli_query ($conn, $update)or die(mysqli_error($conn));
		

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
							<div class="clear"> </div>
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
                        	<thead>
                            <th class="text-center">Patient Name</th>
                            <th class="text-center">Contact No</th>
                            <th class="text-center">Massage</th>
                          
							<th class="text-center">Confirm</th>
							
                            <th></th>
                            </thead>
                        	<tbody>
							<form method="post">
                            <?php
							
								$query = "SELECT * FROM appointment where doc_id='".$_SESSION["dId"]."'";
			
								$result = $conn->query($query);
								if ($result->num_rows > 0) {
									// output data of each row
									while($row=$result->fetch_assoc()) {
										?>
									<tr>
										<td><?php echo $row["p_name"]; ?></td>
										<td><?php echo $row["p_cno"]; ?></td>
										<td><?php echo $row["msg"];?></td>
										<?php if($row["status"]==1){
										$confirm="Confirmed";}
										else
										{
											$confirm="Confirm";
										}
											?>
										<td><a href="view_app.php?app_id=<?php echo $row["aid"];?>"><?php echo $confirm;  ?></a></td>
					
									</tr>
									
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
	
        	</form>
        
		<!---End-footer---->
	</body>
</html>
