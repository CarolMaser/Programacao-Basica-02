<?php

    $nasc = $_GET["nasc"];
    $idade = date('Y') - $nasc;
    // print_r($ano);
    $alist = $nasc + 18;
    $ano = date('Y') - $alist;
    // print_r($alist);
    $sub = date('Y') - $alist;
    $dif = $alist - date('Y');
    

    echo "Estamos em " . date('Y') . " e você tem " . $idade . " anos.";
    if ($idade <= 16 && $idade < 17) {
        echo "<br>Você ainda não completou 18 anos. Isso vai acontecer em " . $alist;
        echo "<br>Ainda falta(m) " . $dif . " ano(s).";
    } elseif ($idade == 18) {
        echo "<br>JOVEM! Você completa 18 anos esse ano de " . date('Y') . ". CORRA!";
    } else {
        echo "<br>Você já deveria ter se alistado no ano de " . $alist;
        echo "<br>Você já está atrasado " . $sub . " ano(s).";
    }
    
?>