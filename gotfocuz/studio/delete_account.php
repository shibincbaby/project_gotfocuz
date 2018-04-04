<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Deactivate Account</title>
</head>
<?php
include 'dbcon.php';
$id=$_GET['l_id'];
$b="UPDATE `tbl_login` SET `status`=0 WHERE l_id='$id'";
$c= mysqli_query($connection,$b);
if ($c==1)
{
//$d="delete from login where l_id='$id'";
//$e=mysql_query($d,$a);
echo "successfully deleted";

}
?>
<body>
</body>
</html>
