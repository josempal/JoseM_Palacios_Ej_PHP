<!doctype html>
<html>
<head>
    <title>
    </title>
</head>
<body>
    <form method=get action=get_post.php>
        Nombre: <input type="text" name="usuario">
        <br>
        <input type ="Submit" name="Enviar" value="Enviar">
    </form>

    <!-- 
    <form method=post action=get_post.php>
        Nombre: <input type="text" name="usuario">
        <br>
        <input type ="Submit" name"Enviar" value="Enviar">
    </form>
     -->
</body>
</html>

<?php 
        # Con el método GET la información es visible a través de la url y menos segura
        # con POST el envío de información es interno y por tanto más seguro
?>