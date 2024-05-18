<?php
    $variavel = readline("Digite um valor para a: \n");

    $a = $variavel;
    echo $a . "\n";

    $variavel2 = readline("Digite um valor para b: \n");

    $b = $variavel2;
    echo $b . "\n";

    $variavel3 = readline("Digite um valor para c: \n");

    $c = $variavel3;
    echo $a . "\n";

    $variavel4 = readline("Digite um valor para d: \n");

    $d = $variavel4;
    echo $d . "\n";

    $a *= 1;

    $b *= 2;

    $c *= 3;

    $d *= 4;

    $media = $a + $b + $c + $d;

    $pesos = 1 + 2 + 3 + 4;

    echo $media . "\n";
    echo $pesos  . "\n";

    $mediaPonderada = $media / $pesos;

    echo "A média ponderada é : " . $mediaPonderada;
?>