<?php

function factorial($num) {
    if ($num == 0) {
        return 1; 
    } else {
        return $num * factorial($num - 1); 
    }
}

$result = factorial(20);
echo "El factorial de 20 es $result"; 

?>