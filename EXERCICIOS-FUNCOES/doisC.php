<?php
    $a = readline("Digite o primeiro número inteiro positivo: ");
    $b = readline("Digite o segundo número inteiro positivo: ");
    
    function soma($a,$b) {
        if($a < $b){
           $primeiro = $a + 1;
           $ultimo = $b -1 ;
        }else {
            $primeiro = $b + 1;
            $ultimo = $a - 1 ;
        }
        
        $soma = $primeiro + $ultimo;

        return "A soma é : $soma \n";
    }

    echo soma($a, $b);
?>
