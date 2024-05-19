<?php
    $a = readline("Digite o primeiro número inteiro maior que 1: ");
    $b = readline("Digite o segundo número inteiro: ");
    $c = readline("Digite o terceiro número inteiro: ");

    if($a <= 1){
        echo "Valor de a deve ser maior que 1. \n.";
        exit();
    }

    function soma($a, $b, $c) {
        $soma = 0;

        for($i= $b; $i <= $c; $i++ ) {
            if($i % $a == 0){
               $soma += $i;
            }
        }

        return $soma;
    }

    echo soma($a, $b, $c);
?>
