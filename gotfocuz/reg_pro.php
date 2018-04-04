<?php
function send($sms, $to) {

    $sms = urlencode($sms);
    $token = "16450f1d72300a5c5eec8a8e135c9d8c";
    $sendercode="KTFOOD";
    $url = "http://sms.safechaser.com/httpapi/httpapi?token=".$token."&sender=".$sendercode."&number=".$to.'&route=2&type=1&sms='.$sms;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 50);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $datares = curl_exec($ch);
    curl_close($ch);
    return $datares;
}
$connect = mysqli_connect("localhost", "root", "", "db_studio");
session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.php");  
 }  
  if(isset($_POST['register'])){
    // If the values are posted, insert them into the database.
    if (isset($_POST['email']) && isset($_POST['conpas'])){
		   $email = mysqli_real_escape_string($connect, $_POST["email"]);  
           $pass = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($pass); 
        $fname = $_POST["fname"];  
		$lname = $_POST["lname"];  
		$hname =$_POST["hname"];  
		$gender=$_POST["gender"];
		$district=$_POST["district"];
		$city=$_POST["city"];
		$phone = $_POST['phone'];
	    $email = $_POST['email'];
				//$cnfpassword=$_POST['conpas'];
						//$cnfpassword;
       // $cnfpassword=$_POST['cnfpassword'];
     


		{
			session_start();
			$_SESSION["username"]=$email;

	 $sql1="INSERT INTO `tbl_login`( `email`, `username`,`password`, `status`, `role`) VALUES ('$email','$fname $lname','$password',1,1)";
			$result1=mysqli_query($connect,$sql1);

			$sql="SELECT max(l_id) as id from tbl_login";
			$res=mysqli_query($connect,$sql);
			$ar=mysqli_fetch_array($res);
			$mid=$ar['id'];
			//echo $mid;
$sq="INSERT INTO `tbl_user`(`l_id`, `fname`, `lname`, `email`, `phone`, `gender`, `address`, `city_id`, `d_id`, `pro_pic_url`) VALUES ('$mid','$fname','$lname','$email','$phone','$gender','$hname','$city','$district','0')";
$res1=mysqli_query($connect,$sq);

	     }
			 if($result1&&$res1)
			 {
echo "<script>if(confirm('Registration successful! Do you want to Login')){document.location.href='index.php#logd'}else{document.location.href='index.php'};</script>";
	$mess="Hai , Your registration for gotFocuz Account has been Successfully completed.Your user name=$email and password=$pass";
send($mess,$phone);		

			}
			 
		 }
}
    ?>