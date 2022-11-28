<?php

$bdd = mysqli_connect('localhost', 'root', '', 'jour10');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, "SELECT nom,prenom,naissance FROM etudiants WHERE sexe = 'Femme'");
$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);

?>
<html>
<table border="1">
    <thead>
        <tr>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Naissance</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($etudiants as $etudiant) {
            echo '<tr>';
            echo '<td>' . $etudiant['prenom'] . ' ' . '</td>';
            echo '<td>' . $etudiant['nom'] . ' ' . '</td>';
            echo '<td>' . $etudiant['naissance'] . ' ' . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

</html>