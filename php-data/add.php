<?php 
session_start();
include 'dbconn.php';

$username = $_SESSION['user'];
$title = $_POST["title"];
$message = $_POST["message"];

$sql = "INSERT INTO users (username, title, message) VALUES (?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sss", $username, $title, $message);
$stmt->execute();

$results = $stmt->get_result();


header("Location: http://localhost:8080/main.php");

?>