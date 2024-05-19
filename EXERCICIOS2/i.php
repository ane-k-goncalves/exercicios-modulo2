<?php 
    $num = readline("Digite um número: ");

    if(($num >= 30) && ($num <= 90)){
        echo "Está entre 30 e 90, o número é $num \n";
    }else if($num >= 120){
        echo "É maior que 120, o número é $num \n";
    }else {
        echo "Não se encaixa em nenhuma das condições, o número é $num \n";
    }
?>