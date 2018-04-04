<?php
include 'dbcon.php';
if(isset($_POST["submit"])){
$city=$_POST["ddlcity"];
$sql="UPDATE `tbl_cities` SET `status`=0 WHERE city_id='$city'";
$res=mysqli_query($connection,$sql);
if($res==1){
	echo "<script>if(confirm('City Deleted Successfully!Do you want to delete more?')){document.location.href='deletecity.php'}else{document.location.href='addcity.php'};</script>";
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete City</title>

<script type="text/javascript" language="javascript">
function getsid(str)
{
/*alert(str)
var s=document.form1.t1.value;
if (str==0)
  { document.getElementById("rose").innerHTML="";
  return;
  }*/
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("city").innerHTML=xmlhttp.responseText;
    }
  }
  
xmlhttp.open("GET","delcity_pro.php?id="+str,true);
xmlhttp.send(null);
}
</script>

<style>
body{
background-image:url(../images/slide_2.jpg);
}

form{
	background-color:grey;margin:15px 250px 10px 250px;background-size: cover; padding:10px;
	color:white;
}
select{
	width:200px;
	height:30px;
	border-radius:5px;
}
input {
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
	color:white;
}
</style>
</head>

<body>
 <h1 style="color:red;">Delete City</h1>
<form id="form1" name="form1" method="post" action="">
<h5>Do not refresh the page..</h5>
<?php
$q="select * from tbl_district";
$res=mysqli_query($connection,$q);
?>
 
  District
  <select name="ddldistrict" id="ddldistrict" onchange="getsid(this.value)">
    <?php
	while($r=mysqli_fetch_array($res))
	{
	?>
    <option value="<?php echo $r[0];?>"><?php echo $r[1];?></option>
    <?php
	}
	?>
  </select>
  <p>&nbsp;</p>
   
  <label>City</label><div id="city"> <select name="ddlcity" id="ddlcity">
    </select></div>
	<br><br><br>
   <div>
 <input type="submit" name="submit" value="Delete"> 
 </div>
 <span><button name="cancel"><a href="index.php">Go back</a></button></span>
</form>

</body>
</html>

