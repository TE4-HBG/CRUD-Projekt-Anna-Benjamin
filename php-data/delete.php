<?php
session_start();
include 'dbconn.php';

$userId = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$userId";

mysqli_query($mysqli, $sql);

header("Location: http://localhost:8080/main.php");
?>