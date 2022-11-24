<?php

setcookie('nbvisites', '0', time() + 3600);

if (isset($_POST['reset'])) {
    $_COOKIE['nbvisites'] = 0;
}

if (isset($_COOKIE['nbvisites'])) {
    $counter = ($_COOKIE['nbvisites'] + 1);
    setcookie('nbvisites', $counter);
} else {
    $_COOKIE['nbvisites'] = 1;
}

echo 'Cette page a été visitée ' . $_COOKIE['nbvisites'] . ' fois';


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>

<body>
    <form action="" method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>