<?php   

$est = $_GET["estado"];

    // echo "Nascendo em " . $estado . " você é ";

if ($est == "RJ") {
    echo "Nascendo em " . $est . " você é Carioca";
} elseif ($est == "SP") {
    echo "Paulista";
} else { 
    echo "natural da sua cidade, mas ainda não sei como te chamar.";
}

?>