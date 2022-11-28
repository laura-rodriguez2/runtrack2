<?php

$bdd = mysqli_connect('localhost', 'root', '', 'jour10');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, "SELECT COUNT(id) AS 'nb_etudiants' FROM etudiants");
$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);
var_dump($etudiants);
?>
<html>
<table border="1">
    <thead>
        <tr>
            <th>nb_etudiants</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($etudiants as $etudiant) {
            echo '<tr>';
            echo '<td>' . $etudiant['nb_etudiants'] . ' ' . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

</html>