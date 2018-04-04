<?php
include 'dbcon.php';      //data base coonection starts

if(isset($_POST["submit"]))
{
	if (isset($_POST['username']) && isset($_POST['password'])){
	$username=$_POST["username"];   //fetches username from the form
	$pass=$_POST["password"];	//fetches password from the form
	//echo $username;
	$sql="SELECT * FROM `tbl_login` where `email`='$username' and `password`='$pass'"; //value fetched from the table
	$res=mysqli_query($connection,$sql); // query executing function

	while($row=mysqli_fetch_array($res))
	{
		if($username==$row['email'] && $pass==$row['password'] && $row['status']==1)
		{

			session_start();
			$_SESSION["username"]=$username;

				if($row[role]==0) //Selecting based on roles 0->admin 1->user
				{
					header("location:web/index.php"); //redirecting to there pages
				}
				else if($row[role]==2)
				{
					header("location:studio/studio_home.php");
				}
        		//else if($row[role]==2)
        		//{
        		//	header("location:Student.php");
        		//}


		}
	 //else
	 //{
		//echo "<script>if(confirm('Username or Password are incorect!!!!')){document.location.href='index.php#logd'}else{document.location.href='index.php'};</script>";
	 //}
	}
}
}
?>
