<?php
    $arr = [];
    $valores = 9;
     $x = 0;
 
     while($x <= $valores){
         $arr[]=readline("Digite 1 valor: ");
         $x++;
     }

     $maior = $arr[0];
     $posicao = 0;

    for($i = 0; $i < $valores; $i++){
        if($arr[$i] > $maior){
            $maior = $arr[$i];
            $posicao = $i;
        }
    }

    echo "O maior número é: $maior e a sua posição é: $posicao. \n";