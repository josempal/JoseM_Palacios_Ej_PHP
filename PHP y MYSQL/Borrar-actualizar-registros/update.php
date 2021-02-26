<?php

  
  # Conexión a la base de datos
  $conn = mysqli_connect( 'mariadb', 'dwec', 'dwec', 'dwec');

  # Sentencia para actualizar un registro
  $update = "update alumnos set alumno = 'testActualizado',
    puntuacion = '3'
    Where id = 22";
  

  # ejecutamos la sentencia contra la base de datos PRUEBAS
  $return = mysqli_query( $conn, $update);

  # Mostramos el resultado por pantalla
  print_r( $return);

  # Cerramos la conexión
  mysqli_close( $conn);
  ?>