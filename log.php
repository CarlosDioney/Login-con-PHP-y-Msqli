<?php
require '../../vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$log_info = new Logger('');
$info = new StreamHandler('../../log.txt', Logger::INFO);
$log_info->pushHandler($info);


$log_error = new Logger('');
// Crea un manejador para registrar mensajes en un archivo de errores
$ERROR = new StreamHandler('../../log.txt', Logger::ERROR);
$log_error->pushHandler($ERROR);

$log_warning = new Logger('');
$ERROR = new StreamHandler('../../log.txt', Logger::ERROR);
$log_warning->pushHandler($ERROR);

?>