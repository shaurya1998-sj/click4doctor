<?php
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
                            <li class="login"><a href="login.php">Login</a></li>
                            <li class="sign"><a href="signup.php">Sign up</a></li>
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
			
			<div class="content">
				<div class="content-top-grids">
					<div class="col-lg-offset-3 col-lg-6">
                    	<div>
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#doc"  data-toggle="tab">Doctor</a></li>
                            <li role="presentation"><a href="#pat"  data-toggle="tab">Patient</a></li>
                          </ul>
                          <div class="tab-content">
                          <div class="tab-pane fade in active" id="doc" style="margin-top: 30px;">
                      			<?PHP
									//include the main validation script
									require_once "formvalidator.php";
									
									$show_form=true;
									
									if(isset($_POST['Submit']))
									{// The form is submitted
									
										//Setup Validations
										$validator = new FormValidator();
										$validator->addValidation("Name","req","Please fill in Name");
										$validator->addValidation("Email","email","The input for Email should be a valid email value");
										$validator->addValidation("Email","req","Please fill in Email");
										//Now, validate the form
										if($validator->ValidateForm())
										{
											//Validation success. 
											//Here we can proceed with processing the form 
											//(like sending email, saving to Database etc)
											// In this example, we just display a message
											
											$show_form=false;
										}
										else
										{
											
									
											$error_hash = $validator->GetErrors();
											foreach($error_hash as $inpname => $inp_err)
											{
												
											}        
										}
									}
									
									if(true == $show_form)
									{
									?>
									<form class="form-horizontal"  name="registration" action="logindoc.php" method="post">
									 
									  <div class="form-group">
										<label for="specialization" class="col-sm-2 control-label">User Name</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="username" placeholder="User Name" required>
										</div>
									  </div>
                                      
                                      		  <div class="form-group">
										<label for="specialization" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
										  <input type="password" class="form-control" name="password" placeholder="Password" required>
										</div>
									  </div>
                                      
									  <div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
										  <button type="submit" name="submitdoclogin" class="btn btn-default btn-primary">Login</button>
										</div>
									  </div>
									</form>
									<?PHP
									}
									?>     
                                    </div>
                                    <div class="tab-pane fade" id="pat" style="margin-top: 30px;">
                                    <?PHP
									//include the main validation script
									require_once "formvalidator.php";
									
									$show_form=true;
									
									if(isset($_POST['Submit']))
									{// The form is submitted
									
										//Setup Validations
										$validator = new FormValidator();
										$validator->addValidation("Name","req","Please fill in Name");
										$validator->addValidation("Email","email","The input for Email should be a valid email value");
										$validator->addValidation("Email","req","Please fill in Email");
										//Now, validate the form
										if($validator->ValidateForm())
										{
											//Validation success. 
											//Here we can proceed with processing the form 
											//(like sending email, saving to Database etc)
											// In this example, we just display a message
											echo "<h2>Validation Success!</h2>";
											$show_form=false;
										}
										else
										{
											echo "<B>Validation Errors:</B>";
									
											$error_hash = $validator->GetErrors();
											foreach($error_hash as $inpname => $inp_err)
											{
												echo "<p>$inpname : $inp_err</p>\n";
											}        
										}
									}
									
									if(true == $show_form)
									{
									?>
									<form class="form-horizontal"  name="registration" action="loginpat.php" method="post">
									 
									  <div class="form-group">
										<label for="specialization" class="col-sm-2 control-label">User Name</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="username" placeholder="User Name" required>
										</div>
									  </div>
                                      
                                      		  <div class="form-group">
										<label for="specialization" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
										  <input type="password" class="form-control" name="password" placeholder="Password" required>
										</div>
									  </div>
                                      
									  <div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
										  <button type="submit" name="submitdoclogin" class="btn btn-default btn-primary">Login</button>
										</div>
									  </div>
									</form>
									<?PHP
									}
									?> 
                                    </div>
                         </div>
                    </div>                                                                                                 
                    
                   </div>
				</div>
				<div class="clear"> </div>
				
					
			<!----End-content----->
		</div>
		<!---End-wrap---->
		
		<!---End-footer---->
	</body>
</html>

