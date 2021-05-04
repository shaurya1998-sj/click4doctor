<?php session_start();
include 'config.php';
include 'opendb.php';
?>

<?php

	 if(isset($_POST['submitdoclogin'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$query = "SELECT * FROM patient  WHERE user_name ='$username' AND password = '$password'";
			
			$result = $conn->query($query);
			
			if ($result->num_rows > 0) {						
				while($row = $result->fetch_assoc()) {
					
					$_SESSION["cno"]=$row["contact"];
					$_SESSION["PAT"] = $row["user_name"];
					$_SESSION["pId"] = $row["p_id"];
					$_SESSION["type"] = "patient";
					$_SESSION['isEdit'] = false;
				}
			}
	 }
			
		
	?>
	<script type="text/javascript">
		window.location.href = "profile.php";
	</script>