<?php
session_start();

			include"dbcon.php";

			 $q=$_GET['q'];
			 $sql="select `email` from `tbl_login`";
			 $exe=mysqli_query($connection,$sql);
			 while($row=mysqli_fetch_array($exe))
			 {
				 if($q==$row['email'])
				 {
					 echo "This Email Already have an account";
					 return false;
				 }
					
			 }
			
			 
?>
