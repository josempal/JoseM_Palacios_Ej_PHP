<?php

    $var1 = "Esto es una variable";

    $var1 = "Valor de la variable cambiada";

    echo $var1, "<br>";

    function variableScope() {

        $var1 = "Esta variable se llama igual que la anterior pero tiene otro valor
                    por estar dentro de una función";

        echo $var1;
    }

    variableScope();
?>