<?php

    $dist = $_GET["dist"];
    
    if ($dist <= 200) {
        $v1 = ($dist * 0.50);
        echo "Uma viagem de " . $dist . " km vai custar R$ 0,50/Km.";
        echo "<br><br>VALOR TOTAL: R$" . number_format($v1, 2);
    } else {
        $v2 = ($dist * 0.35);
        echo "Uma viagem de " . $dist . " km vai custar R$ 0,35/Km.";
        echo "<br><br>VALOR TOTAL: R$" . number_format($v2, 2);   
    }
?>