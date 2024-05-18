<?php 
    $variavel = readline("Digite a hora: \n");

    $hora = $variavel;

    $horaEmMin = 60;

    $dia = 24;

    $horasPassadasDiaEmMin = $hora * $horaEmMin; 

    echo "Os minutos que se passaram desde o início do dia são: " . $horasPassadasDiaEmMin . "\n";
?>

