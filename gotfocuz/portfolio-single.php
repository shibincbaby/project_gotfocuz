<?php
include 'dbcon.php';
session_start();
$sid=$_GET['id'];
$_SESSION["studioid"]=$sid;
 $sq="SELECT * FROM `tbl_studio` WHERE `s_id`='$sid'";
	   $res1=mysqli_query($connection,$sq);
	 $ro1=mysqli_fetch_array($res1);


	 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>gotFocuz &mdash;</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />



  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<style>
div.loging{
	margin-left: 40%;
}
button {
    width: 20%;
	margin-left: 65px;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: black;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}
input[type=submit]{
	 width: 20%;
	margin-left: 65px;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: black;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}
 input {
    width: 30%;
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



button:hover {
    background: #ff7b81;
}
.dropbtn {
    background-color: #008080;
    color: white;
    padding: 16px;
    font-size: 16px;
    
}

.dropdown {

    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #808000;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #808000;
}
a#studsign{
	margin-left:100px;
	font-size:20px;
	 color: red; /* blue colors for links too */
  text-decoration: inherit; /* no underline */
}

</style>
	</head>
	<body>

	<div id="fh5co-header">
		<div class="container">
			<!-- Mobile Toggle Menu Button -->
			<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
			<div id="fh5co-logo">
				<a href="index.php">gotFocuz<span>.</span></a>
			</div>
				<nav id="fh5co-main-nav">
				<ul>
					<li><a onclick="location.href='index.php'">Home</a></li>
					<li><a href="img_gallery.php" class="transition" >Image&Video Gallery</a></li>
					<li><a onclick="location.href='index.php#logd'" >Login</a></li>
					<li><a href="#" class="transition" data-nav-section="contact">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div id="fh5co-main">
		<div class="fh5co-overlay-mobile"></div>
		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">

				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row text-center">
							<h1 class="animate-box"><?php echo $ro1['s_name'];?></h1><!--<h1 class="animate-box">Rob &amp; Jean Wedding</h1>-->
							<div class="fh5co-go animate-box">
								<a href="#"class="js-fh5co-next">
									View Details
									<span><i class="icon-arrow-down2"></i></span>
								</a>

							</div>
						
						</div>
					</div>
				</div>
				<?php
				include 'dbcon.php';
	  $result=mysqli_query($connection,"select * from `tbl_studio`");
	 $row=mysqli_fetch_array($result);
	 $pro_pic_url=$row['pro_pic_url'];
	 ?>
			  	<ul class="slides">
			   	<li style="background-image: url(studio/<?php echo $row['pro_pic_url'];?>);" data-stellar-background-ratio="0.5"></li>
			  	</ul>

			</div>
		</div>

		<div id="fh5co-content">
			<div class="container">
				<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading">
						<h1 class="fh5co-section-title animate-box">BIO</h1>
						<p class="fh5co-lead animate-box"><?php echo $ro1["about"]; ?></p>
					</div>
				</div>
			</div>
		</div>
		
	
			<div id="fh5co-home" class="js-fullheight" data-section="about">
			
<div class="container">
<div class="col-md-6">
  <h2>About Studio</h2>
  <p>These are the details of the studio that you are selected</p>            
  <table class="table table-hover">
 <?php
 
	  $result1=mysqli_query($connection,"SELECT a.email, a.phone, b.steady_cam, b.heli_cam, b.video_cam, b.action_cam
      FROM tbl_studio a,tbl_work_details b
      WHERE a.s_id = b.s_id");
	  while($row=mysqli_fetch_array($result1))
	  {
 
 ?>
    <tbody>
	<tr>
        <td><b>Email id</b></td>
        <td><?php echo $row["email"]?></td>
        
      </tr>
	  <tr>
        <td><b>Phone</b></td>
        <td><?php echo $row["phone"]?></td>
        
      </tr>
	  <tr>
        <td><b>Steady Cam</b></td>
        <td><?php echo $row["steady_cam"]?></td>
        
      </tr>
     
      <tr>
        <td><b>Action Cam</b></td>
        <td><?php echo $row["action_cam"]?></td>
        
      </tr>
      <tr>
        <td><b>Video Camera</b></td>
        <td><?php echo $row["video_cam"]?></td>
        
      </tr>
	  <tr>
        <td><b>Heli Cam</b></td>
        <td><?php echo $row["heli_cam"]?></td>
        
      </tr>
    </tbody>
	<?php
	  }
	  ?>
	  
  </table>
</div>

</div>

</div>
</div>
		
</div>		
</section>
		<div id="fh5co-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 animate-box">
						<div class="fh5co-footer-widget">
							<p></p>
							<p></p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 animate-box">
						<div class="fh5co-footer-widget">
							<ul class="fh5co-social pull-right">
								<li>
									<a href="#"><i class="icon-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-vine"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-behance"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-google"></i></a>
								</li>
							</ul>
						<div class="fh5co-footer-widget">
					</div>
				</div>
			</div>
		</div>

	</div> <!-- END fh5co-page -->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>
