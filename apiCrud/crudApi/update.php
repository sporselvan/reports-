<?php

require "../config/database.php";

// if($conn){
//     echo "connnected";
// }
$_POST = json_decode(file_get_contents("php://input"), true);
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

echo var_dump($_POST);

$id = $_POST["id"];
$firstname = $_POST["firstname"];
$surname = $_POST["surname"];
$contact = $_POST["contact"];
$password = $_POST["password"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];

$query = "update info set firstname='$firstname',surname='$surname',contact='$contact',password='$password',dob='$dob',gender='$gender' where id=$id";
$result = mysqli_query($conn,$query);
mysqli_close($conn);

?>