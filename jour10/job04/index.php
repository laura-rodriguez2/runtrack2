<?php

$bdd = mysqli_connect('localhost', 'root', '', 'jour10');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, 'SELECT prenom FROM etudiants WHERE prenom LIKE "T%"');
$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);

?>
<html>
<table border="1">
    <thead>
        <tr>
            <th>Prenom</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($etudiants as $etudiant) {
            echo '<tr>';
            echo '<td>' . $etudiant['prenom'] . ' ' . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

</html>