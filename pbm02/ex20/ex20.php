<?php

    $din = $_GET["din"];
    $hora = new DateTime('07:00');
    $timezone = new DateTimeZone('America/Sao_Paulo');
    $agora = new DateTime('now', $timezone);
    // print_r($agora); die;

    if ($agora <= $hora && $din >= 20) {
        echo "Você consegue comprar o ingresso.";
        echo "<br>SEJA BEM-VINDO(A)!";
    } else {
        echo "Infelizmente, não é possível comprar o ingresso.";
        echo "<br>Tente outro dia!";
    }

?>