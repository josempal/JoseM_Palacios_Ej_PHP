<?php


    $a = 3.0;

    $b = 3.0;

    $c = "hi";

    $d = "3";

    $e = 5;

    # Devolverá true ya que contienen el mismo valor;
    var_dump($a == $d);
    echo "<br/>";
    #Devolverá false ya que no contienen el mismo valor;
    var_dump($a == $c);
    echo "<br/>";
    # Devolverá true ya que son valores numéricos iguales
    var_dump($a === $b);
    echo "<br/>";
    # Devolverá false ya que no son del mismo tipo (mismo valor pero no código ASCII)
    var_dump($a === $d);
    echo "<br/>";
    # Devolverá true que ya no contienen el mismo valor
    var_dump($a != $c);
    echo "<br/>";
    # Devolverá false ya que no toma en cuenta el tipo, sólo los valores
    var_dump($a != $d);
    echo "<br/>";
    # Devolverá true ya que es menor que el otro
    var_dump($a < $e);
    echo "<br/>";
    # Devolverá false ya que no es menor, sino igual
    var_dump($a < $b);
    echo "<br/>";
    # Devolverá true ya que no es menor, pero si igual
    var_dump($a <= $b);
    echo "<br/>";
    # Devolverá false ya que no es menor ni igual que el otro
    var_dump($e <= $a);
    echo "<br/>";
    # Devolverá true ya que es mayor que el otro
    var_dump($e > $a);
    echo "<br/>";
    # Devolverá false ya que no es mayor, sino igual
    var_dump($b > $d);
    echo "<br/>";
    # Devolverá true ya que no es mayor, pero si igual
    var_dump($b >= $d);
    echo "<br/>";    
    # Devolverá false ya que no es mayor ni igual
    var_dump($a >= $e);
    echo "<br/>";
?>