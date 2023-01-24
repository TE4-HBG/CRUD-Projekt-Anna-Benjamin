<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' || !empty($_POST)) {
    $_SESSION["user"] = $_POST["username"];

    header("Location: http://localhost:8080/main.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Docker Test</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="boxes">
        <form method="post" action="index.php">
            <label>Username:</label>
            <input type="text" name="username" id="username" required></input>
            <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>