# carpinteria
---

## Requerimientos

* MySQL versión 5.6
* PHP versión 7.0

## Configuración del proyecto

* Creacion de la base de datos: ´CREATE DATABASE carpinteria CHARACTER SET utf8 COLLATE utf8_bin;´

* Creación de la tabla para administrador: ´´´CREATE TABLE admin (
    ID int NOT NULL AUTO_INCREMENT,
    name varchar(25) NOT NULL,
    last_name varchar(25) NOT NULL,
    password varchar(15) NOT NULL,
    PRIMARY KEY (ID),
); ´´´

* Creacion del Primer administrado : ´INSERT INTO admin (name,last_name,password) VALUES ("Nombre","Apellido","contraseña");´
