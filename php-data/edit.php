<?php
include 'dbconn.php';

$userId = $_GET['id'];
$sql = "SELECT name, message FROM users WHERE id=$userId";
$result = $mysqli->query($sql);
$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST' || !empty($_POST)) {
    $name = $_POST['name'];
    $message = $_POST['message'];

    $sql = "UPDATE users SET name='$name', message='$message' WHERE id=$userId";
    mysqli_query($mysqli, $sql);

    header("Location: http://localhost:8080/");
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
	<div class="addbox">
		<form method="post" action="edit.php?id=<?php echo $userId ?>">
			<label>Name</label>
			<input type="text" name="name" id="name" value="<?php echo $data["name"] ?>" required></input>
			<br>
			<label>Message</label>
			<input type="text" name="message" id="message" value="<?php echo $data["message"] ?>" required></input>
			<br>
			<input type="submit" value="submit">
        </form>
    </div>
</body>
</html>