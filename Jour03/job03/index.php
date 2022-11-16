<?php
$str = "I'm sorry Dave I'm afraid I can't
do that";
$index=0;

while(isset ($str[$index])){
    if($str[$index]=="a"or $str[$index]=="e" or $str[$index]=="i" or $str[$index]=="o" or $str[$index]=="u" or $str[$index]=="y" or $str[$index]=="I"){
        echo ($str[$index]); 
    }
    else{
        echo '';
    }
$index++;
}   
?> 