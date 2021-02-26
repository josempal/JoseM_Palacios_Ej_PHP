<?php
    # determinando el tipo de variable
    $a1=347;
    $a2=2147483647;
    $a3=-2147483647;
    $a4=23.7678;
    $a6="347";
    $a8="Solo literal";
    $a9="12.3 Literal con número";
    $a10="";
    
    #forzando los tipos

    # Muestra el mismo número ya que era real
    echo ((real)$a1),"<br>";
    # Muestra el mismo número
    echo ((double)$a2),"<br>";
    # Muestra el mismo número
    echo ((float)$a3),"<br>";
    # Elimina la parte decimal ya que fuerza que sea entero
    echo ((integer)$a4),"<br>";
    # Muestra el mismo número ya que el string está formado por ellos
    echo ((int)$a6),"<br>"; 
    # Muestra 0 ya que no hay ningún número en el string
    echo ((int)$a8),"<br>";
    # Muestra 12.3 ya que están al principio del string
    echo ((double)$a9),"<br>";
    # Muestra 0 ya que no hay nada en el string 
    echo ((int)$a10),"<br>";
    
?> 