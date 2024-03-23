<?php 
include "../../clases/Auth.php";

    $Auth = new Auth();
   

    if ($Auth->nuevoregistro($nombre, $apellido, $telefono)) {
        header("location:../../inicio.php");
    } else {
        echo "No se pudo registrar";
    }


?>