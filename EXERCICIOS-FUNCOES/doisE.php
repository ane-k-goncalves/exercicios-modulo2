<?php
    $altura = readline("Digite a sua altura: ");
    $sexo = readline("Digite o seu sexo: ");

    function pesoIdeal($altura, $sexo){

        $pesoIdeal = 0;

        if($sexo == "masculino"){
            $pesoIdeal = 72.7 * $altura - 58;
        }else if ($sexo == "feminino") {
            $pesoIdeal = 62.1 * $altura - 44.7;
        }

        return "O seu peso ideal é $pesoIdeal. \n";

    }

    echo pesoIdeal($altura, $sexo);
?>

