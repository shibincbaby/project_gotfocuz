<?php
include 'dbcon.php';
session_start();
$username=$_SESSION['username'];
if(!isset($_SESSION['username'])){
	header('location:studio_login.php');
}
$sql1="SELECT * FROM `tbl_studio` where `email`='$username'";
$result=mysqli_query($connection,$sql1);
$row=mysqli_fetch_array($result);
$sid=$row['s_id'];
$_SESSION['sid']=$sid;

if(isset($_POST['approve'])){
	
	$id=$_POST['id'];
	$sql33="UPDATE `tbl_booking` SET `status`='1' WHERE `book_id`='$id'";
    $result33=mysqli_query($connection,$sql33);
	
}

if(isset($_POST['upload'])){


$r="photo/".time()."".htmlspecialchars($_FILES['photo']['name']);
               move_uploaded_file($_FILES['photo']['tmp_name'], $r);


$sql="UPDATE `tbl_studio` SET `pro_pic_url`='$r' WHERE email='$username'";
$result=mysqli_query($connection,$sql);
//echo "<script>window.alert('Image added');</script>";
header("location:studio_home.php");
  }

?>
<!DOCTYPE HTML>
<html>
<head>
<title>gotfocuz Studio Home</title>
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
  <script type="text/javascript">
   function fileCheck(obj) {
           var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
           if ($.inArray($(obj).val().split('.').pop().toLowerCase(), fileExtension) == -1){
               alert("Only '.jpeg','.jpg', '.png', '.gif', '.bmp' formats are allowed.");
    }
   }
   </script>
  <style>
  .inner-block{
	  padding:150px 0 0 0;
  }
  #upl_titile{
	  margin-left:300px;
  }
  </style>
</head>
<body>
<div class="page-container">
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="studio_home.php"> <h1>gotfocuz</h1>
									<!--<img id="logo" src="" alt="Logo"/>-->
								  </a>
							</div>
												<?php
	  include 'dbcon.php';
	  $res=mysqli_query($connection,"SELECT * FROM `tbl_login` WHERE email='$username'");
	  $ro=mysqli_fetch_array($res);
           $lid=$ro['l_id'];
          $sq="SELECT * FROM `tbl_studio` WHERE `l_id`='$lid'";
	   $res1=mysqli_query($connection,$sq);
	  $ro1=mysqli_fetch_array($res1);
	  $sid=$ro1['s_id'];
	  ?>
								<!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>

							<!--notification menu end -->
						<div class="profile_details">
								<ul>

									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">
												<span class="prfil-img"><img src="<?php echo $row['pro_pic_url']?>" alt="" width="100px" height="100px"> </span>
												<div class="user-name">
<p><?php echo $ro1['email'];?></p><p><tr><span>Studio</span>
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
											<li> <a href="../web/change_password_process.php"><i class="fa fa-cog"></i> Change password</a> </li>
											<li> <a href="profile.php"><i class="fa fa-user"></i> Profile</a> </li>
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

<!--market updates updates-->
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
                            <?php
$sql1_book="SELECT * FROM `tbl_booking` WHERE `s_id`='$sid' and status=0";
$result_book=mysqli_query($connection,$sql1_book);

?>
<!--mainpage chit-chating--><?php
                           if(mysqli_num_rows($result_book) <1){ 
                               ?>
                           <div class="chit-chat-heading">Booking Requests
                            </div>
<?php
 echo "<h4>"."No Pending requests"."</h4>"; 
}
else{
                           ?> 
                            <div class="table-responsive">
                                <table class="table table-hover" >
                                  <thead>
                                    <tr>
                                   <th>Booking from</th>
                                      <th>place of occasion</th>
                                      <th>date</th>
                                      <th>time</th>
                                      <th>occassion</th>


                                  </tr>
                              </thead>
								  <tbody>
<?php
while($fetch_book=mysqli_fetch_array($result_book)){
	$ocid=$fetch_book["occ_id"];
        $rdd=$fetch_book['r_id'];
$sql22="SELECT * FROM `tbl_occassion` WHERE `occ_id`='$ocid'";
$result22=mysqli_query($connection,$sql22);	
$fetch22=mysqli_fetch_array($result22);
$occ=$fetch22['occa_name'];	
?>
<tr>
    <?php
   $sql_b_u_d="SELECT * FROM `tbl_user` WHERE `r_id`='$rdd'";
$result_b_u_d=mysqli_query($connection,$sql_b_u_d);	
$fetch_b_u_d=mysqli_fetch_array($result_b_u_d);
$fetch_b_u_d['r_id'];
?>
    <td><?php echo $fetch_b_u_d["fname"]." ".$fetch_b_u_d["lname"]?></td>
<td><?php echo $fetch_book["place_occ"];?></td>
<td><?php echo $fetch_book["date_occ"];?></td>
<td><?php echo $fetch_book["time_occ"];?></td>
<td><?php echo $occ;?></td>

<td><button id="approve" bookid="<?php echo $fetch_book['book_id']; ?>" >Approve</button></td>


</tr>
<?php


}
}
?>
							  </tbody>

                      </table>
                  </div>

             </div>
			
		</div>
	  <div class="clearfix"> </div>
	  
	
	   		<div class="row">
			<h3 id="upl_titile">Uploaded Photos</h3>
								<?php
	  include 'dbcon.php';
	  $result_p=mysqli_query($connection,"select `photo_url` from `tbl_gallery` where s_id='$sid'");
	  while($row=mysqli_fetch_array($result_p))
	  {
		  ?>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
		
							<img src="<?php echo $row['photo_url'];?>" class="img-responsive">
							<a href="portfolio-single.php" class="transition">
								
							</a>
											
						</div>
	
					</div>
						<?php
	  }
	 ?>
				</div>
	
			
     <div class="clearfix"> </div>
</div>
<!--main page chit chating end here-->
<!--main page chart start here-->

	 
<!--main page chart layer2-->


  <div class="clearfix"> </div>


<!--climate start here-->

	<div class="clearfix"> </div>

<!--climate end here-->
<!--inner block end here-->
<!--copy rights start here-->
<!--COPY rights end here-->

		
<!--slider menu-->
   <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
			     
			  </a> </div>
		    <div class="menu">
		    <ul id="menu" >
		        <li id="menu-home" ><a href="studio_home.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li id="menu-home" ><a href="vide.php"><i class="fa fa-tachometer"></i><span>Upload Videos</span></a></li>
		        <li id="menu-home" ><a href="photo.php"><i class="fa fa-tachometer"></i><span>Upload Photos</span></a></li>
                        <li id="menu-home" ><a href="add_rates.php"><i class="fa fa-tachometer"></i><span>Work Details</span></a></li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
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
<script src="js/book_info.js"> </script>
<!-- mother grid end here-->
</body>
</html>
