<?php
$nb=array(200, 204, 173, 98, 171, 404, 459);
$index=0;
while ($index<7){
if ($nb[$index]%2 === 0) {
    echo ($nb[$index]." est pair <br/>");
}
else{
    echo ($nb[$index]." est impair <br/>");
}
$index++;
}
?>