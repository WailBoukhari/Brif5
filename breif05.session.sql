-- Use the created database
DROP DATABASE ELECTRONACER;
-- @BLOCK
CREATE DATABASE ELECTRONACER;
-- @BLOCK
USE ELECTRONACER;
-- Create a table for users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255) NOT NULL
);
-- Insert a sample user into the users table
INSERT INTO users (username, password)
VALUES ('test', 'test'),
    ('user', 'pass'),
    ('user1', 'pass1');
-- Create a table for categories
CREATE TABLE IF NOT EXISTS categories (
    categorie_id INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(255) NOT NULL
);
-- Insert some sample data into the categories table
INSERT INTO categories (nom_categorie)
VALUES ('Laptop'),
    ('Accessories'),
    ('Speakers');
SET @allProductsCategoryId = LAST_INSERT_ID();
-- Create a table for products
CREATE TABLE IF NOT EXISTS products (
    reference INT AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255),
    libelle VARCHAR(255) NOT NULL,
    prix_unitaire DECIMAL(10, 2) NOT NULL,
    quantite_min INT NOT NULL,
    quantite_stock INT NOT NULL,
    categorie_id INT,
    FOREIGN KEY (categorie_id) REFERENCES categories(categorie_id)
);
-- Insert some sample data into the products table
INSERT INTO products (
        image_url,
        libelle,
        prix_unitaire,
        quantite_min,
        quantite_stock,
        categorie_id,
    )
VALUES (
        'assets/imgs/laptopimg.jpg',
        'Laptop',
        999.99,
        5,
        3,
        1 -- Laptop category ID
    ),
    (
        'assets/imgs/laptopimg.jpg',
        'Laptop',
        999.99,
        5,
        3,
        1
    ),
    (
        'assets/imgs/laptopimg.jpg',
        'Laptop',
        999.99,
        5,
        3,
        1
    ),
    (
        'assets/imgs/laptopimg.jpg',
        'Laptop',
        999.99,
        5,
        3,
        1
    ),
    (
        'assets/imgs/laptopimg.jpg',
        'Laptop',
        999.99,
        5,
        20,
        1
    ),
    (
        'assets/imgs/laptopimg.jpg',
        'Laptop',
        999.99,
        5,
        20,
        1
    ),
    (
        'assets/imgs/laptopimg.jpg',
        'Laptop',
        999.99,
        5,
        20,
        1
    ),
    (
        'assets/imgs/laptopimg.jpg',
        'Laptop',
        999.99,
        5,
        20,
        1
    ),
    (
        'assets/imgs/laptopimg.jpg',
        'Laptop',
        999.99,
        5,
        20,
        1
    ),
    (
        'assets/imgs/accimg.jpg',
        'Accessories',
        19.99,
        10,
        3,
        2 -- Accessories category ID
    ),
    (
        'assets/imgs/accimg.jpg',
        'Accessories',
        19.99,
        10,
        3,
        2
    ),
    (
        'assets/imgs/accimg.jpg',
        'Accessories',
        19.99,
        10,
        3,
        2
    ),
    (
        'assets/imgs/accimg.jpg',
        'Accessories',
        19.99,
        10,
        3,
        2
    ),
    (
        'assets/imgs/accimg.jpg',
        'Accessories',
        19.99,
        10,
        50,
        2
    ),
    (
        'assets/imgs/accimg.jpg',
        'Accessories',
        19.99,
        10,
        50,
        2
    ),
    (
        'assets/imgs/accimg.jpg',
        'Accessories',
        19.99,
        10,
        50,
        2
    ),
    (
        'assets/imgs/accimg.jpg',
        'Accessories',
        19.99,
        10,
        50,
        2
    ),
    (
        'assets/imgs/accimg.jpg',
        'Accessories',
        19.99,
        10,
        50,
        2
    ),
    (
        'assets/imgs/speakerimg.jpg',
        'Speakers',
        1499.99,
        2,
        10,
        3 -- Speakers category ID
    ),
    (
        'assets/imgs/speakerimg.jpg',
        'Speakers',
        1499.99,
        2,
        10,
        3
    ),
    (
        'assets/imgs/speakerimg.jpg',
        'Speakers',
        1499.99,
        2,
        10,
        3
    ),
    (
        'assets/imgs/speakerimg.jpg',
        'Speakers',
        1499.99,
        2,
        10,
        3
    ),
    (
        'assets/imgs/speakerimg.jpg',
        'Speakers',
        1499.99,
        2,
        1,
        3
    ),
    (
        'assets/imgs/speakerimg.jpg',
        'Speakers',
        1499.99,
        2,
        1,
        3
    ),
    (
        'assets/imgs/speakerimg.jpg',
        'Speakers',
        1499.99,
        2,
        1,
        3
    ),
    (
        'assets/imgs/speakerimg.jpg',
        'Speakers',
        1499.99,
        2,
        1,
        3
    ),
    (
        'assets/imgs/speakerimg.jpg',
        'Speakers',
        1499.99,
        2,
        10,
        3
    ),
    (
        'assets/imgs/speakerimg.jpg',
        'Speakers',
        1499.99,
        2,
        10,
        3
    ),
    (
        'assets/imgs/speakerimg.jpg',
        'Speakers',
        1499.99,
        2,
        10,
        3
    ),
    (
        'assets/imgs/speakerimg.jpg',
        'Speakers',
        1499.99,
        2,
        10,
        3
    );