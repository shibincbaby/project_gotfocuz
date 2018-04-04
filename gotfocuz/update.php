<?php
include 'dbcon.php';
$s_name=$_POST['s_name'];
$email=$_POST['email'];
$_dt=$_POST['district_id'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$pro_pic=$_POST['pro_pic'];

$sql1="UPDATE `tbl_studio` SET `s_name`='$s_name',`email`='$email',`d_id`='$dt',`phone`='$phone',`mobile`='$mobile',`pro_pic_url`='$pro_pic' WHERE `l_id`='$l_id'";
$result=mysqli_query($connection,$sql1);
$row=mysqli_fetch_array($result);
?>
