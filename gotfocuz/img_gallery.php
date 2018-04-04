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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>

</style>
</style>

	</head>
	<body>

	<div id="fh5co-header">
		<div class="container">
			<!-- Mobile Toggle Menu Button -->
			<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
			<div id="fh5co-logo">
				<a href="index.php"><h1 style="color:red;">gotFocuz</h1></a>
			</div>
	<nav id="fh5co-main-nav" style="color:orange;">
				<ul >
					<li><a style="color:orange;" onclick="location.href='index.php'">Home</a></li>
					<li><a style="color:orange;" onclick="location.href='img_gallery.php#video_gallery'" >Video Gallery</a></li>
					<li><a style="color:orange;" onclick="location.href='index.php#logd'" >Login</a></li>
					<li><a style="color:orange;" href="#" class="transition" data-nav-section="contact">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div id="fh5co-main">
		<?php
		session_start();
$studioid=$_SESSION["studioid"];
		
		?>
		<div id="fh5co-portfolio" data-section="highlights">
			<div class="container">
				<button id="book" onclick="location.href='index.php#logd'"  style="float:right;" type="button" class="btn btn-success">Book this Studio for a date</button>
<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading">
						<h2 class="fh5co-section-title animate-box">Some sample photos taken by us</h2>
						<p class="fh5co-lead animate-box">Click on the images to zoom in</p>
					</div>
				</div>
				<div class="row">
								<?php
	  include 'dbcon.php';
	  $result=mysqli_query($connection,"select * from `tbl_gallery`");
	  while($row=mysqli_fetch_array($result))
	  {
		  $sid=$row["s_id"];
		  ?>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">

							<img src="studio/<?php echo $row['photo_url'];?>" class="img-responsive">
							<a href="studio/<?php echo $row['photo_url'];?>">
								<div>
									<span class="fh5co-meta"></span>
									<h2 class="fh5co-title"><?php echo $row['image_caption']?></h2>
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
				<section id="video_gallery"><div id="fh5co-portfolio">
			<div class="container">
				
<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading">
						<h2 class="fh5co-section-title animate-box">Some sample videos processed by us</h2>
						<p class="fh5co-lead animate-box">Click on the video to view</p>
					</div>
				</div>
				<div class="row">
								<?php
	  include 'dbcon.php';
	  $result=mysqli_query($connection,"select * from `tbl_gallery`");
	  while($row=mysqli_fetch_array($result))
	  {
		  $sid=$row["s_id"];
		  ?>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">

							<img src="studio/<?php echo $row['photo_url'];?>" class="img-responsive">
							<a href="http://www.youtube.com/embed/2cxqZiWyW3g?autoplay=1">
								<div>
									<span class="fh5co-meta"></span>
									<h2 class="fh5co-title"><?php echo $row['image_caption']?></h2>
								</div>
							</a>

						</div>

					</div>
						<?php
	  }
	 ?>
				</div>

			</div>	
			
</section> 


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
	
</div>	

	</body>
<script src="js/jquery.min.js"></script>
	<script src="js/jquery.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>
	
	
	<!-- Main JS -->
<script src="js/main.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- Modernizr JS -->
	<!--<script src="js/modernizr-2.6.2.min.js"></script>

	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="js/verify.js"></script>
		
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
	
	<script type="text/javascript">
</script>
</html>
