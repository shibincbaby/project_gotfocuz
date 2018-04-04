


<?php
include 'dbcon.php';

session_start();
if(!isset($_SESSION['username']))
{

	header ("location:index.php#logd");
}


//session_start();
$username= $_SESSION['username'];
//echo $name;
//$idd= $_SESSION['id'];
//echo $idd;
?>


<!DOCTYPE html>
<html lang="en">
<head>
<style>
submit {
  
    background: #383;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
	
  
    <title>gotfocuz-Change password</title>
    <link href="css/sbootstrap.min.css" rel="stylesheet">
    <link href="css/sfont-awesome.min.css" rel="stylesheet">
    <link href="css/sprettyPhoto.css" rel="stylesheet">
    <link href="css/sprice-range.css" rel="stylesheet">
    <link href="css/sanimate.css" rel="stylesheet">
	<link href="css/smain.css" rel="stylesheet">
	<link href="css/sresponsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	
	
	


</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
							
								
							</div>
							
							
						</div>
					</div>
					<div class="col-sm-8">
					
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="shindex.php">Home</a></li>
								<li class="dropdown"><a href="#">Sales<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">New sale</a></li>
										<li><a href="product-details.html">View sales</a></li> 
										
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">account<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Change password</a></li>
										<li><a href="ownerprofileview.php">View Accont</a></li>
                                    </ul>
                                </li> 
							<li class="dropdown"><a href="logout.php">Logout<i class="fa fa-angle-down"></i></a>

                                </li> 
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<div class="col-sm-3">
						<div class="address">
							
						</div>
				
					</div>
							<div class="heading">
				<h3>What would you like to do next?</h3>
				
			
				</div>
<form  action="#" method="post"  enctype="multipart/form-data">
<body><center><br><br><div style="background-color:lightgrey; width:400px;border:450px;padding-right:350px; margin-bottom:8px">
<center><h1><b><center>Change Password</u></h1><font color="white"size="3">
      <table style="width:100px;">
          <tr>
           
          <td><label for="oldpass">Current Password:&nbsp&nbsp&nbsp</label><input type="password" name="oldpass" id="old" value="" required></td>
          </tr>
		   
		  <tr>
         
          <td><label for="newpass">New Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label><input type="password" name="newpass" id="new" value="" required></td>
          </tr>
		  <br>
		  <tr>
          
          <td><label for="cnrfpass">Conform Password:&nbsp </label><input type="password" name="cnrfpass" id="confirm"  required></td>
          </tr>
		  
		  <tr>
		  <br>
          <td><center><input type="submit" name="submit" id="submit" value="Change Now" style="color:white; background-color:#3318DB        ;padding:3px"></center></td>
          </tr></div>
		  

	 <?php
		  if(isset($_POST['submit']))
		  {
			  //$a=$_SESSION['user_name'];
			 // echo $a;
			  $b=$_POST['oldpass'];
			  $c=$_POST['newpass'];
			    $d=$_POST['cnrfpass'];
			  //echo $idd;
			  //echo "haiiii";
			  $sql1=mysqli_query($con,"SELECT * FROM `login` WHERE `login_id`='$idd'");
			  //echo "haiii";
			 while( $row=mysqli_fetch_array($sql1))
			 {
				 $aaa=$row['email'];
				 //echo $aaa;
				 $bbb=$row['password'];
				 //echo $bbb;
				 
			 
		  
			  if($bbb==$b)
			  {
				  if($c==$d)
				  {
					  
				  
				  		$edit1=mysqli_query($con,"UPDATE `login` SET `password`='$c' WHERE `login_id`='$idd'");
					echo "<script>alert('Updated successfully')</script>";
				 }
			  else
			  {
				  echo "<script>alert('password doesnt match')</script>";
			  }
		   }
		  else
		  {
			  echo "<script>alert('old password incorrect')</script>";
		  }
		  }
		  }
		  ?>
		  

	
	


    <script src="js/sjquery.js"></script>
	<script src="js/sbootstrap.min.js"></script>
	<script src="js/sjquery.scrollUp.min.js"></script>
    <script src="js/sjquery.prettyPhoto.js"></script>
    <script src="js/smain.js"></script>
</body>
</html>