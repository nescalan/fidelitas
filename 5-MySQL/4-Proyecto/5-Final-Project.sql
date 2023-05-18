#1: Crear una base de datos
CREATE DATABASE final_project;
USE final_project;

#2: Crear dos tablas relacionadas de uno a muchos
CREATE TABLE customers(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    customer_name VARCHAR(50) NOT NULL,
    customer_email VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE orders(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    order_date DATE NOT NULL,
    customer_id INT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT fk_customer_id FOREIGN KEY (customer_id) REFERENCES customers(id)
)ENGINE=InnoDB;

#3: La primera tabla debe tener al menos 5 atributos o mas
ALTER TABLE customers 
ADD COLUMN customer_phone VARCHAR(50) NOT NULL AFTER customer_email,
ADD COLUMN customer_address VARCHAR(50) NOT NULL AFTER customer_phone;

DESCRIBE customers;

#4: La segunda tabla debe ener al menos 3 atributos o mas
ALTER TABLE orders
ADD COLUMN order_total DECIMAL(10,2) NOT NULL AFTER order_date,
ADD COLUMN order_way_to_pay VARCHAR(50) NOT NULL AFTER order_total;

DESCRIBE orders;

#5: Las tablas deben tener el primary key auto incrementable
	-- fueron creadas como auto incrementable
    
#6: Agregar al menos 5 alteraciones diferentes entre las dos tablas
-- PRIMERA ALTERACION: Agregar una columna a la tabla "customers"
ALTER TABLE customers
ADD COLUMN customer_birth_date DATE NOT NULL AFTER customer_address;

DESCRIBE customers;

-- SEGUNDA ALTERACION: Modificar el tipo de dato de una columna en la tabla "orders"
ALTER TABLE orders
MODIFY COLUMN order_total FLOAT(10,2);

DESCRIBE orders;

#7: Insertar en las tablas al menos 15 registros en la primeara y 5 en la segunda
-- PRIMERA INSERCION DE DATOS
INSERT INTO customers(customer_name, customer_email, customer_phone, customer_address, customer_birth_date) VALUES
('Juan Pérez', 'juan.perez@example.com', '1234567890', 'Calle 123', '1980-01-01'),
('María Gómez', 'maria.gomez@example.com', '2345678901', 'Avenida 456', '1985-02-02'),
('Pedro Ramírez', 'pedro.ramirez@example.com', '3456789012', 'Plaza 789', '1990-03-03'),
('Ana García', 'ana.garcia@example.com', '4567890123', 'Carrera 012', '1995-04-04'),
('Luis Fernández', 'luis.fernandez@example.com', '5678901234', 'Calle 345', '2000-05-05'),
('Sofía López', 'sofia.lopez@example.com', '6789012345', 'Avenida 678', '2005-06-06'),
('Pablo Rodríguez', 'pablo.rodriguez@example.com', '7890123456', 'Plaza 901', '2010-07-07'),
('Carmen Martínez', 'carmen.martinez@example.com', '8901234567', 'Carrera 234', '2015-08-08'),
('Jorge Sánchez', 'jorge.sanchez@example.com', '9012345678', 'Calle 567', '2020-09-09'),
('Marta Díaz', 'marta.diaz@example.com', '0123456789', 'Avenida 890', '1981-10-10'),
('Diego Torres', 'diego.torres@example.com', '1234567890', 'Plaza 234', '1986-11-11'),
('Carla Pérez', 'carla.perez@example.com', '2345678901', 'Carrera 567', '1991-12-12'),
('Roberto Fernández', 'roberto.fernandez@example.com', '3456789012', 'Calle 890', '1996-01-13'),
('Sara Gómez', 'sara.gomez@example.com', '4567890123', 'Avenida 123', '2001-02-14'),
('Lucas Sánchez', 'lucas.sanchez@example.com', '5678901234', 'Plaza 456', '2006-03-15');

SELECT * FROM customers;

-- SEGUNDA INSERCION DE DATOS
INSERT INTO orders (order_date, order_total, order_way_to_pay, customer_id) VALUES
('2022-01-01', 100.00, 'Credit Card', 1),
('2022-02-01', 200.00, 'Debit Card', 2),
('2022-03-01', 300.00, 'Cash', 3),
('2022-04-01', 400.00, 'Paypal', 4),
('2022-05-01', 500.00, 'Credit Card', 5);

SELECT * FROM orders;

#8: Realizar 10 consultas diferentes
-- PRIMERA CONSULTA: Seleccionar todos los campos de la tabla 'customers':
SELECT * FROM customers;

-- SEGUNDA CONSULTA: Seleccionar el nombre y correo electrónico de todos los clientes:
SELECT customer_name, customer_email 
FROM customers;

-- TERCERA CONSULTA: Seleccionar el nombre y fecha de nacimiento de los clientes que tienen un apellido que termina en 'ez':
SELECT customer_name, customer_birth_date 
FROM customers 
WHERE customer_name LIKE '%ez';

-- CUARTA CONSULTA: Seleccionar el nombre, correo electrónico y dirección de los clientes que nacieron después del 1 de enero de 2000:
SELECT customer_name, customer_email, customer_address 
FROM customers 
WHERE customer_birth_date > '2000-01-01';

-- QUINTA CONSULTA: Seleccionar todos los campos de la tabla orders:
SELECT * FROM orders;

-- SEXTA CONSULTA: Seleccionar el total de ventas realizadas con tarjeta de crédito:
SELECT SUM(order_total) 
FROM orders 
WHERE order_way_to_pay = 'Credit Card';

-- SETIMA CONSULTA: Seleccionar la fecha y forma de pago de todas las órdenes de compra realizadas por el cliente con ID igual a 3:
SELECT order_date, order_way_to_pay 
FROM orders 
WHERE customer_id = 3;

-- OCTAVA CONSULTA Seleccionar el nombre y correo electrónico del cliente que realizó la orden con ID igual a 2:
SELECT customer_name, customer_email 
FROM customers 
WHERE id = (SELECT customer_id FROM orders WHERE id = 2);

-- NOVENA CONSULTA: Seleccionar el nombre, correo electrónico y dirección de los clientes que realizaron órdenes de compra con un total mayor a $300:
SELECT customer_name, customer_email, customer_address 
FROM customers 
WHERE id IN (SELECT customer_id FROM orders WHERE order_total > 300);

-- DECIMA CONSULTA: Seleccionar el número total de órdenes de compra realizadas por cada cliente, ordenado de mayor a menor:
SELECT customers.customer_name, COUNT(orders.id) AS total_orders 
FROM customers LEFT JOIN orders ON customers.id = orders.customer_id 
GROUP BY customers.id ORDER BY total_orders DESC;

#9: Realizar 2 actualizaciones de datos. 
-- PRIMERA ACTUALIZACION: Cambio de correo para el liente con identificador = 1.
UPDATE customers
SET customer_email = 'correo_cambiado@mail.com'
WHERE id= 1;

-- SEGUNDA ACTUALIZACION: Actualizar el total de una orden con id=2 en la tabla "orders".
UPDATE orders
SET order_total = (order_total * 1.2)
WHERE orders.id = 2;

#10: Realizar 2 eliminaciones de datos. 
-- PRIMERA ELIMINACION: Eliminar el registro del cliente con id=5 en la tabla "customers"
DELETE orders FROM orders 
INNER JOIN customers ON orders.customer_id = customers.id
WHERE customers.id = 5;

DELETE FROM customers
WHERE id = 5;

-- SEGUNDA ELIMINACION: Eliminar todas las órdenes con un valor total menor a 100 en la tabla "orders"
DELETE FROM orders
WHERE order_total < 100;

#11: Eliminar una de las dos tablas. 
-- Primero hay que eliminar la dependencia de llave foranea.
ALTER TABLE orders DROP FOREIGN KEY fk_customer_id;

-- Una vez eliminada la dependencia, borramos la tabla.
DROP TABLE customers;

#12: Eliminar la base de datos. 
DROP DATABASE final_project;

#13: Crear un índice en una de las tablas.
CREATE INDEX idx_email
ON customers (customer_email);

#14: Crear una vista en la base de datos. 
CREATE VIEW customer_orders AS
SELECT c.customer_name, c.customer_email, o.order_total
FROM customers c
INNER JOIN orders o ON c.id = o.customer_id;

#15: Realizar una consulta en la vista creada. 
SELECT * FROM customer_orders;

#16: Crear un procedimiento almacenado para insertar datos en las tablas. 
-- PRIMER PASO: Crear el pricedimiento
DELIMITER //
CREATE PROCEDURE insert_customer_order(
    IN customer_name VARCHAR(50),
    IN customer_email VARCHAR(50),
    IN customer_phone VARCHAR(50),
    IN customer_address VARCHAR(50),
    IN customer_birth_date DATE,
    IN order_date DATE,
    IN order_total DECIMAL(10,2),
    IN order_way_to_pay VARCHAR(50)
)
BEGIN
    -- Insertar el cliente
    INSERT INTO customers (customer_name, customer_email, customer_phone, customer_address, customer_birth_date)
    VALUES (customer_name, customer_email, customer_phone, customer_address, customer_birth_date);
    
    -- Obtener el ID del cliente recién insertado
    SET @customer_id = LAST_INSERT_ID();
    
    -- Insertar la orden relacionada con el cliente
    INSERT INTO orders (order_date, order_total, order_way_to_pay, customer_id)
    VALUES (order_date, order_total, order_way_to_pay, @customer_id);
END //
DELIMITER ;

-- SEGUNDO PASO: Ejecutamos el procedimiento con el siguiente codigo.
CALL insert_customer_order('Juan Pérez', 'juan.perez@example.com', '1234567890', 'Calle 123', '1980-01-01', '2023-05-13', 200.50, 'Tarjeta de crédito');


#17: Crear una función en la base de datos. 
-- PRIMER PASO: Debemos crear la funcion. Esta funcion va a calcular el precio total de una orden a partir de la cantidad y precio unitario
DELIMITER //
CREATE FUNCTION calculate_order_total (quantity INT, unit_price DECIMAL(10,2))
RETURNS DECIMAL(10,2)
DETERMINISTIC
BEGIN
    DECLARE total DECIMAL(10,2);
    SET total = quantity * unit_price;
    RETURN total;
END //
DELIMITER ;

-- SEGUNDO PASO: Ejecutamos la funcion con el siguiente codigo.
SELECT calculate_order_total(5, 10.50);

#18: Realizar una consulta con una función en la base de datos.
-- PRIMER PASO: Debemos crear la funcion. Esta funcion va a calcular el descuento total de una orden a partir de la cantidad total y el porcentaje de descuento
DELIMITER //
CREATE FUNCTION calculate_discount(order_total INT, discount DECIMAL(10.2))
RETURNS DECIMAL(10,2)
DETERMINISTIC
BEGIN
    DECLARE total_discount DECIMAL(10,2);
    SET total_discount = order_total * discount;
    RETURN total_discount;
END //
DELIMITER ;


-- SEGUNDO PASO: Ejecutamos la funcion con el siguiente codigo.
SELECT order_date, order_total, calculate_discount(order_total, 0.9) AS discount
FROM orders;

#19: Realizar una transaccion para actualizar datos en las tablas
START TRANSACTION;
UPDATE customers
SET customer_phone = '0987654321', customer_address = 'Calle Principal 321'
WHERE id = 1;
COMMIT;

#20: Realizar una consulta con una subconsulta
SELECT customer_name, customer_email, customer_address 
FROM customers 
WHERE id IN (SELECT customer_id FROM orders WHERE order_total > 300);

#21: Crear un trigger
CREATE TRIGGER update_order
BEFORE UPDATE
ON orders
FOR EACH ROW
SET NEW.order_date = NOW();

--Llamado

