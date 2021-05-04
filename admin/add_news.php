<?php session_start();
include '../config.php';
include '../opendb.php';

if(!isset($_SESSION["userName"]))
{
	echo '<script>window.location="index.php"</script>';
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Click4Health</title>
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../css/responsiveslides.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.css">
		
		<script src="js/jquery-3.1.1.js"></script>
		<script src="js/responsiveslides.min.js"></script>
        <script src="js/bootstrap.js"></script>
		<script src="ckeditor/ckeditor.js"></script>
		<link href="ckeditor/samples/sample.css" type="text/css" rel="stylesheet" />

		  
	</head>
	<body>
    
		<!---start-wrap---->
		
			<!---start-header---->
			
            
          
            
			<div class="content">
				<div class="content-top-grids">
					<div class="panel panel-info">
					<div class="panel-heading"><a href="manage.php"> <= Click Back to Control Panel</a></div>
					<div class="panel-body">
							<a href="add_news.php" class="btn btn-info" role="button">Add News</a>
							<a href="#" class="btn btn-info" role="button">Add Aboutus</a>
							<a href="#" class="btn btn-info" role="button">Add Services</a>
							<a href="#" class="btn btn-info" role="button">Back Cpanel</a> <br><br>
								<a href="add_news.php" class="btn btn-info" role="button">View News</a>
							<a href="#" class="btn btn-info" role="button">View Aboutus</a>
							<a href="#" class="btn btn-info" role="button">View Services</a>
							<a href="#" class="btn btn-info" role="button">Logout</a>
							
							
					</div>
					</div>
                </div>
				<div class="clear"> </div>
			<div class="panel panel-default">
			<div class="panel-heading">Add News 
			 
			</div>
			<div class="panel-body">
				 <form class="form-horizontal"  name="registration"  method="post">
									  <div class="form-group">
										<label for="firstName" class="col-sm-2 control-label">News Title</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="firstName" value="<?php echo $row["uname"] ?>" placeholder="News Goes Here " required>
										</div>
									  </div>
									  <div class="form-group">
										<label for="firstName" class="col-sm-2 control-label">News Content</label>
										<div class="col-sm-10">
										  <textarea class="ckeditor"  id="editor1" name="editor1" >
										</textarea>
										</div>
									  </div>
									    <div class="form-group">
										<label for="firstName" class="col-sm-2 control-label">Save Here =></label>
										<input type="submit" class="btn btn-info" value="Submit Button">

										</div>
									  </div>
									  
									  
						</form>
			</div>
			</div>
					
			<!----End-content----->
			</div>
        
        
			
					
			<!----End-content----->
		</div>
        
      
		<!---End-wrap---->
		
	</body>
</html>
 


