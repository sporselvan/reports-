<?php

require "../config/database.php";

$_POST = json_decode(file_get_contents("php://input"), true);

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

echo var_dump($_POST);

$id = $_POST["id"];

$query = "delete from info where id=$id";
$result = mysqli_query($conn,$query);

mysqli_close($conn);

?>