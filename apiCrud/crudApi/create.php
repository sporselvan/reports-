<?php

require "../config/database.php";

$_POST = json_decode(file_get_contents("php://input"), true);
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

echo var_dump($_POST);
$firstname = $_POST["firstname"];
$surname = $_POST["surname"];
$contact = $_POST["contact"];
$password = $_POST["password"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];

$query = "insert into info(firstname,surname,contact,password,dob,gender)VALUES('$firstname','$surname','$contact','$password','$dob','$gender')";
$result = mysqli_query($conn,$query);


?>





