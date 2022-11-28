<?php

$bdd = mysqli_connect('localhost', 'root', '', 'jour10');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, "SELECT nom, capacite FROM salles");
$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);

?>
<html>
<table border="1">
    <thead>
        <tr>
            <th>nom</th>
            <th>capacite</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($etudiants as $etudiant) {
            echo '<tr>';
            echo '<td>' . $etudiant['nom'] . ' ' . '</td>';
            echo '<td>' . $etudiant['capacite'] . ' ' . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

</html>