<?php
    $macas = readline("Digite a quantidade de maças compradas: \n");

    $duzia = 1;

    $menosqueDuzia = 1.30;

    if($macas >= 12){
        $valor = $duzia * $macas;
        echo "Custo total da compra: $valor \n";
    } else {
        $valor = $menosqueDuzia * $macas;
        echo "Custo total da compra: $valor \n";
    }
?>


