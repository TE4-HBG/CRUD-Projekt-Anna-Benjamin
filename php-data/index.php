<?php 
include 'dbconn.php';


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
		<form method="post" action="add.php">
			<label>Name</label>
			<input type="text" name="name" id="name"></input>
			<br>
			<label>Message</label>
			<input type="text" name="message" id="message"></input>
			<br>
			<input type="submit" value="submit">
        </form>
    </div>
	<?php while ($user = $results->fetch_assoc()): ?>
		<div class="boxes">
			<h3><?php echo $user['name']?></h3>
			<p><?php echo $user['message']?></p>
		</div>
	<?php endwhile ?>
</body>
</html>