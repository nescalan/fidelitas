CREATE DATABASE car_manufacturers;
USE car_manufacturers;

#1: Tabla marcas de carros: Código de la marca (autoincremental), nombre de la marca, país de origen y fecha de fundación.
CREATE TABLE car_brands(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    brand_name VARCHAR(100) NOT NULL,
    origin_country VARCHAR(100) NOT NULL,
    foundation_date date,
    PRIMARY KEY(id)
    )ENGINE=InnoDB;
    
INSERT INTO car_brands (brand_name, origin_country, foundation_date) VALUES
('Toyota', 'Japan', '1937-08-28'),
('Honda', 'Japan', '1948-09-24'),
('Nissan', 'Japan', '1933-09-26'),
('General Motors', 'United States', '1908-09-16'),
('Ford', 'United States', '1903-06-16'),
('Volkswagen', 'Germany', '1937-05-28'),
('Mercedes-Benz', 'Germany', '1926-06-02'),
('BMW', 'Germany', '1916-03-07'),
('Fiat', 'Italy', '1899-07-11'),
('Chrysler', 'United States', '1925-06-06');

    
#2: Tabla modelos de carros: Código del modelo (autoincremental), modelo, año de lanzamiento, precio de venta 
	-- y código de la marca a la que pertenece.
CREATE TABLE car_models(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	model VARCHAR(50) NOT NULL,
	release_year YEAR NOT NULL,
	sale_price DECIMAL(9,2) NOT NULL,
	car_brand_id INT UNSIGNED NOT NULL ,
	PRIMARY KEY(id),
	CONSTRAINT fk_car_brand_id FOREIGN KEY(car_brand_id) REFERENCES car_brands(id)
)ENGINE=InnoDB;

INSERT INTO car_models (model, release_year, sale_price, car_brand_id) VALUES
('Corolla', 2023, 22000.00, 11),
('Civic', 2023, 21000.00, 12),
('Altima', 2023, 20000.00, 13),
('Camry', 2023, 23000.00, 12),
('Accord', 2023, 24000.00, 15),
('Rogue', 2023, 25000.00, 16),
('Silverado', 2023, 30000.00, 17),
('F-150', 2023, 31000.00, 18),
('Jetta', 2023, 26000.00, 19),
('Golf', 2023, 27000.00, 20);


#3: Tabla para almacenar los concesionarios: 
	-- Código del concesionario (autoincremental), nombre del concesionario, dirección, ciudad y teléfono.
CREATE TABLE car_dealers(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    dealer_name VARCHAR(120) NOT NULL,
    dealer_address VARCHAR(120) NOT NULL,
    dealer_city VARCHAR(120) NOT NULL,
    dealer_phone VARCHAR(15) NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO car_dealers (dealer_name, dealer_address, dealer_city, dealer_phone) VALUES
('Honda of America', '123 Main Street, Anytown, USA', 'Anytown', '123-456-7890'),
('Toyota of America', '456 Elm Street, Anytown, USA', 'Anytown', '234-567-8901'),
('Nissan of America', '789 Oak Street, Anytown, USA', 'Anytown', '345-678-9012'),
('General Motors of America', '101 Main Street, Othertown, USA', 'Othertown', '456-789-0123'),
('Ford of America', '202 Elm Street, Othertown, USA', 'Othertown', '567-890-1234'),
('Volkswagen of America', '303 Oak Street, Othertown, USA', 'Othertown', '678-901-2345'),
('Mercedes-Benz of America', '404 Main Street, Yetanothertown, USA', 'Yetanothertown', '789-012-3456'),
('BMW of America', '505 Elm Street, Yetanothertown, USA', 'Yetanothertown', '890-123-4567'),
('Fiat of America', '606 Oak Street, Yetanothertown, USA', 'Yetanothertown', '901-234-5678'),
('Chrysler of America', '707 Main Street, Yetanothertown, USA', 'Yetanothertown', '012-345-6789');


#4: Tabla pedidos de los clientes: 
	-- Código del pedido (autoincremental), código del cliente que hizo el pedido, 
    -- código del modelo del carro pedido, fecha del pedido, fecha de entrega estimada y estado del pedido.
CREATE TABLE customers(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	customer_name VARCHAR(120) NOT NULL,
	customer_address VARCHAR(120) NOT NULL,
	customer_city VARCHAR(120) NOT NULL,
	customer_phone VARCHAR(15) NOT NULL,
	PRIMARY KEY(id)
);
INSERT INTO customers (customer_name, customer_address, customer_city, customer_phone) VALUES
('John Doe', '123 Main Street, Anytown, USA', 'Anytown', '123-456-7890'),
('Jane Doe', '456 Elm Street, Anytown, USA', 'Anytown', '234-567-8901'),
('Peter Smith', '789 Oak Street, Anytown, USA', 'Anytown', '345-678-9012'),
('Mary Jones', '101 Main Street, Othertown, USA', 'Othertown', '456-789-0123'),
('David Brown', '202 Elm Street, Othertown, USA', 'Othertown', '567-890-1234'),
('Susan Green', '303 Oak Street, Othertown, USA', 'Othertown', '678-901-2345'),
('Michael White', '404 Main Street, Yetanothertown, USA', 'Yetanothertown', '789-012-3456'),
('Sarah Black', '505 Elm Street, Yetanothertown, USA', 'Yetanothertown', '890-123-4567'),
('William Gray', '606 Oak Street, Yetanothertown, USA', 'Yetanothertown', '901-234-5678'),
('Alice Red', '707 Main Street, Yetanothertown, USA', 'Yetanothertown', '012-345-6789');

CREATE TABLE customer_orders(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    order_date DATE,
    order_delivery_date DATE,
    order_state CHAR(9) DEFAULT "pending",
    customer_id INT UNSIGNED NOT NULL,
    car_model_id INT UNSIGNED NOT NULL,
    car_dealer_id INT UNSIGNED NOT NULL,
    car_brand_id INT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT fk_customer_id FOREIGN KEY(customer_id) REFERENCES customers(id),
    CONSTRAINT fk_car_model_id FOREIGN KEY(car_model_id) REFERENCES car_models(id),
    CONSTRAINT fk_car_dealer_id FOREIGN KEY(car_dealer_id) REFERENCES car_dealers(id),
    CONSTRAINT fk_car_brand_id_2 FOREIGN KEY(car_brand_id) REFERENCES car_brands(id)
)ENGINE=InnoDB;

INSERT INTO customer_orders (order_date, order_delivery_date, order_state, customer_id, car_model_id, car_dealer_id, car_brand_id) VALUES
('2023-05-01', '2023-05-15', 'delivered', 1, 11, 1, 11),
('2023-05-02', '2023-05-16', 'pending', 2, 12, 2, 12),
('2023-05-03', '2023-05-17', 'pending', 3, 13, 3, 13),
('2023-05-04', '2023-05-18', 'delivered', 4, 14, 4, 14),
('2023-05-05', '2023-05-19', 'delivered', 5, 15, 5, 15),
('2023-05-06', '2023-05-20', 'pending', 6, 16, 6, 16),
('2023-05-07', '2023-05-21', 'pending', 7, 17, 7, 17),
('2023-05-08', '2023-05-22', 'pending', 8, 18, 8, 18),
('2023-05-09', '2023-05-23', 'delivered', 9, 19, 9, 19),
('2023-05-10', '2023-05-24', 'pending', 10, 20, 10, 20);


#5: Trigger que actualice el precio de venta de los modelos de carros de una marca cuando 
	-- se actualice el país de origen de esa marca.
DELIMITER $$
CREATE TRIGGER prices_after_update_country 
AFTER UPDATE ON car_brands FOR EACH ROW 
BEGIN 
    DECLARE @conversion_factor DECIMAL(9,2);
    
    IF NEW.origin_country <> OLD.origin_country THEN
        -- Definimos un factor de conversión para el país de origen nuevo 
        SET @conversion_factor = NULL;
        IF NEW.origin_country = 'USA' THEN 
            SET @conversion_factor = 1.1; 
        ELSEIF NEW.origin_country = 'Germany' THEN 
            SET @conversion_factor = 1.2; 
        ELSE 
            SET @conversion_factor = 1.0; 
        END IF; 

        -- Actualizamos el precio de venta de los modelos de carros de la marca 
        UPDATE car_models 
        SET sale_price = sale_price * @conversion_factor 
        WHERE brand_id = NEW.brand_id; 
    END IF; 
END $$
DELIMITER ;

#6: Realiza una consulta que muestre el nombre de la marca y la cantidad de modelos que tiene cada una, 
	-- ordenado por cantidad de modelos de manera descendente.
SELECT car_brands.brand_name, COUNT(*) as cantidad_modelos 
FROM car_brands 
JOIN car_models ON car_brands.id = car_models.car_brand_id 
GROUP BY car_brands.brand_name 
ORDER BY cantidad_modelos DESC;

#7: Realiza una consulta que muestre el nombre de la marca, el nombre del modelo y el precio de venta de
	-- todos los modelos de carros que tengan un precio de venta mayor a $20,000.
SELECT car_brands.brand_name, car_models.model, car_models.sale_price
FROM car_brands
INNER JOIN car_models ON car_brands.id = car_models.id
WHERE car_models.sale_price > 20000;

#8: Realiza una consulta que muestre el nombre del concesionario, el nombre del cliente y 
	-- el nombre del modelo de carro que se pidió, para los pedidos con estado "pendiente".
SELECT 	car_dealers.dealer_name AS 'Dealer', 
        customers.customer_name AS 'Customer',
        car_models.model AS 'Model' 
FROM customer_orders
INNER JOIN car_dealers ON customer_orders.car_dealer_id = car_dealers.id
INNER JOIN customers ON customer_orders.customer_id = customers.id
INNER JOIN car_models ON customer_orders.car_model_id = car_models.id
WHERE customer_orders.order_state = 'pending';

#9: Realiza una consulta que muestre el nombre del cliente, el nombre del modelo de carro pedido
	-- y la fecha de entrega estimada para los pedidos que se hicieron hace más de 2 meses 
    -- y todavía están en estado "pendiente".
SELECT customers.customer_name AS 'Customer',
       car_models.model AS 'Model',
       customer_orders.order_delivery_date
FROM customer_orders
INNER JOIN customers ON customer_orders.customer_id = customers.id
INNER JOIN car_models ON customer_orders.car_model_id = car_models.id
WHERE customer_orders.order_delivery_date <= DATE_ADD(NOW(), INTERVAL -2 MONTH)
  AND customer_orders.order_state = 'pending';

