<?php
include 'dbcon.php';
if(empty($_SESSION)) // if the session not yet started
session_start();
$username=$_SESSION["username"];
if(!isset($_SESSION['username'])) { //if not yet logged in
	header("Location: index.php");// send to login page
	exit;
}


/*$sql="SELECT l_id,username,r_id,name,address,email,phoneno,location FROM login
NATURAL JOIN register WHERE login.l_id=register.r_id";*/
$sql1="SELECT * FROM `tbl_studio` where email='$username'";
$result=mysqli_query($connection,$sql1);
$row=mysqli_fetch_array($result);

$lid=$row['l_id'];
$did=$row["d_id"];
$sql2="SELECT * FROM `tbl_district` where  d_id='$did'";
$result1=mysqli_query($connection,$sql2);
$row1=mysqli_fetch_array($result1);

if(isset($_SESSION['submit'])) {
session_start();
$username=$_SESSION['username'];
include 'dbcon.php';
$u_name=$_POST['name'];
$dt=$_POST['district'];
$phone=$_POST['phone'];
$sql1="UPDATE `tbl_studio` SET `s_name`='$u_name',`phone`='$phone',`d_id`='$dt' WHERE email='$username'";
$result2=mysqli_query($connection,$sql1);
$row2=mysqli_fetch_array($result2);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script >

function uname(){
	
	 var val_seqans= /^[A-Za-z]+$/;
	 $seqans= document.getElementById('username').value;
	
	 if(!val_seqans.test($seqans)){
     
      alert("Enter valid name");
	   document.getElementById('username').value='';
	   $("#seqans").focus();
      return false;
    }
	if ( $seqans.length < 3 ){
                alert("Name must contain 3 characters"); 
				return false;
           }
	
}

function adfn(){
	
	 var valad= /^[A-Za-z]+$/;
	 $l_name= document.getElementById('address').value;
	
	 if(!valad.test($l_name)){
     
      alert("Address Must be Alphabets Only");
	   document.getElementById('address').value='';
	   $("#address").focus();
      return false;
    }
	if ( $l_name.length < 6 ){
                alert("Address must contain 6 characters"); 
				return false;
           }
}

function efn(){
	
	 var valemail= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;;
	 $l_email= document.getElementById('email').value;
	
	 if(!valemail.test($l_email)){
     
      alert("Enter Valid EMAIL address");
	   document.getElementById('email').value='';
	   $("#email").focus();
      return false;
    }
	
}
function disfn(){
	
	 var valfname= /^[A-Za-z]+$/;
	 $fname= document.getElementById('l_district').value;
	
	 if(!valfname.test($fname)){
     
      alert("District Must be Alphabets Only");
	   document.getElementById('l_district').value='';
	   $("#l_district").focus();
      return false;
    }
	
}
function sfn(){
	
	 var val_seqans= /^[A-Za-z]+$/;
	 $seqans= document.getElementById('place').value;
	
	 if(!val_seqans.test($seqans)){
     
      alert("Enter valid place");
	   document.getElementById('place').value='';
	   $("#seqans").focus();
      return false;
    }
	
}

      function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
        }    
 function onlyAlphabets(e,t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode ==8))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
		
		

 function mob()
{
        var x = document.getElementById('phone').value;
	 // var x=document.phone.value;
        if(isNaN(x)|| x.indexOf(" ")!=-1){
              alert("Mobile Number must be number");return false; }
        if (x.length > 10 || x.length < 10 ){
                alert("Mobile Number must have 10 digits "); return false;
           }
       // if (x.charAt(0)!="9" || x.charAt(0)!="2"){
               // alert("it should start with 9 or 2 ");
                //return false
           //}
}

 
    
	
</script>
  <style>
	
		form{
			margin-top:5%;
		}
		div.form-group {
			width: 30%;
			margin-left:20%;


		}

		th, td {
			padding: 8px;
			text-align: left;

		}
	</style>
</head>
<body>

<div class="container">
  <h2>Edit Profile</h2>
  <form name="myform" action="">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="username" placeholder="Name" name="username" value="<?php echo $row['s_name'];?>" onChange="uname();" required >
    </div>
  <div class="form-group">
      <label for="address">Address:</label>
      <textarea  class="form-control" id="address" placeholder="Address" name="address" onChange="adfn();" required><?php echo $row['address'];?> </textarea>
    </div>
  <div class="form-group">
      <label for="phone">Mobile:</label>
      <input type="number" class="form-control" id="phone" placeholder="Mobile" name="phone" value="<?php echo $row['phone'];?>" onChange="mob();" required>
    </div>
  <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $row['email'];?>" onChange="efn();" required>
    </div>
  <div class="form-group">
      <label for="place">Place:</label>
      <input type="place" class="form-control" id="place" placeholder="Place" name="place" value="<?php echo $row['s_name'];?>" onChange="sfn();" required>
    </div>
  <div class="form-group">
      <label for="district">District:</label>
	  <select class="form-control" name="district" required/>

  <?php
$sql10="SELECT * FROM `tbl_district` Order By d_id;";
$rset1=mysqli_query($connection,$sql10);
$records1=mysqli_fetch_array($sql10);
echo "<option value=''>Select a District</option>";
foreach($rset1 as $records1){
	echo "<option value='{$records1["d_id"]}'>{$records1["d_name"]} </option>";
}
?>
      </select>
    </div>
 
 
  <div class="form-group">
    <button type="submit" name="save" class="btn btn-info">SAVE</button>
  </form>
</div>
</div>
</body>
</html>