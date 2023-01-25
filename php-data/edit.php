<?php
session_start();
include 'dbconn.php';

$userId = $_GET['id'];
$sql = "SELECT title, message FROM users WHERE id=$userId";
$result = $mysqli->query($sql);
$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST' || !empty($_POST)) {
    $title = $_POST['title'];
    $message = $_POST['message'];

	$sql = "UPDATE users SET title=?, message=? WHERE id=$userId";
	$stmt = $mysqli->prepare($sql);
	$stmt->bind_param("ss", $title, $message);
	$stmt->execute();

	$results = $stmt->get_result();

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
	<div class="addbox">
		<form method="post" action="edit.php?id=<?php echo $userId ?>">
			<label>title</label>
			<input type="text" name="title" id="title" value="<?php echo $data["title"] ?>" required></input>
			<br>
			<label>Message</label>
			<input type="text" name="message" id="message" value="<?php echo $data["message"] ?>" required></input>
			<br>
			<input type="submit" value="submit">
        </form>
    </div>
</body>
</html>