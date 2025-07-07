CREATE DATABASE gestion_usuario;

USE gestion_usuario;

CREATE TABLE autores(
      numero_id         int not null,
      nombre            varchar(100),
      correo            varchar(255),
      departamento      varchar(50),
      telefono          varchar(50),
      clave             varchar(255),

      CONSTRAINT pk_autores PRIMARY KEY(numero_id),
      CONSTRAINT uq_correo UNIQUE(correo)
)ENGINE=InnoDb;
 

CREATE TABLE empleados(
      numero_id         int PRIMARY KEY not null,
      nombre            varchar(100)  not null,
      puesto            varchar(100)  not null
)ENGINE=InnoDb;


CREATE TABLE informes (
    nombre_empleado   INT,
    fecha             DATE NOT NULL,
    autor             INT,
    descripcion       TEXT NOT NULL,

    CONSTRAINT fk_autor FOREIGN KEY (autor) REFERENCES autores(numero_id),
    CONSTRAINT fk_empleado FOREIGN KEY (nombre_empleado) REFERENCES empleados(numero_id)
) ENGINE=InnoDB;
