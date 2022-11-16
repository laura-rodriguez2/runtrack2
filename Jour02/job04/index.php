<?php
for($nb=0; $nb<= 100; $nb++){
    if($nb %3==0 and $nb %5==!0){
        echo "Fizz <br>";
    }
    else if($nb %5==0 and $nb %3==!0){
        echo "Buzz <br>";
    }
    else if($nb %5==0 and $nb %3==0){
        echo "FizzBuzz <br>";
    }
    else{
        echo "$nb <br>";
        }
}
?>