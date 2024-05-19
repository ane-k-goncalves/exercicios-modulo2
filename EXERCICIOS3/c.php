<?php

    $soma = 0;
    $x = 0;

    do{
        $valores = readline("Digite os valores desejados e 0 quando terminar: ");

        if($valores != 0){
            $soma += $valores;
            $x++;
        }
        
    }while($valores != 0);

    $media = $soma / $x;

    echo "A soma dos valores é: $soma \n";
    echo "A média dos valores é: $media \n";
    echo "A quantidade de valores lido é: $x \n";
?>