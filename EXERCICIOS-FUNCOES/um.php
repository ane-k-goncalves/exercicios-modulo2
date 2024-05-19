<?php
    $operacao = readline("Qual o tipo de operação deseja realizar: 1.Soma 2.Subtração 3.Multiplicação 4.Divisão ");
    $a = readline("Digite o primeiro valor: ");
    $b = readline("Digite o segundo valor: ");

    if($operacao == 1) {

       echo soma($a, $b);

    }else if($operacao == 2) {

        echo subtracao($a,$b);

    }else if($operacao == 3) {

        echo multiplicacao($a,$b);

    }else if($operacao == 4) {

        echo divisao($a,$b);

    }else {
        
        echo "Escolha uma operação válida! \n";
        
    }

    function soma($a, $b) {
        return  $a + $b . "\n";
    }

    function subtracao($a, $b) {
        return $a - $b . "\n";
    }

    function multiplicacao($a, $b) {
        return $a * $b . "\n";
    }

    function divisao($a, $b) {
        if(($a == 0)||($b == 0)){
            return "Erro: não pode ser dividido por zero. \n";
        }
            
        return $a / $b . "\n";
    
    }