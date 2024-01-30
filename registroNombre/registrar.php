<?php

include("conexion.php");

if(isset($_POST['register'])) {
    if(
        strlen($_POST['name']) >=1
    ){
            $name = trim($_POST['name']);
            $consulta = "INSERT INTO datos(nombre)
                VALUES('$name')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado){
                ?>
                <h3 class="success">Su registro se ha completado.</h3>
                <?php
            }
    } else {
        ?>
            <h3 class="error">Ocurrió un error, llena todos los campos.</h3>
        <?php
    }
}
?>
