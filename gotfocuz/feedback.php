<?php
	require('dbcon.php');
  if(isset($_POST['submit'])){
    // If the values are posted, insert them into the database.
if (isset($_POST['email'])) {


			$email=$_POST['email'];
        $feedback = $_POST['feedback'];

	$sql1="INSERT INTO `tbl_feedback`(`email`, `feedback`) VALUES ('$email','$feedback')";
			$result1=mysqli_query($connection,$sql1);


}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback Confirmation</title>
<style>
body{
background-image:url(images/slide_2.jpg);
}
div{
	margin-top:10px;
	background-color:grey;
	padding:10px;
	color:white;
	
}
button{
	
    width: 20%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
	margin-left:150px;
	

}
a{
	text-decoration:none;
}
</style>
</head>
<body>
		<div id="fh5co-contact" data-section="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center section-heading">
						<h2 class="fh5co-section-title animate-box">Thanks for Your Valuable Feedback</h2>
						<span class="fh5co-meta">Go back to Main Page</span>

					<p class="animate-box"><button id="back"><a href="index.php">Go back</a></button></p>
						
					</div>
				</div>
			</div>
		</div>
		</body>
</html>