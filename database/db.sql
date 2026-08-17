CREATE DATABASE Restaurante_Pratos;
USE Restaurante_Pratos;

CREATE TABLE Pratos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(200) NOT NULL,
    Preco VARCHAR(100)NOT NULL,
    descricao VARCHAR(100) not NULL
    categoria VARCHAR(100) not NULL
    
);