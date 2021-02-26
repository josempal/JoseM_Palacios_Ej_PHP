<?php

    $filas=5; $columnas=7;

    $nums = [];
    $num;

    print ("<table border=2 width=400 align=center>");

    for ($i=0; $i < $filas; $i++) { 

        echo "<tr>";

        for ($f=0; $f < $columnas; $f++) { 

            echo "<td>";

            do {
            
            $num = rand(1,49);
            } while (in_array($num, $nums));

            $nums[] = $num;

            print($num);
            print ("</td>");
        }
        echo "</tr>";   
    }
        echo"</table>"; 
        
?>