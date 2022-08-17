<?php

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$n3 = $_GET["n3"];

if ($n1 > $n2) {
    if ($n3 > $n1) {
        $maior = $n3;
        $meio = $n1;
        $menor = $n2;
    } elseif ($n3 > $n2) {
        $maior = $n1;
        $meio = $n3;
        $menor = $n2;
    } else {
        $maior = $n1;
        $meio = $n2;
        $menor = $n3;
    }
} elseif ($n3 > $n2) {
    $maior = $n3;
    $meio = $n2;
    $menor = $n1;
} elseif ($n3 > $n1) {
    $maior = $n2;
    $meio = $n3;
    $menor = $n1;
} else {
    $maior = $n2;
    $meio = $n1;
    $menor =  $n3;
}
    echo "<br>MENOR: " . $menor;
    echo "<br>INTERMEDIÁRIO: " . $meio;
    echo "<br>MAIOR: " . $maior;   
?>