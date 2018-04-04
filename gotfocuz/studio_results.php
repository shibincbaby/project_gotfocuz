<!DOCTYPE html>
<html>
<head>

<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: auto;
	
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>Near-by Studios</th>
    <th>Email</th>
    <th></th>
  </tr>
<?php
include 'dbcon.php';
$st=$_POST['data'];
$SESSION['place']=$st;

$sq="SELECT * FROM `tbl_studio` WHERE city_id=".$st;
$re = mysqli_query($connection,$sq);
 while ($row = mysqli_fetch_array($re)) {
	 ?>
     <?php echo $row['s_id'];
	 
	 ?>
	 
	<tr>
    <td><?php echo $row['s_name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><a href="booking.php?id=<?php echo $row['s_id']; ?>"><button class="btn btn-primary ">Book Here</button></a></td>
	</tr>
	<?php	
    }

?>
</body>
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
</html>
