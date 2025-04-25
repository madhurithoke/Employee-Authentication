CREATE DATABASE IF NOT EXISTS employee_project;

USE employee_project;

CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    mobile VARCHAR(10),
    password VARCHAR(255),
    status ENUM('on', 'off') DEFAULT 'on'
);
