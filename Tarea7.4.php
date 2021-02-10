<?php
    $a=23;
    $b="pepe";
    //probando el operador ++;

    // El operador ++ aumenta el valor de la variable antes de realizar cualquier operación
        print_r("Probando el operador ++");
        echo "<br>";
        // Aumenta el valor en 1 y lo muestra
        echo ++$a;
        echo "<br>";
        // Lo aumenta y después multiplica por dos
        echo ++$a*2;
        echo "<br>";
        // Aumenta el último carácter al tratarse de un string, es decir la e pasa a ser f
        echo ++$b;
        echo "<br>";
        // Muestra 0 al intentar realiar una operación matemática con un string
        echo ++$b*2;
        echo "<br>";
    //probando el operador --;
        print_r("Probando el operador --");
        echo "<br>";
        // Resta 1 al valor de la variable antes de mostrarla
        echo --$a*2;
        $b="pepe";
        echo "<br>";
        $b="pepe";
        echo "<br>";
    //probando el operador +=n;
        print_r("Probando el operador +=n");
        echo "<br>";
        // Añade 5 al valor de la variable antes de mostrarla
        echo $a+=5;
        echo "<br>";
        // Muestra lo mismo que la anterior operación ya que el cambio de valor se hizo antes de mostrarlo
        echo $a;
        echo "<br>";
        // Añade 5 al valor de la variable, la multiplica por dos y la muestra
        echo 2*$a+=5;
        echo "<br>";
        // Muestra el mismo valor que el anterior ya que lo multiplica, pero no cambia el valor de la variable
        echo 2*$a;
        echo "<br>";
        // Como era un string, muestra el valor añadido: 5
        echo $b+=5;
        echo "<br>";
        // Muestra lo mismo que la anterior operación ya que el cambio de valor se hizo antes de mostrarlo
        echo $b;
        echo "<br>";
        // Añade 5 al valor de la variable, la multiplica por dos y la muestra
        echo 2*$b+=5;
        echo "<br>";
        // Muestra el mismo valor que el anterior ya que lo multiplica, pero no cambia el valor de la variable
        echo 2*$b;
        echo "<br>";
    //probando el operador –=n;
        print_r("Probando el operador -=n");
        echo "<br>";
        // Resta 5 al valor de la variable y lo muestra
        echo $a-=5;
        echo "<br>";
        // Muestra lo mismo que la anterior operación ya que el cambio de valor se hizo antes de mostrarlo
        echo $a;
        echo "<br>";
        // Resta 5 al valor de la variable, la multiplica por dos y la muestra
        echo 2*$a-=5;
        echo "<br>";
        // Muestra lo mismo que la anterior operación ya que el cambio de valor se hizo antes de mostrarlo
        echo 2*$a;
        echo "<br>";
        // Resta 5 al valor de la variable antes de mostrarla
        echo $b-=5;
        echo "<br>";
        // Muestra lo mismo que la anterior operación ya que el cambio de valor se hizo antes de mostrarlo
        echo $b;
        echo "<br>";
        // Muestra 0 debido a que resta 5 al valor de la variable y pasa a ser 0
        echo 2*$b-=5;
        echo "<br>";
        // Muestra lo mismo que la anterior operación ya que el cambio de valor se hizo antes de mostrarlo
        echo 2*$b;
        echo "<br>";
    //probando operadores de post-incremento;
        print_r("Probando el operadores de post-incremento");
        echo "<br>";
        // Muestra el valor de la variable y después lo aumenta
        echo $a++;
        echo "<br>";
        // El valor es distinto puesto que se incrementó posteriormente a mostrarlo
        echo $a;
        echo "<br>";
        // Muestra el valor multiplicado por 2 y después lo aumenta en 1
        echo 2*$a++;
        echo "<br>";
        // El valor es distinto puesto que se incrementó posteriormente a mostrarlo
        echo 2*$a;
        echo "<br>";
        // Muestra el valor multiplicado por 2 y después lo disminuye en 1 
        echo $a--;
        echo "<br>";
        // El valor es distinto puesto que se disminuyó posteriormente a mostrarlo
        echo $a;
        echo "<br>";
        // Muestra el valor multiplicado por 2 y después lo disminuye en 1
        echo 2*$a--;
        echo "<br>";
        // El valor es distinto puesto que se disminuyó posteriormente a mostrarlo
        echo 2*$a;
?>