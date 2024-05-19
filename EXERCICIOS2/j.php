<?php 
    $valor = readline("Qual o valor do produto? ");

    if($valor < 20){
        $lucro = ((45/100) * $valor) + $valor;
        echo "O preço da venda é: $lucro \n";
    }else {
        $lucro = ((30/100) * $valor) + $valor;
        echo "O preço da venda é: $lucro \n";
    }

?>