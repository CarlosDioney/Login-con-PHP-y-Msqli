<?php 
    include "../../clases/Auth.php";
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $Auth = new Auth();

    if ($Auth->registrar($usuario, $password)) {
        header("location:../../index.php");
    } else {
        echo "No se pudo registrar";
    }

?>