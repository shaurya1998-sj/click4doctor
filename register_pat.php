<?php
include 'config.php';
include 'opendb.php';
?>

<?php
	 if(isset($_POST['submitpat'])) {
			$Name = $_POST['Name'];
			$userName = $_POST['userName'];
			$password = $_POST['password'];
			$contact = $_POST['contact'];
			$email = $_POST['email'];
			$dob = $_POST['dob'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			
			$query = "INSERT INTO patient (patient_name, user_name, password, contact, email, address, dob, city,type) VALUES ('$Name','$userName','$password', '$contact','$email','$address','$dob', '$city','patient')";
			
			$data = mysqli_query ($conn, $query)or die(mysqli_error($conn));
			
		
	 }
			
		
	?>
	<script type="text/javascript">
		console.log("hello");
		alert('Successfully registered Patient');
		window.location.href = "index.php";
	</script>