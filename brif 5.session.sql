
-- Use the created database
USE ELECTRONACER;

-- Create a table for categories
CREATE TABLE IF NOT EXISTS categories (
    categorie_id INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(255) NOT NULL
);

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

-- Create a table for users
CREATE TABLE IF NOT EXISTS users (
    identifiant VARCHAR(255) PRIMARY KEY,
    mot_de_passe VARCHAR(255) NOT NULL
);

-- Insert some sample data into the categories table
INSERT INTO categories (nom_categorie) VALUES
    ('Electronics'),
    ('Clothing'),
    ('Home Appliances');

-- Insert some sample data into the products table
INSERT INTO products (image_url, libelle, prix_unitaire, quantite_min, quantite_stock, categorie_id) VALUES
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('electronics.jpg', 'Laptop', 999.99, 5, 20, 1),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('clothing.jpg', 'T-Shirt', 19.99, 10, 50, 2),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    ('appliances.jpg', 'Refrigerator', 1499.99, 2, 10, 3),
    
-- @block
-- Insert a sample user into the users table
INSERT INTO users (identifiant, mot_de_passe) VALUES
    ('sample_user', 'sample_password');