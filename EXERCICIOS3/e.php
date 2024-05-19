<?php 
    $maior = PHP_INT_MIN;
    $menor = PHP_INT_MAX;
    do{
        $valores = (int)readline("Digite os valores desejados e 0 quando terminar: ");
        if($valores != 0){
            $maior = max($maior, $valores);
            $menor = min($menor, $valores);
        }

    }while($valores != 0);

    echo "O maior valor é $maior \n";
    echo "O menor valor é $menor \n";
?>