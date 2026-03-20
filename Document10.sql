CREATE DATABASE voting_app;

USE voting_app;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
);

CREATE TABLE votes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    food VARCHAR(50)
);