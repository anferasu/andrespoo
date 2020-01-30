create database videoteca;
SET NAMES 'utf8';

USE videoteca;
DROP TABLE IF EXISTS actor;
CREATE TABLE actor (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(64) NOT NULL,
  apellidos VARCHAR(64) NOT NULL,
  imdb VARCHAR(32) NOT NULL DEFAULT '',
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 11
AVG_ROW_LENGTH = 1638
CHARACTER SET latin1
COLLATE latin1_swedish_ci;

--
-- Definition for table director
--
DROP TABLE IF EXISTS director;
CREATE TABLE director (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(64) NOT NULL,
  apellidos VARCHAR(64) NOT NULL,
  imdb VARCHAR(32) NOT NULL DEFAULT '',
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 5
AVG_ROW_LENGTH = 4096
CHARACTER SET latin1
COLLATE latin1_swedish_ci;

--
-- Definition for table genero
--
DROP TABLE IF EXISTS genero;
CREATE TABLE genero (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(2) NOT NULL,
  descripcion VARCHAR(32) NOT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 5
AVG_ROW_LENGTH = 4096
CHARACTER SET latin1
COLLATE latin1_swedish_ci;

--
-- Definition for table soporte
--
DROP TABLE IF EXISTS soporte;
CREATE TABLE soporte (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(3) NOT NULL,
  descripcion VARCHAR(32) NOT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 4
AVG_ROW_LENGTH = 5461
CHARACTER SET latin1
COLLATE latin1_swedish_ci;

--
-- Definition for table pelicula
--
DROP TABLE IF EXISTS pelicula;
CREATE TABLE pelicula (
  id INT(11) NOT NULL AUTO_INCREMENT,
  titulo VARCHAR(64) NOT NULL,
  idsoporte INT(11) NOT NULL,
  idgenero INT(11) NOT NULL,
  PRIMARY KEY (id),
  INDEX p_FK1 (idsoporte),
  INDEX p_FK2 (idgenero),
  CONSTRAINT pelicula_ibfk_1 FOREIGN KEY (idsoporte)
    REFERENCES soporte(id) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT pelicula_ibfk_2 FOREIGN KEY (idgenero)
    REFERENCES genero(id) ON DELETE RESTRICT ON UPDATE RESTRICT
)
ENGINE = INNODB
AUTO_INCREMENT = 5
AVG_ROW_LENGTH = 4096
CHARACTER SET latin1
COLLATE latin1_swedish_ci;

--
-- Definition for table actores_por_pelicula
--
DROP TABLE IF EXISTS actores_por_pelicula;
CREATE TABLE actores_por_pelicula (
  idpelicula INT(11) NOT NULL,
  idactor INT(11) NOT NULL,
  PRIMARY KEY (idpelicula, idactor),
  INDEX app_FK1 (idpelicula),
  INDEX app_FK2 (idactor),
  CONSTRAINT actores_por_pelicula_ibfk_1 FOREIGN KEY (idpelicula)
    REFERENCES pelicula(id) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT actores_por_pelicula_ibfk_2 FOREIGN KEY (idactor)
    REFERENCES actor(id) ON DELETE RESTRICT ON UPDATE RESTRICT
)
ENGINE = INNODB
AVG_ROW_LENGTH = 5461
CHARACTER SET latin1
COLLATE latin1_swedish_ci;

--
-- Definition for table directores_por_pelicula
--
DROP TABLE IF EXISTS directores_por_pelicula;
CREATE TABLE directores_por_pelicula (
  idpelicula INT(11) NOT NULL,
  iddirector INT(11) NOT NULL,
  PRIMARY KEY (idpelicula, iddirector),
  INDEX dpp_FK1 (idpelicula),
  INDEX dpp_FK2 (iddirector),
  CONSTRAINT directores_por_pelicula_ibfk_1 FOREIGN KEY (idpelicula)
    REFERENCES pelicula(id) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT directores_por_pelicula_ibfk_2 FOREIGN KEY (iddirector)
    REFERENCES director(id) ON DELETE RESTRICT ON UPDATE RESTRICT
)
ENGINE = INNODB
AVG_ROW_LENGTH = 5461
CHARACTER SET latin1
COLLATE latin1_swedish_ci;

-- 
-- Dumping data for table actor
--
INSERT INTO actor VALUES
(1, 'Harrison', 'Ford', 'nm0000148'),
(2, 'Russell', 'Crowe', 'nm0000128'),
(3, 'Lee', 'Marvin', 'nm0001511'),
(4, 'Clint', 'Eastwood', 'nm0000142'),
(5, 'Jean', 'Seberg', 'nm0781029'),
(6, 'Bruce', 'Dern', 'nm0001136'),
(7, 'Bruce', 'Boxleitner', 'nm0000310'),
(8, 'Rutger', ' Hauer', 'nm0000442'),
(9, 'Sean', 'Young', 'nm0000707'),
(10, 'Matthew', 'McConaughey', 'nm0000190');

-- 
-- Dumping data for table director
--
INSERT INTO director VALUES
(1, 'Ridley', 'Scott', 'nm0000631'),
(2, 'Mike', 'Nichols', 'nm0001566'),
(3, 'Robert', 'Zemekis', 'nm0000709'),
(4, 'Douglas', 'Trumbull', 'nm0874320');

-- 
-- Dumping data for table genero
--
INSERT INTO genero VALUES
(1, 'CF', 'Ciencia Ficción'),
(2, 'A', 'Aventuras'),
(3, 'D', 'Drama'),
(4, 'C', 'Comedia');

-- 
-- Dumping data for table soporte
--
INSERT INTO soporte VALUES
(1, 'DVD', 'Digital Versatile Disc'),
(2, 'VHS', 'Video Home System'),
(3, 'LD', 'Laser Disc');

-- 
-- Dumping data for table pelicula
--
INSERT INTO pelicula VALUES
(1, 'Blade Runner', 1, 1),
(2, 'Gladiator', 1, 2),
(3, 'A propósito de Henry', 2, 3),
(4, 'Naves misteriosas', 1, 1);

-- 
-- Dumping data for table actores_por_pelicula
--
INSERT INTO actores_por_pelicula VALUES
(1, 1),
(2, 2),
(3, 1);

-- 
-- Dumping data for table directores_por_pelicula
--
INSERT INTO directores_por_pelicula VALUES
(1, 1),
(2, 1),
(3, 2);

-- 
-- Enable foreign keys
-- 
--/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;