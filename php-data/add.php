<?php 
include 'dbconn.php';

$name = $_POST["name"];
$message = $_POST["message"];


$sql = "INSERT INTO users (name, message) VALUES ('$name', '$message')";

mysqli_query($mysqli, $sql);

header("Location: http://localhost:8080/");

?>