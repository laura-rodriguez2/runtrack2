<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>J04</title>
</head>

<body>
<form method="GET" action="../job06/index.php">
<label>Nombre</label>
<input type="text"  name="nombre">
<input type="submit" value="Envoyer" >
</form>
<?php

    if ($_GET==true) 
if ($_GET["nombre"]%2 == 0) {
    echo " Nombre pair";
}
else{
    echo " Nombre impair";
}
?>


</body>

</html>