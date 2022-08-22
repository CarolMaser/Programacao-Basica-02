<?php

    $opc = $_GET["opc"];
    $preco = $_GET["preco"];
   
    if ($opc == "carnaval") {
        $npreco = $preco + ($preco*10/100);
        echo "Na época do Carnaval o preço será reajustado para R$" . ($npreco);
    } elseif ($opc == "ferias") {
        $npreco = $preco + ($preco*20/100);
        echo "Na época das Férias Escolares o preço será reajustado para R$" . ($npreco);
    } elseif ($opc == "dia") {
        $npreco = $preco + ($preco*5/100);
        echo "Na época do Dia das Crianças o preço será reajustado para R$" . ($npreco);
    } elseif ($opc == "black") {
        $npreco = $preco - ($preco*30/100);
        echo "Na época da Black Friday o preço será reajustado para R$" . ($npreco);
    } else {
        $npreco = $preco - ($preco*5/100);
        echo "Na época do Natal o preço será reajustado para R$" . ($npreco);
    }
?>