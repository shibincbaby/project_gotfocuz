<?php
include 'dbcon.php';
session_start();
if(!isset($_SESSION['username'])){
	header('location:studio_login.php');
}
$username=$_SESSION['username'];

  if(isset($_POST['submit'])){
$occ_id=$_POST['occa_name'];
$image_caption=$_POST['pgmdet'];
$sql1="SELECT * FROM `tbl_studio` where `email`='$username'";
$result=mysqli_query($connection,$sql1);
$row=mysqli_fetch_array($result);
$sid=$row['s_id'];

$r="photo/".time()."".htmlspecialchars($_FILES['photo']['name']);
               move_uploaded_file($_FILES['photo']['tmp_name'], $r);


 $sql="INSERT INTO `tbl_gallery`( `photo_url`, `occ_id`, `s_id`, `image_caption`) VALUES ('$r','$occ_id','$sid','$image_caption')";
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
	 <center><i><h3>Upload Higlight Images</h3></i> </center><br>
	<br><br><br>
  <center><div class="col-md-6 chit-chat-layer1-rit" style="margin-left:25%; background-color:grey;">
      	  <div class="geo-chart" >
<h3>Upload Your Works here</h3><br>
					<p>
  Upload your photo works here. So that the users can see those photos and they get interested by your portfolios and hence they can book your studio on a date
  </p><br><br>
				<form action="" method="post" enctype="multipart/form-data">
				<label>Image Caption </label>&nbsp&nbsp<input type="text" name="pgmdet" placeholder="Image caption" required=" " style="width: 310px; height:30px; border: 0.5px solid blue;"><br><br>

	Occasion&nbsp&nbsp<select style="width:390px; height:40px;" class="login" name="occa_name" required/>

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
     <br>  <br>  <br>
				    Select image to upload:
						<p>
   <input type="file" name="photo" id="photo" placeholder="" ></td>
  </p>
    <input type="submit" name="submit" id="submit" value="Upload">
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
                        <li id="menu-home" ><a href="add_rates.php"><i class="fa fa-tachometer"></i><span>Add Rates</span></a></li>
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