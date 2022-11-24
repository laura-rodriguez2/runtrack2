<?php
    function occurences($str, $char){
        $count = 0;
        for ($i=0; isset($str[$i]); $i++) { 
            if ($str[$i] === $char) {
                $count++;
            }
        }
        return $count;
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
        <input type="text" name="str" placeholder="entrez une phrase">
        <br>
        <input type="text" name="char" placeholder="entrez un caractère">
        <input type="submit" value="chercher">
    </form>

    <?php
        if (isset($_GET["str"]) && isset($_GET["char"])) {
            $str = $_GET["str"];
            $char = $_GET["char"];
            for ($i=0; isset($char[$i]); $i++){
            }
            if ($i > 1) {
                echo "Vous ne pouvez entrer qu'un seul caractère";
            }
            else {
                echo $str;
                echo "";
                echo "<br> Le charactère '" . $char . "' apparait " . occurences($str, $char) . " fois";
            }
        }
    ?>

</body>
</html>