<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J04</title>
</head>

<body>
    <form action="" method="get">

        <label for="name">Nom :</label>
        <input type="text" name="nom" id="nom">

        <label for="name">Prenom: </label>
        <input type="text" name="prenom" id="prenom">


        <label for="age">Age :</label>
        <input type="text" name="age" id="age">

        <input type="submit" value="Envoyer">
        <br>
    </form>



    <?php

    $value = 0;

    foreach ($_GET as $var) {
        $value = $value + 1;
    }

    echo "Nombre d’argument GET : $value ";


    ?>

</body>

</html>