<?php
    $a = [];
    $valores = 9;
    $x = 0;
    $c = [];
  
    while($x <= $valores){
          $a[]=readline("Digite 1 valor: ");
          $x++;
    }

    $b = readline("Digite 1 valor para b: ");

   
      
    foreach ($a as $num) {
        $c[]= $num * $b;
    }
    

    echo "O valor de cada elemento de A multiplicado por B é: \n";
    print_r($c);