CREATE DATABASE maxSneakers;

USE maxSneakers;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL,
    estoque INT NOT NULL
);

CREATE TABLE promocao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produtoId INT NOT NULL,
    desconto DECIMAL(5, 2) NOT NULL,
    dataInicio DATE NOT NULL,
    dataFim DATE NOT NULL,
    FOREIGN KEY (produto_id) REFERENCES produtos(id)
);
