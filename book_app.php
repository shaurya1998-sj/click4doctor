<?php session_start();
include 'config.php';
include 'opendb.php';

$_SESSION["D"]=$_GET['dr_id'];


 if(isset($_POST['pay'])) {
		 
	$date=date("d-m-y");	
	
			$docid = $_GET['dr_id'];
			$patid = $_SESSION["pId"];
			$pname=$_SESSION["PAT"];
			$pcno=$_SESSION["cno"];
			$msg=$_POST['msg'];
			$ondate = $_POST['ondate'];
			$status = 0;
			
		$query = "INSERT INTO appointment set doc_id='".$docid."',
									pat_id='".$patid."',
									p_name='".$pname."',
									p_cno='".$pcno."',
									msg='".$msg."',
									book_date='".$date."',
									status=".$status;
			
			$data = mysqli_query ($conn, $query)or die(mysqli_error($conn));
				
			$_SESSION["AID"]=mysqli_insert_id($conn);
		
		
	echo '<script>window.location="status.php"</script>';
		
	 }
	 $s="select * from appointment where doc_id='".$_GET['dr_id']."' and pat_id='".$_SESSION['pId']."'";
				
	 $r=$conn->query($s);
	 
	 $count=mysqli_num_rows($r);
	
	 $res=$r->fetch_assoc();
	

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Click4Health</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		
		<link href="css/css?family=Open+Sans" rel="stylesheet" type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
        <link rel="stylesheet" href="css/bootstrap.css">
		
        <link rel="stylesheet" href="css/bootstrap-theme.css">
		<script src="js/jquery-3.1.1.js"></script>
		<script src="js/responsiveslides.min.js"></script>
        <script src="js/bootstrap.js"></script>
	<script src="js/1.11.3/jquery.min.js"></script>

  <script src="index_files/ca-pub-2074772727795809.js" type="text/javascript" async=""></script>
  <script src="index_files/analytics.js" async=""></script>
		 <style>
            /****** Rating Starts *****/
         @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

            fieldset, label { margin: 0; padding: 0; }
          

            .rating { 
                border: none;
                float: left;
            }

            .rating > input { display: none; } 
            .rating > label:before { 
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .rating > label { 
                color: #ddd; 
                float: right; 
            }

            .rating > input:checked ~ label, 
            .rating:not(:checked) > label:hover,  
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  }

            .rating > input:checked + label:hover, 
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label, 
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }     


            /* Downloaded from http://devzone.co.in/ */
        </style>
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
					<div class="top-nav">
						<div class="wrap">
							<?php include("menus.php"); ?>
						</div>
					</div>
			</div>
			<!---End-header---->
			<!---start-images-slider---->
			
			<div class="content">
				<div class="content-top-grids">
					<div class="col-lg-offset-2 col-lg-8">	
                    	<table class="table table-striped">
                        	
							<form method="post">
                            <?php
							
							$query = "SELECT * FROM doctor where dr_id='".$_SESSION["D"]."'";
								$result = $conn->query($query);
								if ($result->num_rows > 0) {
									// output data of each row
									while($row=$result->fetch_assoc()) {
										?>
									<tr>
<td align="left"><img src="photo/<?php echo $row["photo"];?>" height="150" width="150"><?php if($row["status"]==1) { ?>
	<img src="images/Verified.png" height="70" width="70" />
	<?php
	}
	?></td>
<td class="text-left"><h1>Specialization in : <?php echo $row["specialization"]." <br> Experiance : ".$row["experience"];?></h1>
 <?php if(isset($_POST['review']))
				{
					$rate = $conn->real_escape_string($_POST['rating']);
					$ipaddress = $_SESSION["pId"];
					
	$sql = "SELECT * FROM `tbl_rating` WHERE `user_id`='" . $ipaddress . "' and dr_id='".$_SESSION["D"]."'";
					$result = $conn->query($sql);
					$row = $result->fetch_assoc();
    if ($result->num_rows > 0) {
        echo $row['id'];
    } else {

        $sql = "INSERT INTO `tbl_rating` ( `rate`, `user_id` ,`dr_id`,`review`) VALUES
		(" . $rate . ", '" . $ipaddress . "',".$_SESSION["D"].",'".$_POST['rev_msg']."'); ";
        if (mysqli_query($conn, $sql)) {
            echo "0";
        }
    }
	echo '<script>window.location="book_app.php?dr_id='.$_SESSION["D"].'"</script>';
				}
					?>
					
					
					
					
					<button type="button" class="btn btn-info btn-md pull-right" data-toggle="modal" data-target="#myModal">Pay Now </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Payment Detail </h4>
        </div>
        <div class="modal-body">
 <p><label for="usr">Account Holder Name:</label><input type="text" class="form-control" id="usr"></p>
 <p><label for="usr">Choose Payment Option</label>
  <label class="radio-inline">
      <input type="radio" name="optradio">Debit Card
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Credit Card 
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Paytm
    </label>
 </p>
 <p> <label for="usr">Debit / Credit Card Number </label><input type="text" class="form-control" id="usr"></p>
 <p><label for="usr">CCV </label>
<input type="text" class="form-control" id="usr"></p>
<p><label for="sel1">Select list (select one):</label>
      <select class="form-control" id="sel1">
        <option>HDFC</option>
        <option>SBI</option>
        <option>PNB</option>
        <option>BOB</option>
      </select></p>
<p> <label for="usr">Amount to Be Paid:</label><input type="text" class="form-control" id="usr"></p>
<p><button type="submit" class="btn btn-info btn-md" name="pay" >Secure Pay</button></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
					
					
					
                  

</td>
					</tr>
				
					<tr><th>Doctor Name</th><td><?php echo $row["first_name"]; ?></td> </tr>
					<tr><th>Last Name</th><td><?php echo $row["last_name"]; ?></td> </tr>
					<tr><th>Address</th><td><?php echo $row["address"]; ?></td> </tr>
					<tr><th>City</th><td><?php echo $row["city"]; ?></td> </tr>
					<tr><th>Mail-Id</th><td><?php echo $row["email"]; ?></td> </tr>
					<tr><th>Contact No</th><td><?php echo $row["contact"]; ?></td> </tr>
					<tr><td>Timing Availability :</td><td><?php echo $row["timing"] ;?></td></tr>
					<tr><td>Acadmic :</td><td><?php echo $row["academic"] ;?></td></tr>
					<tr><td>Fee :</td><td><?php echo $row["fee"] ;?></td></tr>
					<tr><td colspan="2"><p>About Specialist : <?php echo $row["description_detail"] ;?></p></td></tr>
					<tr>
						<th class="text-center">Massage</th><td><textarea name="msg"></textarea></td> </tr>
					<tr>
						<td colspan="2"> <h4 style="color:green">Review and Star Rating </h4></td>
					</tr>
										<?php
 $rates="SELECT * FROM tbl_rating where dr_id='".$_GET['dr_id']."'";
				$review=$conn->query($rates);
				$count=	$review->num_rows;		
							
while (	$rr = $review->fetch_assoc()){
    $sum += $rr['rate'];
	echo "<tr><td colspan='2'><p style='color:red;font-size:15px ;'> ".$rr['review']."</p></td></tr>";
}
$avg=$sum/$count;
	echo "<tr><td colspan='2' style='color:red'> Star ".round($avg)."</td></tr>";
	
$update_rating="update doctor set rating=".$avg." where dr_id='".$_GET['dr_id']."'";

mysqli_query($conn,$update_rating);


						
						?>
				<tr><td colspan="2"><button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#rev">Rating and Review</button></td></tr>	
					
					
					<?php
					if(isset($_POST['pay']))
					{

						if($res["status"]==0 && $count>0)
						{
							echo '<tr><td colspan="2"><h3>Pending Confirmation</h3></td></tr>';
						}
						 if ($count>0 && $res["status"]==1)
						{
							echo '<tr><td colspan="2"><h3>Confirmed : '.$res["ondate"].' </h3></td></tr>';
						}
						 if($count==0)
						{
						?>
						
						<tr><td colspan="2" class="text-right"><button type="submit" name="submitapt" class="btn btn-default">Take Appointment</button></td> </tr>
								<?php 
						}
									}
								}
								
								}
								
								
									?>
						
                            </tbody>
                        </table>
                  
                   </div>
				</div>
				<div class="clear"> </div>
				


<!-- Modal -->
<div id="rev" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Reviews and Rating </h4>
      </div>
      <div class="modal-body">
	  <p>Review and Rating </p>
				<p>	<fieldset id='demo1' class="rating">
						
                        <input class="stars" type="radio" id="star5" name="rating" value="5" />
                        <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4" name="rating" value="4" />
                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3" name="rating" value="3" />
                        <label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2" name="rating" value="2" />
                        <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1" name="rating" value="1" />
                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
					
                    </fieldset>
					</p>
					<p> <textarea name="rev_msg"></textarea></p>
					
      </div>
      <div class="modal-footer">
     <button type="submit" name="review" value="Review" class="btn btn-default" data-dismiss="rev">Review </button>
      </div>
    </div>

  </div>
</div>		
			<!----End-content----->
		</div>
		<!---End-wrap---->
		
        	</form>
        
		<!---End-footer---->
	</body>
</html>
