<!DOCTYPE html>
<?php
    include 'dbcon.php';
	if(isset($_POST['submit']))
    {
		$a=$_POST["user"];
		//echo $a;
		$sql="SELECT * FROM tbl_login where `email`='$a'";
		$result=mysqli_query($connection,$sql);
		$row=mysqli_fetch_array($result);
		//echo $d=$row['email'];
		//echo $d;
		$e=$row['password'];
		if($row['email']!="")
		{
		$to = $a;
			$subject = "Gotfocuz Account-Password Recovery Assistance!";
			$message ="<html>
			<head>
			<title>Forgot Password</title>
			</head>
			<body>
			<p>your username and password is below</p>
			<table>
			<tr>
			<th>UserName</th>
			<th>password</th>
			</tr>
			<tr>
			<td>'$a'</td>
	        <td>'$e'</td>
			</tr>
			</table>
			</body>
			</html>";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <shibincbaby@mca.ajce.in>' . "\r\n";
			$headers .= 'Cc: shibincbaby@mca.ajce.in' . "\r\n";
			mail($to,$subject,$message,$headers);
			echo "<script>alert('Password Assistance Mail Sent');</script>";
	}
	else
	{
		echo "<script>alert('enter correct email');</script>";
	}
	}



	?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Forgot Acccount Password</title>


      		<style>
          body{
          	background-image:url(images/slide_2.jpg);
          }
          div{
          	margin-left:40%;
            margin-top:10%;
          }

          input {
              width: 30%;
              height: 42px;
              box-sizing: border-box;
              border-radius: 5px;
              border: 1px solid #ccc;
              margin-bottom: 20px;
              font-size: 14px;
              font-family: Montserrat;
              padding: 0 20px 0 50px;
              outline: none;
          }

           input#username {
              background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
              background-size: 16px 80px;
          }

           input#username:focus {
              background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
              background-size: 16px 80px;
          }

          input#password {
              background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
              background-size: 16px 80px;
          }

          input#password:focus {
              background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
              background-size: 16px 80px;
          }

          input:active, .login-block input:focus {
              border: 1px solid #ff656c;
          }

          button {
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
          	margin-left:50px;
          }

          button:hover {
              background: #ff7b81;
          }

          </style>




</head>
<body>

<div class="container">

		<form action="forgot.php" method="post" name="mform">
			<h1>Recover Password</h1>

			<p>	<input type="text" placeholder="Username" required="" id="username" name="user" /></p>

			<!--<div>
				<input type="password" placeholder="Password" required="" id="password" name="pass" />
			</div>
			-->

			<p>	<button type="submit" name="submit" />Continue</button></p>

		</form><!-- form -->

</div><!-- container -->


    <script src="js/login.js"></script>

</div>
</body>
</html>
