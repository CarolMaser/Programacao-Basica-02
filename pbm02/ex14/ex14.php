<?php

    $valor = $_GET["valor"];
    $desc = ($valor/100)*10;
    $nvalor = $valor-$desc;

    echo "Você comprou R$" . $valor . " na nossa loja. OBRIGADO!";
    if ($valor < 500) {
        echo "<br><br>Volte sempre!";
    } else {
        echo "<br><br>========== ATENÇÃO ==========";
        echo "<br><br>Por fazer mais de R$500,00 em compras,";
        echo "<br>você vai receber R$" . round($desc, 2) . " de desconto.";
        echo "<br><br>O valor a ser pago será de R$" . round($nvalor, 2) . "!";
        echo "<br><br>Volte sempre!";
    }
?>
