<?php

    $nasc = $_GET["nasc"];
    $idade = date('Y')-$nasc;

    echo "Sua idade atual é " . $idade . " anos.";
    if ($idade < 18) {
        echo "<br><br>Você ainda não completou 18 anos. Não pode se alistar.";
    } else {
        echo "<br><br>Espero sinceramente que você tenha se alistado.";
    }

?>