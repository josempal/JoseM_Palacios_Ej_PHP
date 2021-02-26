<?php
echo "<pre>";
function HolaMundo($var2)
{
    echo $var2;
}

echo HolaMundo("Hola Alex") . "\n";

/*

.... más lineas de código

*/

echo HolaMundo("Hola Luisa");

/*

.... más lineas de código

*/
 # No funciona ya que la función espera al menos un argumento como parametro y no se le manda ninguno
echo HolaMundo();
?>