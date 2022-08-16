<?php

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];

    if ($n1 < $n2) {
        echo "Os valores digitados em ordem são " . $n1 . " e " . $n2;
    } elseif ($n1 > $n2) {
        echo "Os valores digitados em ordem são: " . $n2 . " e " . $n1;
    } else {
        echo "Não há necessidade de ordená-los. Os valores são iguais!";
    }
?>