<?php

    $num = $_GET["num"];
        
    if ($num > 0) {
        $inv = 1/$num;
        echo "O inverso de " . $num . " é igual a " . $inv;
    } else {
        $opo = $num*(-1);
        echo "O oposto de " . $num . " é igual a " . $opo;
    }     

?>