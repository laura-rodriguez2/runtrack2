<?php
function calcule($a, $operation, $b)
{
    if ($operation === "+") {
        return $a + $b;
    } else if ($operation === "-") {
        return $a - $b;
    } else if ($operation === "*") {
        return $a * $b;
    } else if ($operation === "/") {
        return $a / $b;
    } else if ($operation === "%") {
        return $a % $b;
    } else {
        echo "Erreur : l'opération n'est pas valide";
    }
}
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
    <form action="" method="get">
        <input type="number" name="a" id="a" value="">
        <select name="operation" id="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="number" name="b" id="b" value="">
        <input type="submit" value="=">
        <input type="number" name="result" id="result" value="
        <?php
        if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["operation"])) {
            $a = $_GET["a"];
            $b = $_GET["b"];
            $operation = $_GET["operation"];
            echo calcule($a, $operation, $b);
        }
        ?>
        ">
    </form>

    <?php
    if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["operation"])) {
        $a = $_GET["a"];
        $b = $_GET["b"];
        $operation = $_GET["operation"];
        echo "$a $operation $b";
    }
    ?>
</body>
</html>