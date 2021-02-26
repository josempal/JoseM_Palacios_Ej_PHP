<?php

  
  # Conexión a la base de datos
  $conn = mysqli_connect( 'mariadb', 'dwec', 'dwec', 'dwec');



  # Sentencia para borrar registros de la base de datos
  $delete = "delete from alumnos where id = 22";

  # ejecutamos la sentencia contra la base de datos PRUEBAS
  $return = mysqli_query( $conn, $delete);

  # Mostramos el resultado por pantalla
  print_r( $return);

  # Cerramos la conexión
  mysqli_close( $conn);
  ?>