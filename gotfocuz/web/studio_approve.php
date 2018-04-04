<?php
include 'dbcon.php';
if (isset($_POST['approve_id'])&&isset($_POST['ldd'])){
$id=$_POST['approve_id'];
$lid=$_POST['ldd'];
$confirmation="update `tbl_studio` set status='1' where s_id='$id'";
	$res=mysqli_query($connection,$confirmation);
	
$sql="update `tbl_login` set status='1' where l_id='$lid'"; //value fetched from the table
	$re=mysqli_query($connection,$sql); // query executing function

	
		
   if($confirmation && $sql)  {
	   
  echo "saved";    
		
}
else{
echo "failed";
}
}
?>
