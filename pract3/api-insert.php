<?php
header('Content-Type: application/json');
$data=json_decode(file_get_contents('php://input'),true);

include "config.php";

$name=$data['sname'];
$age=$data['sage'];
$city=$data['scity'];

$sql= "INSERT INTO prc3(name,age,city)VALUES('{$name}',{$age},'{$city}')";

$run=$conn->query($sql);
if ($run)
{
    echo json_encode($run);
}

?>