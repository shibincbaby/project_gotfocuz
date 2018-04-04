<?php 
include 'dbcon.php';

?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>gotfocuz-user registration</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		   <script type="text/javascript">
		   function exist(str)
	  {
     	 if (str == "") 
	  	 {
       			document.getElementById("avail").innerHTML = "";
        		return;
    	 } 
		 else 
		 { 
         	if (window.XMLHttpRequest) 
		 	{
           		 // code for IE7+, Firefox, Chrome, Opera, Safari
           		 xmlhttp = new XMLHttpRequest();
         	} 
		 	else 
		 	{
           		 // code for IE6, IE5
            		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
         	}
         	xmlhttp.onreadystatechange = function() 
		 	{
            		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
					{	
              			document.getElementById("avail").innerHTML =xmlhttp.responseText;
            		}
         	}
         	xmlhttp.open("GET","emailavail.php?q="+str,true);
			
         	xmlhttp.send();
    	 }
		 
		 
		 var valemail= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	 $l_email= document.getElementById('em').value;

	 if(!valemail.test($l_email)){

      alert("Enter Valid EMAIL address");
	 
	   document.getElementById('em').value='';
	   //document.getElementById('pas').value='eeeeee';
	   $("#email").focus();
      return false;
    }
	  }
function a(){

				var val_pass=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
				 $pass= document.myform.pass.value;
				if (!val_pass.test($pass)){

					  alert("Required atleast one number, one lowercase and one uppercase letter, atleast six characters");
						document.myform.pass.value;
					$("#pass").focus();
					return false;

				}
			}
  
 
</script>
      </head>  
      <body>  
           <br /><br />  
          
           <section id="register">
     <div class="container-fluid" style="margin-left:300px; width:700px;" data-section="Register">  
          
                <h3 align="center">Signup to be a member</h3>  
				
                <br />  
				
                <form name="myform" method="post" class="form-horizontal" action="reg_pro.php">  
				<div class="col-sm-6">
    
                     <input type="text" name="fname" placeholder="First Name" id="username" class="form-control input-group-lg reg_name" onChange="fn();" required/> 
					 </div>
<div class="col-sm-6">
    
                     <input type="text" name="lname" placeholder="Last Name" id="username" class="form-control input-group-lg reg_name" onChange="fn();" required/> 
					 </div> 					 
                     <br />  <br /><br />
				<div class="col-sm-12"> 
                     <input type="email" name="email"  placeholder="Enter E-mail"  id="em" class="form-control" onchange="return exist(this.value)"/> </tr> </div>
                     <label style="color:RED; font-size: 15px;" id="avail"></label>
					 <label style="color:RED; font-size: 15px;" id="pas"></label><br /> 
<div class="col-sm-1"></div> <div class="col-sm-8">  <label>Gender</label>   &nbsp &nbsp
                     <input type="radio" name="gender" value="male" id="gender" onchange="gender();" checked/>Male &nbsp &nbsp &nbsp &nbsp
						<input type="radio" name="gender" value="female" onchange="gender(); " />Female	</div>	 
                     <br /> <br /> 
					 <div class="col-sm-12">
    
                     <input type="text" name="hname" placeholder="Address" id="hname" class="form-control" onChange="fn();" required/> 
					 </div> 					 
                     <br />  <br /><br />
					<div class="col-sm-12">  <select class="form-control" id="district_select" name="district" required>

  <?php
$sql10="SELECT * FROM `tbl_district` Order By d_id;";
$rset1=mysqli_query($connection,$sql10);
$records1=mysqli_fetch_array($sql10);
echo "<option value=''>Select a District</option>";
foreach($rset1 as $records1){
	echo "<option value='{$records1["d_id"]}'>{$records1["d_name"]} </option>";
}
?>

   </select></div> <br /> <br /> <br /> 
  
					<div class="col-sm-12"> 
                    <select class="form-control" name="city" id="place_select"  > <option value="-1" disabled="" selected="">City</option>
                    </select>
					</div>
                    <br /> <br /> <br /> 
					<div class="col-sm-12">  
                    <input type="text" name="phone" placeholder="Phone Number" id="phone" class="form-control" onChange="mob();" />  
                    </div> 
					 <br /> <br /> <br /> 
					<div class="col-sm-12"> 
                    <input type="password" placeholder="Enter Password" name="password" id="pass" class="form-control" onChange="a();" />
					</div> 					 
                    <br />  <br /> <br /> 
                    <div class="col-sm-12"> 
                    <input type="password" placeholder="Re-Enter Password" name="conpas" id="conpas" class="form-control" onChange="a();" required/>  
					</div> 
                    <br />   <br /> 
                    <div class="col-sm-4"><a href="index.php#logd">Go Back to Login</a></div> <div class="col-sm-6"><a href="studio/studio_signup.php">Click here to Signup as a Studio.</a>  </div>

					<div class="col-sm-5"></div><div class="col-sm-6">
                     <input type="submit" name="register" value="Register" class="btn btn-info"  />  </div>
                     <br />  
                     
                </form>  
               
           </div> 
		   </section>
            
      </body> 
<script src="location.js"></script>	  
 </html>  
