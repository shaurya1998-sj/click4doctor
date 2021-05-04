<?php session_start();
	include 'config.php';
	include 'opendb.php';
	
	
	

	$pat_email = $_POST["pat_email"];
	
	/*$pat_dob = $_POST["pat_dob"];
	$pat_contact = $_POST["pat_contact"];
	$pat_address = $_POST["pat_address"];
	$pat_city = $_POST["pat_city"];
	
		$query1 = "update patient_master set email=".$pat_email.", dob=".$pat_dob.", contact=".$pat_contact.", address=".$pat_address.", city=".$pat_city." where id=".$_SESSION['userId'];*/
		
		$query1 = "UPDATE patient SET email=".$pat_email." WHERE p_id=".$_SESSION['pId'];
		
		$execute = mysqli_query ($conn, $query1);
		if($execute) {
	?>
    		<script type="text/javascript">alert("Hello");</script>
    <?php
	
		}echo '<script>window.location="profile.php"</script>';
		
		?>
		