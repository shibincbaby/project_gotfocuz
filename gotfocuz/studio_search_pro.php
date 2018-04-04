<?php
include 'dbcon.php';
$id=$_GET['id'];
$q="select * from tbl_cities where d_id='$id'";
$res=mysqli_query($connection,$q);
echo "<select name=ddlstudio onchange=getstud(this.value)>";
while($r=mysqli_fetch_array($res))
{
echo "<option value=".$r[0].">".$r[1]."</option>"; 

}
echo "</select>"
?>
