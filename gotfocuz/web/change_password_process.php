 <?php
include_once 'dbcon.php';
if(isset($_POST["submit"]))
{
session_start();
$username=$_SESSION['username'];
 $cur_password= $_POST["cur_pswd"];
 $curr_password=md5($cur_password);
 $password= $_POST["pass"];
 $pass=md5($password);

	$sql1="SELECT password FROM `tbl_login` WHERE email='$username'";
	$res=mysqli_query($connection,$sql1);
	if($curr_password==$pass)
	{
		echo "<script>window.alert('Entered password is same as the old');</script>";
	//header("location:change_password_process.php");
	}
	else{
	$sql2="UPDATE `tbl_login` SET `password`='$pass' WHERE `email`='$username'";
	$res2=mysqli_query($connection,$sql2);
	header("location:change_pswd.php");
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gotfocuz Change password</title>
<style>
body{
  background-color: #202121;
}
submit {

    background: #383;
}

</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">







</head><!--/head-->

<body>
<h1><font color="white"size="3">Change Password</font></h1>
<form  action="#" method="post"  enctype="multipart/form-data">
<body><center><br><br><div style="background-color:lightgrey; width:400px;border:450px;padding-right:350px; margin-bottom:8px">
<center><h1><b><center>Change Password</u></h1><font color="black"size="3">
      <table style="width:100px;">
          <tr>

          <td><label for="oldpass">Current Password:&nbsp&nbsp&nbsp</label><input type="password" name="cur_pswd" id="old" value="" required></td>
          </tr>

		  <tr>

          <td><label for="newpass">New Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label><input type="password" name="pass" id="new" value="" required></td>
          </tr>
		  <br>
		  <tr>

          </tr>

		  <tr>
		  <br>
          <td><center><input type="submit" name="submit" id="submit" value="Change Now" style="color:white; background-color:#3318DB        ;padding:3px"></center></td>
          </tr></div>
		  </body>
      </html>
