<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search a Studio</title>

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
  
xmlhttp.open("GET","studio_search_pro.php?id="+str,true);
xmlhttp.send(null);
}

/*function getstud(str)
{
alert(str)
/*var s=document.form1.t1.value;
if (str==0)
  { document.getElementById("rose").innerHTML="";
  return;
  }*/
/*if (window.XMLHttpRequest)
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
    document.getElementById("serch").innerHTML=xmlhttp.responseText;
    }
  }
  
xmlhttp.open("GET","studio_pro.php?id="+str,true);
xmlhttp.send(null);
}*/
</script>

<style>
body{
background-image:url(images/slide_2.jpg);
color: white;
}
div,label{
	margin-left:50px;
	margin-top:0px;
	border-radius:40px;
	
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


input.login{
		width: 50%;
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
input#gender {
    margin-left: 20px;

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
	margin-left:150px;
}

button:hover {
    background: #ff7b81;
}
h2,span{

}
a{
	background-color: #f9ad81;
}
h3{
	margin-top:70px;
	margin-left:100px;
	color:blue;
}

</style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<body>
<h3>Look for studio</h3>
<form id="form1" name="form1" method="post" action="">
<?php
include 'dbcon.php';
$q="select * from `tbl_district`";
$res=mysqli_query($connection,$q);
?>
  <label>District</label>
  
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
  <br> <br> <br> <br> <br>
  <label>City</label>
    <div id="city"><select name="ddlcity" id="ddlcity">
    </select></div>
 <br> <br> <br> <br> <br>

<input type="button" value="Search" id="serch">
</form>

<div id="st"></div>
 
</body>

</html>


<!-- jQuery library -->

<script src="./st.js"></script>