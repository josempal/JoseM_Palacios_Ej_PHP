<?php
    require_once("ejemplo2.php");
?>
    


<?php 

    Encabezado(); 

    include_once("ejemplo1.inc");

    echo "La función calcula ha devuelto " . calcula(3, 5); 
?>
<br><br>

Lista de fichero utilizados por include

<br><br>

<?php
$z = get_included_files();
foreach ($z as $clave => $valor) {
  echo "Clave: ", $clave, "  Valor: ", $valor, "<br>";
};
?>

<?php Pie() ?>

