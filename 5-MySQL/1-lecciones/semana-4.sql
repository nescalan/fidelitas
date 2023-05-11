create database if not exists biblioteca;
use biblioteca;
CREATE TABLE libros (
  CodigoLibro int(11) NOT NULL,
  Autor varchar(50) NOT NULL,
  Titulo varchar(50) NOT NULL,
  Imagen varchar(50) NOT NULL,
  Categoria varchar(20) NOT NULL,
  Descripcion text NOT NULL
) ENGINE=InnoDB;

CREATE TABLE prestamos (
  CodigoPrestamo int NOT NULL,
  CodigoUsuario int NOT NULL,
  CodigoLibro int NOT NULL,
  FechaPrestamo date NOT NULL,
  FechaEntrega date NOT NULL,
  Estado varchar(20) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE usuarios (
  CodigoUsuario int NOT NULL,
  Nombre varchar(20) NOT NULL,
  Usuario varchar(20) NOT NULL,
  Clave varchar(20) NOT NULL,
  Correo varchar(50) NOT NULL
) ENGINE=InnoDB;

  #  precio decimal(8,2) not null,

INSERT INTO libros (CodigoLibro, Autor, Titulo, Imagen, Categoria, Descripcion) VALUES
(1, 'Paulo Freire', 'Pedagogía del comprimido', 'Pedagogia del comprimido.jpg', 'Educativo', 'La Pedagogía del oprimido es uno de los trabajos más conocidos del educador, pedagogo y filósofo brasileño Paulo Freire.'),
(2, 'Catalina M. Alonso', 'Nuevas tecnologías aplicadas a la educación', 'Nuevas tecnologías aplicadas a la educación.jpg', 'Educativo', 'Las nuevas tecnologías de la información y comunicación se están convirtiendo en un elemento clave en nuestro sistema educativo'),
(3, 'Beatriz Díaz Tejero', 'Aprendiendo con videojuegos', 'aprendiendo con videos juegos.jpg', 'Educativo', 'Los Videojuegos son una herramienta muy útil que permite conectar con los intereses de los jóvenes y que puede ayudar a atender la diversidad del alumnado'),
(4, 'Audrey Akoun', 'Pedagogía positiva', 'pedagogia.jpg', 'Educativo', 'Tu hijo tiene dificultades para concentrarse y recordar las lecciones? ¿Sueñas con que las tareas escolares rimen con placer? Si es así, Pedagogía positiva está hecho para ti'),
(5, 'Tony Wagner', 'Creando Innovadores', 'creando inovadores.jpg', 'Educativo', ' La formación de los jóvenes que cambiarán el mundo'),
(6, 'Antoine de Saint-Exupéry', 'El principito', 'el principito.jpg', 'Novelas', 'El principito es una novela corta y la obra más famosa del escritor y aviador francés Antoine de Saint-Exupéry'),
(7, 'Agatha Christie', 'Asesinato en el Orient Express', 'asesinato en el oriente.jpg', 'Novelas', 'Asesinato en el Orient Express es una novela de misterio de la escritora británica Agatha Christie, protagonizada por el detective belga Hércules Poirot'),
(8, 'Dan Brown', 'El código Da Vinci', 'codigo.jpg', 'Novelas', 'Se ha convertido en un superventas mundial, con más de 80 millones de ejemplares vendidos y traducido a 44 idiomas'),
(9, 'James Joyce', 'Ulises', 'ulises.jpg', 'Novelas', 'Su título proviene del protagonista de la versión latina de la Odisea de Homero, originalmente llamado en griego Odiseo'),
(10, 'Margaret Mitchell', 'Lo que el viento se llevó', 'lo que el viento se llevo.jpg', 'Novelas', 'Lo que el viento se llevó es una novela escrita por Margaret Mitchell; es uno de los libros más vendidos de la historia, un clásico de la literatura de los Estados Unidos'),
(11, ' María Dueñas', 'Las hijas del Capitán', 'las hijas del capitan.jpg', 'Ficcion', '\"Nueva York, 1936. La pequeña casa de comidas El Capitán arranca su andadura en la calle Catorce, uno de los enclaves de la colonia española que por entonces reside en la ciudad'),
(12, 'Ray Bradbury', 'Crónicas marcianas', 'cronicas marcianas.jpg', 'Ficcion', 'Crónicas marcianas es una serie de relatos del escritor estadounidense Ray Bradbury'),
(13, 'Aldous Huxley', 'Un mundo feliz', 'mundo feliz.jpg', 'Ficcion', 'Un mundo feliz es la novela más famosa del escritor británico Aldous Huxley, publicada por primera vez en 1932. El título tiene origen en una obra del autor William Shakespeare, La tempestad, en el acto V, cuando Miranda pronuncia su discurso'),
(14, 'Isaac Asimov', 'Yo, robot', 'yo robot.jpg', 'Ficcion', 'Yo, robot, de Isaac Asimov, es un volumen publicado en 1950 en el que se recogen una serie de relatos enlazados por la temática y el hilo argumental'),
(15, 'H. G. Wells', 'La máquina del tiempo', 'la maquina del tiempo.jpg', 'Ficcion', 'La máquina del tiempo es una novela de ficción del escritor británico Herbert George Wells, publicada por primera vez en Londres en el año 1895 por William Heinemann. Consta de dieciséis capítulos y un epílogo.'),
(16, 'Mary Shelley', 'Frankenstein', 'franke.jpg', 'Cientificos', 'Frankenstein o el moderno Prometeo, o simplemente Frankenstein, es una obra literaria de la escritora inglesa Mary Shelley'),
(17, 'Helge Kragh', 'Maestros del universo', 'maestros del universo.jpg', 'Cientificos', '¿Cómo se ha configurado la imagen que tenemos hoy del universo? Maestros del universo nos cuenta esta fascinante historia en un formato inusual que combina elementos reales y de ficción'),
(18, 'Andrés Gomberoff ', 'Einstein para perplejos', 'einte.jpg', 'Cientificos', 'Historia '),
(19, 'Stephen Hawking', 'Breve historia de mi vida', 'step.jpg', 'Cientificos', 'Hawking relata su improbable viaje desde la infancia de posguerra de Londres a sus años de fama y celebridad internacional'),
(20, 'Pere Estupinyà', 'El ladrón de cerebros', 'el ladron de cerebros.jpg', 'Cientificos', 'En El Ladrón de Cerebros, Pere Estupinyà se infiltra en los principales laboratorios y centros de investigación del mundo con el objetivo de robar el conocimiento de los verdaderos héroes del siglo');

INSERT INTO prestamos (CodigoPrestamo, CodigoUsuario, CodigoLibro, FechaPrestamo, FechaEntrega, Estado) VALUES
(17, 3, 7, '2018-08-11', '2018-08-11', 'En Prestamo'),
(18, 3, 4, '2018-08-11', '2018-08-11', 'En Prestamo'),
(19, 3, 15, '2018-08-11', '2018-08-11', 'En Prestamo');

INSERT INTO usuarios (CodigoUsuario, Nombre, Usuario, Clave, Correo) VALUES
(1, 'kimberly Quiros', 'kquiros', 200, 'kimfabiquiqui@hotmail.com'),
(2, 'Maribel Solis', 'msolis', 150, 'msv@hotmail.com'),
(3, 'Fernando Quesada', 'fquesada', 300, 'jque@hotmail.com'),
(4, 'Ronal Quiros', 'rquiros', 125, 'ronal@hotmail.com'),
(5, 'Augusto Solano', 'asolano', 75, 'sola@hotmail.com'),
(6, 'Mateo Ramirez', 'mate', 175, 'matejs@hotmail.com');

INSERT INTO prestamos ( CodigoUsuario, CodigoLibro, FechaPrestamo, FechaEntrega, Estado) VALUES
(6, 18, '2018-08-11', '2018-08-11', 'En Prestamo'),
(4, 3, '2018-08-11', '2018-08-11', 'Devuelto'),
(2, 11, '2018-08-11', '2018-08-11', 'Perdido');

ALTER TABLE libros 
	ADD PRIMARY KEY (CodigoLibro),
	MODIFY CodigoLibro int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
    
ALTER TABLE usuarios 
	ADD PRIMARY KEY (CodigoUsuario),
	MODIFY CodigoUsuario int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE prestamos 
	ADD PRIMARY KEY (CodigoPrestamo),
	MODIFY CodigoPrestamo int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23,
	ADD CONSTRAINT prestamos_ibfk_1 FOREIGN KEY (CodigoUsuario) REFERENCES usuarios (CodigoUsuario),
	ADD CONSTRAINT prestamos_ibfk_2 FOREIGN KEY (CodigoLibro) REFERENCES libros (CodigoLibro);
    
SELECT nombre, autor, titulo FROM libros, usuarios
WHERE libros.CodigoLibro = usuarios.CodigoUsuario;
