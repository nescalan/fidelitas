#1: Crea una base de datos llamada "reservas_vuelos".
CREATE DATABASE IF NOT EXISTS reservas_vuelos;
USE reservas_vuelos;


#2: Crea la tabla "flights"
CREATE TABLE IF NOT EXISTS flights(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	origen VARCHAR(128),
	destino VARCHAR(128),
	fecha DATE,
	hora TIME,
	plazas_disponibles INT UNSIGNED,
	precio DECIMAL(4,2),
	PRIMARY KEY (id)
)ENGINE=InnoDB;

-- FIX: Cambio de coma decimal a punto decimal
ALTER TABLE flights MODIFY COLUMN precio DECIMAL(4.2);

#3: Crea la tabla "passengers"
CREATE TABLE IF NOT EXISTS passengers(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(100),
	apellido VARCHAR(100),
	email VARCHAR(128),
	PRIMARY KEY (id)
)ENGINE=InnoDB;

#4: Crea la tabla "reservations"
CREATE TABLE IF NOT EXISTS reservations(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    reservation_date DATE,
	PRIMARY KEY (id),
    flight_id INT UNSIGNED NOT NULL,
    passenger_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (flight_id) REFERENCES flights(id),
    FOREIGN KEY (passenger_id) REFERENCES passengers(id)   
)ENGINE=InnoDB;

#5: Inserta vuelos en la tabla "flights".
INSERT INTO flights (origen, destino, fecha, hora, plazas_disponibles, precio) VALUES
  ('Los Angeles', 'New York', '2023-05-10', '10:00:00', 100, 200.00),
  ('New York', 'Los Angeles', '2023-05-11', '12:00:00', 100, 200.00),
  ('London', 'Paris', '2023-05-12', '14:00:00', 100, 150.00),
  ('Paris', 'London', '2023-05-13', '16:00:00', 100, 150.00),
  ('Tokyo', 'Shanghai', '2023-05-14', '18:00:00', 100, 300.00),
  ('Shanghai', 'Tokyo', '2023-05-15', '20:00:00', 100, 300.00),
  ('Sydney', 'Melbourne', '2023-05-16', '22:00:00', 100, 250.00),
  ('Melbourne', 'Sydney', '2023-05-17', '00:00:00', 100, 250.00),
  ('Beijing', 'Hong Kong', '2023-05-18', '02:00:00', 100, 100.00),
  ('Hong Kong', 'Beijing', '2023-05-19', '04:00:00', 100, 100.00);

#6: Inserta pasajeros en la tabla "passengers".
INSERT INTO passengers (nombre, apellido, email) VALUES
  ('John', 'Doe', 'johndoe@example.com'),
  ('Jane', 'Doe', 'janedoe@example.com'),
  ('Mary', 'Smith', 'marysmith@example.com'),
  ('Peter', 'Johnson', 'peterjohnson@example.com'),
  ('Susan', 'Williams', 'susanwilliams@example.com'),
  ('David', 'Brown', 'davidbrown@example.com'),
  ('Sarah', 'Green', 'sarahgreen@example.com'),
  ('Michael', 'White', 'michaelwhite@example.com'),
  ('Emily', 'Black', 'emilyblack@example.com'),
  ('Kevin', 'Gray', 'kevingray@example.com'),
  ('Jessica', 'Pink', 'jessicapink@example.com'),
  ('Ryan', 'Purple', 'ryanpurple@example.com'),
  ('Alice', 'Blue', 'aliceblue@example.com'),
  ('Chris', 'Red', 'chrisred@example.com'),
  ('Ashley', 'Green', 'ashleygreen@example.com'),
  ('William', 'White', 'williamwhite@example.com'),
  ('Emma', 'Black', 'emmablack@example.com'),
  ('Nathan', 'Gray', 'nathangray@example.com'),
  ('Madison', 'Pink', 'madisonpink@example.com'),
  ('Tyler', 'Purple', 'tylerpurple@example.com'),
  ('Olivia', 'Blue', 'oliviablue@example.com'),
  ('Austin', 'Red', 'austinred@example.com'),
  ('Sophia', 'Green', 'sophiagreen@example.com');

#7: Inserta al menos una reserva en la tabla "reservations", 
    -- haciendo referencia a un vuelo existente y un pasajero existente.
INSERT INTO reservations (reservation_date, flight_id, passenger_id) VALUES
  ('2023-05-10', 1, 1),
  ('2023-05-10', 2, 2),
  ('2023-05-10', 3, 3),
  ('2023-05-11', 1, 4),
  ('2023-05-11', 2, 5),
  ('2023-05-11', 3, 6),
  ('2023-05-12', 1, 7),
  ('2023-05-12', 2, 8),
  ('2023-05-12', 3, 9);
  
SELECT * FROM flights;
SELECT * FROM passengers;
SELECT * FROM reservations;

#8: Obtener todos los vuelos que tengan plazas disponibles
SELECT * FROM flights 
WHERE plazas_disponibles > 0;

#9: Obtener todos los pasajeros cuyo nombre contenga la palabra "Juan"
SELECT * FROM passengers 
WHERE nombre LIKE '%John%';
