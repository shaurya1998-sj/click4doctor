<?php
	include 'config.php';
	include 'opendb.php';
	session_start();
	
	
		$message = $_POST["message"];
		
		if($message != null && $message != "") {
			$query1 = "INSERT INTO chat_master (sender_id, recipient_id, message, time) VALUES (".$_SESSION['userId'].",".$_SESSION['recipient_id'].",'".$message."', now())";
			
			mysqli_query ($conn, $query1);
		}
	
	
?>
