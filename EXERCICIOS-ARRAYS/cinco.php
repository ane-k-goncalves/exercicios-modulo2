<?php
     $arr = [];
     $valores = 9;
     $x = 0;
   
     while($x <= $valores){
           $arr[]=readline("Digite 1 valor: ");
           $x++;
     }


    $arrRev = array_reverse($arr);

     echo "O array invertido é: \n";
     print_r($arrRev);
?>