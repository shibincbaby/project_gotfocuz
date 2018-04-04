<?php
include_once'dbcon.php'; 
if (isset($_POST['upload']))
{
$name=$_FILES['uploadvideo']['name'];
 $type=$_FILES['uploadvideo']['type'];
$cname=str_replace(" ","_",$name);
$tmp_name=$_FILES['uploadvideo']['tmp_name'];
$target_path="../video/";
$target_path=$target_path.basename($cname);
if(move_uploaded_file($_FILES['uploadvideo']['tmp_name'],$target_path))
{
echo $sql="INSERT INTO video(name,type) VALUE('".$cname."','".$type."')"; 
$result=mysql_query($sql);
echo "Your video ".$cname." has been successfully uploaded";
}
}
?>
<form name="video" enctype="multipart/form-data" method="post" action="">

<input type="file" name="uploadvideo" />
<input type="submit" name="upload" value="SUBMIT" />
</form>