<?php session_start();
include 'config.php';
include 'opendb.php';


	 if(isset($_POST['submitapt'])) {
		 
		 
			$docid = $_POST['drid'];
			$patid = $_SESSION["pId"];
			$pname=$_SESSION["PAT"];
			$pcno=$_SESSION["cno"];
			$msg=$_POST['msg'];
			$ondate = $_POST['ondate'];
			$status = $_POST['status'];
			$date="Give Date";
$query = "INSERT INTO appointment set doc_id='".$docid."',
									pat_id='".$patid."',
									p_name='".$pname."',
									p_cno='".$pcno."',
									msg='".$msg."',
									ondate='".$date."'";
			
			$data = mysqli_query ($conn, $query)or die(mysqli_error($conn));
			
		
	 }
			
		
	?>
	<script type="text/javascript">
		console.log("hello");
		alert('Successfully registered Appointment');
		window.location.href = "profile.php";
	</script>