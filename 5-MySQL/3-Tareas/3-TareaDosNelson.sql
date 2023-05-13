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
    
#2: Tabla modelos de carros: Código del modelo (autoincremental), modelo, año de lanzamiento, precio de venta 
	-- y código de la marca a la que pertenece.
CREATE TABLE car_models(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	model VARCHAR(50) NOT NULL,
	release_year YEAR NOT NULL,
	sale_price DECIMAL(6,2) NOT NULL,
	car_brand_id INT UNSIGNED NOT NULL ,
	PRIMARY KEY(id),
	CONSTRAINT fk_car_brand_id FOREIGN KEY(car_brand_id) REFERENCES car_brands(id)
)ENGINE=InnoDB;

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

CREATE TABLE customer_orders(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    order_date YEAR,
    order_delivery_date YEAR,
    order_state CHAR(8) DEFAULT "pending",
    customer_id INT UNSIGNED NOT NULL,
    car_models_id INT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT fk_customer_id FOREIGN KEY(customer_id) REFERENCES customers(id),
    CONSTRAINT fk_car_models_id FOREIGN KEY(car_models_id) REFERENCES car_models(id)
)ENGINE=InnoDB;

#5: Trigger que actualice el precio de venta de los modelos de carros de una marca cuando 
	-- se actualice el país de origen de esa marca.
DELIMITER $$
CREATE TRIGGER prices_after_update_country 
AFTER UPDATE ON car_brands FOR EACH ROW 
BEGIN 
    DECLARE @conversion_factor DECIMAL(6,2);
    
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
SELECT 	car_dealers.dealer_name, customers.customer_name, car_brands.brand_name
FROM car_dealers
INNER JOIN customers ON car_dealers.id = customers.id
INNER JOIN car_brands ON car_dealers.id = car_brands.id
WHERE car_brands.brand_name LIKE 'M%';
