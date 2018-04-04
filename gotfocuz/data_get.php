<?php

$dbcon = mysqli_connect("localhost", "root", "", "db_studio");
if (isset($_POST['index'])) {
    $index = $_POST['index'];
	//echo $index;
    $q = mysqli_query($dbcon, "SELECT city_id,city_name FROM tbl_cities where d_id='" . $index . "' and status=1");


    $str = "";
    while ($row = mysqli_fetch_array($q)) {
        $str .= $row['city_id'].":".$row['city_name'] . ",";
		
    }
    
    echo rtrim($str, ',');
}



?>