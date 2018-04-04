

<!DOCTYPE html>
<html lang="en">
  <head>
  	<link rel="stylesheet" href="css/bootstrap.css"> 
	
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<script>
function p(){

	  var val_phone= /^[0-9]{9,12}$/;
	 $cn= document.getElementById('cn').value;

	 if(!val_phone.test($cn)){

      alert("enter valid card number or lack of sufficient digits");
	   document.getElementById('cn').value='';
	   $("#cn").focus();
      return false;
    }

}
</script>

  <div class="container">
    <div class="inner text-center">
    <center>  <h1 class="logo-name">GotFocuz</h1></center>
    <center>   <td><a href="listfood.php"><input type="button" class="btn btn-imfo btn-read-more" name="listfood" value="Add Another Item"</a></td>
   <td><a href="userhome.php"><input type="button" class="btn btn-imfo btn-read-more" name="index" value="GoTo HOME"></a></td>
   <td><a href="mycart.php"><input type="button" class="btn btn-imfo btn-read-more" name="index" value="View My Cart"></a></td></center>
      <h2></h2>
        <?php

        $k="";
        $w="";
        if(isset($_POST['remove']))
        {
        //$w=$_SESSION['l_id'];
        //$e=$_POST['s_id'];
        //$a=$_POST['rq'];

        //$sql= "select * from `tbl_booking` WHERE `l_id`='$w' and `s_id`='$e'";
        //$result1=mysqli_query($con,$sql);
        // $sql3="UPDATE `fooditems` SET `food_quantity`=`food_quantity`+'$a'";
        // $result3=mysqli_query($con,$sql3);



        echo"<script>alert('Removed From The Cart');</script>";

        }




        ?>

        <style>
        fieldset {
          background-color: #FFFACD;
          color: black;
        }
        legend {
          padding: 6px;
          border: 1px solid green;
        }
		label{
			padding-top:2px;
		}
		
	
        </style>
		</head>
        <body>
          <?php
          include 'dbcon.php';

          session_start();
          $w=$_SESSION['lid'];

          $result5=mysqli_query($connection,"select * FROM `tbl_user` where `l_id`='$w'");
          while($row=mysqli_fetch_array($result5))
          {

            ?>
  <form action="#" method="post">

<div id="main">
<h3>Book a Studio</h3>
<label style="color:RED; font-size: 15px;" id="avail">Select occassion</label> <select class="form-control" style="opacity: 100px; width:250px;" name="place" id="occasion_select">   <?php
							include "dbcon.php";
							$sq="SELECT * FROM tbl_occassion";
                             $res = mysqli_query($connection,$sq);
						// $res2 = mysqli_query($dbcon, "select * from state where status='1' ");

                            while ($row = mysqli_fetch_array($res)) {

                                echo '<option value=' . $row['occ_id'] . '>' . $row['occa_name'] . '</option>';
                            }
                            ?></select><br>

 
<div >
<label style="color:RED; font-size: 15px;" id="avail">Date of occassion</label><input type="date" class="form-control" min="<?php echo $date3;?>" style="opacity: 100px; width:250px;" name="datime"> 
 </div>

 <br><br>
 <div>
 <label style="color:RED; font-size: 15px;" id="avail">Time of occassion</label><input type="time" name="time"/>
 </div>
 <br><br>
<div >
<label style="color:RED; font-size: 15px;" id="avail">Place of occassion</label> <input type="text" class="form-control" placeholder="Landmark" style="opacity: 100px; width:250px;" name="landmark"> 
 </div>

  <br><br>
 <button type="submit" name="submit" class="btn btn-success" style="opacity: 100px; width:250px;">Confirm booking</button>
 </form>
        </div>
              <?php
            }
            ?>
            <?php
            if(isset($_POST['submit']))
            {

            $a=$_POST["bname"];
            //echo "<script> alert('hai');</script>";
            $c=$_POST["ct"];
            $d=$_POST["cn"];
            $dt=$_POST["dt"];
            $n=$_SESSION['login_id'];



            /*$sqll="SELECT `username` FROM `reg` WHERE username='$h'";
            $result=mysqli_query($con,$sqll) or die("Connection Failed!");
            $arr=mysqli_fetch_array($result);
            if($arr)
            {
            	echo"<script>alert('Username already exist!!!');</script>)";
            }
            else{*/
            $sql2="select * from `foodorder` where `login_id`=$n";
            $result2=mysqli_query($con,$sql2);
            $row=mysqli_fetch_array($result2);


              $l=$row["total"];
              $m=$row["f_item_id"];


            $sql="INSERT INTO `transaction`(`bankname`, `cardtype`,`cardnumber`, `login_id`,`total`,`tdate`,`f_item_id`,`type`) VALUES ('$a','$c','$d','$n','$l','$dt','$m','online')";
            $result1=mysqli_query($con,$sql);
            $sql9="update `foodorder` set `status`=0 where `login_id`=$n";
            $result9=mysqli_query($con,$sql9);
            echo"<script>alert('Success');</script>)";

            }


            ?>

            <form action="#" method="POST" id="form" class="form-control" name="form" enctype="multipart/form-data">
              <fieldset>
                <legend>Transaction Details:</legend>
 <div class="col-md-12">
<div class="col-md-4"><label>Bank:</label></div>

   <div class="col-md-8"><select name="bname" class="form-control">

                      <option value="Federal">Federal Bank     </option>
                      <option value="HDFC">HDFC Bank       </option>
                      <option value="ICICI">ICICI Bank       </option>
                      <option value="State">State  Bank       </option>
                    </select></p>
                  </div>

                  <tr>
                    <td>Payment Method</td>

                    <td><select name="payment" class="form-control">

                      <option value="Debit">Debit     </option>
                      <option value="Credit">Credit        </option>


                    </select></td>
                  </tr>
                  <tr>
                    <td>Card Type</td>

                    <td><select name="ct" class="form-control">
                      <option value="">--select--   </option>

                      <option value="visa">visa     </option>
                      <option value="mastercard">mastercard        </option>
                      <option value="rupay">rupay        </option>

                    </select></td>
                  </tr>
                  <tr>
                    <td> Card Number </td>
                    <td><input type="text" class="form-control"  name="cn" id="cn" onchange="p()"></td>
                  </tr>
                  <tr>
                    <td> Date </td>
                    <td><input type="date" class="form-control" name="dt" id="dt" ></td>
                  </tr>
                </table>
              </fieldset>
            <table>

              <fieldset>

                <input  type="submit" name="submit" id="submit" value="submit"  >
              </fieldset>
            </form>

</div>

          <script>
          function check(element) {
            var cb1 = document.getElementById("checkbox1");
            var cb2 = document.getElementById("checkbox2");
            var sub = document.getElementById("submit");
            if (cb1.checked == true)
            sub.disabled = false;
            else
            sub.disabled = true;
          }
          </script>
        </body>
        </html>

</script>
  </body>
  </html>
