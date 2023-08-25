CREATE TABLE Clientes_EJ3 (
    identificacion varchar(50) PRIMARY KEY,
    Nombre varchar(50) NOT NULL,
    Apellido1 varchar(50) NOT NULL,
    Apellido2 varchar(50) NOT NULL,
    correo VARCHAR(100) UNIQUE NOT NULL,
    Contrasenna varchar(100) NOT NULL,
    Rol int NOT NULL
);

INSERT INTO Clientes_EJ3 VALUES('303330433', 'Maruja', 'Céspedes', 'Fuentes', 'mcespedes@outlook.com', md5('Prueba123'), 1);
INSERT INTO Clientes_EJ3 VALUES('303330566', 'Brandon', 'Camacho', 'Fuentes', 'bcamacho@outlook.com', md5('Prueba123'), 1);

CREATE TABLE Categorias_EJ3(
	idCategoria INT NOT NULL,
    Nombre varchar(50) NOT NULL,
    primary key (idCategoria)
);

INSERT INTO Categorias_EJ3 VALUES(1, 'Celulares');
INSERT INTO Categorias_EJ3 VALUES(2, 'Computadoras');
INSERT INTO Categorias_EJ3 VALUES(3, 'Relojes');

CREATE TABLE Productos_EJ3(
    idProducto varchar(50) PRIMARY KEY,
    Nombre varchar(50) NOT NULL,
    idCategoria INT NOT NULL,
    Descripcion varchar(100) NOT NULL,
    Precio double NOT NULL,
    Imagen varchar(200) NOT NULL,
    FOREIGN KEY (idCategoria) REFERENCES Categorias_EJ3(idCategoria)
);

INSERT INTO Productos_EJ3 VALUES('P01', 'iPhone 14 Pro Max', 1, 'El dispositivo más sofisticado y pro del mercado', 1499.99, '');
INSERT INTO Productos_EJ3 VALUES('P02', 'ASUS TUF Gaming 15.6"', 2, 'La PC gamer que todo jugador necesita', 2000.00, '');
INSERT INTO Productos_EJ3 VALUES('P03', 'Apple Watch Series 8 44mm', 3, 'El complemento ideal para tu día a día', 550.99, '');