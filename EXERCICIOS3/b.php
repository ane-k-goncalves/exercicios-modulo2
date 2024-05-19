<?php
    $x = 10;
    $soma = 0;

    for ($i = 1; $i <= $x; $i++){
        $valor = readline("Digite 1 valor: ");    

        $soma += $valor;
     }

     $media = $soma / $x;

     echo "A soma dos valores é $soma \n";
     echo "A média dos valores é $media \n";
?>

