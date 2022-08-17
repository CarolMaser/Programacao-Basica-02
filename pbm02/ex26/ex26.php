<?php

    $opc = $_GET["opc"];
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $soma = $n1+$n2;
    $sub = $n1-$n2;
    $mult = $n1*$n2;
    $div = $n1/$n2;

    switch ($opc) {
        case "adic":
            echo "Você escolheu adição.";
            echo "<br>O resultado da soma é " . $soma;
            break;
        case "sub";
            echo "Você escolheu subtração.";
            echo "<br>O resultado do cálculo é " . $sub;
            break;
        case "mult";
            echo "Você escolheu multiplicação.";
            echo "<br>O resultado do cálculo é " . $mult;
            break;
        case "div";
            echo "Você escolheu divisão.";
            echo "<br>O resultado do cálculo é " . $div;
            break;
    }

?>