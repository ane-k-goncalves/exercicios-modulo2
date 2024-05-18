<?php
    $variavel = readline("Digite um valor para a base: \n");

    $base = $variavel;

    $variavel2 = readline("Digite um valor para a altura: \n");

    $altura = $variavel2;

    $area = $base * $altura;

    echo "A área do retângulo é: " . $area . "\n";

    $perimetro = 2 * ($base + $altura);

    echo "O perímetro do retângulo é: " . $perimetro . "\n";

    $diagonal = sqrt(($base * $base)+($altura * $altura));

    echo "A diagonal do retângulo é: " . $diagonal . "\n";
?>