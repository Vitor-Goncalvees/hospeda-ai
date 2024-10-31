create database bd_hospedagem;
use bd_hospedagem;

-- Crie a tabela "usuarios"
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    quarto INT NOT NULL
);

CREATE TABLE Atendentes (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
)
;

CREATE TABLE quartos (
    numero INT AUTO_INCREMENT PRIMARY KEY,
    status BOOL NOT NULL
);