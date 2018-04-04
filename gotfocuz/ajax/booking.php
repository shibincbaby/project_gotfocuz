<?php
error_reporting(0);
//if(!isset($_SESSION['username'])){
	//header('location:../index.php#logd');
//}
?>
 <!DOCTYPE html>
<html>
<head> 
			<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">       
        <title>studio search</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="icon" href="bootstrap/images/unnamed.png" type="icon">
        <!--<link rel="stylesheet" type="text/css" href="bootstrap/css/main.css"> -->
<?php
 include 'dbcon.php';
$studioid=$_COOKIE["studio"];

 session_start();
 $lid=$_SESSION["lid"];
 $sql_user="select r_id from tbl_user where l_id=$lid";
 $result_user=mysqli_query($connection,$sql_user);
 $fetch_user= mysqli_fetch_array($result_user);
 $rid=$fetch_user['r_id'];
$sid=$_GET['id'];
echo $sid;
            date_default_timezone_set('Asia/Kolkata');
			$date3 = date('Y-m-d', time());
			$time2=date('h:i:s a', time());
			$v=date("H:i:s", strtotime($time2));
			$date="$date3 $v";
			//echo $date;
// date_default_timezone_set('Asia/Kolkata');
// $date = date('Y/m/d h:i:s', time());
 //echo $date;
	if(isset($_POST['submit']))
    {
		
		$datime=$_POST['datime'];
		$time=$_POST['time'];
		$tim24 = date("H:i", strtotime("$time"));
		//echo $tim24;
		$dd="$datime $tim24:00";
		//echo $dd;
		$landmark=$_POST['landmark'];
		$place=$_POST['place'];
		
		$sql4="SELECT * FROM `tbl_booking` WHERE `s_id`='$sid' AND `date_occ`='$datime'";
		$res=mysqli_query($connection,$sql4);
		$row=mysqli_fetch_array($res);
		$bid=$row['book_id'];
		if($bid=="")
		{
			$sql="INSERT INTO `tbl_booking`(`s_id`, `book_date_time`, `occ_id`, `place_occ`, `date_occ`, `time_occ`, `l_id`,`r_id`) 
		VALUES ('$sid', '$date', '$place', '$landmark', '$datime', '$tim24', '$lid','$rid')";
		//echo $sql;
		$result=mysqli_query($connection,$sql);
			echo "<script>alert('studio booked for this date!!!!')){document.location.href='user_home.php'}else{document.location.href='index.php'};</script>";
		}
		else
		{
			echo "<script>if(confirm('studio not avilable for this date!!!!')){document.location.href='index.php'}else{document.location.href='index.php'};</script>";
	 		}
		
		//INSERT INTO `tbl_booking`(`book_id`, `s_id`,`date_occ``time_occ`
		//`book_date_time`, `occ_id`, `place_occ`, `datetime_occ`, `l_id`) VALUES
		setcookie('studio','',-1);
	}
?>


<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <title>Book a Studio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">       
       
	
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<style>
div#main{
	padding-left:100px;
	padding-top:0px;
	margin-left:30%;
	background-color:white;
	width:40%;
	border-radius:10%;

	}
.nav ul {
	float:left;
  list-style: none;
  background-color: #444;
  text-align: center;
  padding: 0;
  margin: 0;
}
.nav li {
  font-family:Alex Brush;
  font-size: 1.2em;
  line-height: 40px;
  height: 40px;
  border-bottom: 1px solid #888;
  width: 120px;
    border-bottom: none;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
	 display: inline-block;
    margin-right: -4px;
}
 
.nav a {
  text-decoration: none;
  color: #fff;
  display: block;
  transition: .3s background-color;
}
 
.nav a:hover {
  background-color: #005f5f;
}
 
.nav a.active {
  background-color: #fff;
  color: #444;
  cursor: default;
}
 


div#login{
	width:150px;
	float:right;
	background-color:#666;
	
	}
	a {
    color: white;
}
a:link{
	font-size:15px;
	text-decoration:none;
}
a:hover{
	color:#9F9;
}
#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
}
.content {
    position: fixed;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}
</style>
</head>
<body>
<!--<video autoplay muted loop id="myVideo">
  <source src="../video/Kerala Christian wedding highlights ancily anil -2016 chalakudy - YouTube.mkv" type="video/mp4">
</video>-->
<div class="content">
<div >
  
  <br>
 </div>
  <div class="sidebar-menu">
		  	
		   <div class="nav">
		      <ul id="menu" >
		        <li  ><a href="../web/user_home.php" >Dashboard</a></li>
				<li  ><a href="../web/user_home.php" >View Profile</a></li>
				<li  ><a href="../web/studio_view.php" >View all Studios</a></li>
				<li  ><a href="../ajax/index.php" >Search Near-By</a></li>
				<li  ><a href="#" >View Highlights</a></li>

		         </li>
		      </ul>
			  
		    </div>
	 </div>
  <form action="#" method="post">

<div id="main">
<h3 style="color:black";>Book this Studio</h3>
<label style="color:RED; font-size: 15px;" id="avail">Select occassion</label> <select class="form-control" style="opacity: 100px; width:250px;" name="place" id="occasion_select">   <?php
							include "dbcon.php";
							$sq="SELECT * FROM tbl_occassion";
                             $res = mysqli_query($connection,$sq);
						// $res2 = mysqli_query($dbcon, "select * from state where status='1' ");

                            while ($row = mysqli_fetch_array($res)) {

                                echo '<option value=' . $row['occ_id'] . '>' . $row['occa_name'] . '</option>';
                            }
                            ?></select><br>

 
<div >
<?php
date_default_timezone_set('Asia/Kolkata');
$date3 = date('Y-m-d', time());
?>

<label style="color:RED; font-size: 15px;" id="avail">Date of occassion</label><input type="date" class="form-control" min="<?php echo $date3;?>" style="opacity: 100px; width:250px;" name="datime"> 
 </div>

 <br><br>
 <div>
 <label style="color:RED; font-size: 15px;" id="avail">Time of occassion</label><input type="time" name="time"/>
 </div>
 <br><br>
<div >
<label style="color:RED; font-size: 15px;" id="avail">Place of occassion</label> <input type="text" class="form-control" placeholder="Landmark" style="opacity: 100px; width:250px;" name="landmark"> 
 </div>

  <br><br>
 <button type="submit" name="submit" class="btn btn-success" style="opacity: 100px; width:250px;">Confirm booking</button>
 </form>


</div>
   </div>  
	<div class="clearfix"> </div>
</body>
<script src="location.js" ></script>
</html>