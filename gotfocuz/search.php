 <?php

  include "dbcon.php";

  $output = '';

  if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $search = preg_replace("#[^0-9a-z]i#","", $search);

    $query = mysqli_query("SELECT * FROM studio WHERE town s_name '%$search%'") or die ("Could not search");
    $count = mysqli_num_rows($query);
    
    if($count == 0){
      $output = "There was no search results!";

    }else{

      while ($row = mysqli_fetch_array($query)) {

        $studio_name = $row ['studio_name'];
        $place = $row ['place'];
        //$bedrooms = $row ['bedrooms'];
       // $bathroom = $row ['bathrooms'];

        $output .='<div> '.$town.''.$place.'</div>';

      }

    }
  }

  ?>