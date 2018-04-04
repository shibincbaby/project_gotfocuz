<?php
include 'dbcon.php';
$id=$_GET['id'];
$q="select * from `tbl_studio` where `city_id`='$id'";
$res=mysqli_query($connection,$q);
$abc=mysqli_fetch_array($res);
$st_name=$abc["s_name"];
echo "<select name=ddlstudio id='ddlstudio'>";
while($r=mysqli_fetch_array($res))
{
echo "<option value=".$r[0].">".$r[1]."</option>"; 

}
echo "</select>"
?>
<table>
<tr><td><?php echo $st_name; ?></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
</table>
                                
								
								
