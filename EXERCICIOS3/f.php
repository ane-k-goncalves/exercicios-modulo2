<?php 

    do{
        $avaliacao1 = readline("Digite a nota da avaliação 1: ");
        $avaliacao2 = readline("Digite a nota da avaliação 2: ");

        $media = ($avaliacao1 + $avaliacao2) / 2;
        
        echo "A média do aluno é: $media \n";

        $resposta = readline("Novo cálculo: (S/N)");
        
    }while($resposta === "S");
?>