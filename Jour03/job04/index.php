<?php
$str = "Dans l'espace, personne ne
vous entend crier";
$index=0;

var_dump($str);
while(isset ($str[$index])){
    if($str[$index]){
        echo ($str[$index]); 
$index++;
}   
}
?> 