<?php
//if(isset($_COOKIE['studio'])) {
	//header('location:../book.php');
//}

include 'dbcon.php';
//if(!isset($_SESSION['username'])){
	//header('location:../index.php#logd');
//}
session_start();
$user=$_SESSION['username'];
$ulid=$_SESSION['lid'];
$qq="select * from `tbl_user`  where `email`='$user'";
$rr=mysqli_query($connection,$qq);
$arr=mysqli_fetch_array($rr);
if(isset($_POST['upload'])){


$r="photo/".time()."".htmlspecialchars($_FILES['photo']['name']);
               move_uploaded_file($_FILES['photo']['tmp_name'], $r);


$sql="UPDATE `tbl_user` SET `pro_pic_url`='$r' WHERE email='$user'";
$result=mysqli_query($connection,$sql);
//echo "<script>window.alert('Image added');</script>";
header("location:user_home.php");
  }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>gotfocuz User Home</title>
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
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>

<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>
<div class="page-container">
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.html"> <h1>gotfocuz</h1>
									<!--<img id="logo" src="" alt="Logo"/>-->
								  </a>
							</div>
							<!--search-box-->
								<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">
										<input type="submit" value="">
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
					
							<!--notification menu end -->
						<div class="profile_details">
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">
												<span class="prfil-img"><img src="<?php echo $arr['pro_pic_url']?>" alt="" width="100px" height="100px"> </span>
												<div class="user-name">
<p><?php echo $arr['email'];?></p><p><tr><span>Studio</span>
                       <form name="myform" id="myform"  action="#" method="POST"  enctype="multipart/form-data">
                        <td><input type="file" name="photo" id="photo" onchange="fileCheck(this)" required></td>
						<button class="btn btn-imfo btn-read-more" value="upload" name="upload">Upload</button>
						</form
                      </tr></p>
													
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>
											</div>
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="change_password_process.php"><i class="fa fa-cog"></i> Change password</a> </li>
											<li> <a href="../profile.php"><i class="fa fa-user"></i> Profile</a> </li>
											<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
				     <div class="clearfix"> </div>
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop();
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });

		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
					<?php
					 $sql="SELECT COUNT(r_id) as id from `tbl_user`";


		$res=mysqli_query($connection,$sql);
		$ar=mysqli_fetch_array($res);
		$mid=$ar['id'];

					?>

						<h3><?php echo $mid;?></h3>
						<h4>Registered Users</h4>
						<p></p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
			<?php

				$sql_studio="SELECT COUNT(s_id) as id from `tbl_studio`";
				$res_studio=mysqli_query($connection,$sql_studio);
				$ar_studio=mysqli_fetch_array($res_studio);
				$sid=$ar_studio['id'];

					?>

					<h3><?php echo $sid;?></h3>
					<h4>Registered Studios</h4>
					<p></p>
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-8 market-update-left">
					<?php

				$sql_feedback="SELECT COUNT(f_id) as id from `tbl_feedback`";
				$res_feedback=mysqli_query($connection,$sql_feedback);
				$ar_feedback=mysqli_fetch_array($res_feedback);
				$fid=$ar_feedback['id'];

					?>
						<h3><?php echo $fid?></h3>
						<h4>New Messages</h4>
						<p></p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-envelope-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
<!--market updates end here-->
<!--mainpage chit-chating-->

<?php

 $sql1_book="SELECT * FROM `tbl_booking` WHERE `l_id`='$ulid'";
$result_book=mysqli_query($connection,$sql1_book);
//`date_occ``place_occ``time_occ``occ_id`
while($fetch_book=mysqli_fetch_array($result_book)){
	 $ocid=$fetch_book["occ_id"];
	 $status=$fetch_book["status"];
	$sid=$fetch_book["s_id"];
	
	//SELECT * FROM `tbl_studio` WHERE `s_id``s_name`
	

?>
<?php
                           if(mysqli_num_rows($result_book) <1){ 
                                echo "<h4>"."No booking requests"."</h4>"; 
}
else{
                               ?>
 <div class="chit-chat-heading">
                              Booking Details
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>place of occasion(studio name)</th>
                                      <th>date</th>
                                      <th>time</th>
                                      <th>occassion</th>
                                      <th>Status</th>


                                  </tr>
                              </thead>
							  <tbody>
<?php
$sql24="SELECT * FROM `tbl_studio` WHERE `s_id`='$sid'";
$result24=mysqli_query($connection,$sql24);	
$fetch24=mysqli_fetch_array($result24);
$name=$fetch24['s_name'];
	
$sql22="SELECT * FROM `tbl_occassion` WHERE `occ_id`='$ocid'";
$result22=mysqli_query($connection,$sql22);	
$fetch22=mysqli_fetch_array($result22);
$occ=$fetch22['occa_name'];
?>
<tr>
<td><?php echo $fetch_book["place_occ"];?> (<?php echo $name;?>)</td>
<td><?php echo $fetch_book["date_occ"];?></td>
<td><?php echo $fetch_book["time_occ"];?></td>
<td><?php echo $occ;?></td>
<td><?php if($status==1){
	echo "Approved";}
	else{
		echo "Not approved";
		}?></td>
<td><input type="button" bookid="<?php echo $fetch_book['book_id']; ?>" id="disapprove" name="cancel" value="Cancel Booking"></td>
<?php
}
}
?>
							  </tbody>

                      </table>
                  </div>
             </div>
			</div>
		</div>

<!--main page chart layer2-->



<!--climate start here-->

<!--climate end here-->
</div>
<!--inner block end here-->
<!--copy rights start here-->


<!--slider menu-->
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
			      <!--<img id="logo" src="" alt="Logo"/>-->
			  </a> </div>
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="user_home.php" ><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li><br>
			
				<li id="menu-home" ><a href="../profile.php" ><i class="fa fa-tachometer"></i><span>View Profile</span></a></li><br>
				<li id="menu-home" ><a href="studio_view.php" ><i class="fa fa-tachometer"></i><span>View all Studios</span></a></li><br>
				<li id="menu-home" ><a href="../ajax/index.php" ><i class="fa fa-tachometer"></i><span>Search Studio</span></a></li><br>
				<li id="menu-home" ><a href="user_home.php" ><i class="fa fa-tachometer"></i><span>View Highlights</span></a></li>

		         </li>
		      </ul>
			  
		    </div>
			&nbsp&nbsp&nbsp&nbsp <img src="../mypic/d.jpg" width="190" height="250">
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script src="../js/verify.js"> </script>
<script>
var toggle = true;

$(".sidebar-icon").click(function() {
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>

<!-- mother grid end here-->
</body>
</html>
