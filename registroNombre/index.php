<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registroNombre</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    
<form method="post">

    <h1>Registro</h1>
    <p>Ingrese su nombre</p>

    <div class="input-wrapper">
        <input type="text" name="name" placeholder="Nombre">
    </div>

    <input class="btn" type="submit" name="register" value= "Enviar">

</form>

<?php 
    include("registrar.php");

?>

</body>
</html>
