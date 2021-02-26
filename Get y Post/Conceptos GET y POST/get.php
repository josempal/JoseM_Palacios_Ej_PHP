<?php
    //La siguiente instrucción nos formatea las salidas
    echo "<pre>";
    //Mostramos por pantalla el contenido del array $_GET
    print_r($_GET);
    echo "<br>";
    //Mostreamos por pantalla un elemento concreto del array $_GET
    print_r($_GET['usuario']);

    //--------------Ahora con el método PSOT----------------------
    /*
    echo "<pre>";
    print_r($_POST);
    echo "<br>";
    print_r($_POST['usuario']);
    */
?>

<?php 
        # Con el método GET la información es visible a través de la url y menos segura
        # con POST el envío de información es interno y por tanto más seguro
?>