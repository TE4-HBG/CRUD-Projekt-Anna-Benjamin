<?php 
$username = $_SESSION['user'];

$server="mariadb";
$user="root";
$pwd="example";
$schema="docker";

$mysqli=new mysqli($server, $user, $pwd, $schema);

$query = "SELECT id, title, message FROM users WHERE username=?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();

$results = $stmt->get_result();
?>