<?php
include 'config.php';
include 'opendb.php';
?>

<?php
	 if(isset($_POST['submit'])) {
		 
		 $name=$_FILES['pic']['name'];
		 $tname=$_FILES['pic']['tmp_name'];
		 move_uploaded_file($tname,"photo/".$name);
		 
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$userName = $_POST['userName'];
			$password = $_POST['password'];
			$contact = $_POST['contact'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$specialization = $_POST['spe'];
			$experience = $_POST['experience'];
			$academic=$_POST['academic'];
			$from=$_POST['timefrom'];
			$to=$_POST['timeto'];
			$timing=$from." to ".$to;
			$fee=$_POST['fee'];
			$desc=$_POST['description'];
			
			$query = "INSERT INTO doctor (first_name, last_name, user_name, password, contact, email, address, specialization, experience, city,type,academic,photo,timing,fee,description_detail) VALUES ('$firstName','$lastName','$userName','$password', '$contact','$email','$address', '$specialization', '$experience', '$city','doctor','$academic','$name','$timing','$fee','$desc')";
			
			$data = mysqli_query ($conn, $query)or die(mysql_error());
	echo '<script>window.location="login.php"</script>';		
		
	 }
			
		
	?>
	