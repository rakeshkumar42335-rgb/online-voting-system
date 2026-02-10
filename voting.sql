CREATE DATABASE voting_db;
USE voting_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50),
    voted INT DEFAULT 0
);

CREATE TABLE candidates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    votes INT DEFAULT 0
);

INSERT INTO users (username, password) VALUES
('user1', '123'),
('user2', '123');

INSERT INTO candidates (name) VALUES
('Candidate A'),
('Candidate B'),
('Candidate C');