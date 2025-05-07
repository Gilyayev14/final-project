CREATE DATABASE IF NOT EXISTS judging_system;
USE judging_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(50) NOT NULL,
    role ENUM('judge', 'admin') NOT NULL
);

INSERT INTO users (username, password, role) VALUES
('judge1', 'pass1', 'judge'),
('judge2', 'pass2', 'judge'),
('judge3', 'pass3', 'judge'),
('judge4', 'pass4', 'judge'),
('admin', 'adminpass', 'admin');

CREATE TABLE grades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judge VARCHAR(50),
    group_number INT,
    group_members VARCHAR(255),
    project_title VARCHAR(255),
    articulate INT,
    tools INT,
    presentation INT,
    teamwork INT,
    total INT
);
