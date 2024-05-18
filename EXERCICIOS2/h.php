<?php
    $preco = readline("Digite o preço da etiqueta: \n");
    echo ("Escolha a forma de pagamento: \n" . "1.À vista em dinheiro. \n" . "2.À vista no cartão. \n" . "3.Em 2 vezes. \n" . "4.Em 3 vezes. \n");

    $pagamento = readline("Escolha a forma de pagamento: ");


    $desconto = 0;
    $juros = 0;

    switch($pagamento){
        case 1:
            $desconto = 10/100;
        break; 
        case 2:
            $desconto = 5/100;
        break; 
        case 3:
            $desconto = 0;
        break; 
        case 4:
            $juros = 10/100;
        break; 

    }
    
    if($pagamento <= 3){
        $valorApagar = ($preco * $desconto) - $preco;
        echo "o valor a ser pago pelo produto é: $valorApagar \n";
    }else {
        $valorApagar = ($preco * $juros) + $preco ;
        echo "o valor a ser pago pelo produto é: $valorApagar \n";
    }
