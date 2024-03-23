<?php 
    include "Conexion.php";

    class Auth extends Conexion {
        public function registrar($usuario, $password) {
            $conexion = parent::conectar();
            $usuario =$conexion->real_escape_string($_POST['usuario']);
            $sql = "INSERT INTO t_usuarios (usuario, password) 
                    VALUES (?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('ss', $usuario, $password);
            return $query->execute();
        }

        public function nuevoregistro($nombre, $apellido, $telefono) {
            $conexion = parent::conectar();
            $nombre =$conexion->real_escape_string($_POST['nombre']);
            $apellido =$conexion->real_escape_string($_POST['apellido']);
            $telefono=$conexion->real_escape_string($_POST['telefono']);
            $sql = "INSERT INTO t_personas (nombre, apellido, telefono) 
                    VALUES (?,?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('sss', $nombre, $apellido, $telefono);
            return $query->execute();
        }
        public function mostrarregsitros(){
            $conexion = parent::conectar();
            $sql= "SELECT * FROM t_personas";
            return $resultado = mysqli_query($conexion, $sql);
        }
        public function logear($usuario_desencriptado, $password_desencriptado) {
            $conexion = parent::conectar();
            $usuario =$conexion->real_escape_string($usuario_desencriptado);
            $password =$conexion->real_escape_string($password_desencriptado);
            $passwordExistente = "";
            $sql = "SELECT * FROM t_usuarios 
                    WHERE usuario = '$usuario'";
            $respuesta = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($respuesta) > 0) {
                $passwordExistente = mysqli_fetch_array($respuesta);
                $passwordExistente = $passwordExistente['password'];
                
                if (password_verify($password, $passwordExistente)) {
                    $_SESSION['usuario'] = $usuario;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }   
    }

?>