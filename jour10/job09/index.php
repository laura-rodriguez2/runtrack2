<?php
$bdd = mysqli_connect('localhost', 'root', '', 'jour10');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, "SELECT * FROM salles ORDER BY capacite DESC");
$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);
// var_dump($etudiants);
?>
<html>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>nom</th>
            <th>id_etage</th>
            <th>capacite</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($etudiants as $etudiant) {
            echo '<tr>';
            echo '<td>' . $etudiant['id'] . ' ' . '</td>';
            echo '<td>' . $etudiant['nom'] . ' ' . '</td>';
            echo '<td>' . $etudiant['id_etage'] . ' ' . '</td>';
            echo '<td>' . $etudiant['capacite'] . ' ' . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

</html>