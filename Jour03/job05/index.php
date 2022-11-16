<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <table>
    <tr>
    <th>Consonnes</th>
    <th>Voyelles</th>
    </tr>
    
    <?php 

$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$dic = array('consonnes' => 0, 'voyelles' => 0 ); 

$nbvoyelles = 0;
$nbconsonnes = 0;
$voyelles = array( "a","A","e","E","i","I","o","O","u","U","y","Y");
$consonnes = array("b","B","c","C","d","D","f","F","g","G","h","H","j","J","k","K","l","L","m","M","n","N","p","P","q","Q","r","R","s","S","t","T","v","V","w","W","x","X","z","Z");

for ($i=0; isset($str[$i]); $i++) { 
    if (in_array($str[$i], $voyelles)) {
        $nbvoyelles++;
        $dic["voyelles"]=$nbvoyelles;
    }
    else if (in_array($str[$i], $consonnes)){
        $nbconsonnes++;
        $dic["consonnes"]=$nbconsonnes;
    }
}
?>
<tr>
    <td> <?php echo $dic['consonnes'] ?> </td>
    <td> <?php echo $dic['voyelles'] ?> </td>
</tr>
</table>
</body>
</html>