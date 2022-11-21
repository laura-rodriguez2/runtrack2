<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>J04</title>
</head>

<body>
	<form action="../job03/index.php" method="POST">
		<label for="f_name">Nom : </label>
		<input type="text" id="f_name" name="f_name"> <br> <br>
		<label for="f_name">Prénom : </label>
		<input type="text" id="l_name" name="l_name"> <br> <br>
		<input type="submit" value="submit">
	</form>

	<?php
	foreach ($_POST as $value) {
		echo $value;
		echo "<br>";
	}
	?>
</body>

</html>