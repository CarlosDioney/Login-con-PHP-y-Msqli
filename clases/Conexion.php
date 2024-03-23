<?php
    class Conexion {
        public $servidor = 'localhost';
        public $usuario = 'DALVAREZ';
        public $password = 'DALVAREZ';
        public $database = 'b_login';
        public $port = 3307;

        public function conectar() {
            return mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->password,
                $this->database,
                $this->port
            );
        }
    }

?>