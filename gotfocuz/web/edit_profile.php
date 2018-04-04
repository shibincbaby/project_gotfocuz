<?php
include 'dbcon.php';	
session_start();
$email=$_SESSION["username"];
$ulid=$_SESSION["lid"];
$sql24="SELECT * FROM `tbl_user` where email='$email'";
$result24=mysqli_query($connection,$sql24);	
$fetch24=mysqli_fetch_array($result24);
$name=$fetch24['name'];
$email=$fetch24['email'];
$phone=$fetch24['phone'];
?>
<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <title>Edit Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	      
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
<video autoplay muted loop id="myVideo">
  <source src="..\video\Kerala Christian wedding highlights ancily anil -2016 chalakudy - YouTube.mkv" type="video/mp4">
</video>
<div class="content">

  <div class="sidebar-menu">
		  	
		   <div class="nav">
		      <ul id="menu" >
		        <li  ><a href="user_home.php" >Dashboard</a></li>
				<li  ><a href="user_home.php" >View Profile</a></li>
				<li  ><a href="../web/studio_view.php" >View all Studios</a></li>
				<li  ><a href="../ajax/index.php" >Search Near-By</a></li>
				<li  ><a href="#" >View Highlights</a></li>

		         </li>
		      </ul>
			  
		    </div>
	 </div>
  <form action="#" method="post">
<div id="main">
<h3 style="color:Blue;">Edit Profile</h3>
<label style="color:RED; font-size: 15px;" >Name</label> <input class="form-control" style="opacity: 100px; width:250px;" name="name" value="<?php echo $name;?>"> 
							<br>

 
<div >


<label style="color:RED; font-size: 15px;" >Email</label><input type="email" class="form-control" style="opacity: 100px; width:250px;" name="email" value="<?php echo $email;?>"> 
 </div>
<div >


<label style="color:RED; font-size: 15px;" >Address</label><textarea class="form-control" style="opacity: 100px; width:250px;" name="address" value="<?php echo $address;?>"></textarea>
 </div>
 <br><br>
 <div >
<label style="color:RED; font-size: 15px;" >Gender</label> <input type="radio" name="gender"><label style="color:black; font-size: 15px;" >Male</label></input>
<input type="radio"  name="gender"><label style="color:black; font-size: 15px;" >Female</label></input>  
 </div>
 <br><br>
 <div>
 <label style="color:RED; font-size: 15px;" >Phone</label><input type="text" name="phone" style="color:black; font-size: 15px;"  value="<?php echo $fetch24['phone'];?>"/>
 </div>
 <br><br>

							
 <button type="submit" name="submit" class="btn btn-success" style="opacity: 100px; width:250px;">Update</button>
 </form>


</div>
   </div>  
							
	<div class="clearfix"> </div>
</body>
<script src="location.js" ></script>
</html>
