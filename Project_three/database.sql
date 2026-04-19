
CREATE DATABASE IF NOT EXISTS plaza_hotel;
USE plaza_hotel;


CREATE TABLE IF NOT EXISTS orders (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    menu VARCHAR(200) NOT NULL,
    address TEXT NOT NULL,
    date DATE NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE IF NOT EXISTS admins (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(100) DEFAULT 'Admin',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT IGNORE INTO admins (email, password, name) VALUES 
('admin@plazahotel.com', '123', 'Site Admin');


INSERT IGNORE INTO orders (fullname, email, phone, menu, address, date) VALUES 
('John Smith', 'john@example.com', '+1 305-555-0100', 'Grilled Atlantic Salmon – $28', '123 Ocean View Drive, Miami FL 33101', '2026-04-20'),
('Maria Garcia', 'maria@example.com', '+1 305-555-0101', 'Lobster Thermidor – $56', '456 Beach Street, Miami FL 33102', '2026-04-20'),
('David Chen', 'david@example.com', '+1 305-555-0102', 'Fish & Chips – $22', '789 Seaside Avenue, Miami FL 33103', '2026-04-21');


CREATE TABLE IF NOT EXISTS messages (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    location VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

SHOW TABLES;
