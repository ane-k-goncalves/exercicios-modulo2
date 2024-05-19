<?php 
    $quantidade = 0;
    $soma = 0;

    for ($i= 50; $i <= 70; $i++){
        if($i % 2 == 0){
            $soma = $soma + $i;
            $quantidade++;
        }
            
    }
     
    /*while($ii >= 50 && $ <= 70){
        if($i % 2 == 0){
            $soma = $soma + $i;
            $quantidade++;
        }
        $x++;
        $i++;
    
    }*/

    $media = $soma / $quantidade;

    echo "A soma dos valores pares é: $soma \n";
    echo "A média dos valores pares é: $media \n";

?>