<?php
/* Las instrucciones PHP son las que aparecen en rojo.
   Las etiquetas en azul intenso son el código HTML.
   Todo lo que aparece en este color son líneas de comentario
   de las que hablaremos más adelante2
   Cuando reescribas estos primeros scripts
   bastará que incluyas las instrucciones escritas en rojo */

/* ponemos <br> al final del texto para que cuando se
   ejecute cada una de las instrucciones echos 
   se escriba -además- un salto de linea HTML
   de este modo, el resultado de cada ECHO
   aparecerá en una línea diferente */
   
# aquí utilizamos solo unas comillas
print_r("Este texto solo lleva las comillas de la instrucción<br>");
# aquí anidaremos comillas de distinto tipo
print_r("La palabra 'comillas' aparecerá entrecomillada<br>");
# esta es otra posibilidad invirtiendo el orden de las comillas
print_r('La palabra "comillas" aparecerá entrecomillada<br>');
# una tercera posibilidad en la que utilizamos un mismo
# tipo de comillas. Para diferenciar unas de otras anteponemos
# la barra invertida, pero esta opción no podríamos utilizarla
# al revés. 
# No podríamos poner \" en las comillas exteriores.
print_r("La palabra \"comillas\" usando la barra invertida<br>");
//Imprimiendo varias cadenas
//Esta línea está con echo porque al ser print_r una función espera un número de parámetros menor y da un warning
echo'Hola', ' ', 'Hola de nuevo';

/* print_r() se usa también para formatear arrays y objetos y mostrarlo de manera más legible  
   además de ser una función y no un constructor del lenuaje como es echo*/
?>