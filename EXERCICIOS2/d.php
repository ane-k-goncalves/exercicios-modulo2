<?php
    $avaliacao1 = readline("Digite a nota da primeira avaliação: \n");
    $avaliacao2 = readline("Digite a nota da segunda avaliação: \n");

    $media = ($avaliacao1 + $avaliacao2) / 2;

    if($media >= 6){
        echo "Foi aprovado!Sua média final é: $media \n";
    } else {
        echo "Foi reprovado!Sua média final é: $media \n";
    }

?>