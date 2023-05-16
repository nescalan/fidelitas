CREATE DATABASE tarea_4;
USE tarea_4;

#PRIMER PASO: Creacion de las tablas que no contienen llaves foraneas:

-- tabla de las editoriales:
CREATE TABLE publishers(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    publisher_name VARCHAR(120) NOT NULL,
    PRIMARY KEY(id)
)ENGINE=InnoDB;

-- tabla de los clientes:
CREATE TABLE customers(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    customer_name VARCHAR(120) NOT NULL,
    customer_address VARCHAR(120) NOT NULL,
    customer_phone VARCHAR(20) NOT NULL,
    customer_email VARCHAR(120) NOT NULL,
    PRIMARY KEY(id)
)ENGINE=InnoDB;


#SEGUNDO PASO: Creacion de las tablas con llaves foraneas:
-- tabla de los libros:
CREATE TABLE books(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    book_title VARCHAR(120) NOT NULL,
    book_author VARCHAR(120) NOT NULL,
    book_publication_year DATE,
    book_genre VARCHAR(120) NOT NULL,
    book_price DECIMAL(9,2),
    publisher_id INT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT fk_publisher_id FOREIGN KEY (publisher_id) REFERENCES publishers(id)
)ENGINE=InnoDB;

-- tabla detalle de las ventas:
CREATE TABLE sale_details(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    quantity_sold DECIMAL(10,2),
    book_id INT UNSIGNED NOT NULL ,
    PRIMARY KEY(id),
    CONSTRAINT fk_book_id FOREIGN KEY (book_id) REFERENCES books(id)
)ENGINE=InnoDB;

-- tabla de las ventas:
CREATE TABLE sales(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    sale_date DATE,
    sale_detail_id INT UNSIGNED NOT NULL,
    customer_id INT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT fk_sale_detail_id FOREIGN KEY (sale_detail_id) REFERENCES sale_details(id),
    CONSTRAINT fk_customer_id FOREIGN KEY (customer_id) REFERENCES customers(id)
)ENGINE=InnoDB;

#TERCER PASO: Insertar datos en las tablas:
INSERT INTO publishers (publisher_name) VALUES
('Acme Publishing'),
('Big Book Publishing'),
('Little Book Publishing'),
('Medium Book Publishing'),
('Tiny Book Publishing');

INSERT INTO customers (customer_name, customer_address, customer_phone, customer_email) VALUES
('John Doe', '123 Main Street, Anytown, CA 91234', '123-456-7890', 'john.doe@email.com'),
('Jane Doe', '456 Elm Street, Anytown, CA 91234', '555-678-9012', 'jane.doe@email.com'),
('Bill Smith', '789 Oak Street, Anytown, CA 91234', '789-012-3456', 'bill.smith@email.com'),
('Susan Jones', '101 Maple Street, Anytown, CA 91234', '901-234-5678', 'susan.jones@email.com'),
('Michael Brown', '202 Pine Street, Anytown, CA 91234', '202-345-6789', 'michael.brown@email.com');

INSERT INTO books (book_title, book_author, book_publication_year, book_genre, book_price, publisher_id) VALUES
('The Hitchhiker''s Guide to the Galaxy', 'Douglas Adams', '1979-01-01', 'Science Fiction', 12.99, 1),
('To Kill a Mockingbird', 'Harper Lee', '1960-01-01', 'Drama', 19.99, 2),
('The Lord of the Rings', 'J.R.R. Tolkien', '1954-01-01', 'Fantasy', 24.99, 3),
('The Catcher in the Rye', 'J.D. Salinger', '1951-01-01', 'Coming of Age', 17.99, 4),
('1984', 'George Orwell', '1949-01-01', 'Dystopian', 15.99, 5);

INSERT INTO sale_details (quantity_sold, book_id) VALUES
(10, 6),
(20, 7),
(30, 8),
(40, 9),
(50, 10);

INSERT INTO sales (sale_date, sale_detail_id, customer_id) VALUES
('2023-05-15', 6, 1),
('2023-05-16', 7, 2),
('2023-05-17', 8, 3),
('2023-05-18', 9, 4),
('2023-05-19', 10, 5);

