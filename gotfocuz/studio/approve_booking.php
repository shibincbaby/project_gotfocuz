<?php

$dbcon = mysqli_connect("localhost", "root", "", "db_studio");
if (isset($_POST['book_id'])) {
   $bid = $_POST['book_id'];
	
    $q = mysqli_query($dbcon, "UPDATE `tbl_booking` SET `status`='1' WHERE `book_id`='$bid'");
	 
   if($q)  {
	   
  echo "saved";    
		
}
else{
echo "failed";
}
}
    
  
	
?>
