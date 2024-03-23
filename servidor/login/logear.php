<?php session_start();
    include "../../clases/Auth.php";
    include "../../log.php";

    $usuario_encriptado = $_POST['usuario'];
    $password_encriptado = $_POST['password'];
    $usuario_desencriptado = base64_decode($usuario_encriptado);
    $password_desencriptado = base64_decode($password_encriptado);

    $Auth = new Auth();

    if ($Auth->logear($usuario_desencriptado, $password_desencriptado)) {
        $log_info->info('El usuario ' . $_SESSION['usuario']. ' ha iniciado sesión.');
        header("location:../../inicio.php");
    } else {
        $log_error->ERROR('El usuario ' . $_POST['usuario']. ' ha intentado iniciar sesión.');
        header("location:../../index.php");
    }

?>