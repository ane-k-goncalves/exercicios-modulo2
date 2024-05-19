<?php 
    $num = readline("Digite um número inteiro: ");

    function parImpar($num) {
        if($num % 2 == 0){
            echo "true \n";
        }else {
            echo "false \n";
        }
        return;
    }

    echo parImpar($num);

?>
