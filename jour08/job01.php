<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

if (isset($_SESSION['nbvisites'])) {
    ($_SESSION['nbvisites']++);
} else {
    $_SESSION['nbvisites'] = 1;
}

echo 'Cette page a été visitée ' . $_SESSION['nbvisites'] . ' fois';

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