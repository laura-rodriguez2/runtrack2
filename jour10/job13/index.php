<?php

$bdd = mysqli_connect('localhost', 'root', '', 'jour10');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, "SELECT salles.nom AS 'salles-nom', etage.nom AS 'etage-nom' FROM salles INNER JOIN etage");
$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);
?>
<html>
<table border="1">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Etage</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($etudiants as $etudiant) {
            echo '<tr>';
            echo '<td>' . $etudiant["salles-nom"] . ' ' . '</td>';
            echo '<td>' . $etudiant["etage-nom"] . ' ' . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

</html>