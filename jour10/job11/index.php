<?php
$bdd = mysqli_connect('localhost', 'root', '', 'jour10');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, "SELECT AVG(capacite) AS 'capacite_moyenne' FROM salles");
$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);
var_dump($etudiants);
?>
<html>
<table border="1">
    <thead>
        <tr>
            <th>capacite_moyenne</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($etudiants as $etudiant) {
            echo '<tr>';
            echo '<td>' . $etudiant['capacite_moyenne'] . ' ' . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

</html>