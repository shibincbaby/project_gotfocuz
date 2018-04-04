<?php
session_start();
$username=$_SESSION['username'];
include 'dbcon.php';
$u_name=$_POST['name'];
$dt=$_POST['district'];
$phone=$_POST['phone'];
$sql1="UPDATE `tbl_user` SET `name`='$u_name',`phone`='$phone',`d_id`='$dt' WHERE email='$username'";
$result=mysqli_query($connection,$sql1);
$row=mysqli_fetch_array($result);
?>
