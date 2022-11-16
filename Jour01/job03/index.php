<?php
$bool = true;
$entier = 3;
$str = "Tableau";
$virgule = 4.2;
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
</head>

<body>
    <header>
        <table border="1">
            <tr>
                <td>type</td>
                <td>nom</td>
                <td>valeur</td>
            </tr>
    </header>
    <main>
        <tr>
            <td>booléen</td>
            <td>$bool</td>
            <td><?php echo $bool ?></td>
        </tr>
        <tr>
            <td>nombre entier</td>
            <td>$entier</td>
            <td><?php echo $entier ?></td>
        </tr>
        <tr>
            <td>texte</td>
            <td>$str</td>
            <td><?php echo $str ?></td>
        </tr>
        <tr>
            <td>nombre décimal</td>
            <td>$virgule</td>
            <td><?php echo $virgule ?></td>
        </tr>
        </table>
    </main>
    <footer>

    </footer>
</body>

</html>