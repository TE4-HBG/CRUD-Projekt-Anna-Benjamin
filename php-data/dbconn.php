<?php 
$username = $_SESSION['user'];

$server="mariadb";
$user="root";
$pwd="example";
$schema="docker";

$mysqli=new mysqli($server, $user, $pwd, $schema);

$query = "SELECT id, title, message FROM users WHERE username='$username'";

$results = mysqli_query($mysqli, $query);
?>