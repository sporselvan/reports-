<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require "../config/database.php";

// if($conn){
//     echo "connected";
// }

$query = "select * from info";
$result = mysqli_query($conn,$query);

$arr = array();

while($row = mysqli_fetch_assoc($result)){
    array_push($arr,$row);
}

echo json_encode($arr);


mysqli_close($conn);







?>