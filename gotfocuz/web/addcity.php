<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.php#logd');
}
$username=$_SESSION['username'];
include 'dbcon.php';
if(isset($_POST['add'])){
$d_id=$_POST['ddldistrict'];
$city=$_POST['city'];
$sql1="INSERT INTO `tbl_cities`(`city_name`, `d_id`,`status`) VALUES ('$city','$d_id',1)";
if(!mysqli_query($connection,$sql1)) 
{
    die('Error: ' . mysqli_error($connection));
}
else{
	echo "<script>window.alert('City added Successfully');</script>";
	
}
}
 
?>
<!DOCTYPE HTML>
<html>
<head>
<title>gotfocuz Add City</title>
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
<script>
function myfunction()
{
var debamt=document.adpgm.cname.value;
if(debamt!=null )
{
alert("Enter your Name");
document.adpgm.cname.focus();
return false;
}
}

   

function c(){

 var val_cname= /^[A-Za-z]{4,20}$/;
 $cname= document.getElementById('cname').value;

 if(!val_cname.test($cname)){

    alert("City Name Must be Alphabets Only or lack of sufficient characters");
   document.getElementById('cname').value='';
   $("#cname").focus();
    return false;
  }
 

}
</script>
<!--//skycons-icons-->
</head>
<style>

#menu li a {
    position: relative;
    display: block;
    padding: 13px 20px;
    color: #555;
    white-space: nowrap;
    z-index: 2;
    font-size: 1.12em;
    text-align: center;
    font-family: 'Carrois Gothic', sans-serif;
}
select{
	width:200px;
	height:30px;
	border-radius:5px;
}
input {
	width:200px;
	height:30px;
	border-radius:5px;
}
input [type=submit] {
    width: 20%;
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
	margin-left:150px;
}
</style>
<body>
<div class="page-container">
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.php"> <h1>gotfocuz</h1>
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
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span>
												<div class="user-name">
<p><?php echo $username;?></p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>
											</div>
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="../web/change_password_process.php"><i class="fa fa-cog"></i> Change password</a> </li>
											<li> <a href="studio_profile.php"><i class="fa fa-user"></i> Profile</a> </li>
											<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
				     <div class="clearfix"> </div>
				</div>
				
				<h3>Add City</h3><div >
<form name="adpgm" action="" method="post" id="form" style="background-color: grey;margin:15px 250px 10px 250px;background-size: cover; padding:10px;"><br>
<?php
include 'dbcon.php';
$q="select * from `tbl_district`";
$res=mysqli_query($connection,$q);
?>
  <label>District</label>
  
  <select name="ddldistrict" id="ddldistrict" onchange="getsid(this.value)">
    <?php
	while($r=mysqli_fetch_array($res))
	{
	?>
    <option value="<?php echo $r[0];?>"><?php echo $r[1];?></option>
    <?php
	}
	?>
  </select>
  
     <br>  <br>  <br>
<label>City</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="city"  id="cname" onchange="c();">
	<br>  <br>  <br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='submit' name="add" value='Add City' ></form></div>
				


<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
			      <!--<img id="logo" src="" alt="Logo"/>-->
			  </a> </div>
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
				<li id="menu-home" ><a href="addcity.php"><i class="fa fa-tachometer"></i><span>Add City</span></a></li>
				  <li id="menu-home" ><a href="deletecity.php"><i class="fa fa-tachometer"></i><span>Delete City</span></a></li>

		         </li>
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
<!-- mother grid end here-->
</body>
</html>