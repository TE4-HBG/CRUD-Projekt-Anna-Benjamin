<?php 

$server="mariadb";
$user="root";
$pwd="example";
$schema="docker";

$mysqli=new mysqli($server, $user, $pwd, $schema);

$query = "select * from users";
$stmt = $mysqli->prepare($query);
$stmt->execute();

$results = $stmt->get_result();
?>