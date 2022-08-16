<?php

    $nasc = $_GET["nasc"];
    $idade = date('Y')-$nasc;
    

    echo "Hoje, em " . date('Y') . ", você tem " . $idade . " anos, certo?";
    echo "<br>====================================";

    if ($idade < 65) {
        echo "<br>Seja bem-vindo(a) ao BANCO ESTUDONAUTA!";
    } else {
        echo "<br>Seja bem-vindo(a) ao BANCO ESTUDONAUTA!";
        echo "<br><br>= ATENÇÃO! DIRIJA-SE À FILA PREFERENCIAL =";
    }

?>