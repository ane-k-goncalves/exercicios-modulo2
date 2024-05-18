<?php
    $variavel = readline("Digite um valor para o produto: \n");

    $produto = $variavel;
    
    $valorReajuste = 1/100;

    $reajuste = $produto *$valorReajuste;

    $valorReajustado = $produto + $reajuste;

    echo "O valor do produto com reajuste de 1% é: " . $valorReajustado . "\n";

?>