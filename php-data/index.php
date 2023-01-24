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
			<input type="text" name="name" id="name" required></input>
			<br>
			<label>Message</label>
			<input type="text" name="message" id="message" required></input>
			<br>
			<input type="submit" value="submit">
        </form>
    </div>
	<?php while ($user = $results->fetch_assoc()): ?>
		<div class="boxes">
			<h3><?php echo $user['name']?></h3>
			<p><?php echo $user['message']?></p>
			<button id="<?php echo $user['id']?>" onclick="redirectionToDelete(this)">Ta bort</button>
			<button id="<?php echo $user['id']?>" onclick="redirectionToEdit(this)">Ändra</button>
		</div>
	<?php endwhile ?>
	<script src="scripts.js"></script>
</body>
</html>