<?php
$str = "Tous ces instants seront
perdus dans le temps comme les larmes sous la pluie.";
$index=0;

while(isset($str[$index])){
    if($index%2 == 0){
        echo '';
    }
    else{
        echo ($str[$index]); 
    }
$index++;
}   
?>