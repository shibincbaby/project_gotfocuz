<?php
include 'dbcon.php';
if(empty($_SESSION)) // if the session not yet started
session_start();
$username=$_SESSION["username"];
if(!isset($_SESSION['username'])) { //if not yet logged in
	header("Location: index.php");// send to login page
	exit;
}


/*$sql="SELECT l_id,username,r_id,name,address,email,phoneno,location FROM login
NATURAL JOIN register WHERE login.l_id=register.r_id";*/
$sql1="SELECT * FROM `tbl_user` where email='$username'";
$result=mysqli_query($connection,$sql1);
$row=mysqli_fetch_array($result);

$lid=$row['l_id'];
$did=$row["d_id"];
$fname=$row['fname'];
$lname=$row['lname'];
$email=$row['email'];
$phone=$row['phone'];
$address=$row['address'];
$city_id=$row['city_id'];


$sql2="SELECT * FROM `tbl_district` where  d_id='$did'";
$result1=mysqli_query($connection,$sql2);
$row1=mysqli_fetch_array($result1);

$city_fetch="SELECT `city_name`, `d_id`, `status` FROM `tbl_cities` WHERE city_id='$city_id'";
$city_result1=mysqli_query($connection,$city_fetch);
$city_row=mysqli_fetch_array($city_result1);
$city_name=$city_row['city_name'];
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$city_id=$_POST['city_id'];
$did=$_POST["d_id"];
}
?>
<!DOCTYPE html>

<head>

	<title>gotFocuz-user profile</title>

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">


	
	<style>
		
		table {
			width: 100%;


		}

		th, td {
			padding: 8px;
			text-align: left;

		}
input[type=text] {
    width: 300px;
    padding: 12px 20px;
    margin: 0px 0;
    box-sizing: border-box;

}
.nav{
	align:right;
}
.nav ul {
	float:left;
  list-style: none;
  background-color: #444;
  text-align: center;
  padding: 0;
  margin: 0;
}
.nav li {
  font-family:Alex Brush;
  font-size: 1.2em;
  line-height: 40px;
  height: 40px;
  border-bottom: 1px solid #888;
  width: 120px;
    border-bottom: none;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
	 display: inline-block;
    margin-right: -4px;
}
 
.nav a {
  text-decoration: none;
  color: #fff;
  display: block;
  transition: .3s background-color;
}
 
.nav a:hover {
  background-color: #005f5f;
}
 
.nav a.active {
  background-color: #fff;
  color: #444;
  cursor: default;
}


	</style>
	
</head>
<body>

	<div>
		<div>

			<!-- Mobile Toggle Menu Button -->
			
			<div id="logo">
			</div>
			</div>
			<div class="nav">
		      <ul id="menu" >
					<li><a href="web/user_home.php">Back To Home</a></li>
					<li><a href="logout.php">logout</a></li>
				</ul>
			</div>

		</div>
	

	<div>

		<div id="main" >			
			<h3 style="color:red; font-size:50; margin-left:20%" >Your Profile Information </h3>		
			<div align="right" style=" margin-right:15%"><button class="btn btn-primary" id="enable" >Edit</button></a>
			<button type="submit" class="btn btn-success" id="save" >Save</button>
			<button class="btn btn-danger" name='cancel' id="cancel" >Cancel</button></div>

					<table width="398" border="0" align="center" cellpadding="0">
					
					<br>


  </tr>
  <tr>
    <td width="129" rowspan="8"></td>
    <td width="82" valign="top"><div align="left">First Name:</div></td>
    <td width="165" valign="top"><input type="text" class="form-control"  id="fname" userid="<?php echo $lid ?>" value="<?php echo $fname ?>" disabled >
	<td width="82" valign="top"><div align="left">Last Name:</div></td>
	<td width="165" valign="top"><input type="text" class="form-control" id="lname" value="<?php echo $lname ?>" disabled>
  </tr>
  <tr>
    <td valign="top"><div align="left">Email:</div></td>
    <td valign="top"><input type="text" class="form-control" value="<?php echo $email ?>" disabled></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Gender:</div></td>
    <td valign="top"><input type="radio" name="gender" class="gender_sel" <?php if($row['gender'] == "male") { echo "checked"; }?> value="male" />Male
<input type="radio" name="gender" class="gender_sel" <?php if($row['gender'] == "female") { echo "checked"; }?> value="female"  />Female</td>
  </tr>
    <tr>
    <td valign="top"><div align="left">Contact No.: </div></td>
    <td valign="top"><input type="text" class="form-control" id="phone" value="<?php echo $phone ?>" disabled></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Address:</div></td>
    <td valign="top"><input type="text" class="form-control" id="address" value="<?php echo $address ?>" disabled ></td>
  </tr>

  <div id='dt'><tr>
<td width="82" valign="top"><div align="left">District:</div></td>
<td width="82" valign="top"><select  class="form-control" id="district" name="district" style="width:300px;" required disabled/>
				  <?php
$sql10="SELECT * FROM `tbl_district` where d_id='$did';";
$rset1=mysqli_query($connection,$sql10);
$records1=mysqli_fetch_array($sql10);
foreach($rset1 as $records1){
	echo "<option  value='{$records1["d_id"]}'>{$records1["d_name"]} </option>";
}
?>

</td></tr></div>
   <tr>
    <td valign="top"><div align="left">City:</div></td>
    <td width="82" valign="top"><select  class="form-control" id="city" name="city" style="width:300px;" required disabled/>
				  <?php
$sql10="SELECT * FROM `tbl_cities` where city_id='$city_id'";
$rset1=mysqli_query($connection,$sql10);
$records1=mysqli_fetch_array($sql10);
foreach($rset1 as $records1){
	echo "<option  value='{$records1["city_id"]}'>{$records1["city_name"]} </option>";
}
?>

</td>
  </tr>

					
</table>
					

</div>
			</div>
		
		</body>
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="js/verify.js"></script>
		<script src="city_sel.js"></script>
		
		<html>
