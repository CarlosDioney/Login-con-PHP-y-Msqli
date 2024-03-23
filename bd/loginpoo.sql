CREATE TABLE t_usuarios (
  id_usuario INT NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(245) NOT NULL,
  password VARCHAR(245) NOT NULL,
  PRIMARY KEY (id_usuario));


  CREATE TABLE t_personas (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(245) NOT NULL,
  apellido VARCHAR(245) NOT NULL,
  telefono varchar(245) NOT NULL,
  PRIMARY KEY (id));