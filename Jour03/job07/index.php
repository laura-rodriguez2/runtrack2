<?php
function mystrlen($str)
{
    $count = 0;
    for ($i = 0; $i < 1000000; $i++) {
        if (@$str[$i] != "") $count++;
        else break;
    }
    return $count;
}

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

for ($i = 0; $i < mystrlen($str); $i++) {
    if ($i == mystrlen($str) - 1) {
        echo $str[0];
    } else {
        echo $str[$i + 1];
    }
}
