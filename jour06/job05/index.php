<?php $style="style1.css";
	if ($_POST==true) {
		switch ($_POST["style"]) {
			case '1':
				$style="style1.css";
				break;
			case '2':
				$style="style2.css";				
				break;
			case '3':
				$style="style3.css";
				break;
						}
	}
?>

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo $style; ?>">
</head>
<body>
	
<form action="index.php" method="post">
	<label for="css">Choisir un style</label>
	<select id="css" name="style">
		<option value="1">style1</option>	
		<option value="2">style2</option>
		<option value="3">style3</option>
	</select>
	<input type="submit" value="Changer">
</form>
</body>
</html>