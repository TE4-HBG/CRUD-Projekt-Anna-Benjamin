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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Docker Test</title>
</head>
<body>
	<table>
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Message</th>
		</thead>
		<tbody>
			<?php while ($user = $results->fetch_assoc()): ?>
				<tr>
					<td><?php echo $user['id']?></td>
					<td><?php echo $user['name']?></td>
					<td><?php echo $user['message']?></td>
				</tr>
			<?php endwhile ?>
		</tbody>
	</table>
</body>
</html>