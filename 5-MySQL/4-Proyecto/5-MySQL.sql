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

