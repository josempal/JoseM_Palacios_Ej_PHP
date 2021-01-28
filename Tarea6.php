<?php

    $color = "verde";

    $$color = "es horrible";

    echo $color, "<br>";

    echo ${$color}, "<br>";
    
    $color = "rojo";

    echo $color, "<br>";

    /* Provoca el siguiente error: Undefined variable: rojo in ~/Tarea6.php on line 15
        El valor de la variable ha cambiado y cambia por tanto el de la creada a partir
        del valor de la misma. Como no se ha vuelto a asignar la variable $rojo no existe. */ 
    echo ${$color}, "<br>";
?>