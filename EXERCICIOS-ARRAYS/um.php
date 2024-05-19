<?php 
    $arr = [];

    $numeros = 10;

    for($i = 0; $i < $numeros; $i++){
        $arr[]= $i * 5;
    }

    foreach($arr as $valor) {
        echo " $valor \n";
    }