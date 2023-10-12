<?php

$multiplo = function($numero )
{
    if($numero % 5 == 0){
        echo 'Es multiplo';
    }
    else{
        echo 'No es multiplo';
    }
};

$multiplo(22);
