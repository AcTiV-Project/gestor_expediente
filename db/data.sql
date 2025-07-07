CREATE DATABASE gestion;

USE gestion;


CREATE TABLE autores(
      numero_id int not null,
      nombre varchar(255) not null,
      correo varchar(255) not null,
      departamento varchar(255) not null,
      telefono int not null,
      clave varchar(255) not null,

      CONSTRAINT pk_numeroid PRIMARY KEY(numero_id),
      CONSTRAINT uq_correo UNIQUE(correo)
)ENGINE=InnoDB;


CREATE TABLE empleado(
      numero_id int PRIMARY KEY NOT NULL,
      nombre varchar(255) NOT NULL,
      departamento varchar(255) NOT NULL
)ENGINE=InnoDB;