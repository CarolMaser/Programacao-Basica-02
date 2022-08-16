<?php

    $ano = $_GET["ano"];

    if ($ano % 4 == 0 && $ano % 100 != 0 || $ano % 400 == 0) {
        echo "O ano de " . $ano . " é BISSEXTO";
    } else {
        echo "O ano de " . $ano . " NÃO é BISSEXTO";
    }   
    

?>