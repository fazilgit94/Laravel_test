<?php
header('Content-Type: application/json');


include "config.php";



$sql= "SELECT * FROM prc3";

$run=$conn->query($sql);
if (mysqli_num_rows($run)> 0){
   $output= mysqli_fetch_all($run,MYSQLI_ASSOC);
    echo json_encode($output);
    
}

?>