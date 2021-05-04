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
	<form class="form-horizontal" enctype="multipart/form-data"  name="registration" action="register.php" method="post">
									  <div class="form-group">
										<label for="firstName" class="col-sm-2 control-label">First Name</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="firstName" placeholder="First Name" required>
										</div>
									  </div>
									  <div class="form-group">
										<label for="lastName" class="col-sm-2 control-label">Last Name</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="lastName" placeholder="Last Name" required>
										</div>
									  </div>
									  <div class="form-group">
										<label for="userName" class="col-sm-2 control-label">User Name</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="userName" placeholder="User Name" required>
										</div>
									  </div>
									  <div class="form-group">
										<label for="password" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
										  <input type="password" class="form-control" name="password" placeholder="Password" required>
										</div>
									  </div>
									  <div class="form-group">
										<label for="contact" class="col-sm-2 control-label">Contact</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="contact" placeholder="Contact Number" required>
										</div>
									  </div>
									  <div class="form-group">
										<label for="email" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
										  <input type="email" class="form-control" name="email" placeholder="Email" required>
										</div>
									  </div>
									  <div class="form-group">
										<label for="address" class="col-sm-2 control-label">Address</label>
										<div class="col-sm-10">
										  <textarea class="form-control" name="address" placeholder="Address" required>
										  </textarea>
										</div>
									  </div>
			
									  <div class="form-group">
								<label for="city" class="col-sm-2 control-label">Locality</label>
										<div class="col-sm-10">
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
										</div>
									  </div>
									   <div class="form-group">
										<label for="specialization" class="col-sm-2 control-label">Academic </label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="academic" placeholder="Academic Profile" required>
										</div>
									  </div>
									    <div class="form-group">
										<label for="specialization" class="col-sm-2 control-label">Photo</label>
										<div class="col-sm-10">
										  <input type="file" class="form-control" name="pic" placeholder="Profile Picture" required>
										</div>
									  </div>
									  <div class="form-group">
										<label for="specialization" class="col-sm-2 control-label">Specialization</label>
										<div class="col-sm-10">
								<select class="form-control inputlg" id="sel1" name="spe" required>
									<option value="">Select Specialization </option>
									<option>General Physician</option>
									<option>Gynecologist</option>
									<option>Dermatologist</option>
									<option>Ophthalmology</option>
								</select>
										</div>
									  </div>
									  <div class="form-group">
										<label for="experience" class="col-sm-2 control-label">Experience</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="experience" placeholder="Experience" required>
										</div>
									  </div>
									   <div class="form-group">
										<label for="specialization" class="col-sm-2 control-label">Timings</label>
										<div class="col-sm-10">
										  <input type="time" class="form-control" name="timefrom" placeholder="Specialization" required> <b>to </b>
										  <input type="time" class="form-control" name="timeto" placeholder="Specialization" required>
										</div>
									  </div>
									  <div class="form-group">
										<label for="specialization" class="col-sm-2 control-label">Fee</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="fee" placeholder="Fee Detail" required>
										</div>
									  </div>
									  <div class="form-group">
										<label for="specialization" class="col-sm-2 control-label">Description</label>
										<div class="col-sm-10">
										  <textarea class="form-control" name="description" placeholder="Specialization">
										  </textarea>
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
										  <button type="submit" name="submit" class="btn btn-default btn-primary">Sign up</button>
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
									//Patient registration
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
									<form class="form-horizontal"  name="registration" action="register_pat.php" method="post">
									  <div class="form-group">
										<label for="firstName" class="col-sm-2 control-label">Name</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="Name" placeholder="Name" required>
										</div>
									  </div>
									  
									  <div class="form-group">
										<label for="userName" class="col-sm-2 control-label">User Name</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="userName" placeholder="User Name" required>
										</div>
									  </div>
									  <div class="form-group">
										<label for="password" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
										  <input type="password" class="form-control" name="password" placeholder="Password" required>
										</div>
									  </div>
									  <div class="form-group">
										<label for="contact" class="col-sm-2 control-label">Contact Number</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="contact" placeholder="Contact Number" required>
										</div>
									  </div>
									  
                                      <div class="form-group">
										<label for="address" class="col-sm-2 control-label">Date of Birth</label>
										<div class="col-sm-10">
										  <input type="date" class="form-control" name="dob" placeholder="Date of birth" required>
										</div>
									  </div>
                                      
                                      <div class="form-group">
										<label for="email" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
										  <input type="email" class="form-control" name="email" placeholder="Email" required>
										</div>
									  </div>
									  <div class="form-group">
										<label for="address" class="col-sm-2 control-label">Address</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="address" placeholder="Address" required>
										</div>
									  </div>
			
									  <div class="form-group">
										<label for="city" class="col-sm-2 control-label">City</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" name="city" placeholder="City" required>
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
										  <button type="submit" name="submitpat" class="btn btn-default btn-primary">Sign up</button>
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
				<div class="clear"> </div>
				
					
			<!----End-content----->
		</div>
		<!---End-wrap---->
		
	</body>
</html>

