
<?php
include 'dbcon.php';
if(empty($_SESSION)) // if the session not yet started
session_start();
$username=$_SESSION["username"];
if(!isset($_SESSION['username'])) { //if not yet logged in
	header("Location: studio_home.php");// send to login page
	exit;
}


/*$sql="SELECT l_id,username,r_id,name,address,email,phoneno,location FROM login
NATURAL JOIN register WHERE login.l_id=register.r_id";*/
$sql1="SELECT * FROM `tbl_studio` where `email`='$username'";
$result=mysqli_query($connection,$sql1);
$row=mysqli_fetch_array($result);

$lid=$row['l_id'];
$did=$row["d_id"];
$sql2="SELECT * FROM `tbl_district` where  d_id='$did'";
$result1=mysqli_query($connection,$sql2);


$row1=mysqli_fetch_array($result1);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>gotFocuz</title>

	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
	body{
		background-image:url(../images/slide_2.jpg);
	}
		button {
			width: 40%;
			height: 40px;
			background: #ff656c;
			box-sizing: border-box;
			border-radius: 5px;
			border: 1px solid #e15960;
			font-weight: bold;
			text-transform: uppercase;
			font-size: 14px;
			font-family: Montserrat;
			outline: none;
			cursor: pointer;
		}

		button:hover {
			background: #ff7b81;
		}
		table {
			width: 100%;


		}

		th, td {
			padding: 8px;
			text-align: left;

		}
	</style>
</head>
<body>

	<div id="fh5co-about" data-section="profile">

		<div id="main">
			<div id="user_profile">
				<table id="tab" cols="2" >
					<th style="color:red; font-size:50;">Profile Info</th>
					<br>


					<tr><td>Name</td><td><?php echo $row['s_name'];?></td></tr>
					<tr><td>E-mail Id</td><td><?php echo $row['email'];?></td></tr>
					<tr><td>Mobile Number</td><td><?php echo $row['mobile'];?></td></tr>
					
					<tr><td><button type="button"><a href="edit_profile.php?l_id=<?php echo $lid;?>">Edit Info</a></button></td><td><button type="button"><a href="delete_account.php?l_id=<?php echo $lid;?>">Deactivate Account</a></button></td></tr>
				</div>
			</div>
		</div>
		<html>
