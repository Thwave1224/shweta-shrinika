CREATE DATABASE project1;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    product_description VARCHAR(255) NOT NULL,
    regular_price DECIMAL(10, 2) NOT NULL,
    sale_price DECIMAL(10, 2) NOT NULL,
    sleeves_length VARCHAR(255) NOT NULL,
    quality VARCHAR(255) NOT NULL,
    length VARCHAR(255) NOT NULL,
    neck_type VARCHAR(255) NOT NULL,
    pattern VARCHAR(255) NOT NULL,
    fabric VARCHAR(255) NOT NULL,
    color VARCHAR(255) NOT NULL,
    product_image VARCHAR(255) NOT NULL,
    image_gallery VARCHAR(255) NOT NULL,
    size_chart VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    size_s TINYINT(1) NOT NULL DEFAULT 0,
    size_m TINYINT(1) NOT NULL DEFAULT 0,
    size_l TINYINT(1) NOT NULL DEFAULT 0,
    size_xl TINYINT(1) NOT NULL DEFAULT 0,
    size_xxl TINYINT(1) NOT NULL DEFAULT 0,
    size_xxxl TINYINT(1) NOT NULL DEFAULT 0,
    tag_option VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;