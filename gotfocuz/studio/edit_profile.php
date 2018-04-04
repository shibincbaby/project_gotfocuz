
<?php
include 'dbcon.php';

$username=$_SESSION["username"];
if(!isset($_SESSION['username'])) { //if not yet logged in
	header("Location: studio_login.php");// send to login page
	exit;
}
else{
	


/*$sql="SELECT l_id,username,r_id,name,address,email,phoneno,location FROM login
NATURAL JOIN register WHERE login.l_id=register.r_id";*/
$sql1="SELECT * FROM `tbl_studio` where `email`='$username'";
$result=mysqli_query($connection,$sql1);
$row=mysqli_fetch_array($result);

echo $lid=$row['l_id'];
echo $did=$row["d_id"];
$sql2="SELECT * FROM `tbl_district`";
$result1=mysqli_query($connection,$sql2);

if(isset($_POST['submit'])){

$s_name=$_POST['s_name'];
//$email=$_POST['email'];
$phone=$_POST['phone'];
$district=$_POST['district'];
$r="upload/".time()."".htmlspecialchars($_FILES['photo']['name']);
               move_uploaded_file($_FILES['photo']['tmp_name'], $r);

//$s_name;
//$phone;

echo $sql="UPDATE `tbl_studio` SET `s_name`='$s_name',`city_id`='$district',`mobile`='$phone',`pro_pic_url`='$r' WHERE `l_id`='$lid'";
$result=mysqli_query($connection,$sql);
if($result){
echo "<script>window.alert('Changes Saved');</script>";
header("location:edit_profile.php");
}

}
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>gotFocuz</title>

	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script>
		  function mob()
{
        var x = document.getElementById('phone').value;
	 // var x=document.phone.value;
        if(isNaN(x)|| x.indexOf(" ")!=-1){
              alert("Enter numeric value");return false; }
        if (x.length > 10 || x.length < 10 ){
                alert("enter 10  digits"); return false;
           }
       // if (x.charAt(0)!="9" || x.charAt(0)!="2"){
               // alert("it should start with 9 or 2 ");
                //return false
           //}
}

	</script>
	<style>
	body{
		background-image:url(../images/slide_2.jpg);
	}
		button {
			width: 40%;
			height: 40px;
			background: #ff656c;
			box-sizing: border-box;
			border-radius: 5px;
			border: 1px solid #e15960;
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
		table {
			width: 100%;


		}

		th, td {
			padding: 8px;
			text-align: left;

		}
	</style>
</head>
<body>

	<div id="fh5co-about" data-section="profile">

		<div id="main">
			<div id="user_profile">
				<form name="edit_info" method="post" action="" enctype="multipart/form-data">
				<table id="tab" cols="2" >
					<th style="color:red; font-size:50;">Update Profile</th>
					<br>
												<?php
	  include 'dbcon.php';
	  $result11=mysqli_query($connection,"SELECT  `pro_pic_url` FROM `tbl_studio` WHERE `email`='$username'");
	  while($row3=mysqli_fetch_array($result11))
	  {
		  ?>
		  <div id="pro_pic" width="100px" height="100px">
		  <img src="<?php echo $row['pro_pic_url'];?>" class="img-responsive" width="100px" height="100px" >
		  				<?php
						
	  }
	 ?>
		</div>
					<div>

				    Select image to upload:
						<p>
   <input type="file" name="photo" id="photo" placeholder="" ></td>
  </p>
    

					<tr><td>Name</td><td><input type="text" name="s_name" value="<?php echo $row['s_name'];?>"></td></tr>
					<tr><td>E-mail Id</td><td><input type="text" name="email" value="<?php echo $row['email'];?>" readonly></td></tr>

					<!--<tr><td>Place</td><td><input type="text" name="phone"  value="<?php if($row['mobile']==0){echo "not set";} else { echo $row['mobile'];}?>"></td></tr> -->
					
					<tr><td>Mobile Number</td><td><input type="text" name="phone" id="phone" title="Enter Valid Mobile Number" value="<?php if($row['mobile']==0){echo "not set";} else { echo $row['mobile'];}?>" onchange="mob()"></td></tr>
					<tr><td>
					<label>District</label>  <select class="form-control" name="district" required/>

  <?php
$sql10="SELECT * FROM `tbl_district` Order By d_id;";
$rset1=mysqli_query($connection,$sql10);
$records1=mysqli_fetch_array($sql10);
echo "<option value=''>Select a District</option>";
foreach($rset1 as $records1){
	echo "<option value='{$records1["d_id"]}'>{$records1["d_name"]} </option>";
}
?>

</td></tr>
					
   
					<tr><td><input type="submit" name="submit" value="Save Changes"></td><td><input type="reset" name="cancel" value="Cancel"></td></tr>
				</table>
			</form>
				</div>
			</div>
		</div>
		<html>
