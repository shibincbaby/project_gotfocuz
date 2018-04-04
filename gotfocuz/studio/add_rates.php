<?php
include 'dbcon.php';
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.php#logd');
}
$username=$_SESSION['username'];

  if(isset($_POST['submit'])){
$steadycam=$_POST['steadycam'];
$helicam=$_POST['helicam'];
$videocam=$_POST['videocam'];
$actioncam=$_POST['actioncam'];
$occ_id=$_POST['occa_name'];
$rate=$_POST['rate'];
$sql1="SELECT * FROM `tbl_studio` where `email`='$username'";
$result=mysqli_query($connection,$sql1);
$row=mysqli_fetch_array($result);
$sid=$row['s_id'];

$sql="INSERT INTO `tbl_work_details`(`occ_id`, `steady_cam`, `heli_cam`, `video_cam`, `action_cam`, `rate`, `s_id`) VALUES ('$occ_id','$steadycam','$helicam','$videocam','$actioncam','$rate','$sid')";
$result=mysqli_query($connection,$sql);
echo "<script>window.alert('Image added');</script>";
  }

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Gotfocuz Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script>
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

	</head>
	<body  style="background-color:grey;"><br><br>
	 <center><i><h3>Work Details</h3></i> </center><br>
	<br><br><br>
        <div class="col-md-6" style="margin-left:25%; background-color:grey;">
        </div>
  <center><div class="col-md-6 chit-chat-layer1-rit" style="margin-left:25%; background-color:grey;">
      	  <div class="geo-chart" >
<h3>Add rates</h3><br>
					
				<form action="" method="post" enctype="multipart/form-data">
				

	<label>Occasion</label>&nbsp&nbsp<select style="width:390px; height:40px;" class="login" name="occa_name" required/>

  <?php
  include_once "dbcon.php";
  $sql10="SELECT * FROM `tbl_occassion`;";
$rset1=mysqli_query($connection,$sql10);
$records1=mysqli_fetch_array($sql10);
echo "<option value=''>Select an Occasion</option>";
foreach($rset1 as $records1){
	echo "<option value='{$records1["occ_id"]}'>{$records1["occa_name"]} </option>";
}
?>

   </select>
   <br><br><h4 style="color:red;">Camera Details</h4><br>
   <label>Steady Cam</label><div><input type="radio" name="steadycam" value="yes" />Yes
&nbsp&nbsp<input type="radio" name="steadycam" value="no"  />No</td>
  </tr></div>
   <br>
   <label>Helicam</label><div style="width: 310px; height:30px; "><input type="radio" name="helicam" value="yes" />Yes
&nbsp&nbsp<input type="radio" name="helicam" value="no"  />No</td></div>
   <br>
   <label>Video Cam</label><div style="width: 310px; height:30px; "><input type="radio" name="videocam" value="yes" />Yes
&nbsp&nbsp<input type="radio" name="videocam" value="no"  />No</td></div>
   <br>
   <label>Action Cam</label><div style="width: 310px; height:30px;"><input type="radio" name="actioncam" value="yes" />Yes
&nbsp&nbsp<input type="radio" name="actioncam" value="no"  />No</td></div>
     <label>Rate/works</label>&nbsp&nbsp<input type="text" name="rate" placeholder="rate of work" required=" " style="width: 310px; height:30px; border: 0.5px solid blue;"><br><br>
				  
 
    <input type="submit" name="submit" id="submit" value="Add">
				</form>


			</div>
      </div></center>
	     <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
			     
			  </a> </div>
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="studio_home.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li id="menu-home" ><a href="vide.php"><i class="fa fa-tachometer"></i><span>Upload Videos</span></a></li>
		        <li id="menu-home" ><a href="photo.php"><i class="fa fa-tachometer"></i><span>Upload Photos</span></a></li>
                        <li id="menu-home" ><a href="add_rates.php"><i class="fa fa-tachometer"></i><span>Work Details</span></a></li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>