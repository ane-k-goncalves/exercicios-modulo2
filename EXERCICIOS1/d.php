<?php
    $variavel = readline("Digite o valor do salário mínimo: \n");

    $salarioMin = $variavel;

    $variavel2 = readline("Digite a quantidade de quilowatts gasta: \n");

    $quilowatts = $variavel2;

    $valorCemQuilowatts = $salarioMin / 7;

    $valorUmQuilowatts = $valorCemQuilowatts / 100;

    $valorApagar = $quilowatts * $valorUmQuilowatts;

    echo "O valor em reais a ser pago: " . $valorApagar . "\n";

    $valorDescontoPorcentagem = $valorApagar * 10/100;

    $valorDesconto = $valorApagar - $valorDescontoPorcentagem;

    echo "O valor a ser pago com desconto de 10%: " . $valorDesconto . "\n";
?>


