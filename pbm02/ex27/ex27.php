<?php

    $peso = $_GET["peso"];
    $opc = $_GET["opc"];
   
    echo "No planeta " . $opc . " seu peso seria ";
    switch ($opc) {
        case "Mercurio":
            echo $peso * 0.37;
            // echo "No planeta mercúrio seu peso seria " . $merc;
            break;
        case "Venus":
            echo $peso * 0.88;
            break;
        case "Marte":
            echo $peso * 0.38;
            break;
        case "Jupiter":
            echo $peso * 2.64;
            break;
        case "Saturno":
            echo $peso * 1.5;
            break;
        case "Urano":
            echo $peso * 1.17;
            break; 
        case "Netuno":
            echo $peso * 1.18;
            break;
        }
?>