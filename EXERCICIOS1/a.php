<?php
    $variavel = readline("Digite um valor para a: \n");

    $a = $variavel;
    echo $a . "\n";

    $variavel2 = readline("Digite um valor para b: \n");

    $b = $variavel2;
    echo $b . "\n";

    $resto = $a % $b;
    $quociente = $a / $b;
    echo "O quociente é : " . $quociente . " , o resto é: " . $resto . "\n";

?>