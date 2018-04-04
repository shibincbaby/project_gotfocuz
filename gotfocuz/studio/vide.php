<?php
include_once'dbcon.php'; 
session_start();

$st=$_SESSION['sid'];
if(isset($_POST['add']))
{

$pv=$_POST["pvdo"];
$pd=$_POST["pgmdet"];

$occ_id=$_POST["occa_name"];


//$r=basename($_FILES['pvdo']['name']);
//move_uploaded_file($_FILES['pvdo']['tmp_name'], "upload/" .$r);
		 

{		 
$qury="INSERT INTO `tbl_video`( `video_name`,`v_caption`,`s_id`,occ_id)  VALUES
 ('$pv','$pd','$st','$occ_id')";
 
 $a=mysqli_query($connection,$qury);
	
}
if($a){
	//echo "<script>if(confirm('Video Uploaded!Do You want to upload more..?')){document.location.href='vide.php'}else{document.location.href='studio_home.php'};</script>";
}
	
}
?>

	
<!DOCTYPE HTML>
<html>
<head>
<title>Upload Higlight video</title>
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
	
		<style>
body{
background-image:url(../images/slide_2.jpg);

}

input.login{
		width: 50%;
		height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}
input#gender {
    margin-left: 20px;

}
 input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;

}

 input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

button {
    width: 20%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
	margin-left:150px;
}

button:hover {
    background: #ff7b81;
}

h3{
	margin-top:70px;
	margin-left:200px;
	color:blue;
}
</style>
	</head>
	<body><h1>gotFocuz</h1>
	<h3>Upload HIghlight Videos</h3><div>
<form name="adpgm" action="#" method="post" id="form" style="background-color: #fff;margin:15px 250px 10px 250px;background-size: cover; padding:10px;"><br>
<label>Video Caption </label><input type="text" name="pgmdet" placeholder="Video caption" required=" " style="width: 310px; height:30px; border: 0.5px solid blue;"><br><br>

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
	<label>Choose Higlight video: </label><input type="file" name="pvdo" required=" " title="Upload a valid video/*" id="fileToUpload" ><br><br>
	<input type='submit' name="add" value='Upload Video'></form></div>
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
		
		</body></html>