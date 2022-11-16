<?php
            for($nb  = 0; $nb <= 1337; $nb++){  
                if($nb > 0 && $nb <= 20) {
                    echo ("<i>$nb</i>"); 
                    echo "<br/>";
                }  
                elseif($nb==42) {
                    echo "Hello LaPlateforme_"; 
                    echo "<br/>";
                }  
                elseif ($nb >= 25 && $nb <= 50) {
                    echo ("<u>$nb</u> <br>");
                }
                else{
                    echo ("$nb <br>");
                }
            }   
?>