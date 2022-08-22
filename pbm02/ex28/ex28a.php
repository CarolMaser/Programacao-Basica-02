<?php

    $preco = $_GET["preco"];
    $opc = $_GET["opc"];
   
    switch ($opc) {
        $npreco = $preco + ($preco*10/100);
        case "carnaval":            
            echo "Na época do Carnaval, o preço do produto aumenta para R$" . $npreço;
            break;
        case "ferias":
            $npreco = $preco + ($preco*20/100);
            echo "Na época das Férias Escolares, o preço do produto aumenta para R$" . $npreço;
            break;
        case "dia":
            $npreco = $preco + ($preco*5/100);
            echo "Na época do Dia das Crianças, o preço do produto aumenta para R$" . $npreço;
            break;
        case "black":
            $npreco = $preco - ($preco*30/100);
            echo "Na época da Black Friday, o preço do produto cai para R$" . $npreço;
            break;
        case "natal":
            $npreco = $preco - ($preco*5/100);
            echo "Na época do Natal, o preço do produto cai para R$" . $npreço;
            break;
    }
?>