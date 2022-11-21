<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>J04</title>
</head>

<body>
	<form method="POST" action="../job05/index.php">
		<label>Username</label>
		<input type="text" name="username">
		<label>Password</label>
		<input type="text" name="password">
		<input type="submit" value="Envoyer">
	</form>

	<?php
	$p1 = "C'est pas ma guerre";
	$p2 = "Votre pire cauchemar";

	if ($_POST == true) {
		if ($_POST["username"] == "John" && $_POST["password"] == "Rambo") {
			echo $p1;
		} else {
			echo $p2;
		}
	}
	?>
</body>

</html>