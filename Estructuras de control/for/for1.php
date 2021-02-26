<?php

    $filas=5; $columnas=7;

    print ("<table border=2 width=400 align=center>");

    for ($i = 0; $i < $filas; $i++) {

        echo "<tr>";

        for($j = 0; $j < $columnas; $j++) {

            echo "<td>";
            print "fila: ". $i ." columna: " . $j;
            print ("</td>");
        }
        
        echo "</tr>";
    }
	
    print "</table>";
?>