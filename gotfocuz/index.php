<?php
error_reporting(0);
include 'dbcon.php';      //data base connection starts
if(isset($_POST["login"]))
{
	 $url = 'https://www.google.com/recaptcha/api/siteverify';
    $privatekey = "6LdJv0AUAAAAAKd7agzenUFC_SB513X_1QizyFBv";
    $response = file_get_contents($url . "?secret=" . $privatekey . "&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
    $data = json_decode($response);

    if (isset($data->success) AND $data->success == true) {
	//if (isset($_POST['email']) && isset($_POST['password'])){
	$username=$_POST["email"];   //fetches username from the form
	$password=$_POST["password"];
	$pass=md5($password);	//fetches password from the form
	//echo $username;
	if(($username=='')||($pass=='')){
		echo "<script>window.alert('Login Unsuccessful');</script>";
		header("location:index.php#logd");
	}
	else{
		
	$sql="SELECT * FROM `tbl_login` where `email`='$username' and `password`='$pass'"; //value fetched from the table
	$res=mysqli_query($connection,$sql); // query executing function

	while($row=mysqli_fetch_array($res))
	{
		if($username==$row['email'] && $pass==$row['password'] && $row['status']==1)
		{

			session_start();
			$_SESSION["username"]=$username;
			$_SESSION["lid"]=$row['l_id'];

				if($row[role]==0) //Selecting based on roles 0->admin 1->user
				{
					header("location:web/index.php"); //redirecting to there pages
				}
				else if($row[role]==1)
				{
				
					header("location:web/user_home.php");
					
					
				}
					
				
        		else if($row[role]==2)
        		{
        			header("location:studio/studio_home.php");
        		}


		}
	}
	 
		echo "<script>if(confirm('Invalid Login Credentials!')){document.location.href='index.php#logd'}else{document.location.href='index.php'};</script>";
	 
	}
	}
	else {


        echo '<script> alert("Failed to fetch rEcaptcha");</script>';
    }
	
	
}



?>

  
<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>gotFocuz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
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

<script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	<script src="js/jquery.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="js/validation.js"></script>
	<script type="text/javascript">
function goFullscreen(id) {
  var element = document.getElementById(id);       
  if (element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if (element.webkitRequestFullScreen) {
    element.webkitRequestFullScreen();
  }  
}
function exist(str)
	  {
     	 if (str == "") 
	  	 {
       			document.getElementById("avail").innerHTML = "";
        		return;
    	 } 
		 else 
		 { 
         	if (window.XMLHttpRequest) 
		 	{
           		 // code for IE7+, Firefox, Chrome, Opera, Safari
           		 xmlhttp = new XMLHttpRequest();
         	} 
		 	else 
		 	{
           		 // code for IE6, IE5
            		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
         	}
         	xmlhttp.onreadystatechange = function() 
		 	{
            		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
					{	
              			document.getElementById("avail").innerHTML =xmlhttp.responseText;
            		}
         	}
         	xmlhttp.open("GET","emailavail.php?q="+str,true);
			
         	xmlhttp.send();
    	 }
		 
		 
		 var valemail= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	 $l_email= document.getElementById('em').value;

	 if(!valemail.test($l_email)){

      alert("Enter Valid EMAIL address");
	 
	   document.getElementById('em').value='';
	   //document.getElementById('pas').value='eeeeee';
	   $("#email").focus();
      return false;
    }
	  }
function a(){

				var val_pass=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
				 $pass= document.myform.pass.value;
				if (!val_pass.test($pass)){

					  alert("Required atleast one number, one lowercase and one uppercase letter, atleast six characters");
						document.myform.pass.value;
					$("#pass").focus();
					return false;

				}
			}
  
 
</script>
<style>
div.loging{
	margin-left: 40%;
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

button {
    width: 10%;
	margin-left: 65px;
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
}

button:hover {
    background: #ff7b81;
}
.dropbtn {
    background-color: #008080;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
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
input[type=radio]{
	width:20px;
	height:20px;
	margin-left:30px;
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
					
									<div class="dropdown">
    <ul class="nav navbar-nav navbar-right">  
   <li><a href="#" data-nav-section="home">Home</a>
						</li></ul>
	</div>
					
					<div class="dropdown">
    <ul class="nav navbar-nav navbar-right">  
   <li><a href="#" data-nav-section="highlights">Our Studios</a>
						</li></ul>
	</div>
	
	<div class="dropdown">
    <ul class="nav navbar-nav navbar-right">  
   <li><a href="#"data-nav-section="about">About</a>
						 </li></ul>
	</div>
	<div class="dropdown">
    <ul class="nav navbar-nav navbar-right">  
   <li><a href="#" data-nav-section="contact">Contact</a>
						</li></ul>
	</div>
	<div class="dropdown">
    <ul class="nav navbar-nav navbar-right">  
   <li><a href="#portfolio">Login</a>
						 <div class="dropdown-content">
   <a href="#"data-nav-section="login">Login</a>
   <a onclick="location.href='register.php'">Register</a>
   
	</div></li></ul>
	</div>
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
							<h1 class="animate-box">We love to make your story</h1>
							<div class="fh5co-go animate-box">
								<a href="#" class="js-fh5co-next">
									See Our Member studios
									<span><i class="icon-arrow-down2"></i></span>
								</a>

							</div>
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
			  	</ul>

			</div>
		</div>
		<div id="fh5co-portfolio" data-section="highlights">
			<div class="container">
				<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading">
						<h2 class="fh5co-section-title animate-box">We have these studios available</h2>
						<p class="fh5co-lead animate-box">Click on the images to go to gallery</p>
					</div>
				</div>

				<div class="row">
								<?php
	  include 'dbcon.php';
	  $result=mysqli_query($connection,"select * from `tbl_studio`");
	  while($row=mysqli_fetch_array($result))
	  {
		  $sid=$row["s_id"];
		  ?>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">

							<img src="studio/<?php echo $row['pro_pic_url'];?>" class="img-responsive">
							<a href="portfolio-single.php?id=<?php echo $sid;?>"  class="transition">
								<div>
									<span class="fh5co-meta"></span>
									<h2 class="fh5co-title"><?php echo $row['s_name']?></h2>
								</div>
							</a>

						</div>

					</div>
						<?php
	  }
	 ?>
				</div>

			</div>	
			
		</div>

<section id="logd">
		<div id="fh5co-about" data-section="login" >
			<div class="container" >
				<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading animate-box">
						<h2 class="fh5co-section-title">Login if you are already a gotfocuz member(User/Studio)</h2>
						<p class="fh5co-lead"></p>
					</div>
				</div>
				<div class="loging" style="width:900px;">
					<form class="form" name="myForm" method="post" action="">
					<p><input type="email" class="login" name="email" placeholder="Email" id="email-id" required></p>
					<p><input type="password" class="login"id="pswd" name="password" placeholder="Password"  required></p>
					 <div class="g-recaptcha" data-sitekey="6LdJv0AUAAAAALhfE5KQ4XuQYa6I5px6pO7Gh82d"></div>
					<button type="submit" name="login" id="login-button" >Login</button>
				</form>
				<a href="forgot.php">Forgot password?</a>
				</div>
</div>
</div>
</section>

		<div id="fh5co-about" data-section="about">
			<div class="container">
				<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading animate-box">
						<h2 class="fh5co-section-title">About</h2>
						<p class="fh5co-lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="fh5co-text with-plus">
							<h2>Smitha</h2>
							<span class="fh5co-meta">Photographer, Video Editor</span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="fh5co-text">
							<h2>JOHN</h2>
							<span class="fh5co-meta">Photographer, Copy writer</span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>

				</div>
			</div>
		</div>




		<div id="fh5co-contact" data-section="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center section-heading">
						<h2 class="fh5co-section-title animate-box">Contact</h2>
						<span class="fh5co-meta">Email Us..</span>
						<form name="feedback" action="feedback.php" method="post">
						<p><input type="email" class="login" name="email" id="ema" placeholder="Email Address" required></p>
						<p><input type="text" class="login" name="feedback" placeholder="Your Queries" pattern="[A-z a-z]+" title="Numbers are not allowed" required></p>
					<p class="animate-box"><button type="submit" name="submit" id="con-button">Send</button></p>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-testimony" style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="flexslider animate-box">
							<ul class="slides">
								<li>
									<blockquote>
										<p>&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.&rdquo; <cite>&mdash; Frank Chimero</cite></p>
									</blockquote>
								</li>
								<li>
									<blockquote>
										<p>&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite>&mdash; Ferdinand A. Porsche</cite></p>
									</blockquote>
								</li>
								<li>
									<blockquote>
										<p>&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.&rdquo; <cite>&mdash; Steve Jobs</cite></p>
									</blockquote>
								</li>


							</ul>
						</div>

				</div>
			</div>
		</div>

		<div id="fh5co-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 animate-box">
						<div class="fh5co-footer-widget">
							<p>&copy; gotFocuz</p>
							<p>Designed by Shibin</a></p>
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
								<li>
									<a href="#"><i class="icon-vimeo"></i></a>
								</li>
							</ul>
						<div class="fh5co-footer-widget">
					</div>
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
</div>	
	</body>
	<script src="location.js"></script>
	<script type="text/javascript">
    function reDirect () {
        // return true or false, depending on whether you want to allow the `href` property to follow through or not
    }
</script>
</html>
