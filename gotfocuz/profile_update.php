<?php

$dbcon = mysqli_connect("localhost", "root", "", "db_studio");
if (isset($_POST['userid'])) {
   $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phoneno = $_POST['phone'];
	$address = $_POST['address'];
	$cityid = $_POST['city'];
	$district = $_POST['district'];
	$userid =$_POST['userid'];
	$gender=$_POST['gene_sel'];
    $q = mysqli_query($dbcon, "UPDATE `tbl_user` SET `fname`='$fname',`lname`='$lname',`phone`='$phoneno',`gender`='$gender',`address`='$address',`city_id`='$cityid',`d_id`='$district' WHERE `l_id`='$userid'");
	 
   if($q)  {
	   
  echo "saved";    
		
}
else{
echo "failed";
}
}

$sql10="SELECT * FROM `tbl_district`";
$q=mysqli_query($dbcon,$sql10);
$str = "";
    while ($row = mysqli_fetch_array($q)) {
        $str .= $row['d_id'].":".$row['d_name'] . ",";
		
    }
    
    echo rtrim($str, ',');
	
?>
