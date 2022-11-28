<?php

$bdd = mysqli_connect('localhost', 'root', '', 'jour10');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, "SELECT * FROM etudiants WHERE YEAR (NOW()) - YEAR (naissance) <= 18");
$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);

?>
<html>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Naissance</th>
            <th>Sexe</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($etudiants as $etudiant) {
            echo '<tr>';
            echo '<td>' . $etudiant['id'] . ' ' . '</td>';
            echo '<td>' . $etudiant['prenom'] . ' ' . '</td>';
            echo '<td>' . $etudiant['nom'] . ' ' . '</td>';
            echo '<td>' . $etudiant['naissance'] . ' ' . '</td>';
            echo '<td>' . $etudiant['sexe'] . ' ' . '</td>';
            echo '<td>' . $etudiant['email'] . ' ' . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

</html>