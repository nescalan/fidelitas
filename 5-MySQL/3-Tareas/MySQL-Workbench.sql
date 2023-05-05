-- Creamos la nueva base de datos
CREATE DATABASE IF NOT EXISTS base_peliculas;

-- Seleccionamos la base de datos
USE base_peliculas;

-- Creamos las tablas sin relaciones
CREATE TABLE IF NOT EXISTS peliculas (
	id_pelicula INT UNSIGNED NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(45) NOT NULL,
    anio DATE,
    nacionalidad VARCHAR(120),
    idioma VARCHAR(120),
    formato ENUM('BLANCO Y NEGRO', 'COLOR'),
    descripcion VARCHAR(120),
    resumen VARCHAR(255), 
    observaciones VARCHAR(255),
    PRIMARY KEY(id_pelicula)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS actores (
	id_actor INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(45) NOT NULL,
    nacionalidad VARCHAR(45),
    nombre_personaje VARCHAR(45),
    PRIMARY KEY(id_actor)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS directores (
	id_director INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(120) NOT NULL,
    fecha_nacimiento DATE,
    pais_origen VARCHAR(120),
    PRIMARY KEY(id_director),
    peliculas_id_pelicula INT UNSIGNED,
    CONSTRAINT fk_director_peliculas 
    FOREIGN KEY(peliculas_id_pelicula) 
    REFERENCES peliculas(id_pelicula)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS actores_peliculas (
	 peliculas_id_pelicula INT UNSIGNED,
     actores_id_actor INT UNSIGNED,
     PRIMARY KEY(peliculas_id_pelicula, actores_id_actor),
     CONSTRAINT fk_actor_peliculas_actor
     FOREIGN KEY(actores_id_actor) 
     REFERENCES actores(id_actor),
     CONSTRAINT fk_actor_actor_peliculas
     FOREIGN KEY(peliculas_id_pelicula) 
     REFERENCES peliculas(id_pelicula)
)ENGINE = InnoDB;