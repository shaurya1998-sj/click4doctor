<?php  session_start();
include '../config.php';
include '../opendb.php';


	 if(isset($_POST['submitdoclogin'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$query = "SELECT * FROM admin  WHERE uname ='$username' AND password = '$password'";
			
			$result = $conn->query($query);
			
			if ($result->num_rows > 0) {						
				while($row = $result->fetch_assoc()) {
					
					
					$_SESSION["userName"] = $row["uname"];
					$_SESSION["userId"] = $row["id"];
					//$_SESSION["type"] = "Doctor";
					//$_SESSION['isEdit'] = false;
					echo '<script>window.location.href="profile.php"</script>';					
				}
			}
					
	 }
			
		
	?>
