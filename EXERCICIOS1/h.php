<?php 
    $variavel = readline("Digite um valor para o numerador: \n");

    $numerador = $variavel;
 
    $variavel2 = readline("Digite um valor para o denominador: \n");
 
    $denominador = $variavel2;

    $numDecimal = $numerador / $denominador;

    echo "A fração em número decimal é: " . $numDecimal . "\n";
?>