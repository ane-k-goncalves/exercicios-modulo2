<?php
    $jogador1 = readline("Escolha um número entre 1 e 2: ");
    $jogador2 = readline("Escolha um número entre 1 e 2: ");
    $jogador3 = readline("Escolha um número entre 1 e 2:" );

    if(($jogador1 == 1) && ($jogador2 == 2) && ($jogador3 == 2)){
        echo "$jogador1 é o vencedor da primeira rodada";
        $vencedor1 = $jogador1;
    }else if(($jogador1 == 2) && ($jogador2 == 1) && ($jogador3 == 2)){
        echo "$jogador2 é o vencedor da primeira rodada";
        $vencedor1 = $jogador2;
    }else if (($jogador1 == 2) && ($jogador2 == 2) && ($jogador3 == 1)){
        echo "$jogador3 é o vencedor da primeira rodada";   
        $vencedor1 = $jogador3;
    } else if (($jogador1 == 2) && ($jogador2 == 1) && ($jogador3 == 1)){
        echo "$jogador1 é o vencedor da primeira rodada";
        $vencedor1 = $jogador1;
    }else if (($jogador1 == 1) && ($jogador2 == 2) && ($jogador3 == 1)){
        echo "$jogador2 é o vencedor da primeira rodada";
        $vencedor1 = $jogador2;
    } else if (($jogador1 == 1) && ($jogador2 == 1) && ($jogador3 == 2)){
        echo "$jogador3 é o vencedor da primeira rodada";
        $vencedor1 = $jogador3;
    }else {
        echo "empate, começe novamente";
    }

    $jogador4 = readline("Escolha o jogador para segunda rodada de par-ou-impar: 1.joagdor");

    