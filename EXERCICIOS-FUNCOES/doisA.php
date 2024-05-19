<?php
    $num = readline("Digite um número inteiro: ");

    function multiplo($num) {
        $i = 4;

        if(($num * $i == 0)||($num % $i == 0)){
           echo "true \n";
        }else {
           echo "false \n";
        }
        return;
    }

    echo multiplo($num);
?>