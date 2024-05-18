<?php
    $variavel = readline("Número de carros vendidos: \n");

    $carrosVendidos = $variavel;

    $variavel2 = readline("Valor total de suas vendas: \n");

    $totalVendas = $variavel2;

    $variavel3 = readline("Seu salário fixo: \n");

    $salarioFixo = $variavel3;

    $variavel4 = readline("Valor ganho por carro vendido: \n");

    $comissao = $variavel4;

    $comissãoCarrosVen = $comissao * $carrosVendidos;

    $porcentagemVendas = $totalVendas * (5/100);

    $salarioFinal = $salarioFixo + $comissãoCarrosVen + $porcentagemVendas;
    
    echo "O salário final do vendedor: " . $salarioFinal . "\n";
?>

