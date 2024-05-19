<?php 
    $a = [];
    $b = [];
    $valores = 9;
    $x = 0;
    $c = [];
    
   
    while($x <= $valores){
       $a[]=(int)readline("Digite 1 valor para o vetor a: ");
       $b[]=(int)readline("Digite 1 valor para o vetor b: ");
       $x++;
    }

    for($i = 0; $i <= $valores; $i++) {
        $c[]= $a[$i] * $b[$i];
    }

    echo "A multiplicação dos dados dos vetores, nas respectivas posições é: \n";
    print_r($c);