<?php

    $num = $_GET["num"];

    echo "O número " . $num . " digitado é ";
    if ($num > 0) {
        echo " POSITIVO.";
    } elseif ($num < 0) {
        echo " NEGATIVO.";
    } else {
        echo " NULO.";
    }
    
?>