<?php

$id=$_GET['id'];
include 'dbcon.php';
$q="select * from tbl_cities where d_id='$id' and status=1";
$res=mysqli_query($connection,$q);
echo "<select name=ddlcity>";
while($r=mysqli_fetch_array($res))

{
echo "<option value=".$r[0].">".$r[1]."</option>"; 

}
echo "</select>"
?>
