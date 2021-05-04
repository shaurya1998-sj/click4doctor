	<ul>
		
		<?php if($_SESSION["type"]=="patient")
		{
			$url_app="manageApointment.php";
			$url_profile="profile.php";
		}
		if($_SESSION["type"]=="doctor")
		{
			$url_app="manageAppointmentDao.php";
			$url_profile="profiledoc.php";
		}?>
		<li><a href=<?php echo $url_app; ?>>Appointments</a></li>
	
		<li class="pull-right"><a href="logout.php">Logout</a></li>
		<li class="pull-right"><a href="<?php echo $url_profile; ?>">Profile</a></li>
	<div class="clear"> </div>
	</ul>