
<?php
include 'dbcon.php';      //data base coonection starts
if(isset($_POST["submit"]))
{
	if (isset($_POST['email']) && isset($_POST['password'])){
	$username=$_POST["email"];   //fetches username from the form
	$passsword=$_POST["password"];	//fetches password from the form
	$pass=md5($passsword);
	//echo $username;
	$sql="SELECT * FROM `tbl_login` where `email`='$username' and `password`='$pass'"; //value fetched from the table
	$res=mysqli_query($connection,$sql); // query executing function
	while($row=mysqli_fetch_array($res))
	{
		//echo $row['email'];
		if($username==$row['email'] && $pass==$row['password'] && $row['status']==1 && $row['role']==2)
		{
			session_start();
			$_SESSION["username"]=$username;	
			header("location:studio_home.php");					
		}
		
		else{
			echo "<script>window.alert('Invalid Login Credentials');</script>";
		}
	}
}
	 
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>gotFocuz-Studio Login</title>
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
<style>
body{
  background-image:url(../images/slide_2.jpg);
}
</style>
</head>
<body>
<div class="login-page">
    <div class="login-main">
    	 <div>
				<h3>Studio Login</h3>
			</div>
			<div class="login-block">
				<form name="studio_login" method="post" action="#">
					<input type="text" name="email" placeholder="Email" required="">
					<input type="password" name="password" class="lock" placeholder="Password">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>Remember me</label>
								</li>
							</ul>
						</div>
						<div class="forgot">
							<a href="forgot.php">Forgot password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="submit" value="Login">
					<h3>Not a member?<a href="studio_signup.php"> Sign up now</a></h3>


				</form>
				<h5><a href="../index.php">Go Back to Home</a></h5>
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->

<!--COPY rights end here-->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>
