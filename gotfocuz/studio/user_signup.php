<?php
	require('dbcon.php');
  if(isset($_POST['submit'])){
    // If the values are posted, insert them into the database.
    if (isset($_POST['email']) && isset($_POST['password'])){

	      $email = $_POST['email'];
        //$phone = $_POST['phone'];
        $password = $_POST['password'];

       // $cnfpassword=$_POST['cnfpassword'];
        $name=$_POST['name'];


		$sql1="INSERT INTO `tbl_login`(`username`, `email`, `password`, `status`, `role`) VALUES ('$name','$email','$password',1,2)";
			$result1=mysqli_query($connection,$sql1);
		  $sql="SELECT max(l_id) as id from tbl_login";


		$res=mysqli_query($connection,$sql);
		$ar=mysqli_fetch_array($res);
		$mid=$ar['id'];
		echo $mid;
$sq="INSERT INTO `tbl_studio`(`s_name`, `email`, `p_o`, `place`, `d_id`, `phone`, `mobile`, `pro_pic_url`, `l_id`) VALUES ('$name','$email',0,0,0,0,0,0,'$mid')";
$res1=mysqli_query($connection,$sq);


			 if($result1&&$res1)
			 {
				 header('location:studio_home.php');
			 }
		 }
}
    ?>

<!DOCTYPE HTML>
<html>
<head>
<title>GOtfocuz-Studio-Signup</title>
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
<!--//charts-->
</head>
<body>
<!--inner block start here-->
<div class="signup-page-main">
     <div class="signup-main">

			<div class="signup-block">
				<form method="post" action="#">
					<input type="text" name="name" placeholder="Name" required="">
					<input type="text" name="email" placeholder="Email" required="">
					<input type="password" name="password" class="lock" placeholder="Password">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>I agree to the terms</label>
								</li>
							</ul>
						</div>

						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="submit" value="Sign up">
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="login.html"> Login here.</a></h4>
				  <h5><a href="index.html">Go Back to Home</a></h5>
				</div>
			</div>
    </div>
</div>

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>
