<?php
$bdd = mysqli_connect('localhost', 'root', '', 'jour10');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, "SELECT SUM(capacite) AS 'capacite_totale' FROM salles");
$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);
var_dump($etudiants);
?>
<html>
<table border="1">
    <thead>
        <tr>
            <th>capacite_totale</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($etudiants as $etudiant) {
            echo '<tr>';
            echo '<td>' . $etudiant['capacite_totale'] . ' ' . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

</html>