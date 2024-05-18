<?php 
    $variavel = readline("Digite um valor para a diagonal 1: \n");

    $diagonal1 = $variavel;
 
    $variavel2 = readline("Digite um valor para a diagonal 2: \n");
 
    $diagonal2 = $variavel2;
    
    $areaLosango = ($diagonal1 * $diagonal2) / 2;

    echo "A área do losango é: " . $areaLosango . "\n";
?>