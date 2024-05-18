<?php
    $anoNascimento = readline("Digite seu ano de nascimento: \n");

    $idade = 2024 - $anoNascimento;
    
    if($idade >= 18){
        echo "Pode votar e tirar Carteira de Habilitação! \n";
    }else if ($idade >= 16){
        echo "Pode votar mas ainda não pode tirar Carteira de Habilitação!\n";
    }else{
        echo "Não pode votar e não pode tirar Carteira de Habilitação!\n";
    }

?>
