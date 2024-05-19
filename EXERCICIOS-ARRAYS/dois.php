<?php

    $valores = 9;
    $x = 0;

    while($x <= $valores){
        $arr[]=readline("Digite 1 valor: ");
        $x++;
    }
    
    $negativos = 0;
    $positivos = 0;
    $pares = 0;
    $impares = 0;
    
    for($i = 0; $i <= $valores; $i++){
        $num = $arr[$i];
      
        if($num < 0){
            $negativos++;
        }else if($num > 0){
            $positivos++;
        }

        if($num % 2 == 0){
            $pares++;
        }else {
            $impares++;
        }
    }

    echo "A quantidade de números positivos é: $positivos. \n A quantidade de números negativos é: $negativos. \n A quantidade de números pares é: $pares. \n A quantidade de números impares é: $impares.";


