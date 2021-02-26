<?php 
$i = 0;
while ($i++ < 14) {

     #condicion de no multiplo de 3 usando para distinto la sintaxis !=
    
    if ($i % 3 != 0){
            echo $i . " no es múltiplo de 3";
            break;
    }

    echo "El valo de i es: ",$i,"<br>";
}
      
  ?>   