<?php session_start();
include 'config.php';
include 'opendb.php';
?>

<?php

	 if(isset($_POST['submitdoclogin'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$query = "SELECT * FROM doctor  WHERE user_name	 ='$username' AND password = '$password'";
			
			$result = $conn->query($query);
			
			if ($result->num_rows > 0) {						
				while($row = $result->fetch_assoc()) {
					
				
					$_SESSION["dName"] = $row["user_name"];
					$_SESSION["dId"] = $row["dr_id"];
					$_SESSION["type"] = "doctor";
					//$_SESSION['isEdit'] = false;
					echo '<script>window.location="profiledoc.php"</script>';
				}
			}
			else
			{
				echo '<script>alert("Not Registered");</script>';
				echo '<script>window.location="signup.php"</script>';
			}
					
	 }
			
		
	?>
	