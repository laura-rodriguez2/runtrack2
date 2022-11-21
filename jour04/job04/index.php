<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>J04</title>
</head>

<body>
	<form method="POST" action="../job04/index.php">

		<label>Nom</label>
		<input type="text" name="Nom">

		<label>Prenom</label>
		<input type="text" name="Prénom">

		<input type="submit" value="Envoyer">
	</form>

	<table border=1>
		<thead>
			<th>Arguments</th>
			<th>Valeurs</th>
		</thead>
		<?php

		foreach ($_POST as $arg => $value) {
			echo
			"<tr>
		<td>" . $arg . "</td>
		<td>" . $value . "</td>
	</tr>";
		}
		?>
</body>

</html>