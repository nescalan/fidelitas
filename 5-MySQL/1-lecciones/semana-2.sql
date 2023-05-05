/*CLASE 2*/
# Crear base de datos
create database if not exists banco;
use banco;

# Eliminar la base de datos
drop database banco;

# Crear tablas
create table clientes(
	id int not null,
    nombre varchar(50) not null,
    apellidos varchar(100) not null,
    email varchar(100) not null,
    direccion varchar(150) not null,
	primary key (id)
) engine=InnoDB;# Motor de base de datos

-- Insertar una nueva fila
INSERT INTO clientes (id, nombre, apellidos, email, direccion)
VALUES (1, 'Juan', 'Pérez Gómez', 'juan.perez@gmail.com', 'Calle 123, Ciudad');
INSERT INTO clientes (id, nombre, apellidos, email, direccion)
VALUES (2, 'Pepe', 'Rojas Calvo', 'pepe.55@gmail.com', 'Calle 544, Texas');
select * from clientes;
/*
InnoDB: El motor de almacenamiento InnoDB es el motor de almacenamiento predeterminado de MySQL a partir de la versión 5.5. Es un motor de almacenamiento transaccional que proporciona soporte para transacciones ACID (Atomicidad, Consistencia, Aislamiento, Durabilidad) y bloqueo de nivel de fila.

MyISAM: El motor de almacenamiento MyISAM es uno de los motores de almacenamiento más antiguos de MySQL. Es un motor de almacenamiento no transaccional que proporciona una alta velocidad y una baja sobrecarga. Sin embargo, no admite transacciones y el bloqueo es a nivel de tabla.

Memory: El motor de almacenamiento Memory, también conocido como HEAP, almacena datos en memoria RAM en lugar de en disco. Es muy rápido y adecuado para tablas temporales y caché de resultados.

CSV: El motor de almacenamiento CSV almacena datos en archivos CSV (Comma Separated Values). Es adecuado para datos que se importan o exportan en formato CSV.

Archive: El motor de almacenamiento Archive es adecuado para tablas que contienen grandes cantidades de datos históricos que se utilizan principalmente para fines de consulta. Es un motor de almacenamiento no transaccional que comprime los datos para un almacenamiento más eficiente.

NDB: El motor de almacenamiento NDB, también conocido como Cluster, es adecuado para aplicaciones de alta disponibilidad y alta escalabilidad. Es un motor de almacenamiento distribuido que puede replicar datos en varios nodos.

Federated: El motor de almacenamiento Federated permite que una tabla en un servidor MySQL se refiera a otra tabla en un servidor MySQL remoto. Es útil para aplicaciones distribuidas.
*/

create table cuentas(
	num_cuenta int not null,
    fecha timestamp not null default current_timestamp,# Este campo de default current_timestamp lo que va a ser es que sino se inserta una fecha valida va a tomar de refrencia la hora del sistema
    saldo decimal(10,2) default "0",
    id_cliente int not null,
    primary key (num_cuenta),
    constraint cuenta_clientes_fk foreign key (id_cliente) references clientes (id)
) engine=InnoDB;

-- Insertar una nueva fila Ejemplo sin enviarle la fecha en especifico
INSERT INTO cuentas (num_cuenta, saldo, id_cliente)
VALUES (1234567895, 104.50, 2);


INSERT INTO cuentas (num_cuenta, saldo, id_cliente,fecha)
VALUES (12345781, 104.50, 2,"2023-05-01");
select * from cuentas;