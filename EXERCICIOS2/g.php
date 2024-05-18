<?php 
    $idade = readline("Digite a idade do nadador: \n");

    if($idade >= 18){
        echo "Categoria : Sênior.\n";
    }else if($idade >= 14){
        echo "Categoria : Juvenil B.\n";
    }else if($idade >= 11){
        echo "Categoria : Juvenil A.\n";
    }else if($idade >= 8){
        echo "Categoria : Infantil B.\n";
    }else if ($idade >= 5 && $idade <= 7){
        echo "Categoria : Infantil A.\n";
    }
?>
    