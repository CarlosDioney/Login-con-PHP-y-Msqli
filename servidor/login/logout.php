<?php 
include "../../log.php";
session_start(); 
session_destroy();
$log_info->info('El usuario ' . $_SESSION['usuario']. ' ha cerrado sesión.');
header("location:../../index.php");
?>