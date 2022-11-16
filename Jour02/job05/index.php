<?php
for ($i = 2; $i <= 1000; $i++) {
    $counter = 0;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $counter++;
        }
    }
    if ($counter == 0) {
        echo "$i<br>";
    }
}
?>
