 <!DOCTYPE html>
<html>
<head> 
			
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">       
        <title>studio search</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="icon" href="bootstrap/images/unnamed.png" type="icon">
        <!--<link rel="stylesheet" type="text/css" href="bootstrap/css/main.css"> -->
		<link rel="shortcut icon" href="favicon.ico">
	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->


      
     

        <style>
.nav ul {
	float:left;
  list-style: none;
  background-color: #444;
  text-align: center;
  padding: 0;
  margin: 0;
}
.nav li {
  font-family:Alex Brush;
  font-size: 1.2em;
  line-height: 40px;
  height: 40px;
  border-bottom: 1px solid #888;
  width: 120px;
    border-bottom: none;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
	 display: inline-block;
    margin-right: -4px;
}
 
.nav a {
  text-decoration: none;
  color: #fff;
  display: block;
  transition: .3s background-color;
}
 
.nav a:hover {
  background-color: #005f5f;
}
 
.nav a.active {
  background-color: #fff;
  color: #444;
  cursor: default;
}
 


div#login{
	width:150px;
	float:right;
	background-color:#666;
	
	}
	a {
    color: white;
}
a:link{
	font-size:15px;
	text-decoration:none;
}
a:hover{
	color:#9F9;
}
#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
}
.content {
    position: fixed;
    margin-bottom: 0;
    
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}
            .m-t-10 {
                margin-top: 10px;
            }

            .show_error{
                display: inline;           
            }
            .hide_error{
                display: none;
            }

			</style>
    </head>
   <script src="bootstrap/js/jquery.js"></script>


    <body >


<video autoplay muted loop id="myVideo">
  <source src="..\video\Kerala Christian wedding highlights ancily anil -2016 chalakudy - YouTube.mkv" type="video/mp4">
</video>

<div class="content">
<br><br><center><h3>Search Studios in your Locality</h3></center><br>
  <div >
		  	
		   <div class="nav">
		      <ul id="menu" >
		        <li  ><a href="../web/user_home.php" >Dashboard</a></li>
				<li  ><a href="../web/../profile.php" >View Profile</a></li>
				<li  ><a href="../web/studio_view.php" >View all Studios</a></li>
				<li  ><a href="../ajax/index.php" >Search Near-By</a></li>
				<li  ><a href="#" >View Highlights</a></li>

		         </li>
		      </ul>
			  
		    </div>
	 </div>

        <div class="container" style="position:relative; margin-top:10px; margin-left:550px;">

            <div class="row">
                <div class="" style="margin-top: 0px;">
                   <p> <div class="col-md-3">

                        <select class="form-control" style="opacity: 100px; width:250px " id="district_select"> <option selected="" disabled="" value="-1">District</option>

                            <?php
							include "dbcon.php";
							$sq="SELECT * FROM tbl_district";
                             $res = mysqli_query($connection,$sq);
						// $res2 = mysqli_query($dbcon, "select * from state where status='1' ");

                            while ($row = mysqli_fetch_array($res)) {

                                echo '<option value=' . $row['d_id'] . '>' . $row['d_name'] . '</option>';
                            }
                            ?>

                        </select>
                    </div>
					</p>
					<p>
                    <div class="col-md-3">

                        <select class="form-control" id="place_select" style="opacity: 100px; width:250px " > <option value="-1" disabled="" selected="">Place</option>
                        </select>

                    </div>
					</p>
                    <!--<div class="col-md-3 col-sm-3">

                        <select class="form-control" style="opacity: 100px" id="district_select"> <option>District</option></select>

                    </div>
                    <div class="col-md-3" "col-sm-3">

                        <select class="form-control" style="opacity: 100px" id="place_select"> <option>Place</option></select>

                    </div>-->
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-offset-5 col-sm-3">
                        <input type="button" id="find" class="btn btn-primary " style="width: 250px; " value="Find Studio">
                    </div>
                </div>
            </div>
            <!--<center><div class="row col-md-12 hide_error " style="color:white; font-size: 60px;" id="place_error"> Error</div></center>-->

        </div>    

        <div class="container-fluid">
            <div id="find_studio">

            </div>
        </div>

        <!--        <div class="container-fluid" style="position:absolute; margin-top: 575px; width: 100%;">
                    <div id="check_fare">
                        <iframe src="maps2.php" width="100%" height="600px"  frameBorder="0">
        
                        </iframe>
                    </div>
                </div>-->

	<div class="clearfix"> </div>
</div>

</body>
<script src="location.js" ></script>
</html>

