CREATE TABLE products(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    price DECIMAL(10, 2)
);

ALTER TABLE
    products ADD COLUMN description TEXT;
