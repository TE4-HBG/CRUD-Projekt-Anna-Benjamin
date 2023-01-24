<?php 
$username = $_SESSION['user'];

$server="mariadb";
$user="root";
$pwd="example";
$schema="docker";

$mysqli=new mysqli($server, $user, $pwd, $schema);

$query = "SELECT * FROM users WHERE username=$username";
$stmt = $mysqli->prepare($query);
$stmt->execute();

$results = $stmt->get_result();
?>