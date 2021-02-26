<?php
    $a = $_GET["a"];
    # en este caso cerraremos entre llaves las lineas
    # que deben ejecutarse si se cumple la condición

	$b = "valor correcto";

    if ($a == $b) { 
        
		print ("Respuesta correcta");
    } else {

		print("Respuesta incorrecta");
	}
   
?>

<html>
<body>
<form action="Tarea7.5.php" method="GET">
    Valor a comprobar: <input type="text" name="a"><br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>