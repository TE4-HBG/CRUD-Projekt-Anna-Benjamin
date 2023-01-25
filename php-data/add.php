<?php 
session_start();
include 'dbconn.php';

$username = $_SESSION['user'];
$title = $_POST["title"];
$message = $_POST["message"];

$sql = "INSERT INTO users (username, title, message) VALUES ('$username', '$title', '$message')";

mysqli_query($mysqli, $sql);

header("Location: http://localhost:8080/main.php");

?>