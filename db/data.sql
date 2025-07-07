CREATE DATABASE gestion_empleados;

USE gestion_empleados;


CREATE TABLE lideres(
      numero_id int not null,
      nombre varchar(255) not null,
      correo varchar(255) not null,
      departamento varchar(255) not null,
      telefono int not null,
      clave varchar(255) not null,

      CONSTRAINT pk_numeroid PRIMARY KEY(numero_id),
      CONSTRAINT uq_correo UNIQUE(correo)
)ENGINE=InnoDB;


CREATE TABLE empleados(
      numero_id int PRIMARY KEY NOT NULL,
      nombre varchar(255) NOT NULL,
      departamento varchar(255) NOT NULL
)ENGINE=InnoDB;

CREATE TABLE reportes(
      id int PRIMARY KEY AUTO_INCREMENT,
      autor_id int NOT NULL,
      fecha date NOT NULL,
      empleado_id int NOT NULL,
      descripcion text NOT NULL,


      CONSTRAINT fk_autor FOREIGN KEY(autor_id) REFERENCES lideres(numero_id),
      CONSTRAINT fk_empleado FOREIGN KEY(empleado_id) REFERENCES empleados(numero_id)
)ENGINE=InnoDB;