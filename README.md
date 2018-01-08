# carpinteria
---

## Requerimientos

* MySQL versión 5.6
* PHP versión 7.0

## Configuración del proyecto

* Creacion de la base de datos: ´CREATE DATABASE carpinteria CHARACTER SET utf8 COLLATE utf8_bin;´

* Creación de las tablas:

  - ´´´CREATE TABLE admin (
    ID int NOT NULL AUTO_INCREMENT,
    name varchar(25) NOT NULL,
    last_name varchar(25) NOT NULL,
    password varchar(15) NOT NULL,
    PRIMARY KEY (ID)
  );´´´

  - ´CREATE TABLE cotizacion (id INT NOT NULL AUTO_INCREMENT,name varchar(25) NOT NULL,email varchar(40) NOT NULL,content varchar(255) NOT NULL,created_at timestamp NOT NULL DEFAULT current_timestamp,updated_at TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW(),PRIMARY KEY(id));´

* Creacion del Primer administrado : ´INSERT INTO admin (name,last_name,password) VALUES ("Nombre","Apellido","contraseña");´
